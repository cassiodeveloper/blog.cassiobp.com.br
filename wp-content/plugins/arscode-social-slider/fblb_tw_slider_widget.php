<div class="fblbReset">
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
			scrollbar: <?= ($options['TW_scrollbar'] ? 'true' : 'false') ?>,
			avatars: true,
			behavior: '<?= $options['TW_behavior'] ?>'				  
		}
	}).render().setUser('<?= $options['TW_Username'] ?>').start();
</script>
</div>