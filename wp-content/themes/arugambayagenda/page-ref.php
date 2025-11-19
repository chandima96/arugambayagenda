<?php
/*
	Template Name: refemail
*/
get_header();

?>
<div class="mil-content-pad mil-p-100-100">
<?php
if ( isset($_GET['ref']) ) {
    $ref = sanitize_text_field($_GET['ref']);
    
}
?>
</div>
<div class="mil-content-pad mil-p-100-100">
<?php    
echo $ref;
?>
</div>

<?php get_footer(); ?>