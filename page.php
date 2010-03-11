<?php get_header(); ?>
	<!-- The class "grid_7" restricts the div to 7 columns wide -->
	<div id="content" class="container_12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				
			</div><!-- end entry -->
			
		</div><!-- end post -->
		
		<?php endwhile; endif; ?>
		
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
	</div><!-- end content -->

	<div class="clear">&nbsp;</div>
	

<?php get_footer(); ?>