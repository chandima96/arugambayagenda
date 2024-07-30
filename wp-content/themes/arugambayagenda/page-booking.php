<?php
/*
	Template Name: Booking Confirmation 
*/
get_header();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = htmlspecialchars($_POST['fname']);
    $page_slug = htmlspecialchars($_POST['page_slug']);
    $page_title = htmlspecialchars($_POST['page_title']);

    // Redirect with query parameters
    header("Location: /booking-confirmation?slug=" . urlencode($page_slug) . "&title=" . urlencode($page_title) . "&fname=" . urlencode($fname));
    exit();
}

// Retrieve the query parameters after the redirect
$page_slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$page_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '';
$fname = isset($_GET['fname']) ? htmlspecialchars($_GET['fname']) : '';
?>

<div class="content-wrapper">
    <h1><?php echo $page_title; ?></h1>
    <p>Thank you, <?php echo $fname; ?>, for your booking!</p>
    <p>Form Page Slug: <?php echo $page_slug; ?></p>
</div>

<?php get_footer(); ?>
