<?php get_header(); ?>
		<div id="main-wrapper">
			<div id="left">
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
				
			        	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="meta-data">
							<span class="auth-date">Autor: <?php the_author();?> | Postado em: <?php the_time('d-m-Y'); ?></span>
							<span class="comments-no"><?php comments_popup_link('0', '1', '%'); ?></span>
						</div>

						<div class="entry">
							<?php the_content('Continue reading &raquo;'); ?>
						</div>

					<?php endwhile; ?>
					
						<div id="post-links">
							<span class="prev-entries"><?php next_posts_link('Previous Entries') ?></span> 
							<span class="next-entries"><?php previous_posts_link('Next Entries') ?></span>
						</div>
						
				<?php else : ?>

					<h2>Não encontrado</h2>
					<p>Desculpe, mas você está procurando algo que não está aqui.</p>

				<?php endif; ?>
				
			</div>
			<?php get_sidebar();?>
		</div>
		<?php get_footer(); ?>