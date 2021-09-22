<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="header">
<p><a href="https://rampages.us/ecomartyrs/">The Eco Martyrs</p>
<img src="/wp-content/themes/eco-martyrs/src/img/globe.svg"></a>
<p>Visual and sound artists pay tribute to the fallen from around the globe</p>
</div>

<style>

.header{
	display: flex;
	flex: row nowrap;
	padding: .5em;
}

.header a{
		color: white;
		text-decoration: none;
		padding-right: .5em;
		font-size: 1.2em;
	}
.header a:hover{
		color: red;
		text-decoration: underline;
	}

.header p{
	font-size: 1em;
	color: #939699;
}

</style>
