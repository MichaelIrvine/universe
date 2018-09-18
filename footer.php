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
		echo '<img src="' . $footerLogo . '" alt="' . $footerLogo . '" />';
		?>

	</div>
	<div class="missing-links-container">
		
		<?php
		if (!is_page('missing-links') ) : ?>
		
		<?php
		if( have_rows('missing_links', 'option') ): 
		while( have_rows('missing_links', 'option') ): the_row();?>
			<a href="<?php the_sub_field('missing_link_url');?>" class="ml-link" data-ml-item="ml-menu-item"> 
				<?php the_sub_field('missing_link_title', 'option');?>
			</a>
			<?php the_sub_field('missing_link_extra', 'option');?>
		<?php 
		endwhile; 
		endif;
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
			echo '<p class="footer-copyright">&copy;'; 
			the_field('copyright_date', 'option');echo '</p>';
			echo '<p>';
			the_field('copyright_info', 'option'); 
			echo '</p>';
		}

	}
	?>
	</div>  <!-- copyright info -->
	<div class="developer-info">
		<?php
		if( have_rows('developer_info', 'option') ): 
		while( have_rows('developer_info', 'option') ): the_row();
			?>
			
			 <p class="developer-info-text">Website by: <a href="<?php the_sub_field('developer_website');?>"> 
				 <?php the_sub_field('developer_name', 'option');?>
			</a></p>
		<?php 
		endwhile; 
		endif;
		?>
	</div> <!-- developer info -->
	</div> <!-- footer bottom container -->

	<div class="scrollup">
		<a href="#" class="scroll-to-top">
			<i class="fas fa-chevron-up"></i>
		</a>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
