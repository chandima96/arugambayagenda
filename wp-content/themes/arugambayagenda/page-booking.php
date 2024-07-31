<?php
// Retrieve the full query string
$query_string = $_SERVER['QUERY_STRING'];

// Manually parse the 'type' parameter to separate 'type' and 'id'
$params = explode('/?', $query_string);
$type_param = $params[0]; // This will get the 'type=activity' part
$id_param = isset($params[1]) ? $params[1] : null; // This will get the 'id=356' part

// Extract 'type' and 'id' values
parse_str($type_param, $type_params);
$type = isset($type_params['type']) ? $type_params['type'] : null;

parse_str($id_param, $id_params);
$post_id = isset($id_params['id']) ? $id_params['id'] : null;

// Check if the post ID is valid and retrieve the post title
if ($post_id) {
    $post = get_post($post_id);
    if ($post) {
        $post_title = get_the_title($post_id);
        echo "Post ID: " . $post_id . "<br>";
        echo "Post Title: " . $post_title . "<br>";
    } else {
        echo "Invalid Post ID.";
    }
} else {
    echo "No Post ID provided.";
}
?>


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

// Display the form page slug
echo '<h2>Form Page Slug: ' . $page_slug . '</h2>';

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
