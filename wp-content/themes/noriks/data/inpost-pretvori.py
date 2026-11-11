# -*- coding: utf-8 -*-
"""Prenese seznam prevzemnih mest InPost (Poljska) in ga zapise v TSV za temo.

  python3 inpost-pretvori.py data/inpost-punkty.tsv

Vir: javni ShipX API https://api-shipx-pl.easypack24.net/v1/points (brez kljuca).
Ohranijo se delujoca mesta tipa parcel_locker (Paczkomat) in pop (PaczkoPunkt).
Stolpci: id, naziv, naslov, tip, odpiralni cas, lat, lon, ulica, postna st.,
mesto, iskalno polje (iskalno polje je vedno zadnje).
"""
import json, sys, time, urllib.request, unicodedata

UA = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124 Safari/537.36'
API = 'https://api-shipx-pl.easypack24.net/v1/points?per_page=1000&page=%d'

def brez_sumnikov(s):
    s = s.replace('ł', 'l').replace('Ł', 'L')
    return ''.join(c for c in unicodedata.normalize('NFD', s) if not unicodedata.combining(c))

def poberi():
    stran, vse = 1, []
    while True:
        r = urllib.request.Request(API % stran, headers={'User-Agent': UA})
        with urllib.request.urlopen(r, timeout=120) as f:
            d = json.loads(f.read().decode())
        vse.extend(d.get('items', []))
        if stran >= d.get('total_pages', 1):
            break
        stran += 1
        time.sleep(0.3)
    return vse

def main(izhod):
    vse = poberi()
    vrstice, preskoceni = [], 0
    for p in vse:
        tipi = p.get('type') or []
        if p.get('status') != 'Operating' or not ({'parcel_locker', 'pop'} & set(tipi)):
            preskoceni += 1
            continue
        a = p.get('address') or {}
        ad = p.get('address_details') or {}
        naslov = ', '.join(x for x in (a.get('line1'), a.get('line2')) if x)
        if not naslov:
            naslov = ', '.join(x for x in (ad.get('street'), ad.get('building_number'),
                                           ad.get('post_code'), ad.get('city')) if x)
        # nekatera mesta imajo oba tipa; merodajen je naziv, ki ga kaze InPost
        ime = p.get('display_name') or ''
        if 'PaczkoPunkt' in ime:
            tip = 'PaczkoPunkt'
        elif 'parcel_locker' in tipi:
            tip = 'Paczkomat'
        else:
            tip = 'PaczkoPunkt'
        loc = p.get('location') or {}
        vrstica = [
            p.get('name', ''),
            p.get('display_name') or p.get('name', ''),
            naslov,
            tip,
            (p.get('opening_hours') or '').replace('\t', ' '),
            str(loc.get('latitude', '')),
            str(loc.get('longitude', '')),
            ad.get('street', '') + (' ' + ad.get('building_number', '') if ad.get('building_number') else ''),
            ad.get('post_code', ''),
            ad.get('city', ''),
            p.get('location_description') or '',
        ]
        vrstica = [str(x).replace('\t', ' ').replace('\n', ' ').strip() for x in vrstica]
        isk = brez_sumnikov(' '.join([vrstica[0], vrstica[1], vrstica[2], vrstica[10]]).lower())
        vrstice.append('\t'.join(vrstica[:10] + [isk]))
    vrstice.sort()
    with open(izhod, 'w', encoding='utf-8') as f:
        f.write('\n'.join(vrstice) + '\n')
    print('prejetih %d, zapisanih %d, preskocenih %d' % (len(vse), len(vrstice), preskoceni))

if __name__ == '__main__':
    main(sys.argv[1] if len(sys.argv) > 1 else 'inpost-punkty.tsv')
