<?php
// Fetch query parameters
$page_slug = isset($_GET['page_slug']) ? $_GET['page_slug'] : 'default-slug';
$page_title = isset($_GET['page_title']) ? $_GET['page_title'] : 'Default Title';

// Fetch form data
$fname = isset($_GET['fname']) ? htmlspecialchars($_GET['fname']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
$whatsapp = isset($_GET['whatsapp']) ? htmlspecialchars($_GET['whatsapp']) : '';
$date = isset($_GET['date']) ? htmlspecialchars($_GET['date']) : '';
$pax = isset($_GET['pax']) ? htmlspecialchars($_GET['pax']) : '';
$kids = isset($_GET['kids']) ? htmlspecialchars($_GET['kids']) : '';
$location = isset($_GET['location']) ? htmlspecialchars($_GET['location']) : '';
$assistance = isset($_GET['assistance']) ? htmlspecialchars($_GET['assistance']) : '';

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
