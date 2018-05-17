<?php
/**
 * Display header media
 *
 * @package WordPress
 */

?>

<?php if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
<?php
endif;
