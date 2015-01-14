<div class="fblbReset">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?=$options['Locale']?>/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-colorscheme="<?=$options['ColorScheme']?>"  data-border-color="<?= $options['BorderColor'] ?>" data-href="<?= $options['FacebookPageURL'] ?>" data-width="<?=$options['Width']?>" data-height="<?=$options['Height']?>" data-show-faces="<?=($options['ShowFaces'] ? 'true' : 'false')?>" data-stream="<?=($options['ShowStream'] ? 'true' : 'false')?>" data-header="<?=($options['ShowHeader'] ? 'true' : 'false')?>"></div>
</div>