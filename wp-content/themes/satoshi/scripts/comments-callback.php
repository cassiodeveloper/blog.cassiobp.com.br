<?php
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author vcard">
				<?php echo get_avatar($comment,$size='32'); ?>
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
			</div>
	            <?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.') ?></em>
			<?php endif; ?>
			<?php comment_text() ?>
			<div class="reply">
				<?php comment_reply_link(array ('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'])) ?> 
			</div>
		</div>
<?php
}
?>