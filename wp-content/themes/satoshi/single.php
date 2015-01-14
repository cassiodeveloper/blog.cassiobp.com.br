<?php get_header(); ?>
	<div id="main">    
    	<div id="content">
        	<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <h3 class="post-meta">Posted By <?php the_author(); ?> ~ <?php the_time('jS F Y') ?></h3>
                        <?php the_content(); ?>
                    </div><!--end post-->
                    <?php comments_template(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!--end content-->
        <?php get_sidebar(); ?>
	</div><!--end main-->
	<div class="cache-images">
		<img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/comment-button-hover.png" width="0" height="0" alt="" />
	</div><!--end cache-images--> 
<?php get_footer(); ?>