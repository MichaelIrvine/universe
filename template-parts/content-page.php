<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Universe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" style="display:none">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php universe_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
						
		if (function_exists( 'get_field' )){
			if (get_field( 'new_post_image' )){?>

				<section class="post-image">
					<?php
					$image = get_field('new_post_image');
					?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				</section>
			<?php 
			}
			}
			?>

			<?php
			if (function_exists( 'get_field' )){
			if (get_field( 'new_post_video' )){?>

				<section class="post-embed-video">

					<div class="embed-container">
						<?php the_field('new_post_video'); ?>
					</div>
					<style>
						.embed-container { 
							position: relative; 
							padding-bottom: 56.25%;
							overflow: hidden;
							max-width: 100%;
							height: auto;
						} 

						.embed-container iframe,
						.embed-container object,
						.embed-container embed { 
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
						}
					</style>

				</section>
			<?php 
			}
			}
			?>




		

	</div><!-- .entry-content -->

		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
