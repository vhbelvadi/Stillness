		<div class="all_posts"><a href="<?php bloginfo('url'); ?>/archive/">See all posts</a>
		</div> <!-- /end .all_posts -->
		
		<div class="subscribe"><?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?></div>
<label for="nav"></label>
		<div class="footer"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>

	</div>  <!-- /end .container -->

	<?php wp_footer(); ?>
	
<script>
  var nav = responsiveNav(".footer");
  var nav = responsiveNav(".subscribe", { 
  label: "More", // String: Label for the navigation toggle
});
</script>

</body>
</html>
