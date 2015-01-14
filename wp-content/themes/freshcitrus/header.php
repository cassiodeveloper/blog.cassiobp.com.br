<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-10361468-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 7]>
	<style>
	#web-20{
		background-image: none;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/web20.png', sizingMethod='crop');
	}
	#navigation li a:hover, #navigation .current_page_item a, #navigation .current_page_item a:hover{
		background-image: none;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/navlist-hover.png', sizingMethod='crop');
		cursor: pointer;
	}
	#header h1 a{
		background-image: none;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/logo.png', sizingMethod='crop');
		cursor: pointer;
	}
	.sdb-content h3{
		background-image: none;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/sdb-title.png', sizingMethod='crop');
	}
	</style>
	<![endif]-->
	

<?php wp_head(); ?>	
</head>
<body>
	<div id="container">

		<div id="web-20"><span class="inv"></span></div>

		<div id="nav-content">
			<ul id="navigation">
				<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
				<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="http://www.cassiobp.com.br" title="Cássio Developer Site" target="_blank">Web Site</a></li>
				<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="http://www.cassiobp.com.br/contato.html" title="Contato" target="_blank">Contato</a></li>                
				<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
			</ul>
			<div id="search">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
		</div>

		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><span class="title"><?php bloginfo('name'); ?></span></a></h1>
			<span id="description"><?php bloginfo('description'); ?></span>
		</div>

		<div id="sub-nav">
			<a href="<?php bloginfo('rss2_url'); ?>" class="rss"><span class="inv"></span></a>
		</div>