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

    // Redirect to the same page with the slug in the URL
    header("Location: page-booking.php?slug=" . urlencode($page_slug) . "&title=" . urlencode($page_title));
    exit();
}

// If redirected, retrieve the slug and title from the query parameters
$page_slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$page_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - Booking Confirmation</title>
</head>
<body>
    <h1><?php echo $page_title; ?></h1>
    <p>Thank you, <?php echo htmlspecialchars($_POST['fname']); ?>, for your booking!</p>
    <p>Form Page Slug: <?php echo $page_slug; ?></p>
</body>
</html>


<?php get_footer(); ?>