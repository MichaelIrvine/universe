<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Universe
 */

get_header();
?>

	<div id="primary" class="content-area single-lookbook">
		<main id="main" class="site-main">
		<div class="lookbook-featured-image">
			<?php echo the_post_thumbnail('full'); ?> 
		</div>

		<div id="lookbook-title">
			<h2><?php echo the_title(); ?></h2> 
		</div>
		<?php

		$images = get_field('lookbook_content');
		$size = 'full';


		if( $images ): ?>
			<ul>
				<?php foreach( $images as $image ): ?>
					<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
