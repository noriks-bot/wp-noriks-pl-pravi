<?php
add_filter( 'gettext', 'translate_labels_pl', 20, 3 );
function translate_labels_pl( $translated_text, $text, $domain ) {
    $translations = array(
        'Choose your size' => 'Wybierz rozmiar',
        'Choose an option' => 'Wybierz opcję',
        'Add to cart' => 'Dodaj do koszyka',
        'Select options' => 'Wybierz',
        'View cart' => 'Zobacz koszyk',
        'Checkout' => 'Zamówienie',
        'Proceed to checkout' => 'Przejdź do zamówienia',
        'Update cart' => 'Zaktualizuj koszyk',
        'Apply coupon' => 'Zastosuj kupon',
        'Coupon code' => 'Kod kuponu',
        'Cart totals' => 'Suma koszyka',
        'Subtotal' => 'Suma częściowa',
        'Total' => 'Razem',
        'Shipping' => 'Dostawa',
        'Free shipping' => 'Darmowa dostawa',
    );
    if ( isset( $translations[$text] ) ) return $translations[$text];
    return $translated_text;
}

// PL: Override WC default placeholders
add_filter( 'gettext', 'noriks_pl_placeholders', 20, 3 );
function noriks_pl_placeholders( $translated, $text, $domain ) {
    $t = array(
        'House number and street name' => 'Ulica',
        'Apartment, suite, unit, etc.' => 'Numer budynku / numer lokalu',
        'Apartment, suite, unit, etc. (optional)' => 'Numer budynku / numer lokalu',
        'Street address' => 'Ulica',
        'Town / City' => 'Miasto',
        'Postcode / ZIP' => 'Kod Pocztowy',
        'Phone' => 'Telefon',
        'Email address' => 'Adres e-mail',
        'First name' => 'Imię',
        'Last name' => 'Nazwisko',
        'Place order' => 'Zamawiam',
        'Country / Region' => 'Kraj',
        '(optional)' => '(opcjonalnie)',
        'Cash on delivery' => 'Płatność za pobraniem',
        'Pay with cash upon delivery.' => 'Zapłać gotówką przy odbiorze.',
    );
    return isset( $t[$text] ) ? $t[$text] : $translated;
}
