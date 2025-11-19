<?php
/*
	Template Name: refemail
*/
get_header();

?>
<div class="mil-content-pad mil-p-100-100">

</div>
<div class="mil-content-pad mil-p-100-100">
<?php    

// Get ref from URL
$ref = '';
if ( isset($_GET['ref']) ) {
    $ref = sanitize_text_field( wp_unslash($_GET['ref']) );
}

global $wpdb;
$table = 'wp_ref';

// If ref is provided
if ( ! empty($ref) ) {

    // Query DB for the matching ref
    $result = $wpdb->get_row(
        $wpdb->prepare("SELECT email FROM {$table} WHERE ref = %s", $ref)
    );

    // Display email if found
    if ( $result ) {
        echo '<p>Email: ' . esc_html($result->email) . '</p>';
    } else {
        echo '<p>No email found for this reference.</p>';
    }
}
?>


</div>

<?php get_footer(); ?>