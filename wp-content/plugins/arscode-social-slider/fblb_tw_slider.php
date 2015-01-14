<?
if ($options['TW_TabPosition'] == 'Middle' && in_array($options['TW_TabDesign'], array(3, 6)))
{
	$fblbHead_tw_top_margin = -30;
}
if ($options['TW_TabPosition'] == 'Middle' && in_array($options['TW_TabDesign'], array(1, 2, 4, 5)))
{
	$fblbHead_tw_top_margin = -78;
}
if ($options['TW_TabPosition'] == 'Middle' && in_array($options['TW_TabDesign'], array(7, 8)))
{
	$fblbHead_tw_top_margin = -45;
}
if ($options['TW_TabPosition'] == 'Middle' && in_array($options['TW_TabDesign'], array(9)))
{
	$fblbHead_tw_top_margin = -18;
}
if ($options['TW_TabPosition'] == 'Top' && in_array($options['TW_TabDesign'], array(3, 6)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) * -1;
}
if ($options['TW_TabPosition'] == 'Top' && in_array($options['TW_TabDesign'], array(1, 2, 4, 5)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) * -1;
}
if ($options['TW_TabPosition'] == 'Top' && in_array($options['TW_TabDesign'], array(7, 8)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) * -1;
}
if ($options['TW_TabPosition'] == 'Top' && in_array($options['TW_TabDesign'], array(9)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) * -1;
}
if ($options['TW_TabPosition'] == 'Bottom' && in_array($options['TW_TabDesign'], array(3, 6)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) - 60;
}
if ($options['TW_TabPosition'] == 'Bottom' && in_array($options['TW_TabDesign'], array(1, 2, 4, 5)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) - 155;
}
if ($options['TW_TabPosition'] == 'Bottom' && in_array($options['TW_TabDesign'], array(7, 8)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) - 90;
}
if ($options['TW_TabPosition'] == 'Bottom' && in_array($options['TW_TabDesign'], array(9)))
{
	$fblbHead_tw_top_margin = ($options['TW_Height'] / 2) - 36;
}
?>
<div class="fblbCenterOuter fblbCenterOuterTw <?= ($options['TW_VPosition'] == 'Fixed' ? 'fblbFixed' : '') ?> fblb<?= $options['TW_Position'] ?>" style="<?= ($options['TW_VPosition'] == 'Fixed' ? 'margin-top: ' . ($options['TW_VPositionPx'] ? $options['TW_VPositionPx'] : '0') . 'px; ' : '') ?> <?= ($options['TW_Position'] == 'Left' ? 'left: -' . ($options['TW_Width'] + $options['TW_Border']) . 'px;' : 'right: -' . ($options['TW_Width'] + $options['TW_Border']) . 'px;') ?><?= ($options['TW_ZIndex'] ? 'z-index: ' . $options['TW_ZIndex'] . ';' : '') ?>">
	<div class="fblbCenterInner">
		<div class="fblbWrap fblbTheme0 fblbTab<?= $options['TW_TabDesign'] ?>">
			<div class="fblbForm" style="background: <?= $options['TW_BorderColor'] ?>; height: <?= $options['TW_Height'] ?>px; width: <?= $options['TW_Width'] ?>px; padding: <?= ($options['TW_Position'] == 'Left' ? $options['TW_Border'] . 'px ' . $options['TW_Border'] . 'px ' . $options['TW_Border'] . 'px 0' : $options['TW_Border'] . 'px 0 ' . $options['TW_Border'] . 'px ' . $options['TW_Border'] . 'px') ?>";">
				<h2 class="fblbHead" style="margin-top: <?= $fblbHead_tw_top_margin ?>px; <?= ($options['TW_Position'] == 'Left' ? 'left: ' . ($options['TW_Width'] + $options['TW_Border']) . 'px;' : 'right: ' . ($options['TW_Width'] + $options['TW_Border']) . 'px;') ?>">Twitter</h2>
				<div class="fblbInner">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						new TWTR.Widget({
							version: 2,
							type: 'profile',
							rpp: <?= $options['TW_rpp'] ?>,
							interval: <?= $options['TW_interval'] * 1000 ?>,
							width: <?= $options['TW_Width'] ?>,
							height: <?= $options['TW_Height'] - 92 ?>,
							theme: {
								shell: {
									background: '<?= $options['TW_ShellBackground'] ?>',
									color: '<?= $options['TW_ShellText'] ?>'
								},
								tweets: {
									background: '<?= $options['TW_TweetBackground'] ?>',
									color: '<?= $options['TW_TweetText'] ?>',
									links: '<?= $options['TW_Links'] ?>'
								}
							},
							features: {
								loop: <?= ($options['TW_loop'] ? 'true' : 'false') ?>,
								live: <?= ($options['TW_live'] ? 'true' : 'false') ?>,
								scrollbar: true,
								avatars: true,
								behavior: '<?= $options['TW_behavior'] ?>'				  
							}
						}).render().setUser('<?= $options['TW_Username'] ?>').start();
					</script>					



				</div>
			</div>
		</div>
	</div>
</div>