<?php
/*
	Template Name: Booking Confirmation 
*/
get_header();
?>


<?php
// Fetch query parameters
$page_slug = isset($_GET['page_slug']) ? $_GET['page_slug'] : 'default-slug';
$page_title = isset($_GET['page_title']) ? $_GET['page_title'] : 'Default Title';

// Set the title of the page
echo '<title>' . htmlspecialchars($page_title) . '</title>';

// Display the page title
echo '<h1>' . htmlspecialchars($page_title) . '</h1>';

// Display the page slug
echo '<p>Page Slug: ' . htmlspecialchars($page_slug) . '</p>';

// Here you can add more content or functionality as needed
?>


<?php get_footer(); ?>