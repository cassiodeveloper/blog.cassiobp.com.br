<div id="sidebar">
	<div id="contact-details">	
		<h3 class="sidebar-title">Get In Touch</h3>		
		<p class="sidebar-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt.</p>		
		<p class="sidebar-contact-title">Email</p>
		<p><?php echo get_option(THEME_PREFIX . "contact_email"); ?></p>		
		<p class="sidebar-contact-title">Phone</p>
		<p><?php echo get_option(THEME_PREFIX . "contact_phone"); ?></p>		
		<p class="sidebar-contact-title">Address</p>
		<p><?php echo get_option(THEME_PREFIX . "contact_address"); ?></p>			
	</div><!--end contact-details-->
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
	<?php endif; ?>	
</div><!--end sidebar-->