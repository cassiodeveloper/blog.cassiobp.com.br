<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
	<div id="main">    
    	<div id="content">    		
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			
			<p class='hide' id='response'></p>
			
			<form id='contact-form' method='post' action='<?php bloginfo('url'); ?>/wp-content/themes/satoshi/scripts/contact-process.php'>
				<fieldset>					
					<input id='form_name' type='text' name='name' value='Name' onfocus="if(this.value=='Name'){this.value=''};" onblur="if(this.value==''){this.value='Name'};" />					
					<input id='form_email' type='text' name='email' value="Email" onfocus="if(this.value=='Email'){this.value=''};" onblur="if(this.value==''){this.value='Email'};" />
					<input id='form_subject' type='text' name='subject' value="Subject" onfocus="if(this.value=='Subject'){this.value=''};" onblur="if(this.value==''){this.value='Subject'};" />			
					<textarea id='form_message' rows='10' cols='40' name='message'></textarea>				
					<input id='form_submit' class="submit" type='submit' name='submit' value='' />			
					<div class='hide'>
						<label>Do not fill out this field</label>
						<input name='spam_check' type='text' value='' />
					</div>
				</fieldset>
			</form>
			
    	</div><!--end content-->
		<?php get_sidebar(); ?>
	</div><!--end main-->
	<div class="cache-images">
		<img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/submit-button-hover.png" width="0" height="0" alt="" />
	</div><!--end cache-images--> 
<?php get_footer(); ?>