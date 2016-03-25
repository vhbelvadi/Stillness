<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	
		<div class="post">

			<?php the_content('Read more'); ?>

		</div> <!-- /end .post -->

		<br />

		<?php endwhile; ?>

		<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

<?php get_footer(); ?>