<?php get_header(); ?>


<div class="content-title">
    404! Ops, não encontramos o que você procurava.
</div>

<div class="entry">
    <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
        <div class="post-content">
            <p>A página que você tentou acessar não pode ser exibida. Aparentemente a url pode estar errada, pode ser um link antigo desatualizado, ou simplesmente a página não existe.</p>
        </div>
    </div>
</div>



<?php get_footer(); ?>