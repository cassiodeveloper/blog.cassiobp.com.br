<?php get_header(); ?>
	<div id="main">	
		<?php
        	$custom = get_post_custom($post->ID);
            $screenshot1 = $custom["screenshot1"][0]; 
        ?>        	    	
    	<div id="project-content">
    		<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>                       
                	<h2 class="title"><?php the_title(); ?></h2>
                    <?php the_content(); ?> 			                        
				<?php endwhile; ?>
			<?php endif; ?>		    	
    	</div><!--end project-content-->
    	<div id="project-image-large">    	
    		<img src="<?php  echo $screenshot1;?>" />    	
    	</div><!--end project-image-large-->
	</div><!--end main-->
<?php get_footer(); ?>