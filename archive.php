<?php
/*
Template Name: Archives
*/
get_header(); ?>

<script type="text/javascript">
			var domainroot="<?php bloginfo('url'); ?>"
			function Gsitesearch(curobj){
				curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
				}

		</script>


		<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" class="search-form">

			<p class="search">Search:<br />
			<input name="q" type="hidden" class="texta" />
			<input name="qfront" type="text" style="width: 180px; text-size: 12px; height: 14px;" /> </p>

		</form>

<div class="archival">
<?php wp_get_archives( 'type=postbypost' ); ?>
</div>

<div class="subscribe"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
<div class="footer"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>

</div>  <!-- /end .container -->

<?php wp_footer(); ?>

</body>
</html>