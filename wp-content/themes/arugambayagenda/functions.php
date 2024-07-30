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

add_action('admin_post_nopriv_process_form', 'process_form');
add_action('admin_post_process_form', 'process_form');

function process_form() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize and validate form data
        $fname = sanitize_text_field($_POST['fname']);
        $email = sanitize_email($_POST['email']);
        $whatsapp = sanitize_text_field($_POST['whatsapp']);
        $date = sanitize_text_field($_POST['date']);
        $pax = intval($_POST['pax']);
        $kids = intval($_POST['kids']);
        $location = sanitize_text_field($_POST['location']);
        $assistance = sanitize_textarea_field($_POST['assistance']);
        $page_slug = sanitize_text_field($_POST['page_slug']);
        $page_title = sanitize_text_field($_POST['page_title']);

        // Build query string for redirect
        $query_data = http_build_query([
            'fname' => $fname,
            'email' => $email,
            'whatsapp' => $whatsapp,
            'date' => $date,
            'pax' => $pax,
            'kids' => $kids,
            'location' => $location,
            'assistance' => $assistance,
            'page_slug' => $page_slug,
            'page_title' => $page_title,
        ]);

        wp_redirect(home_url('/page-booking.php?' . $query_data));
        exit();
    } else {
        wp_redirect(home_url('/'));
        exit();
    }
}



