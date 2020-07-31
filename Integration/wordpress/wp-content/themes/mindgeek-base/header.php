<?php
/**
 * The template for displaying the header
 * @package WordPress
 * @subpackage Mindgeek
 * @since Mindgeek 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<title>Mon 1er thème Wordpress</title>
</head>
<body>
<header class="container">
<!-- Affichage du titre du blog -->
<h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a></h2>
<!--Affiche de la description du blog -->
<p><?php bloginfo('description'); ?></p>

</header>