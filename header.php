
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Universe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="GA7s27xoZ9FaGX3ZBKaB_ciYuBWR9r6fwyYNKR7pQbI" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'universe' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			// the_custom_logo();?>
			<div class="custom-logo">
				<a href="http://localhost:8888/universe/">
				<?php
				$customLogo = get_field('custom_logo', 'option');
				echo file_get_contents( $customLogo );
				?>
				</a>
			</div>
			<div class="mobile-logo">
				<a href="http://localhost:8888/universe/">
				<?php
				$mobileLogo = get_field('mobile_logo', 'option');
				echo '<img src="' . $mobileLogo['url'] . '" alt="' . $mobileLogo . '" />';
				?>
				</a>
			</div>
			<?php
			$universe_description = get_bloginfo( 'description', 'display' );
			if ( $universe_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $universe_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'universe' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="grey-bar"></div>

	<div id="content" class="site-content">
