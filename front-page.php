<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Universe
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="coming-soon">
			<?php
			if (function_exists('get_field')){
				$logo = get_field('coming_soon_logo');
				$image = get_field('coming_soon_image');
				?>
				<div class="coming-soon-logo" style="background-image: url(<?php echo $logo; ?> )"></div>
				<div class="coming-soon-image" style="background-image: url(<?php echo $image; ?> )"></div>
				<div class="coming-soon-text">
				<?php the_field('coming_soon_text'); ?>
				</div>
			<?php	
			}
			?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
