<?php get_header(); ?>
    <div id="main">	
        <div id="content">
            <?php if (have_posts()) : ?>       
               	<?php $post = $posts[0]; ?>
                <?php if (is_category()) { ?>
                	<h2 class="archive-title"><?php single_cat_title(); ?></h2>
                <?php } elseif( is_tag() ) { ?>
                	<h2 class="archive-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                <?php } elseif (is_day()) { ?>
                	<h2 class="archive-title">Archive for <?php the_time('F jS, Y'); ?></h2>
                <?php } elseif (is_month()) { ?>
                	<h2 class="archive-title">Archive for <?php the_time('F, Y'); ?></h2>
                <?php } elseif (is_year()) { ?>
                	<h2 class="archive-title">Archive for <?php the_time('Y'); ?></h2>
                <?php } elseif (is_author()) { ?>
                	<h2 class="archive-title">Author Archive</h2>
                <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                	<h2 class="archive-title">Blog Archives</h2>
                <?php } ?>                                   
                <?php while (have_posts()) : the_post(); ?>                			                          
                    <div class="post" id="post-<?php the_ID(); ?>">
						<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <h3 class="post-meta">Posted By <?php the_author(); ?> / <?php the_time('jS F Y') ?></h3>
                        <?php the_content('Read Full Post &raquo;'); ?>
					</div><!--end post-->                    
                <?php endwhile; ?>                                    
                <ul>
                    <li><?php next_posts_link('&laquo; Older Entries') ?></li>
                    <li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
                </ul>                       
            <?php endif; ?>
        </div><!--end content-->
        <?php get_sidebar(); ?>			
    </div><!--end main-->
<?php get_footer(); ?>                