<?php
/**
 *
 * Header
 *
 * @package WordPress
 **/

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewoport" content="width=device-width, initial-scale=1">
<title>test11</test>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<p><?php bloginfo( 'description' ); ?></p>
		<?php get_template_part( 'template-parts/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<?php get_template_part( 'template-parts/navigation', 'top' ); ?>
		<?php endif; ?>

</header>

<?php
if ( ( is_single() || ( is_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
	echo get_the_post_thumbnail( get_queried_object_id() );
endif;
?>