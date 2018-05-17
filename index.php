<?php
/**
 * The main theme file
 *
 * @package WordPress
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() ) : ?>
	<?php single_post_title(); ?>
<?php else : ?>
	<h2><?php esc_attr_e( 'posts' ); ?></h2>
<?php endif; ?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
endwhile;
	the_posts_pagination( array(
		'prev_text' => '&larr;',
		'next_text' => '&rarr;',
	) );
else :
	echo '記事はありません';
endif;
?>

<?php
get_footer();
