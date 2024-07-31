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

function display_page_slug() {
    if (is_singular()) {
        global $post;
        $slug = get_post_field('post_name', $post);
        return 'The slug of this page is: ' . esc_html($slug);
    }
    return '';
}

add_shortcode('page_slug', 'display_page_slug');


add_filter('wpcf7_form_hidden_fields', 'populate_hidden_fields');

function populate_hidden_fields($hidden_fields) {
    // Check if data is available in GET (URL parameters)
    if (isset($_GET['date'])) {
        $hidden_fields['date'] = htmlspecialchars($_GET['date']);
    }
    if (isset($_GET['time'])) {
        $hidden_fields['time'] = htmlspecialchars($_GET['time']);
    }
    if (isset($_GET['pax'])) {
        $hidden_fields['pax'] = htmlspecialchars($_GET['pax']);
    }
    if (isset($_GET['kids'])) {
        $hidden_fields['kids'] = htmlspecialchars($_GET['kids']);
    }
    if (isset($_GET['total_amount'])) {
        $hidden_fields['total_amount'] = htmlspecialchars($_GET['total_amount']);
    }

    return $hidden_fields;
}

