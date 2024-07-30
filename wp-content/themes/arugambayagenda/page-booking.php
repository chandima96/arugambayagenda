<?php
/*
    Template Name: Booking Confirmation
*/

ob_start(); // Start output buffering

get_header();

// Error reporting (for debugging purposes)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '';
    $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
    $pax = isset($_POST['pax']) ? (int)$_POST['pax'] : 1;
    $kids = isset($_POST['kids']) ? (int)$_POST['kids'] : 0;
    $location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : '';
    $assistance = isset($_POST['assistance']) ? htmlspecialchars($_POST['assistance']) : '';
    $page_slug = isset($_POST['page_slug']) ? htmlspecialchars($_POST['page_slug']) : '';
    $page_title = isset($_POST['page_title']) ? htmlspecialchars($_POST['page_title']) : '';

    // Redirect with query string parameters
    header("Location: /booking-confirmation?slug=" . urlencode($page_slug) . "&title=" . urlencode($page_title) . "&fname=" . urlencode($fname));
    exit();
}

// Retrieve parameters from the query string
$page_slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$page_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '';
$fname = isset($_GET['fname']) ? htmlspecialchars($_GET['fname']) : '';
?>

<div class="content-wrapper">
    <h1><?php echo $page_title; ?></h1>
    <p>Thank you, <?php echo $fname; ?>, for your booking!</p>
    <p>Form Page Slug: <?php echo $page_slug; ?></p>
</div>

<?php
ob_end_clean(); // Discard any buffered content
get_footer();
?>
