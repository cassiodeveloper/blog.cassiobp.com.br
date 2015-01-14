<?php get_header(); ?>
	<div id="main">    
    	<div id="content">    		
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>            
				<?php endwhile; ?>
			<?php endif; ?>
    	</div><!--end content-->
		<?php get_sidebar(); ?>
	</div><!--end main-->
<?php get_footer(); ?>