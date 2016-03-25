<?php get_header(); ?>

		<h1 class="post-title single-title"><?php the_title(); ?></h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<p class="byline">by <?php the_author(); ?></p>
			
		<div class="post">

			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

		</div> <!-- /end .post -->

		<h5><?php edit_post_link('Edit', '<p>', '</p>'); ?></h5>

		<div class="home_bottom">

		</div> <!-- /end .home_bottom -->

		<br />

		<br />

		<div class="navigation">

			<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
			<p class="prev"><strong>&larr;</strong> <?php previous_post_link('%link'); ?></p>
			<?php endif; ?>

			<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
    			<p class="next"><?php next_post_link('%link'); ?> <strong>&rarr;</strong></p>
			<?php endif; ?>

		</div> <!-- /end .navigation -->

		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

		<?php if(comments_open()) : ?>  
			<?php comments_template(); ?>
		<?php else : ?>  
		<?php endif; ?> 

<?php get_footer(); ?>