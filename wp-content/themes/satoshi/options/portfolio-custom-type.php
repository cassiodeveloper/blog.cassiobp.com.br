<?php
add_action('init', 'create_portfolio');
function create_portfolio() {
	
		$labels = array(
		'name' => _x('My Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio Item', 'post type singular name'),
		'add_new' => _x('Add New', 'portfolio item'),
		'add_new_item' => __('Add New Portfolio Item'),
		'edit_item' => __('Edit Portfolio Item'),
		'new_item' => __('New Portfolio Item'),
		'view_item' => __('View Portfolio Item'),
		'search_items' => __('Search Portfolio'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
		);
	
    	$portfolio_args = array(
        	'labels' => $labels,
        	'label' => __('Portfolio'),
        	'singular_label' => __('Portfolio'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => true,
        	'supports' => array('title', 'editor', 'thumbnail')
        );
    	register_post_type('portfolio',$portfolio_args);
}

add_action("admin_init", "add_portfolio");
add_action('save_post', 'update_screenshot_details');

function add_portfolio(){
	add_meta_box("portfolio_details", "Portfolio Options", "portfolio_options", "portfolio", "normal", "low");
}

function portfolio_options(){
	global $post;
	$custom = get_post_custom($post->ID);
	$screenshot1 = $custom["screenshot1"][0];
	
?>

	<style>
		#portfolio-options label { font-size: 12px; margin: 0 15px 0 0; }
		#portfolio-options input { border: 1px #ddd solid; padding: 8px; width: 300px; }
	</style>
	
	<div id="portfolio-options">
		<label>Large Screenshot (Max. Width: 430px):</label><input name="screenshot1" value="<?php echo $screenshot1; ?>" />		
	</div><!--end portfolio-options-->   

<?php

}
function update_screenshot_details(){
	global $post;
	update_post_meta($post->ID, "screenshot1", $_POST["screenshot1"]);
} 

add_filter("manage_edit-portfolio_columns", "portfolio_edit_columns");
 
function portfolio_edit_columns($portfolio_columns){
	$portfolio_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => "Project Title",
	);
	return $portfolio_columns;
}
?>