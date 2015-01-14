<?
global $wpdb;
if ($options['GP_TabPosition'] == 'Middle' && in_array($options['GP_TabDesign'], array(3, 6)))
{
	$fblbHead_GP_top_margin = -30;
}
if ($options['GP_TabPosition'] == 'Middle' && in_array($options['GP_TabDesign'], array(1, 2, 4, 5)))
{
	$fblbHead_GP_top_margin = -78;
}
if ($options['GP_TabPosition'] == 'Middle' && in_array($options['GP_TabDesign'], array(7, 8)))
{
	$fblbHead_GP_top_margin = -45;
}
if ($options['GP_TabPosition'] == 'Middle' && in_array($options['GP_TabDesign'], array(9)))
{
	$fblbHead_GP_top_margin = -18;
}
if ($options['GP_TabPosition'] == 'Top' && in_array($options['GP_TabDesign'], array(3, 6)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) * -1;
}
if ($options['GP_TabPosition'] == 'Top' && in_array($options['GP_TabDesign'], array(1, 2, 4, 5)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) * -1;
}
if ($options['GP_TabPosition'] == 'Top' && in_array($options['GP_TabDesign'], array(7, 8)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) * -1;
}
if ($options['GP_TabPosition'] == 'Top' && in_array($options['GP_TabDesign'], array(9)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) * -1;
}
if ($options['GP_TabPosition'] == 'Bottom' && in_array($options['GP_TabDesign'], array(3, 6)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) - 60;
}
if ($options['GP_TabPosition'] == 'Bottom' && in_array($options['GP_TabDesign'], array(1, 2, 4, 5)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) - 155;
}
if ($options['GP_TabPosition'] == 'Bottom' && in_array($options['GP_TabDesign'], array(7, 8)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) - 90;
}
if ($options['GP_TabPosition'] == 'Bottom' && in_array($options['GP_TabDesign'], array(9)))
{
	$fblbHead_GP_top_margin = ($options['GP_Height'] / 2) - 36;
}
?>
<div class="fblbCenterOuter fblbCenterOuterGp <?= ($options['GP_VPosition'] == 'Fixed' ? 'fblbFixed' : '') ?> fblb<?= $options['GP_Position'] ?>" style="<?= ($options['GP_VPosition'] == 'Fixed' ? 'margin-top: ' . ($options['GP_VPositionPx'] ? $options['GP_VPositionPx'] : '0') . 'px; ' : '') ?> <?= ($options['GP_Position'] == 'Left' ? 'left: -' . ($options['GP_Width'] + $options['GP_Border']) . 'px;' : 'right: -' . ($options['GP_Width'] + $options['GP_Border']) . 'px;') ?><?= ($options['GP_ZIndex'] ? 'z-index: ' . $options['GP_ZIndex'] . ';' : '') ?>">
	<div class="fblbCenterInner">
		<div class="fblbWrap fblbTheme0 fblbTab<?= $options['GP_TabDesign'] ?>">
			<div class="fblbForm" style="background: <?= $options['GP_BorderColor'] ?>; height: <?= $options['GP_Height'] ?>px; width: <?= $options['GP_Width'] ?>px; padding: <?= ($options['GP_Position'] == 'Left' ? $options['GP_Border'] . 'px ' . $options['GP_Border'] . 'px ' . $options['GP_Border'] . 'px 0' : $options['GP_Border'] . 'px 0 ' . $options['GP_Border'] . 'px ' . $options['GP_Border'] . 'px') ?>";">
				<h2 class="fblbHead" style="margin-top: <?= $fblbHead_GP_top_margin ?>px; <?= ($options['GP_Position'] == 'Left' ? 'left: ' . ($options['GP_Width'] + $options['GP_Border']) . 'px;' : 'right: ' . ($options['GP_Width'] + $options['GP_Border']) . 'px;') ?>">Google Plus</h2>
				<div class="fblbInner" style="background: <?=$options['GP_BackgroundColor']?>; height: <?= $options['GP_Height'] ?>px;">
					<link href="https://plus.google.com/<?= $options['GP_PageID'] ?>" rel="publisher" /><script type="text/javascript">
					window.___gcfg = {lang: '<?= $options['GP_Language'] ?>'};
					(function() 
					{var po = document.createElement("script");
					po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(po, s);
					})();</script>
					<!-- Place this tag where you want the badge to render -->
					<div class="g-plus" data-href="https://plus.google.com/<?= $options['GP_PageID'] ?>" data-size="badge"></div>
					<div style="padding: 15px; overflow: auto; height: <?=$options['GP_Height']-131-30-$options['GP_Border']?>px;">
						<?
						if($options['GP_ShowFeed'])
						{
							$posts = $wpdb->get_results("SELECT * FROM `".$wpdb->prefix."arscodess_gp` ORDER By datetime DESC LIMIT 10");
							$i=0;
							foreach($posts as $v)
							{
								echo 
								'<div style="padding-bottom: 10px; width: '.($options['GP_Width']-40).'px">'.fblb_truncate($v->desc, 255, '...', true, true).'<br />'.
								'<span style="font-weight: bold; float: left;">'.date('Y-m-d',strtotime($v->datetime)).'</span>'.
								'<span style="font-weight: bold; float: right;">+'.$v->plus.'</span>'.
								'<hr style="clear: both;color: #dcdcdc; background-color: #dcdcdc;" />'.
								'</div>';
								$i++;
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>