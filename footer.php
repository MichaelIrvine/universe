<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Universe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="footer-logo-small">

		<?php
		$footerLogo = get_field('footer_logo', 'option');
		echo '<img src="' . $footerLogo['url'] . '" alt="' . $footerLogo . '" />';
		?>

	</div>
	<div class="missing-links">
		<h3>Missing Links</h3>
		<?php
		if( have_rows('missing_links', 'option') ): 
		while( have_rows('missing_links', 'option') ): the_row();
			?>
			
			 <p><a href="<?php the_sub_field('missing_link_url');?>"> 
				 <?php the_sub_field('missing_link_title', 'option');?>
			</a></p>
		<?php 
		endwhile; 
		endif;
		?>
	</div> <!-- missing links -->

	<div class="newsletter">
		<?php dynamic_sidebar('footer'); ?> 
	</div>
	<!-- newsletter -->

	<div class="footer-bottom-container">
	<div class="copyright-info">
		<?php
	if( function_exists('get_field') ){
		if( get_field('copyright_info', 'option') ){
			echo '<p class="footer-copyright">&copy;'; the_field('copyright_info', 'option'); echo '</p>';
		}

	}
	?>
	</div>  <!-- copyright info -->
	<div class="developer-info">
		<?php
		if( have_rows('developer_info', 'option') ): 
		while( have_rows('developer_info', 'option') ): the_row();
			?>
			
			 <p class="developer-info">Website by: <a href="<?php the_sub_field('developer_website');?>"> 
				 <?php the_sub_field('developer_name', 'option');?>
			</a></p>
		<?php 
		endwhile; 
		endif;
		?>
	</div> <!-- developer info -->
	</div> <!-- footer bottom container -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
