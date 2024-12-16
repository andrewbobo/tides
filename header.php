<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SecretTidesLuxury
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead">
			<div class="site-header">
				<div class="container header__wrap">
					<?php if (theme_logo()) : ?>
						<?= theme_logo();  ?>
					<?php else : ?>
						<a href="/" class="site-branding" rel="home" aria-current="page" tabindex="0">
							<?php bloginfo('name'); ?>
						</a>
					<?php endif; ?>

					<nav class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav>

					<div id="burger-menu" class="burger-menu">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>

					<a href="#" class="btn-cls">check availability</a>
				</div>

			</div>
		</header>
