<?php get_header(); ?>


<div class="content-title">
    404! Ops, n�o encontramos o que voc� procurava.
</div>

<div class="entry">
    <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
        <div class="post-content">
            <p>A p�gina que voc� tentou acessar n�o pode ser exibida. Aparentemente a url pode estar errada, pode ser um link antigo desatualizado, ou simplesmente a p�gina n�o existe.</p>
        </div>
    </div>
</div>



<?php get_footer(); ?>