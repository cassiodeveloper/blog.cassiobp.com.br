<!DOCTYPE html>
<html lang="en">	
	<head>		
		<meta charset="utf-8">
		<title><?php
			if ( is_single() ) { single_post_title(); }
			elseif ( is_home() || is_front_page() ) { echo bloginfo('name'); }
			elseif ( is_page() ) { single_post_title(''); }
			elseif (is_category()) { echo 'Category:'; wp_title(''); }
			elseif (is_search()) { echo 'Search Results'; }
			elseif ( is_day() || is_month() || is_year() ) { echo 'Archives:'; wp_title(''); }
			else { bloginfo('name'); wp_title('|'); }
		?></title>
		
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="description" content="<?php bloginfo('description') ?>" />
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/js/contact-form-process.js"></script>
        
        <!--[if IE 6]>
            <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/js/ie6-transparency.js"></script>
            <script>
                DD_belatedPNG.fix('#header img, #header img.description, #headline img, #featured-section-image, .more-details-button, #commentform .submit, #contact-form .submit');
            </script>
            <style>body { behavior: url("<?php bloginfo('url'); ?>/wp-content/themes/satoshi/styles/ie6-hover-fix.htc"); }</style>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/styles/ie6.css" />
        <![endif]--> 
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/styles/ie7.css" />
        <![endif]-->  
        <!--[if IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/styles/ie8.css" />
        <![endif]-->
        
        <?php wp_head(); ?>
		<?php echo get_option(THEME_PREFIX . "google_analytics"); ?>
	</head>
	
	<body>		
		<div id="wrap">
        	<div id="header">        	        	
        		<?php if (get_option(THEME_PREFIX . "logo_image_enabled")) { ?>	
            		 <img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/<?php echo get_option(THEME_PREFIX . 'logo_image'); ?>" />
            	<?php } else { ?>
            		<h1><a href="<?php bloginfo('url'); ?>"><?php echo get_option(THEME_PREFIX . "logo_text"); ?></a></h1>
            	<?php } ?> 
            	<img src="<?php bloginfo('url'); ?>/wp-content/themes/satoshi/images/description.png" class="description" />
            	
            	<div id="nav">
            		<?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
            	</div>           
            </div><!--end header-->