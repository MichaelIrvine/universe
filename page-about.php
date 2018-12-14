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

			<section class="about-image-top">
			<?php
				if (function_exists('get_field')){
					if (get_field('about_image_top')){ 
						$aboutImageTop = get_field('about_image_top');
						?>
						<img src="<?php echo $aboutImageTop['url']; ?>" alt="<?php echo $aboutImageTop['alt']; ?>" />
					<?php
					}
				}
				?>
			</section>

			<section class="about-copy">
			<?php
				if (function_exists('get_field')){
					if (get_field('about_content')){?>
						<div class="about-text"><?php echo the_field('about_content')?></div>
					<?php
					}
				}
				?>
			</section>

			<section class="about-image-bottom">
			<?php
				if (function_exists('get_field')){
					if (get_field('about_image_bottom')){ 
						$aboutImageBottom = get_field('about_image_bottom');
						?>
						<img src="<?php echo $aboutImageBottom['url']; ?>" alt="<?php echo $aboutImageBottom['alt']; ?>" />
					<?php
					}
				}
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
