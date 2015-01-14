<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
	<div id="main">   
    	<h2 class="title">Portfolio</h2>  
    	<div id="portfolio-content">	
			<?php 
				$count = 0;
				$loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 10)); 
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php	
					$custom = get_post_custom($post->ID);
					$screenshot_url = $custom["screenshot_url"][0];
					$website_url = $custom["website_url"][0];
					
					if(($count % 3) == 0) {  
				?>					
			        <div class="portfolio-item first">
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>					
				<?php 
			           } else {
			    ?>           
			        <div class="portfolio-item">
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>			           
			    <?php } $count++; ?> 
		    <?php endwhile; ?>  
		</div><!--end portfolio-content-->
	</div><!--end main-->
<?php get_footer(); ?>