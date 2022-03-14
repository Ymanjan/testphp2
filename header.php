<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<section class="main-block">
        <div class="container">
            <header class="header">
                <a href="#" class="logo">
                    <img src="<?php echo get_template_directory_uri() ?> ./asset/img/logo.png" alt="logo">
                </a>
                <ul class="card">
                    <li><a href="#">the products</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">contact me</a></li>
                </ul>
            </header>
            <div class="main-info">
                <h1>Join the colors</h1>
                <p>Lorem ipsum dolor, sit amet consectetur</p>
                <a href="#" class="button">Join now</a>
            </div>
        </div>
    </section>
