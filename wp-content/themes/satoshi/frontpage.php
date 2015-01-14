<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
	<div id="frontpage-content">     
    	<div id="headline">
    		<?php if (get_option(THEME_PREFIX . "headline_image_enabled")) { ?>	
            	<img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/<?php echo get_option(THEME_PREFIX . 'headline_image'); ?>" />
            <?php } else { ?>
            	<h2><?php echo get_option(THEME_PREFIX . "headline_text"); ?></h2>
            <?php } ?>     		
    	</div><!--end headline-->
    	
    	<div id="featured-section">   	
    		<div id="featured-section-image">    		
    			<img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/<?php echo get_option(THEME_PREFIX . "featured_project_image"); ?>" alt="norio500x275" />    		
    		</div><!--end featured-section-image-->    		
    		<div id="featured-section-details">    		
    			<h2><?php echo get_option(THEME_PREFIX . "featured_project_title"); ?></h2>
    			<p><?php echo get_option(THEME_PREFIX . "featured_project_text"); ?></p>
    			<a href="<?php echo get_option(THEME_PREFIX . "featured_project_url"); ?>" class="more-details-button">More Details &raquo; </a>
    		</div><!--end featured-section-details-->    	
    	</div><!--end featured-section-->
    	    
    	<div id="recent-work">    	
    		<h2>Latest Projects</h2>    		
    		<?php 
				$id = "video";
				$count = 0;
				$loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 3)); 
			 	while ( $loop->have_posts() ) : $loop->the_post(); 	
					$custom = get_post_custom($post->ID);			
					if(($count % 3) == 0) {  
			?>    		
    		<div class="recent-project first">    		
    			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    			<h3><?php the_title(); ?></h3> 
    			<p><?php the_content_rss('', TRUE, '', 13); ?></p>   		
    		</div><!--end recent-project-->    		
    		<?php 
	           		} else {
	    	?>     		
    		<div class="recent-project">    		
    			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    			<h3><?php the_title(); ?></h3> 
    			<p><?php the_content_rss('', TRUE, '', 13); ?></p>   		
    		</div><!--end recent-project-->    		
    		<?php 
	    			} 
	    			$count++; 
	    		endwhile; 
	    	?>     	
    	</div><!--end recent-work-->    
    </div><!--end frontpage-content-->
    <div class="cache-images">
    	<img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/portfolio-button-hover.png" width="0" height="0" alt="" />
    </div><!--end cache-images--> 
<?php get_footer(); ?>