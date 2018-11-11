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

<?php if( have_rows('lookbook') ): ?>

	<ul class="lookbooks">

	<?php while( have_rows('lookbook') ): the_row(); 

		// vars
		$image = get_sub_field('lookbook_feature_image');
		$title = get_sub_field('lookbook_title');
		$link = get_sub_field('lookbook_link');

		?>

		<li class="lookbook">

			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
		    	<div class="lookbook-wrapper" style="background-image: url('<?php echo $image['url'] ?>');">
				
				<p><?php echo $title; ?></p>
				</div>
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>



		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
