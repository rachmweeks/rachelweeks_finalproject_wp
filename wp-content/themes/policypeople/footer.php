<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package policypeople
 */
?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav id="footernav" class="main-navigation">
			<?php
				$policy_menu_top = array (
					'theme_location' => 'foot-nav',
					'container' => 'nav',
					'container_id' => 'footer-nav',
				);
			?>
			<?php wp_nav_menu( $policy_menu_top ); ?>
		</nav>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
