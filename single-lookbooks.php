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
		<section class="single-lookbooks">
		<!-- <div class="lookbook-featured-image" style="background-image: url('<?php echo the_post_thumbnail;?>')"> -->
			<!-- <?php echo the_post_thumbnail('full'); ?>  -->
		<!-- </div> -->

		<!-- <div id="lookbook-title">
			<h2><?php echo the_title(); ?></h2> 
		</div> -->
		<?php

		$images = get_field('lookbook_content');
		$size = 'full';


		if( $images ): ?>
			<ul class="lookbook-images">
				<?php foreach( $images as $image ): ?>
					<li style="background-image: url(<?php echo $image['url']; ?>)">
						
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
