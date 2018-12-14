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
			<!-- <div class="ml-title">
				<h1>Missing Links</h1>
			</div> -->
			<!-- <?php
			wp_nav_menu( array(
				'theme_location' => 'missing-links',
				'menu_id'        => 'missing-links',
			) );
			?> -->

			<?php
			if( have_rows('missing_links_content') ):
				while ( have_rows('missing_links_content') ) : the_row();
					if( get_row_layout() == 'ml_content' ):
				
					$title = get_sub_field('ml_title');
					$content = get_sub_field('ml_content');
					?>

					<section class="ml-content">
						<div class="ml-content--inner">
							
							<h3>
							<?php
							echo $title;
							?>
							</h3>
							<?php
							echo $content; ?>
						</div>	
					</section>


					<?php
					endif;

				endwhile;

			else :

				// no layouts found

			endif;

			?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
