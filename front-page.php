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
				$image = get_field('coming_soon_image');
				$logo  = get_field('coming_soon_logo');
				?>

				<div class="coming-soon-image" style="background-image: url(<?php echo $image; ?> )"></div>
				<div class="coming-soon-center">
				<div class="coming-soon-logo">
					<img src="<?php the_field('coming_soon_logo'); ?>" />
				</div>
				<div class="coming-soon-text-container">
					<?php
					echo the_field('coming_soon_text');
					?>
				</div>
			<?php	
			}
			?>
			</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
