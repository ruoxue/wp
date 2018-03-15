<?php
/**
 * The template for displaying the footer.
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>

		<div class="site-info"  role="contentinfo">
          <?php     echo wp_list_bookmarks();?>
		</div><!-- .site-info -->
        <?php     echo  get_option("foot");?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<?php     echo  get_option("foot_ad");?>
</body>
</html>
