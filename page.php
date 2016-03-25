<?php get_header(); ?>

		<h1 class="post-title"><?php the_title(); ?></h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">

			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<h5><?php edit_post_link('Edit', '<p>', '</p>'); ?></h5>
		</div> <!-- /end .post -->
				
		<?php endwhile; endif; ?>

		<div class="all_posts"><a href="<?php bloginfo('url'); ?>/archive/">Read something</a>
		</div> <!-- /end .all_posts -->
		
		<div class="subscribe"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
		<div class="footer"><?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?></div>

	</div>  <!-- /end .container -->

	<?php wp_footer(); ?>

</body>
</html>
