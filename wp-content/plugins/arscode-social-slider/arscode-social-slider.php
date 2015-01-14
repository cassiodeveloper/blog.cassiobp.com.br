<?php
/*
  Plugin Name: Social Slider by ARScode
  Description:
  Version: 1.7
 */

function fblb_get_options()
{
	$options = get_option('FBLB_Options');
	return $options;
}

function fblb_options_page()
{
	include 'fblb_options_page.php';
}

function fblb_admin()
{
	add_options_page('Social Slider', 'Social Slider', 'manage_options', 'fblb', 'fblb_options_page');
	wp_enqueue_style(
			'fblb-css', plugins_url('/fblb.css', __FILE__)
	);
	wp_enqueue_style(
			'fblb-colorpicker', plugins_url('/colorpicker.css', __FILE__)
	);
	wp_enqueue_script(
			'fblb-js', plugins_url('/js/userscripts.js', __FILE__), array('jquery')
	);
	wp_enqueue_script(
			'fblb-colorpicker', plugins_url('/js/colorpicker.js', __FILE__), array('jquery')
	);
	wp_enqueue_style(
			'fblb-css-ie7', plugins_url('/ie7.css', __FILE__)
	);
	global $wp_styles;
	$wp_styles->add_data('fblb-css-ie7', 'conditional', 'lte IE 7');
}

add_action('admin_menu', 'fblb_admin');

function fblb_slider()
{
	global $is_IE;
	if ($_POST['preview'] && is_admin())
	{
		global $fblb_preview_options;
		$options = $fblb_preview_options;
	}
	else
	{
		$options = fblb_get_options();
	}
	if ($options['Enable'] == 1 && $options['FacebookPageURL'])
	{
		include 'fblb_slider.php';
	}
	if ($options['TW_Enable'] == 1 && $options['TW_Username'])
	{
		include 'fblb_tw_slider.php';
	}
	if ($options['GP_Enable'] == 1 && $options['GP_PageID'])
	{
		include 'fblb_gp_slider.php';
	}
	if ($is_IE)
	{
		echo "<!--[if lte IE 7]>
		<script type='text/javascript' src='" . plugins_url('/js/', __FILE__) . "userscripts-ie7.js'></script>
		<![endif]-->";
	}
}

// Facebook Widget
class SocialSliderWidget extends WP_Widget
{

	function SocialSliderWidget()
	{
		parent::WP_Widget(false, 'Social Facebook Widget');
	}

	function widget($args, $instance)
	{
		$options = fblb_get_options();
		$options['Width'] = $instance['Width'];
		$options['Height'] = $instance['Height'];
		$options['ShowFaces'] = $instance['ShowFaces'];
		$options['ShowStream'] = $instance['ShowStream'];
		$options['ShowHeader'] = $instance['ShowHeader'];
		$options['ColorScheme'] = $instance['ColorScheme'];
		$options['BorderColor'] = $instance['BorderColor'];
		include 'fblb_slider_widget.php';
	}

	function update($new_instance, $old_instance)
	{
		return $new_instance;
	}

	function form($instance)
	{
		if (!$instance['Width'])
		{
			$instance['Width'] = 300;
		}
		if (!$instance['Height'])
		{
			$instance['Height'] = 500;
		}
		if (!$instance['BorderColor'])
		{
			$instance['BorderColor'] = '#3b5998';
		}
		if (!$instance['ColorScheme'])
		{
			$instance['ColorScheme'] = 'light';
		}
		?>
		<table>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('Width') ?>">Width</label></th>
				<td><input name="<?= $this->get_field_name('Width') ?>" type="text" id="<?= $this->get_field_id('Width') ?>" value="<?= $instance['Width'] ?>" class="small-text" /> px</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('Height') ?>">Height</label></th>
				<td><input name="<?= $this->get_field_name('Height') ?>" type="text" id="<?= $this->get_field_id('Height') ?>" value="<?= $instance['Height'] ?>" class="small-text" /> px</td>
			</tr>
			<tr valign="top">
				<th scope="row">Show faces</th>
				<td> 
					<fieldset>
						<legend class="screen-reader-text"><span>Show faces</span></legend>
						<label for="<?= $this->get_field_id('ShowFaces') ?>">
							<input name="<?= $this->get_field_name('ShowFaces') ?>" <?= ($instance['ShowFaces'] ? 'checked' : '' ) ?> type="checkbox" id="<?= $this->get_field_id('ShowFaces') ?>" value="1" />
						</label>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Show stream</th>
				<td> 
					<fieldset>
						<legend class="screen-reader-text"><span>Show stream</span></legend>
						<label for="<?= $this->get_field_id('ShowStream') ?>">
							<input name="<?= $this->get_field_name('ShowStream') ?>" <?= ($instance['ShowStream'] ? 'checked' : '' ) ?> type="checkbox" id="<?= $this->get_field_id('ShowStream') ?>" value="1" />
						</label>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Show header</th>
				<td> 
					<fieldset>
						<legend class="screen-reader-text"><span>Show header</span></legend>
						<label for="<?= $this->get_field_id('ShowHeader') ?>">
							<input name="<?= $this->get_field_name('ShowHeader') ?>" <?= ($instance['ShowHeader'] ? 'checked' : '' ) ?> type="checkbox" id="<?= $this->get_field_id('ShowHeader') ?>" value="1" />
						</label>
					</fieldset>
				</td>
			</tr>


			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('BorderColor') ?>">Border color</label></th>
				<td>
					<input maxlength="7" name="<?= $this->get_field_name('BorderColor') ?>" type="text" id="<?= $this->get_field_id('BorderColor') ?>" value="<?= $instance['BorderColor'] ?>" style="width: 70px;" class="small-text" /></div>

				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Color Scheme</th>
				<td> 
					<fieldset>
						<label for="<?= $this->get_field_id('ColorSchemelight') ?>">
							<input name="<?= $this->get_field_name('ColorScheme') ?>" <?= ($instance['ColorScheme'] == 'light' ? 'checked' : '' ) ?> type="radio" id="<?= $this->get_field_id('ColorSchemelight') ?>" value="light" />
																				light
						</label>
						<label for="<?= $this->get_field_id('ColorSchemedark') ?>">
							<input name="<?= $this->get_field_name('ColorScheme') ?>" <?= ($instance['ColorScheme'] == 'dark' ? 'checked' : '' ) ?> type="radio" id="<?= $this->get_field_id('ColorSchemedark') ?>" value="dark" />
																				dark
						</label>
					</fieldset>
				</td>
			</tr>
		</table>
		<?
	}

}

// END Facebook Widget
// Twitter Widget
class SocialSliderTwWidget extends WP_Widget
{

	function SocialSliderTwWidget()
	{
		parent::WP_Widget(false, 'Social Twitter Widget');
	}

	function widget($args, $instance)
	{
		$options = fblb_get_options();
		$options['TW_Width'] = $instance['TW_Width'];
		$options['TW_Height'] = $instance['TW_Height'];
		$options['TW_ShellBackground'] = $instance['TW_ShellBackground'];
		$options['TW_ShellText'] = $instance['TW_ShellText'];
		$options['TW_TweetBackground'] = $instance['TW_TweetBackground'];
		$options['TW_TweetText'] = $instance['TW_TweetText'];
		$options['TW_Links'] = $instance['TW_Links'];
		$options['TW_live'] = $instance['TW_live'];
		$options['TW_scrollbar'] = $instance['TW_scrollbar'];
		$options['TW_behavior'] = $instance['TW_behavior'];
		$options['TW_interval'] = $instance['TW_interval'];
		$options['TW_loop'] = $instance['TW_loop'];
		$options['TW_rpp'] = $instance['TW_rpp'];
		include 'fblb_tw_slider_widget.php';
	}

	function update($new_instance, $old_instance)
	{
		return $new_instance;
	}

	function form($instance)
	{
		if (!$instance['TW_Width'])
		{
			$instance['TW_Width'] = 300;
		}
		if (!$instance['TW_Height'])
		{
			$instance['TW_Height'] = 450;
		}
		if (!$instance['TW_ShellBackground'])
		{
			$instance['TW_ShellBackground'] = '#33ccff';
		}
		if (!$instance['TW_ShellText'])
		{
			$instance['TW_ShellText'] = '#ffffff';
		}
		if (!$instance['TW_TweetBackground'])
		{
			$instance['TW_TweetBackground'] = '#ffffff';
		}
		if (!$instance['TW_TweetText'])
		{
			$instance['TW_TweetText'] = '#000000';
		}
		if (!$instance['TW_Links'])
		{
			$instance['TW_Links'] = '#47a61e';
		}

		if (!$instance['TW_behavior'])
		{
			$instance['TW_behavior'] = 'all';
		}
		if (!$instance['TW_interval'])
		{
			$instance['TW_interval'] = 30;
		}

		if (!$instance['TW_rpp'])
		{
			$instance['TW_rpp'] = 5;
		}
		?>
		<table>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_Width') ?>">Width</label></th>
				<td><input name="<?= $this->get_field_name('TW_Width') ?>" type="text" id="<?= $this->get_field_id('TW_Width') ?>" value="<?= $instance['TW_Width'] ?>" class="small-text" /> px</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_Height') ?>">Height</label></th>
				<td><input name="<?= $this->get_field_name('TW_Height') ?>" type="text" id="<?= $this->get_field_id('TW_Height') ?>" value="<?= $instance['TW_Height'] ?>" class="small-text" /> px</td>
			</tr>

			<tr valign="top">
				<th scope="row">Poll for new results</th>
				<td> 
					<fieldset>
						<legend class="screen-reader-text"><span>Poll for new results</span></legend>
						<label for="<?= $this->get_field_id('TW_live') ?>">
							<input name="<?= $this->get_field_name('TW_live') ?>" <?= ($instance['TW_live'] ? 'checked' : '' ) ?> type="checkbox" id="<?= $this->get_field_id('TW_live') ?>" value="1" />
						</label>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Include scrollbar</th>
				<td> 
					<fieldset>
						<legend class="screen-reader-text"><span>Include scrollbar</span></legend>
						<label for="<?= $this->get_field_id('TW_scrollbar') ?>">
							<input name="<?= $this->get_field_name('TW_scrollbar') ?>" <?= ($instance['TW_scrollbar'] ? 'checked' : '' ) ?> type="checkbox" id="<?= $this->get_field_id('TW_scrollbar') ?>" value="1" />
						</label>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Behavior</th>
				<td> 
					<fieldset>
						<label for="<?= $this->get_field_id('TW_behaviordefaultall') ?>">
							<input name="<?= $this->get_field_name('TW_behavior') ?>" <?= ($instance['TW_behavior'] == 'all' ? 'checked' : '' ) ?> type="radio" id="<?= $this->get_field_id('TW_behaviordefaultall') ?>" value="all" />
									Load all tweets
						</label>
						<br />
						<label for="<?= $this->get_field_id('TW_behaviordefault') ?>">
							<input name="<?= $this->get_field_name('TW_behavior') ?>" <?= ($instance['TW_behavior'] == 'default' ? 'checked' : '' ) ?> type="radio" id="<?= $this->get_field_id('TW_behaviordefault') ?>" value="default" />
									Timed Interval:
						</label>
						<div style="margin-left: 10px;">
								Tweet Interval <input name="<?= $this->get_field_name('TW_interval') ?>" type="text" id="<?= $this->get_field_id('TW_interval') ?>" value="<?= $instance['TW_interval'] ?>" class="small-text" />
							<br />
								Loop results <input name="<?= $this->get_field_name('TW_loop') ?>" <?= ($instance['TW_loop'] ? 'checked' : '' ) ?> type="checkbox" id="<?= $this->get_field_id('TW_loop') ?>" value="1" />
						</div>
					</fieldset>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_rpp') ?>">Number of Tweets</label></th>
				<td><input name="<?= $this->get_field_name('TW_rpp') ?>" type="text" id="<?= $this->get_field_id('TW_rpp') ?>" value="<?= $instance['TW_rpp'] ?>" class="small-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_ShellBackground') ?>">Shell background</label></th>
				<td>
					<input maxlength="7" name="<?= $this->get_field_name('TW_ShellBackground') ?>" type="text" id="<?= $this->get_field_id('TW_ShellBackground') ?>" value="<?= $instance['TW_ShellBackground'] ?>" style="float: left; width: 70px;" class="small-text" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_ShellText') ?>">Shell text</label></th>
				<td>
					<input maxlength="7" name="<?= $this->get_field_name('TW_ShellText') ?>" type="text" id="<?= $this->get_field_id('TW_ShellText') ?>" value="<?= $instance['TW_ShellText'] ?>" style="float: left; width: 70px;" class="small-text" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_TweetBackground') ?>">Tweet background</label></th>
				<td>
					<input maxlength="7" name="<?= $this->get_field_name('TW_TweetBackground') ?>" type="text" id="<?= $this->get_field_id('TW_TweetBackground') ?>" value="<?= $instance['TW_TweetBackground'] ?>" style="float: left; width: 70px;" class="small-text" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_TweetText') ?>">Tweet text</label></th>
				<td>
					<input maxlength="7" name="<?= $this->get_field_name('TW_TweetText') ?>" type="text" id="<?= $this->get_field_id('TW_TweetText') ?>" value="<?= $instance['TW_TweetText'] ?>" style="float: left; width: 70px;" class="small-text" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="<?= $this->get_field_id('TW_Links') ?>">Links</label></th>
				<td>
					<input maxlength="7" name="<?= $this->get_field_name('TW_Links') ?>" type="text" id="<?= $this->get_field_id('TW_Links') ?>" value="<?= $instance['TW_Links'] ?>" style="float: left; width: 70px;" class="small-text" />
				</td>
			</tr>	
		</table>
		<?
	}

}

// END Twitter Widget
function fblb_register_widgets()
{
	register_widget('SocialSliderWidget');
	register_widget('SocialSliderTwWidget');
}

add_action('widgets_init', 'fblb_register_widgets');

if (!is_admin())
{
	wp_enqueue_style(
			'fblb-css', plugins_url('/fblb.css', __FILE__)
	);
	wp_enqueue_script(
			'fblb-js', plugins_url('/js/userscripts.js', __FILE__), array('jquery')
	);
	wp_enqueue_style(
			'fblb-css-ie7', plugins_url('/ie7.css', __FILE__)
	);
	global $wp_styles;
	$wp_styles->add_data('fblb-css-ie7', 'conditional', 'lte IE 7');
	add_action('wp_footer', 'fblb_slider');
}

function fblb_install_db()
{
	global $wpdb;
	$table_name = $wpdb->prefix . "arscodess_gp";
	$sql = "CREATE TABLE IF NOT EXISTS " . $table_name . "  (
	  `id` varchar(255) NOT NULL,
	  `datetime` datetime NOT NULL,
	  `desc` text NOT NULL,
	  `plus` int(11) NOT NULL,
	   UNIQUE KEY `id` (`id`)
	  )  DEFAULT CHARSET=utf8;";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}

register_activation_hook(__FILE__, 'fblb_install_db');

function fblb_getgpfeed()
{
	global $wpdb;
	$options = fblb_get_options();
	$GPlusID=$options['GP_PageID'];
	$UserAgentList[] = "Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 8.01";
	$UserAgentList[] = "Mozilla/5.0 (compatible; Konqueror/3.3; Linux) (KHTML, like Gecko)";
	$UserAgentList[] = "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2";
	$UserAgentList[] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.9.2.25) Gecko/20111212 Firefox/3.6.25";
	$UserAgentList[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/534.52.7 (KHTML, like Gecko) Version/5.1.2 Safari/534.52.7";
	$UserAgentList[] = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; Win64; x64; SV1; .NET CLR 2.0.50727)";
	$UserAgentList[] = "Mozilla/5.0 (Windows NT 6.1; rv:8.0.1) Gecko/20100101 Firefox/8.0.1";
	$UserAgentList[] = "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/16.0.912.63 Safari/535.7";
	$Url = 'https://plus.google.com/_/stream/getactivities/' . $GPlusID . '/?sp=[1,2,"' . $GPlusID . '",null,null,null,null,"social.google.com",[]]';
	$hcurl = curl_init();
	curl_setopt($hcurl, CURLOPT_URL, $Url);
	curl_setopt($hcurl, CURLOPT_USERAGENT, $UserAgentList[array_rand($UserAgentList)]);
	curl_setopt($hcurl, CURLOPT_TIMEOUT, 60);
	curl_setopt($hcurl, CURLOPT_CONNECTTIMEOUT, 1);
	curl_setopt($hcurl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($hcurl, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($hcurl);
	curl_close($hcurl);
	$result = substr($result, 5);
	$result = str_replace('[,', '[null,', $result);
	$result = str_replace(',]', ',null]', $result);
	$result = str_replace(',,', ',null,', $result);
	$result = str_replace(',,', ',null,', $result);
	echo '<pre>';
	$Aresult = json_decode($result);
	$Aposts = $Aresult[0][1][0];
	foreach ((array)$Aposts as $v)
	{
		$wpdb->query("INSERT IGNORE INTO `".$wpdb->prefix."arscodess_gp` SET 
		`id`='".addslashes($v[21])."',
		`datetime`='".addslashes(date('Y-m-d H:i:s', $v[5] / 1000))."',
		`desc`='".addslashes($v[4])."',
		`plus`='".addslashes($v[73][16])."'
		");
	}
	
	echo 'DONE';
}
function fblb_truncate($text, $length = 100, $ending = '...', $exact = true, $considerHtml = false)
{
	if ($considerHtml)
	{
		// if the plain text is shorter than the maximum length, return the whole text
		if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length)
		{return $text;}
		// splits all html-tags to scanable lines
		preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);
		$total_length = strlen($ending);
		$open_tags = array();
		$truncate = '';
		foreach ($lines as $line_matchings)
		{
			// if there is any html-tag in this line, handle it and add it (uncounted) to the output
			if (! empty($line_matchings[1]))
			{
				// if it's an "empty element" with or without xhtml-conform closing slash (f.e. <br/>)
				if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1]))
				{
					// do nothing
				// if tag is a closing tag (f.e. </b>)
				}
				else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings))
				{
					// delete tag from $open_tags list
					$pos = array_search($tag_matchings[1], $open_tags);
					if ($pos !== false)
					{
						unset($open_tags[$pos]);
					}
					// if tag is an opening tag (f.e. <b>)
				}
				else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings))
				{
					// add tag to the beginning of $open_tags list
					array_unshift($open_tags, strtolower($tag_matchings[1]));
				}
				// add html-tag to $truncate'd text
				$truncate .= $line_matchings[1];
			}
			// calculate the length of the plain text part of the line; handle entities as one character
			$content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
			if ($total_length + $content_length > $length)
			{
				// the number of characters which are left
				$left = $length - $total_length;
				$entities_length = 0;
				// search for html entities
				if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE))
				{
					// calculate the real length of all entities in the legal range
					foreach ($entities[0] as $entity)
					{
						if ($entity[1] + 1 - $entities_length <= $left)
						{
							$left --;
							$entities_length += strlen($entity[0]);
						}
						else
						{
							// no more characters left
							break;
						}
					}
				}
				$truncate .= substr($line_matchings[2], 0, $left + $entities_length);
				// maximum lenght is reached, so get off the loop
				break;
			}
			else
			{
				$truncate .= $line_matchings[2];
				$total_length += $content_length;
			}
			// if the maximum length is reached, get off the loop
			if ($total_length >= $length)
			{
				break;
			}
		}
	}
	else
	{
		if (strlen($text) <= $length)
		{
			return $text;
		}
		else
		{
			$truncate = substr($text, 0, $length - strlen($ending));
		}
	}
	// if the words shouldn't be cut in the middle...
	if (! $exact)
	{
		// ...search the last occurance of a space...
		$spacepos = strrpos($truncate, ' ');
		if (isset($spacepos))
		{
			// ...and cut the text in this position
			$truncate = substr($truncate, 0, $spacepos);
		}
	}
	// add the defined ending to the text
	$truncate .= $ending;
	if ($considerHtml)
	{
		// close all unclosed html-tags
		foreach ($open_tags as $tag)
		{
			$truncate .= '</' . $tag . '>';
		}
	}
	return $truncate;
}
?>