<?php
/*
	Template Name: Booking Confirmation 
*/
get_header();

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $page_slug = htmlspecialchars($_POST['page_slug']);
    $page_title = htmlspecialchars($_POST['page_title']);

    // Redirect with the form data as query parameters
    header("Location: /booking-confirmation?slug=" . urlencode($page_slug) . "&title=" . urlencode($page_title) . "&fname=" . urlencode($fname));
    exit();
}

// Retrieve the form data from the query parameters after the redirect
$page_slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$page_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '';
$fname = isset($_GET['fname']) ? htmlspecialchars($_GET['fname']) : '';
?>


    <h1><?php echo $page_title; ?></h1>
    <p>Thank you, <?php echo $fname; ?>, for your booking!</p>
    <p>Form Page Slug: <?php echo $page_slug; ?></p>




<?php get_footer(); ?>