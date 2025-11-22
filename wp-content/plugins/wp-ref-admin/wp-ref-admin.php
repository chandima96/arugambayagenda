<?php
/*
Plugin Name: WP Ref Admin
Description: Simple admin interface to manage wp_ref table.
Version: 1.0
Author: You
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Add menu item in admin
add_action( 'admin_menu', function() {
    add_menu_page(
        'Ref Manager',      // Page title
        'Ref Manager',      // Menu title
        'manage_options',   // Capability
        'wp-ref-admin',     // Menu slug
        'wp_ref_admin_page' // Callback function
    );
});

function wp_ref_admin_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'ref'; // assumes your table is wp_ref

    // Handle ADD
    if ( isset( $_POST['wp_ref_add'] ) && check_admin_referer( 'wp_ref_add_nonce' ) ) {
        $name  = sanitize_text_field( $_POST['name'] ?? '' );
        $ref   = sanitize_text_field( $_POST['ref'] ?? '' );
        $email = sanitize_email( $_POST['email'] ?? '' );

        if ( ! empty( $name ) && ! empty( $ref ) && ! empty( $email ) ) {
            $wpdb->insert(
                $table_name,
                [
                    'name'  => $name,
                    'ref'   => $ref,
                    'email' => $email,
                ],
                [ '%s', '%s', '%s' ]
            );
            echo '<div class="updated"><p>Row added.</p></div>';
        } else {
            echo '<div class="error"><p>Please fill all fields.</p></div>';
        }
    }

    // Handle DELETE
    if ( isset( $_GET['delete'] ) && isset( $_GET['_wpnonce'] ) && wp_verify_nonce( $_GET['_wpnonce'], 'wp_ref_delete_' . intval( $_GET['delete'] ) ) ) {
        $id = intval( $_GET['delete'] );
        $wpdb->delete(
            $table_name,
            [ 'ref_if' => $id ],
            [ '%d' ]
        );
        echo '<div class="updated"><p>Row deleted.</p></div>';
    }

    // Get all rows
    $rows = $wpdb->get_results( "SELECT * FROM {$table_name} ORDER BY ref_if DESC" );

    ?>
    <div class="wrap">
        <h1>Ref Manager</h1>

        <h2>Add New Ref</h2>
        <form method="post">
            <?php wp_nonce_field( 'wp_ref_add_nonce' ); ?>
            <table class="form-table">
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" name="name" id="name" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="ref">Ref</label></th>
                    <td><input type="text" name="ref" id="ref" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="email">Email</label></th>
                    <td><input type="email" name="email" id="email" class="regular-text" required></td>
                </tr>
            </table>
            <p><input type="submit" name="wp_ref_add" class="button button-primary" value="Add"></p>
        </form>

        <hr>

        <h2>Existing Refs</h2>
        <table class="widefat fixed striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Ref</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( $rows ) : ?>
                    <?php foreach ( $rows as $row ) : ?>
                        <tr>
                            <td><?php echo esc_html( $row->ref_if ); ?></td>
                            <td><?php echo esc_html( $row->name ); ?></td>
                            <td><?php echo esc_html( $row->ref ); ?></td>
                            <td><?php echo esc_html( $row->email ); ?></td>
                            <td>
                                <?php
                                $delete_url = wp_nonce_url(
                                    admin_url( 'admin.php?page=wp-ref-admin&delete=' . intval( $row->ref_if ) ),
                                    'wp_ref_delete_' . intval( $row->ref_if )
                                );
                                ?>
                                <a href="<?php echo esc_url( $delete_url ); ?>" onclick="return confirm('Delete this row?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr><td colspan="5">No rows found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}
