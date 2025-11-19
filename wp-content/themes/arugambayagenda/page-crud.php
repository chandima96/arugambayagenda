<?php
/*
	Template Name: ref
*/
get_header();

?>

<?php
global $wpdb;

// Table name
$table = $wpdb->prefix . 'ref'; // Replace with your table name

if ( isset($_POST['submit_ref']) ) {

    // Sanitize values
    $name  = sanitize_text_field($_POST['name']);
    $ref   = sanitize_text_field($_POST['ref']);
    $email = sanitize_email($_POST['email']);

    // Insert data
    $inserted = $wpdb->insert(
        $table,
        array(
            'name'  => $name,
            'ref'   => $ref,
            'email' => $email,
        ),
        array('%s','%s','%s')
    );

    if ( $inserted ) {
        echo '<p style="color:green;">Data added successfully!</p>';
    } else {
        echo '<p style="color:red;">Failed to add data.</p>';
    }
}
?>
<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Name" required>
    <input type="text" name="ref" placeholder="Enter Reference" required>
    <input type="email" name="email" placeholder="Enter Email" required>

    <button type="submit" name="submit_ref">Submit</button>
</form>


<?php get_footer(); ?>