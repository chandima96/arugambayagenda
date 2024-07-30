<?php
// Fetch query parameters
$page_slug = isset($_POST['page_slug']) ? $_POST['page_slug'] : 'default-slug';
$page_title = isset($_POST['page_title']) ? $_POST['page_title'] : 'Default Title';

// Fetch form data
$fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '';
$date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
$pax = isset($_POST['pax']) ? htmlspecialchars($_POST['pax']) : '';
$kids = isset($_POST['kids']) ? htmlspecialchars($_POST['kids']) : '';
$location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : '';
$assistance = isset($_POST['assistance']) ? htmlspecialchars($_POST['assistance']) : '';

// Set the title of the page
echo '<title>' . $page_title . '</title>';

// Display the page title
echo '<h1>' . $page_title . '</h1>';

// Display the page slug
echo '<p>Page Slug: ' . $page_slug . '</p>';

// Display form details
echo '<h2>Form Details</h2>';
echo '<p><strong>Full Name:</strong> ' . $fname . '</p>';
echo '<p><strong>E-Mail Address:</strong> ' . $email . '</p>';
echo '<p><strong>WhatsApp Number:</strong> ' . $whatsapp . '</p>';
echo '<p><strong>Date:</strong> ' . $date . '</p>';
echo '<p><strong>Number of Pax:</strong> ' . $pax . '</p>';
echo '<p><strong>Number of Kids:</strong> ' . $kids . '</p>';
echo '<p><strong>Departure Location:</strong> ' . $location . '</p>';
echo '<p><strong>Need Further Assistance:</strong> ' . $assistance . '</p>';
?>
