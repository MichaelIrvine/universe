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

<?php if( have_rows('collections') ): ?>

	<ul class="collections">

	<?php while( have_rows('collections') ): the_row(); 

		// vars
		$image = get_sub_field('collection_feature_image');
		$title = get_sub_field('collection_title');
		$link = get_sub_field('collection_link');
		?>

		<?php if( $link ): ?>
			<a href="<?php echo $link; ?>" class="collection-link">
		<?php endif; ?>
			<li class="collection" style="background-image: url('<?php echo $image['url'] ?>');">
			<?php echo '<p class="collection-main-title">'; echo $title; echo '</p>'; ?>
			</li>
		<?php if( $link ): ?>
			</a>
		<!-- *************************************** -->
		<!-- THIS TO BE REMOVED ONCE STORE IS ACTIVE -->
		<!-- *************************************** -->

		<div class="sold-out">
			<h2>SOLD OUT</h2>
		</div>

		<!-- *************************************** -->
		<!-- THIS TO BE REMOVED ONCE STORE IS ACTIVE -->
		<!-- *************************************** -->

		<?php endif; ?>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?>
		


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
