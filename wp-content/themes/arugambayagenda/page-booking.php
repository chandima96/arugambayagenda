<?php
$query_string = $_SERVER['QUERY_STRING'];

$params = explode('/?', $query_string);
$type_param = $params[0]; 
$id_param = isset($params[1]) ? $params[1] : null;

parse_str($type_param, $type_params);
$type = isset($type_params['type']) ? $type_params['type'] : null;

parse_str($id_param, $id_params);
$post_id = isset($id_params['id']) ? $id_params['id'] : null;

if ($post_id) {
    $post = get_post($post_id);
    if ($post) {
        $post_title = get_the_title($post_id);
    } else {
        $post_title = "Invalid Post ID.";
    }
} else {
    $post_title = "No Post ID provided.";
}

$page_slug = isset($_POST['page_slug']) ? htmlspecialchars($_POST['page_slug']) : 'default-slug';
$page_title = isset($_POST['page_title']) ? htmlspecialchars($_POST['page_title']) : 'Default Title';
$fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '';
$date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
$pax = isset($_POST['pax']) ? htmlspecialchars($_POST['pax']) : '';
$kids = isset($_POST['kids']) ? htmlspecialchars($_POST['kids']) : '';
$location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : '';
$assistance = isset($_POST['assistance']) ? htmlspecialchars($_POST['assistance']) : '';

echo '<title>' . htmlspecialchars($page_title) . '</title>';
echo '<h1>' . htmlspecialchars($page_title) . '</h1>';
echo '<h2>Post ID: ' . htmlspecialchars($post_id) . '</h2>';
echo '<h2>Post Title: ' . htmlspecialchars($post_title) . '</h2>';
echo '<h2>Form Page Slug: ' . htmlspecialchars($page_slug) . '</h2>';
echo '<h2>Form Details</h2>';
echo '<p><strong>Full Name:</strong> ' . htmlspecialchars($fname) . '</p>';
echo '<p><strong>E-Mail Address:</strong> ' . htmlspecialchars($email) . '</p>';
echo '<p><strong>WhatsApp Number:</strong> ' . htmlspecialchars($whatsapp) . '</p>';
echo '<p><strong>Date:</strong> ' . htmlspecialchars($date) . '</p>';
echo '<p><strong>Number of Pax:</strong> ' . htmlspecialchars($pax) . '</p>';
echo '<p><strong>Number of Kids:</strong> ' . htmlspecialchars($kids) . '</p>';
echo '<p><strong>Departure Location:</strong> ' . htmlspecialchars($location) . '</p>';
echo '<p><strong>Need Further Assistance:</strong> ' . htmlspecialchars($assistance) . '</p>';
?>
