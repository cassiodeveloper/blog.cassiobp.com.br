<?php
include("scripts/comments-callback.php");
include("options/portfolio-custom-type.php");

// Register Widget Area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="sidebar-title">',
        'after_title' => '</h3>',
    ));

// Register Post Thumbnail
add_theme_support( 'post-thumbnails' ); 

// Register Custom Menus
add_action('init', 'register_custom_menu');
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}

// Set Theme Prefix
define("THEME_PREFIX", "satoshi_");

/* -- Theme Options Page -- */
function theme_options_admin() {
	$option_fields = array();
	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>Satoshi Options Saved.</p></div>';
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/styles/functions.css" />';
?>

<div class="wrap">

    <h2>Satoshi Options</h2>
    
    <div id="message"></div>

    <div class="metabox-holder">
    	
    	<form method="post" action="options.php">
			<?php wp_nonce_field('update-options'); ?>
	    
	        <div id="theme-options">
		        
		        <div id="left-column">
		            <?php 	            	            		            	
		            	include("options/custom-logo.php");
		            	include("options/frontpage-headline.php");
		            	include("options/featured-project.php");	           		            	
		            ?>
		        </div><!--end left-column-->	        
		       	<div id="right-column">
		        	<?php
		        		include("options/contact-details.php");	
		        		include("options/footer-text.php");	
		        		include("options/google-analytics.php");	        	
		        	?>
		        </div><!--end right-column-->
		        	        
	        </div><!--theme-options-->
	        
	        <input type="hidden" name="action" value="update" />
	        <input type="hidden" name="page_options" value="<?php echo implode(",", $option_fields); ?>" />
        
        </form>
    </div><!--end metabox-holder-->
</div><!--end wrap-->
<?php
}
add_action('admin_menu', "theme_options_admin_init");
function theme_options_admin_init()
{
	add_theme_page( "Satoshi Theme Options", "Theme Options", 8, __FILE__, 'theme_options_admin');
}
?>