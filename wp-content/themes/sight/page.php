<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="entry">
            <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
                <div class="post-meta">
                    <h1><?php the_title(); ?></h1>
                    por <span class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="Posts por <?php the_author(); ?>"><?php the_author(); ?></a></span> em <span
                        class="post-date"><?php the_time(__('M j, Y')) ?></span> &bull; <span><?php the_time() ?></span> <?php edit_post_link( __( 'Editar página'), '&bull; '); ?>
                    <?php if ( comments_open() ) : ?>
                        <a href="#comments" class="post-comms"><?php comments_number(__('Sem comentários'), __('1 Comentário'), __('% Comentários'), '', __('Comentários fechados') ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="post-content"><?php the_content(); ?></div>
                <div class="post-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); ?></div>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>