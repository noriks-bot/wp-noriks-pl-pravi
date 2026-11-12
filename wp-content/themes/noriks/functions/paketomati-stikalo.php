<?php
/**
 * STIKALO ZA PAKETOMATE (InPost) — PL
 * ===================================
 *
 * Spremeni **samo vrednost spodaj**. Nic drugega ni treba.
 *
 *   false                         izklopljeno povsod
 *   true                          vklopljeno povsod
 *   array( 'devpl.noriks.com' )   vklopljeno samo na nastetih domenah
 *
 * Ko je izklopljeno, blagajna dela natanko tako kot pred nadgradnjo:
 * dostava na dom z GLS po starem, ni kartic za izbiro nacina, ni izbirnika
 * paketomatov, nacin dostave "InPost Paczkomat" se sploh ne registrira v
 * WooCommerce, ne nalozi se slog ne skripta in nobeno preverjanje naslova se
 * ne spremeni.
 *
 * Za vklop na produkciji: dodaj 'noriks.com' na seznam ali nastavi true.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

$noriks_inpost_stikalo = array( 'devpl.noriks.com' );

/** Ali so paketomati vklopljeni na tej strani? */
function noriks_inpost_vklopljen() {
	global $noriks_inpost_stikalo;
	$s = $noriks_inpost_stikalo;

	if ( is_bool( $s ) ) { return $s; }
	if ( ! is_array( $s ) ) { return false; }

	$gostitelj = '';
	if ( ! empty( $_SERVER['HTTP_HOST'] ) ) {
		$gostitelj = strtolower( (string) $_SERVER['HTTP_HOST'] );
	} elseif ( function_exists( 'home_url' ) ) {
		$gostitelj = strtolower( (string) wp_parse_url( home_url(), PHP_URL_HOST ) );
	}
	$gostitelj = preg_replace( '/^www\./', '', $gostitelj );

	foreach ( $s as $d ) {
		if ( preg_replace( '/^www\./', '', strtolower( (string) $d ) ) === $gostitelj ) { return true; }
	}
	return false;
}
