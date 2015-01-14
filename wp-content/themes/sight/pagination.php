<?php if (get_option('paging_mode') == 'default') : ?>
    <div class="pagination">
        <?php previous_posts_link(__('Mais novos')); ?>
        <?php next_posts_link(__('Mais velhos')); ?>
        <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
    </div>
    <?php else : ?>
    <div id="pagination"><?php next_posts_link(__('CARREGAR MAIS')); ?></div>
<?php endif; ?>