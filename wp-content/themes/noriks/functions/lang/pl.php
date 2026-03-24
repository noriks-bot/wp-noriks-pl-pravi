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
