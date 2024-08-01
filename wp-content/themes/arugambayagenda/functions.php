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

function custom_shortcode_att( $atts ) {
    return isset($atts['time']) ? $atts['time'] : '';
}
add_shortcode('shortcode_att', 'custom_shortcode_att');