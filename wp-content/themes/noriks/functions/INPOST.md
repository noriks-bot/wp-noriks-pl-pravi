# InPost na blagajni PL — kaj je narejeno in kaj je treba vklopiti

Dostava na dom ostane privzeta in nespremenjena (GLS), poleg nje je nova
možnost **Odbiór w Paczkomat / PaczkoPunkt** z iskalnikom 33 176 prevzemnih
mest — tako kot ima vigoshop.pl.

## Datoteke

| Datoteka | Kaj je |
|---|---|
| `functions/inpost.php` | celotna logika: način dostave, kartici na blagajni, iskalnik, preverjanje, zapis k naročilu, prikaz v adminu/mailu/zahvali |
| `data/inpost-punkty.tsv` | 33 176 mest (30 591 Paczkomatów, 2 585 PaczkoPunktów) |
| `data/inpost-pretvori.py` | prenos svežega seznama z javnega ShipX API |
| `woocommerce/checkout/form-checkout.php` | kliče `noriks_inpost_nacini()` namesto trdo zapisane kartice |
| `woocommerce/checkout/review-order.php` | napis dostave sledi izbranemu načinu + pokaže izbrano mesto |

Slog kartic je že v temi (vgrajen CSS blagajne `.hs-delivery-type-container`,
`.pl-inpost`, vključno z mobilnim) — modul ga ne podvaja.

## 1. Vklop v WooCommerce (brez tega se nič ne spremeni)

WooCommerce → Ustawienia → **Wysyłka** → strefa **Poland** → Dodaj metodę →
**InPost — Paczkomaty i PaczkoPunkty**.

| Polje | Vrednost |
|---|---|
| Nazwa (MetaKocka) | `InPost Paczkomat` |
| Cena (zł) | `11.99` (enako kot Standardowa) |
| Za darmo od (zł) | `300` (enako kot obstoječa brezplačna dostava) |

Vrstni red pusti **pod** obstoječima načinoma, da ostane dostava na dom
privzeta.

## 2. Metakocka

1. **Povezava z InPostom.** Dodatne nastavitve → Dostavne službe → Novo →
   **InPost Poland** → uporabniško ime in geslo, ki ju dobiš od InPosta, in
   določi vrsto dostave.
   ([navodila](https://metakocka.freshdesk.com/sl/support/solutions/articles/3000117500-integracija-inpost))
   Metakocka za to integracijo zaračuna **0,10 € na poslan paket**.
2. **Preslikava.** Naziv načina dostave (`InPost Paczkomat`) mora biti v
   Metakocki vezan na vrsto dostave InPost; dostava na dom ostane na GLS.
3. **Šifra paketomata.** Metakocka jo bere iz meta polja naročila
   **`_parcel_shop_id`** (v API `parcel_shop_id`), kar modul zapiše ob nastanku
   naročila. Primer iz navodil: `"_parcel_shop_id": "P100"`.

Polja Ulica / Numer / Kod pocztowy / Miasto so pri izbranem paketomatu skrita
(tako kot pri konkurenci) in niso obvezna; naslov naročila se nastavi na
naslov izbranega paketomata, da naročilo ni brez naslova. Izklop:
`add_filter( 'noriks_inpost_naslov_mesta', '__return_false' );`

**Preveri na prvem testnem naročilu:** v naročilu mora biti meta
`_parcel_shop_id` s šifro mesta, v Metakocki pa pošiljka InPost v paketomat.

## 3. Osvežitev seznama mest

```bash
python3 data/inpost-pretvori.py data/inpost-punkty.tsv
```

Skripta pobere vsa delujoča mesta z javnega ShipX API
(`https://api-shipx-pl.easypack24.net/v1/points`, brez ključa, 34 strani po
1 000). Iskanje teče na strežniku (`/wp-json/noriks/v1/inpost?q=…`), ker je
seznam 7 MB; poizvedba vzame 0,3–13 ms.
