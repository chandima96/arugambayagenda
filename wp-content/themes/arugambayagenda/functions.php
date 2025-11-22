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

function custom_include_multiple_post_types_in_category($query) {
    if ( !is_admin() && $query->is_main_query() && is_category() ) {
        $query->set('post_type', array('post', 'surfing-tour', 'wildlifetours', 'activity', 'experientialtours'));
    }
}
add_action('pre_get_posts', 'custom_include_multiple_post_types_in_category');


//---------------------------------------------------------------------------------------------

add_action( 'wpcf7_mail_sent', 'dav_send_email_to_ref' );

function dav_send_email_to_ref( $contact_form ) {

    // Get posted data
    $submission = WPCF7_Submission::get_instance();
    if ( ! $submission ) {
        return;
    }

    $data = $submission->get_posted_data();

    // If 'ref' field doesn't exist, stop
    if ( empty( $data['ref'] ) ) {
        return;
    }

    $ref_email = sanitize_email( $data['ref'] );

    // Check if ref is a valid email
    if ( ! is_email( $ref_email ) ) {
        return;
    }

    // Prepare email
    $subject = 'We got a booking from your link';
    $message = "Hello,\n\nWe just received a booking from your referral link.\n\nThank you!";
    $headers = [ 'Content-Type: text/plain; charset=UTF-8' ];

    // Send email
    wp_mail( $ref_email, $subject, $message, $headers );
}
