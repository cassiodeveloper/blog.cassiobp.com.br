 <div id="comments">
 <?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
<?php if ( have_comments() ) : ?>
	<h3><?php comments_number();?></h3>
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</ol>
    
	<?php $comments_by_type = &separate_comments($comments); ?>
	<?php if (!empty($comments_by_type['pings'])) : ?>
        <h3>Trackbacks/Pingbacks</h3>
        <ol class="commentlist">
            <?php wp_list_comments('type=pings&callback=mytheme_comment'); ?>
        </ol>
    <?php endif; ?>
<?php else : ?>
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : ?>
		<!-- If comments are closed. -->
		<!--<p class="nocomments">Comments are closed.</p>-->
	<?php endif; ?>
<?php endif; ?>
</div>
<?php if ( comments_open() ) : ?>
	<div id="respond">
        <h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
        <div class="cancel-comment-reply">
            <small><?php cancel_comment_reply_link(); ?></small>
        </div>
        <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
            <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
        <?php else : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <?php if ( is_user_logged_in() ) : ?>
                    <p class="logged">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
                <?php else : ?>
                    <input type="text" name="author" id="author" value="Name" size="22" tabindex="1" onfocus="if(this.value=='Name'){this.value=''};" onblur="if(this.value==''){this.value='Name'};" />
                    <input type="text" name="email" id="email" value="Email" size="22" tabindex="2" onfocus="if(this.value=='Email'){this.value=''};" onblur="if(this.value==''){this.value='Email'};" />
                    <input type="text" name="url" id="url" value="Website" size="22" tabindex="3" onfocus="if(this.value=='Website'){this.value=''};" onblur="if(this.value==''){this.value='Website'};" />
                <?php endif; ?>
                <textarea name="comment" id="comment" cols="10" rows="10" tabindex="4"></textarea>
                <input name="submit" type="submit" class="submit" tabindex="5" value="Submit &raquo;" />
                    <?php comment_id_fields(); ?>                
                <?php do_action('comment_form', $post->ID); ?>
            </form>
        <?php endif; // If registration is required and the user is not logged in ?>
	</div><!--end respond-->
<?php endif; ?>