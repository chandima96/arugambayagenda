<?php
/* Template Name: Booking Confirmation */

get_header();

// Get the query parameters
$fname = isset($_GET['fname']) ? htmlspecialchars($_GET['fname']) : 'Guest';
$page_slug = isset($_GET['page_slug']) ? htmlspecialchars($_GET['page_slug']) : 'unknown';
$page_title = isset($_GET['page_title']) ? htmlspecialchars($_GET['page_title']) : 'Booking Confirmation';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <h1><?php echo $page_title; ?></h1>
    <p>Thank you, <?php echo $fname; ?>, for your booking.</p>
    <p>Your booking details have been successfully submitted.</p>
    <p>Page Slug: <?php echo $page_slug; ?></p>
</body>
</html>

<?php
get_footer();
?>
