<?php get_header(); ?>
		<div id="main-wrapper">
			<div id="left">
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
				
			        	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
						
						<div class="meta-data">
							<span class="auth-date">Autor: <?php the_author();?> | Postado em: <?php the_time('d-m-Y'); ?> | Categoria: <?php the_category(', ') ?></span>
						</div>

						<div class="entry">
							<?php the_content(); ?>
							<p class="postmetadata"><?php _e('Category&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><?php edit_post_link('Edit', ' &#124; ', ''); ?></p>
						</div>
						<?php comments_template(); ?>

					<?php endwhile; ?>
						
				<?php else : ?>

					<h2>Não encontrado</h2>
					<p>Desculpe, mas você está procurando algo que não está aqui.</p>

				<?php endif; ?>
				
			</div>
			<?php get_sidebar();?>
		</div>
		<?php get_footer(); ?>