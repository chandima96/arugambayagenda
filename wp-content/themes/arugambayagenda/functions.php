<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

 function format_contact_number($number) {
    if (strlen($number) === 10) {
        return substr($number, 0, 3) . ' ' . substr($number, 3, 3) . ' ' . substr($number, 6, 2) . ' ' . substr($number, 8, 2);
    } else {
        return $number;
    }
}




