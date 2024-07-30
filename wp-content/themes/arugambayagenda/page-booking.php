<?php
get_header();

// Fetch query parameters
$page_slug = isset($_GET['page_slug']) ? sanitize_text_field($_GET['page_slug']) : 'default-slug';
$page_title = isset($_GET['page_title']) ? sanitize_text_field($_GET['page_title']) : 'Default Title';

// Fetch form data
$fname = isset($_GET['fname']) ? sanitize_text_field($_GET['fname']) : '';
$email = isset($_GET['email']) ? sanitize_email($_GET['email']) : '';
$whatsapp = isset($_GET['whatsapp']) ? sanitize_text_field($_GET['whatsapp']) : '';
$date = isset($_GET['date']) ? sanitize_text_field($_GET['date']) : '';
$pax = isset($_GET['pax']) ? intval($_GET['pax']) : '';
$kids = isset($_GET['kids']) ? intval($_GET['kids']) : '';
$location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : '';
$assistance = isset($_GET['assistance']) ? sanitize_textarea_field($_GET['assistance']) : '';

// Display the page title
echo '<h1>' . esc_html($page_title) . '</h1>';

// Display the page slug
echo '<p><strong>Page Slug:</strong> ' . esc_html($page_slug) . '</p>';

// Display form details
echo '<h2>Form Details</h2>';
echo '<p><strong>Full Name:</strong> ' . esc_html($fname) . '</p>';
echo '<p><strong>E-Mail Address:</strong> ' . esc_html($email) . '</p>';
echo '<p><strong>WhatsApp Number:</strong> ' . esc_html($whatsapp) . '</p>';
echo '<p><strong>Date:</strong> ' . esc_html($date) . '</p>';
echo '<p><strong>Number of Pax:</strong> ' . esc_html($pax) . '</p>';
echo '<p><strong>Number of Kids:</strong> ' . esc_html($kids) . '</p>';
echo '<p><strong>Departure Location:</strong> ' . esc_html($location) . '</p>';
echo '<p><strong>Need Further Assistance:</strong> ' . esc_html($assistance) . '</p>';

get_footer();
?>
