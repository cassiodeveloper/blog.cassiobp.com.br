<?php
$GP_Languages['ar'] = 'Arabic - العربية';
$GP_Languages['bg'] = 'Bulgarian - български';
$GP_Languages['ca'] = 'Catalan - català';
$GP_Languages['zh-CN'] = 'Chinese (Simplified)';
$GP_Languages['zh-TW'] = 'Chinese (Traditional)';
$GP_Languages['hr'] = 'Croatian - hrvatski';
$GP_Languages['cs'] = 'Czech - čeština';
$GP_Languages['da'] = 'Danish - dansk';
$GP_Languages['nl'] = 'Dutch - Nederlands';
$GP_Languages['en-US'] = 'English (US) - English (US)';
$GP_Languages['en-GB'] = 'English (UK) - English (UK)';
$GP_Languages['et'] = 'Estonian - eesti';
$GP_Languages['fil'] = 'Filipino - Filipino';
$GP_Languages['fi'] = 'Finnish - suomi';
$GP_Languages['fr'] = 'French - français';
$GP_Languages['de'] = 'German - Deutsch';
$GP_Languages['el'] = 'Greek - Ελληνικά';
$GP_Languages['iw'] = 'Hebrew - עברית';
$GP_Languages['hi'] = 'Hindi';
$GP_Languages['hu'] = 'Hungarian - magyar';
$GP_Languages['id'] = 'Indonesian - Bahasa Indonesia';
$GP_Languages['it'] = 'Italian - italiano';
$GP_Languages['ja'] = 'Japanese';
$GP_Languages['ko'] = 'Korean';
$GP_Languages['lv'] = 'Latvian - latviešu';
$GP_Languages['lt'] = 'Lithuanian - lietuvių';
$GP_Languages['ms'] = 'Malay - Bahasa Melayu';
$GP_Languages['no'] = 'Norwegian - norsk';
$GP_Languages['fa'] = 'Persian - فارسی';
$GP_Languages['pl'] = 'Polish - polski';
$GP_Languages['pt-BR'] = 'Portuguese (Brazil) - português (Brasil)';
$GP_Languages['pt-PT'] = 'Portuguese (Portugal) - Português (Portugal)';
$GP_Languages['ro'] = 'Romanian - română';
$GP_Languages['ru'] = 'Russian - русский';
$GP_Languages['sr'] = 'Serbian - српски';
$GP_Languages['sv'] = 'Swedish - svenska';
$GP_Languages['sk'] = 'Slovak - slovenský';
$GP_Languages['sl'] = 'Slovenian - slovenščina';
$GP_Languages['es'] = 'Spanish - español';
$GP_Languages['es-419'] = 'Spanish (Latin America) - español (Latinoamérica y el Caribe)';
$GP_Languages['th'] = 'Thai';
$GP_Languages['tr'] = 'Turkish - Türkçe';
$GP_Languages['uk'] = 'Ukrainian - українська';
$GP_Languages['vi'] = 'Vietnamese - Tiếng Việt';
$Locale['af_ZA'] = 'Afrikaans';
$Locale['ar_AR'] = 'Arabic';
$Locale['az_AZ'] = 'Azeri';
$Locale['be_BY'] = 'Belarusian';
$Locale['bg_BG'] = 'Bulgarian';
$Locale['bn_IN'] = 'Bengali';
$Locale['bs_BA'] = 'Bosnian';
$Locale['ca_ES'] = 'Catalan';
$Locale['cs_CZ'] = 'Czech';
$Locale['cy_GB'] = 'Welsh';
$Locale['da_DK'] = 'Danish';
$Locale['de_DE'] = 'German';
$Locale['el_GR'] = 'Greek';
$Locale['en_GB'] = 'English (UK)';
$Locale['en_PI'] = 'English (Pirate)';
$Locale['en_UD'] = 'English (Upside Down)';
$Locale['en_US'] = 'English (US)';
$Locale['eo_EO'] = 'Esperanto';
$Locale['es_ES'] = 'Spanish (Spain)';
$Locale['es_LA'] = 'Spanish';
$Locale['et_EE'] = 'Estonian';
$Locale['eu_ES'] = 'Basque';
$Locale['fa_IR'] = 'Persian';
$Locale['fb_LT'] = 'Leet Speak';
$Locale['fi_FI'] = 'Finnish';
$Locale['fo_FO'] = 'Faroese';
$Locale['fr_CA'] = 'French (Canada)';
$Locale['fr_FR'] = 'French (France)';
$Locale['fy_NL'] = 'Frisian';
$Locale['ga_IE'] = 'Irish';
$Locale['gl_ES'] = 'Galician';
$Locale['he_IL'] = 'Hebrew';
$Locale['hi_IN'] = 'Hindi';
$Locale['hr_HR'] = 'Croatian';
$Locale['hu_HU'] = 'Hungarian';
$Locale['hy_AM'] = 'Armenian';
$Locale['id_ID'] = 'Indonesian';
$Locale['is_IS'] = 'Icelandic';
$Locale['it_IT'] = 'Italian';
$Locale['ja_JP'] = 'Japanese';
$Locale['ka_GE'] = 'Georgian';
$Locale['ko_KR'] = 'Korean';
$Locale['ku_TR'] = 'Kurdish';
$Locale['la_VA'] = 'Latin';
$Locale['lt_LT'] = 'Lithuanian';
$Locale['lv_LV'] = 'Latvian';
$Locale['mk_MK'] = 'Macedonian';
$Locale['ml_IN'] = 'Malayalam';
$Locale['ms_MY'] = 'Malay';
$Locale['nb_NO'] = 'Norwegian (bokmal)';
$Locale['ne_NP'] = 'Nepali';
$Locale['nl_NL'] = 'Dutch';
$Locale['nn_NO'] = 'Norwegian (nynorsk)';
$Locale['pa_IN'] = 'Punjabi';
$Locale['pl_PL'] = 'Polish';
$Locale['ps_AF'] = 'Pashto';
$Locale['pt_BR'] = 'Portuguese (Brazil)';
$Locale['pt_PT'] = 'Portuguese (Portugal)';
$Locale['ro_RO'] = 'Romanian';
$Locale['ru_RU'] = 'Russian';
$Locale['sk_SK'] = 'Slovak';
$Locale['sl_SI'] = 'Slovenian';
$Locale['sq_AL'] = 'Albanian';
$Locale['sr_RS'] = 'Serbian';
$Locale['sv_SE'] = 'Swedish';
$Locale['sw_KE'] = 'Swahili';
$Locale['ta_IN'] = 'Tamil';
$Locale['te_IN'] = 'Telugu';
$Locale['th_TH'] = 'Thai';
$Locale['tl_PH'] = 'Filipino';
$Locale['tr_TR'] = 'Turkish';
$Locale['uk_UA'] = 'Ukrainian';
$Locale['vi_VN'] = 'Vietnamese';
$Locale['zh_CN'] = 'Simplified Chinese (China)';
$Locale['zh_HK'] = 'Traditional Chinese (Hong Kong)';
$Locale['zh_TW'] = 'Traditional Chinese (Taiwan)';
if ($_POST)
{
	// Facebook
	if (isset($_POST['Enable']))
	{
		$options['Enable'] = $_POST['Enable'];
	}
	if (isset($_POST['FacebookPageURL']))
	{
		$options['FacebookPageURL'] = $_POST['FacebookPageURL'];
	}
	if (isset($_POST['Width']) && intval($_POST['Width']))
	{
		$options['Width'] = $_POST['Width'];
	}
	if (isset($_POST['Height']) && intval($_POST['Height']))
	{
		$options['Height'] = $_POST['Height'];
	}
	if (isset($_POST['ShowFaces']))
	{
		$options['ShowFaces'] = $_POST['ShowFaces'];
	}
	if (isset($_POST['ShowStream']))
	{
		$options['ShowStream'] = $_POST['ShowStream'];
	}
	if (isset($_POST['ShowHeader']))
	{
		$options['ShowHeader'] = $_POST['ShowHeader'];
	}
	if (isset($_POST['Position']))
	{
		$options['Position'] = $_POST['Position'];
	}
	if (isset($_POST['TabPosition']))
	{
		$options['TabPosition'] = $_POST['TabPosition'];
	}
	if (isset($_POST['TabDesign']))
	{
		$options['TabDesign'] = $_POST['TabDesign'];
	}
	if (isset($_POST['Border']) && intval($_POST['Border']))
	{
		$options['Border'] = $_POST['Border'];
	}
	if (isset($_POST['BorderColor']))
	{
		$options['BorderColor'] = $_POST['BorderColor'];
	}
	if (isset($_POST['BackgroundColor']))
	{
		$options['BackgroundColor'] = $_POST['BackgroundColor'];
	}
	if (isset($_POST['Locale']))
	{
		$options['Locale'] = $_POST['Locale'];
	}
	if (isset($_POST['ColorScheme']))
	{
		$options['ColorScheme'] = $_POST['ColorScheme'];
	}
	if (isset($_POST['VPosition']))
	{
		$options['VPosition'] = $_POST['VPosition'];
	}
	if (isset($_POST['VPositionPx']) && intval($_POST['VPositionPx']))
	{
		$options['VPositionPx'] = $_POST['VPositionPx'];
	}
	if (isset($_POST['ZIndex']) && intval($_POST['ZIndex']))
	{
		$options['ZIndex'] = $_POST['ZIndex'];
	}
	// Twitter
	if (isset($_POST['TW_Enable']))
	{
		$options['TW_Enable'] = $_POST['TW_Enable'];
	}
	if (isset($_POST['TW_Username']))
	{
		$options['TW_Username'] = $_POST['TW_Username'];
	}
	if (isset($_POST['TW_Width']) && intval($_POST['TW_Width']))
	{
		$options['TW_Width'] = $_POST['TW_Width'];
	}
	if (isset($_POST['TW_Height']) && intval($_POST['TW_Height']))
	{
		$options['TW_Height'] = $_POST['TW_Height'];
	}
	if (isset($_POST['TW_Position']))
	{
		$options['TW_Position'] = $_POST['TW_Position'];
	}
	if (isset($_POST['TW_TabPosition']))
	{
		$options['TW_TabPosition'] = $_POST['TW_TabPosition'];
	}
	if (isset($_POST['TW_TabDesign']))
	{
		$options['TW_TabDesign'] = $_POST['TW_TabDesign'];
	}
	if (isset($_POST['TW_Border']) && intval($_POST['TW_Border']))
	{
		$options['TW_Border'] = $_POST['TW_Border'];
	}
	if (isset($_POST['BorderColor']))
	{
		$options['TW_BorderColor'] = $_POST['TW_BorderColor'];
	}
	if (isset($_POST['TW_ShellBackground']))
	{
		$options['TW_ShellBackground'] = $_POST['TW_ShellBackground'];
	}
	if (isset($_POST['TW_ShellText']))
	{
		$options['TW_ShellText'] = $_POST['TW_ShellText'];
	}
	if (isset($_POST['TW_TweetBackground']))
	{
		$options['TW_TweetBackground'] = $_POST['TW_TweetBackground'];
	}
	if (isset($_POST['TW_TweetText']))
	{
		$options['TW_TweetText'] = $_POST['TW_TweetText'];
	}
	if (isset($_POST['TW_Links']))
	{
		$options['TW_Links'] = $_POST['TW_Links'];
	}
	if (isset($_POST['TW_VPosition']))
	{
		$options['TW_VPosition'] = $_POST['TW_VPosition'];
	}
	if (isset($_POST['TW_VPositionPx']) && intval($_POST['TW_VPositionPx']))
	{
		$options['TW_VPositionPx'] = $_POST['TW_VPositionPx'];
	}
	if (isset($_POST['TW_ZIndex']) && intval($_POST['TW_ZIndex']))
	{
		$options['TW_ZIndex'] = $_POST['TW_ZIndex'];
	}
	if (isset($_POST['TW_live']))
	{
		$options['TW_live'] = $_POST['TW_live'];
	}
	if (isset($_POST['TW_behavior']))
	{
		$options['TW_behavior'] = $_POST['TW_behavior'];
	}
	if (isset($_POST['TW_loop']))
	{
		$options['TW_loop'] = $_POST['TW_loop'];
	}
	if (isset($_POST['TW_interval']) && intval($_POST['TW_interval']))
	{
		$options['TW_interval'] = $_POST['TW_interval'];
	}
	if (isset($_POST['TW_rpp']) && intval($_POST['TW_rpp']))
	{
		$options['TW_rpp'] = $_POST['TW_rpp'];
	}
	// Google Plus
	if (isset($_POST['GP_Enable']))
	{
		$options['GP_Enable'] = $_POST['GP_Enable'];
	}
	if (isset($_POST['GP_PageID']))
	{
		$options['GP_PageID'] = $_POST['GP_PageID'];
	}
	if (isset($_POST['GP_ShowFeed']))
	{
		$options['GP_ShowFeed'] = $_POST['GP_ShowFeed'];
	}
	if (isset($_POST['GP_Width']) && intval($_POST['GP_Width']))
	{
		$options['GP_Width'] = $_POST['GP_Width'];
	}
	if (isset($_POST['GP_Height']) && intval($_POST['GP_Height']))
	{
		$options['GP_Height'] = $_POST['GP_Height'];
	}
	if (isset($_POST['GP_Position']))
	{
		$options['GP_Position'] = $_POST['GP_Position'];
	}
	if (isset($_POST['GP_TabPosition']))
	{
		$options['GP_TabPosition'] = $_POST['GP_TabPosition'];
	}
	if (isset($_POST['GP_TabDesign']))
	{
		$options['GP_TabDesign'] = $_POST['GP_TabDesign'];
	}
	if (isset($_POST['GP_Border']) && intval($_POST['GP_Border']))
	{
		$options['GP_Border'] = $_POST['GP_Border'];
	}
	if (isset($_POST['BorderColor']))
	{
		$options['GP_BorderColor'] = $_POST['GP_BorderColor'];
	}
	if (isset($_POST['GP_BackgroundColor']))
	{
		$options['GP_BackgroundColor'] = $_POST['GP_BackgroundColor'];
	}

	if (isset($_POST['GP_VPosition']))
	{
		$options['GP_VPosition'] = $_POST['GP_VPosition'];
	}
	if (isset($_POST['GP_VPositionPx']) && intval($_POST['GP_VPositionPx']))
	{
		$options['GP_VPositionPx'] = $_POST['GP_VPositionPx'];
	}
	if (isset($_POST['GP_ZIndex']) && intval($_POST['GP_ZIndex']))
	{
		$options['GP_ZIndex'] = $_POST['GP_ZIndex'];
	}
	if (isset($_POST['GP_Language']))
	{
		$options['GP_Language'] = $_POST['GP_Language'];
	}
	

	if ($_POST['submit'])
	{
		update_option('FBLB_Options', $options);
		echo '
		<div id="setting-error-settings_updated" class="updated settings-error">
			<p><strong>Settings Saved</strong></p>
		</div>';
	}
}
if ($_POST['preview'])
{
	global $fblb_preview_options;
	$fblb_preview_options = $options;
	add_action('admin_footer', 'fblb_slider');
}
else
{
	$options = fblb_get_options();
}
// Facebook
if (!$options['Position'])
{
	$options['Position'] = 'Left';
}
if (!$options['TabPosition'])
{
	$options['TabPosition'] = 'Top';
}
if (!$options['TabDesign'])
{
	$options['TabDesign'] = 7;
}
if (!$options['Width'])
{
	$options['Width'] = 300;
}
if (!$options['Height'])
{
	$options['Height'] = 450;
}
if (!$options['Border'])
{
	$options['Border'] = 5;
}
if (!$options['BorderColor'])
{
	$options['BorderColor'] = '#3b5998';
}
if (!$options['BackgroundColor'])
{
	$options['BackgroundColor'] = '#ffffff';
}
if (!$options['Locale'])
{
	$options['Locale'] = 'en_US';
}
if (!$options['ColorScheme'])
{
	$options['ColorScheme'] = 'light';
}
if (!$options['VPosition'])
{
	$options['VPosition'] = 'Middle';
}
if (!$options['ZIndex'])
{
	$options['ZIndex'] = 1000;
}
// Twitter
if (!$options['TW_Position'])
{
	$options['TW_Position'] = 'Left';
}
if (!$options['TW_TabPosition'])
{
	$options['TW_TabPosition'] = 'Middle';
}
if (!$options['TW_TabDesign'])
{
	$options['TW_TabDesign'] = 7;
}
if (!$options['TW_Width'])
{
	$options['TW_Width'] = 300;
}
if (!$options['TW_Height'])
{
	$options['TW_Height'] = 450;
}
if (!$options['TW_Border'])
{
	$options['TW_Border'] = 5;
}
if (!$options['TW_BorderColor'])
{
	$options['TW_BorderColor'] = '#33ccff';
}
if (!$options['TW_ShellBackground'])
{
	$options['TW_ShellBackground'] = '#33ccff';
}
if (!$options['TW_ShellText'])
{
	$options['TW_ShellText'] = '#ffffff';
}
if (!$options['TW_TweetBackground'])
{
	$options['TW_TweetBackground'] = '#ffffff';
}
if (!$options['TW_TweetText'])
{
	$options['TW_TweetText'] = '#000000';
}
if (!$options['TW_Links'])
{
	$options['TW_Links'] = '#47a61e';
}
if (!$options['TW_VPosition'])
{
	$options['TW_VPosition'] = 'Middle';
}
if (!$options['TW_ZIndex'])
{
	$options['TW_ZIndex'] = 1000;
}
if (!$options['TW_behavior'])
{
	$options['TW_behavior'] = 'all';
}
if (!$options['TW_interval'])
{
	$options['TW_interval'] = 30;
}
if (!$options['TW_rpp'])
{
	$options['TW_rpp'] = 4;
}
// Google Plus
if (!$options['GP_Position'])
{
	$options['GP_Position'] = 'Left';
}
if (!$options['GP_TabPosition'])
{
	$options['GP_TabPosition'] = 'Bottom';
}
if (!$options['GP_TabDesign'])
{
	$options['GP_TabDesign'] = 7;
}
if (!$options['GP_Width'])
{
	$options['GP_Width'] = 300;
}
if (!$options['GP_Height'])
{
	$options['GP_Height'] = 450;
}
if (!$options['GP_Border'])
{
	$options['GP_Border'] = 5;
}
if (!$options['GP_BorderColor'])
{
	$options['GP_BorderColor'] = '#000000';
}
if (!$options['GP_BackgroundColor'])
{
	$options['GP_BackgroundColor'] = '#000000';
}
if (!$options['GP_VPosition'])
{
	$options['GP_VPosition'] = 'Middle';
}
if (!$options['GP_ZIndex'])
{
	$options['GP_ZIndex'] = 1000;
}
if (!$options['GP_Language'])
{
	$options['GP_Language'] = 'en-US';
}

?>
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></div>
	<h2>Social Slider</h2>
	<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
		<h3>Facebook Likebox</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">Enable</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Enable</span></legend>
							<label for="Enable">
								<input name="Enable" <?= ($options['Enable'] ? 'checked' : '' ) ?> type="checkbox" id="Enable" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="FacebookPageURL">Facebook Page URL</label></th>
					<td><input name="FacebookPageURL" type="text" id="FacebookPageURL" value="<?= $options['FacebookPageURL'] ?>" class="regular-text" /></td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="Width">Width</label></th>
					<td><input name="Width" type="text" id="Width" value="<?= $options['Width'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="Height">Height</label></th>
					<td><input name="Height" type="text" id="Height" value="<?= $options['Height'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row">Show faces</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Show faces</span></legend>
							<label for="ShowFaces">
								<input name="ShowFaces" <?= ($options['ShowFaces'] ? 'checked' : '' ) ?> type="checkbox" id="ShowFaces" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Show stream</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Show stream</span></legend>
							<label for="ShowStream">
								<input name="ShowStream" <?= ($options['ShowStream'] ? 'checked' : '' ) ?> type="checkbox" id="ShowStream" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Show header</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Show header</span></legend>
							<label for="ShowHeader">
								<input name="ShowHeader" <?= ($options['ShowHeader'] ? 'checked' : '' ) ?> type="checkbox" id="ShowHeader" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Position</th>
					<td> 
						<fieldset>
							<label for="PositionLeft">
								<input name="Position" <?= ($options['Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="PositionLeft" value="Left" />
								left
							</label>
							<label for="PositionRight">
								<input name="Position" <?= ($options['Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="PositionRight" value="Right" />
								right
							</label>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Vertical position</th>
					<td> 
						<fieldset>
							<label for="VPositionMiddle">
								<input name="VPosition" <?= ($options['VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="VPositionMiddle" value="Middle" />
								middle
							</label>
							<label for="VPositionFixed">
								<input name="VPosition" <?= ($options['VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="VPositionFixed" value="Fixed" />
								fixed: 
							</label>
							<input name="VPositionPx" type="text" id="VPositionPx" value="<?= $options['VPositionPx'] ?>" class="small-text" /> px from top
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Button position</th>
					<td> 
						<fieldset>
							<label for="TabPositionTop">
								<input name="TabPosition" <?= ($options['TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="TabPositionTop" value="Top" />
								top
							</label>
							<label for="TabPositionMiddle">
								<input name="TabPosition" <?= ($options['TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="TabPositionMiddle" value="Middle" />
								middle
							</label>
							<label for="TabPositionBottom">
								<input name="TabPosition" <?= ($options['TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="TabPositionBottom" value="Bottom" />
								bottom
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Button design</th>
					<td> 
						<fieldset>
							<label for="TabDesign1">
								<input name="TabDesign" <?= ($options['TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="TabDesign1" value="1" />
								<img src="<? echo plugins_url('/img/fb1-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign2">
								<input name="TabDesign" <?= ($options['TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="TabDesign2" value="2" />
								<img src="<? echo plugins_url('/img/fb2-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign3">
								<input name="TabDesign" <?= ($options['TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="TabDesign3" value="3" />
								<img src="<? echo plugins_url('/img/fb3-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign4">
								<input name="TabDesign" <?= ($options['TabDesign'] == 4 ? 'checked' : '' ) ?> type="radio" id="TabDesign4" value="4" />
								<img src="<? echo plugins_url('/img/fb4-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign5">
								<input name="TabDesign" <?= ($options['TabDesign'] == 5 ? 'checked' : '' ) ?> type="radio" id="TabDesign5" value="5" />
								<img src="<? echo plugins_url('/img/fb5-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign6">
								<input name="TabDesign" <?= ($options['TabDesign'] == 6 ? 'checked' : '' ) ?> type="radio" id="TabDesign6" value="6" />
								<img src="<? echo plugins_url('/img/fb6-left.png', __FILE__) ?>" />
							</label>

							<label for="TabDesign7">
								<input name="TabDesign" <?= ($options['TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="TabDesign7" value="7" />
								<img src="<? echo plugins_url('/img/fb7-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign8">
								<input name="TabDesign" <?= ($options['TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="TabDesign8" value="8" />
								<img src="<? echo plugins_url('/img/fb8-left.png', __FILE__) ?>" />
							</label>
							<label for="TabDesign9">
								<input name="TabDesign" <?= ($options['TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="TabDesign9" value="9" />
								<img src="<? echo plugins_url('/img/fb9-left.png', __FILE__) ?>" />
							</label>

						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="Border">Border width</label></th>
					<td><input name="Border" type="text" id="Border" value="<?= $options['Border'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="BorderColor">Border color</label></th>
					<td>
						<input maxlength="7" name="BorderColor" type="text" id="BorderColor" value="<?= $options['BorderColor'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #3b5998)
						<div id="BorderColorPreview" style="background-color: <?= $options['BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="BackgroundColor">Background color</label></th>
					<td>
						<input maxlength="7" name="BackgroundColor" type="text" id="BackgroundColor" value="<?= $options['BackgroundColor'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #ffffff for light color scheme, #333333 for dark color scheme)
						<div id="BackgroundColorPreview" style="background-color: <?= $options['BackgroundColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Color Scheme</th>
					<td> 
						<fieldset>
							<label for="ColorSchemelight">
								<input name="ColorScheme" <?= ($options['ColorScheme'] == 'light' ? 'checked' : '' ) ?> type="radio" id="ColorSchemelight" value="light" />
								light
							</label>
							<label for="ColorSchemedark">
								<input name="ColorScheme" <?= ($options['ColorScheme'] == 'dark' ? 'checked' : '' ) ?> type="radio" id="ColorSchemedark" value="dark" />
								dark
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="ZIndex">CSS z-index</label></th>
					<td><input name="ZIndex" type="text" id="ZIndex" value="<?= $options['ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="Locale">Locale</label></th>
					<td>
						<select name="Locale" id="Locale">
<?
foreach ($Locale as $k => $v)
{
	echo '<option ' . ($options['Locale'] == $k ? 'selected' : '') . ' value="' . $k . '">' . $v . '</option>';
}
?>
						</select>
					</td>
				</tr>
			</tbody>
		</table>


		<h3>Twitter</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">Enable</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Enable</span></legend>
							<label for="TW_Enable">
								<input name="TW_Enable" <?= ($options['TW_Enable'] ? 'checked' : '' ) ?> type="checkbox" id="TW_Enable" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_Username">Username</label></th>
					<td><input name="TW_Username" type="text" id="TW_Username" value="<?= $options['TW_Username'] ?>" class="regular-text" /></td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="TW_Width">Width</label></th>
					<td><input name="TW_Width" type="text" id="TW_Width" value="<?= $options['TW_Width'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_Height">Height</label></th>
					<td><input name="TW_Height" type="text" id="TW_Height" value="<?= $options['TW_Height'] ?>" class="small-text" /> px</td>
				</tr>

				<tr valign="top">
					<th scope="row">Poll for new results</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Poll for new results</span></legend>
							<label for="TW_live">
								<input name="TW_live" <?= ($options['TW_live'] ? 'checked' : '' ) ?> type="checkbox" id="TW_live" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
<? /*
  <tr valign="top">
  <th scope="row">Include scrollbar</th>
  <td>
  <fieldset>
  <legend class="screen-reader-text"><span>Include scrollbar</span></legend>
  <label for="TW_scrollbar">
  <input name="TW_scrollbar" <?= ($options['TW_scrollbar'] ? 'checked' : '' ) ?> type="checkbox" id="TW_scrollbar" value="1" />
  </label>
  </fieldset>
  </td>
  </tr>
 */ ?>
				<tr valign="top">
					<th scope="row">Behavior</th>
					<td> 
						<fieldset>
							<label for="TW_behaviordefaultall">
								<input name="TW_behavior" <?= ($options['TW_behavior'] == 'all' ? 'checked' : '' ) ?> type="radio" id="TW_behaviordefaultall" value="all" />
								Load all tweets
							</label>
							<br />
							<label for="TW_behaviordefault">
								<input name="TW_behavior" <?= ($options['TW_behavior'] == 'default' ? 'checked' : '' ) ?> type="radio" id="TW_behaviordefault" value="default" />
								Timed Interval:
							</label>
							<div style="margin-left: 80px;">
							Tweet Interval <input name="TW_interval" type="text" id="TW_interval" value="<?= $options['TW_interval'] ?>" class="small-text" />
								<br />
							Loop results <input name="TW_loop" <?= ($options['TW_loop'] ? 'checked' : '' ) ?> type="checkbox" id="TW_loop" value="1" />
							</div>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_rpp">Number of Tweets</label></th>
					<td><input name="TW_rpp" type="text" id="TW_rpp" value="<?= $options['TW_rpp'] ?>" class="small-text" /></td>
				</tr>

				<tr valign="top">
					<th scope="row">Position</th>
					<td> 
						<fieldset>
							<label for="TW_PositionLeft">
								<input name="TW_Position" <?= ($options['TW_Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="TW_PositionLeft" value="Left" />
								left
							</label>
							<label for="TW_PositionRight">
								<input name="TW_Position" <?= ($options['TW_Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="TW_PositionRight" value="Right" />
								right
							</label>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Vertical position</th>
					<td> 
						<fieldset>
							<label for="TW_VPositionMiddle">
								<input name="TW_VPosition" <?= ($options['TW_VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="TW_VPositionMiddle" value="Middle" />
								middle
							</label>
							<label for="TW_VPositionFixed">
								<input name="TW_VPosition" <?= ($options['TW_VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="TW_VPositionFixed" value="Fixed" />
								fixed: 
							</label>
							<input name="TW_VPositionPx" type="text" id="TW_VPositionPx" value="<?= $options['TW_VPositionPx'] ?>" class="small-text" /> px from top
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Button position</th>
					<td> 
						<fieldset>
							<label for="TW_TabPositionTop">
								<input name="TW_TabPosition" <?= ($options['TW_TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionTop" value="Top" />
								top
							</label>
							<label for="TW_TabPositionMiddle">
								<input name="TW_TabPosition" <?= ($options['TW_TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionMiddle" value="Middle" />
								middle
							</label>
							<label for="TW_TabPositionBottom">
								<input name="TW_TabPosition" <?= ($options['TW_TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionBottom" value="Bottom" />
								bottom
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Button design</th>
					<td> 
						<fieldset>
							<label for="TW_TabDesign1">
								<input name="TW_TabDesign" <?= ($options['TW_TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign1" value="1" />
								<img src="<? echo plugins_url('/img/tw1-left.png', __FILE__) ?>" />
							</label>
							<label for="TW_TabDesign2">
								<input name="TW_TabDesign" <?= ($options['TW_TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign2" value="2" />
								<img src="<? echo plugins_url('/img/tw2-left.png', __FILE__) ?>" />
							</label>
							<label for="TW_TabDesign3">
								<input name="TW_TabDesign" <?= ($options['TW_TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign3" value="3" />
								<img src="<? echo plugins_url('/img/tw3-left.png', __FILE__) ?>" />
							</label>

							<label for="TW_TabDesign7">
								<input name="TW_TabDesign" <?= ($options['TW_TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign7" value="7" />
								<img src="<? echo plugins_url('/img/tw7-left.png', __FILE__) ?>" />
							</label>
							<label for="TW_TabDesign8">
								<input name="TW_TabDesign" <?= ($options['TW_TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign8" value="8" />
								<img src="<? echo plugins_url('/img/tw8-left.png', __FILE__) ?>" />
							</label>
							<label for="TW_TabDesign9">
								<input name="TW_TabDesign" <?= ($options['TW_TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign9" value="9" />
								<img src="<? echo plugins_url('/img/tw9-left.png', __FILE__) ?>" />
							</label>

						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="TW_Border">Border width</label></th>
					<td><input name="TW_Border" type="text" id="TW_Border" value="<?= $options['TW_Border'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_BorderColor">Border color</label></th>
					<td>
						<input maxlength="7" name="TW_BorderColor" type="text" id="TW_BorderColor" value="<?= $options['TW_BorderColor'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #33ccff)
						<div id="TW_BorderColorPreview" style="background-color: <?= $options['TW_BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_ShellBackground">Shell background</label></th>
					<td>
						<input maxlength="7" name="TW_ShellBackground" type="text" id="TW_ShellBackground" value="<?= $options['TW_ShellBackground'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #33ccff)
						<div id="TW_ShellBackgroundPreview" style="background-color: <?= $options['TW_ShellBackground'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_ShellText">Shell text</label></th>
					<td>
						<input maxlength="7" name="TW_ShellText" type="text" id="TW_ShellText" value="<?= $options['TW_ShellText'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #ffffff)
						<div id="TW_ShellTextPreview" style="background-color: <?= $options['TW_ShellText'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_TweetBackground">Tweet background</label></th>
					<td>
						<input maxlength="7" name="TW_TweetBackground" type="text" id="TW_TweetBackground" value="<?= $options['TW_TweetBackground'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #ffffff)
						<div id="TW_TweetBackgroundPreview" style="background-color: <?= $options['TW_TweetBackground'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_TweetText">Tweet text</label></th>
					<td>
						<input maxlength="7" name="TW_TweetText" type="text" id="TW_TweetText" value="<?= $options['TW_TweetText'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #000000)
						<div id="TW_TweetTextPreview" style="background-color: <?= $options['TW_TweetText'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="TW_Links">Links</label></th>
					<td>
						<input maxlength="7" name="TW_Links" type="text" id="TW_Links" value="<?= $options['TW_Links'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #47a61e)
						<div id="TW_LinksPreview" style="background-color: <?= $options['TW_Links'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
					</td>
				</tr>		
				<tr valign="top">
					<th scope="row"><label for="TW_ZIndex">CSS z-index</label></th>
					<td><input name="TW_ZIndex" type="text" id="TW_ZIndex" value="<?= $options['TW_ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
				</tr>
			</tbody>
		</table>





		<h3>Google Plus</h3>
		<?
		echo '
		<div>
			<p><strong>You now have a cronjob setup to run:</strong>
			<a href="'.get_option('siteurl') . '/wp-content/plugins/arscode-social-slider/cron.php">'.get_option('siteurl') . '/wp-content/plugins/arscode-social-slider/cron.php</a>
			</p>
		</div>';
		?>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">Enable</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Enable</span></legend>
							<label for="GP_Enable">
								<input name="GP_Enable" <?= ($options['GP_Enable'] ? 'checked' : '' ) ?> type="checkbox" id="GP_Enable" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="GP_PageID">Google+ Page ID</label></th>
					<td>
						<input name="GP_PageID" type="text" id="GP_PageID" value="<?= $options['GP_PageID'] ?>" class="regular-text" />
						<br />
						(eg: 104629412415657030658;  https://plus.google.com/<strong>104629412415657030658</strong>/posts)
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="GP_Width">Width</label></th>
					<td><input name="GP_Width" type="text" id="GP_Width" value="<?= $options['GP_Width'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="GP_Height">Height</label></th>
					<td><input name="GP_Height" type="text" id="GP_Height" value="<?= $options['GP_Height'] ?>" class="small-text" /> px</td>
				</tr>

				<tr valign="top">
					<th scope="row">Show feed</th>
					<td> 
						<fieldset>
							<legend class="screen-reader-text"><span>Show feed</span></legend>
							<label for="GP_ShowFeed">
								<input name="GP_ShowFeed" <?= ($options['GP_ShowFeed'] ? 'checked' : '' ) ?> type="checkbox" id="GP_ShowFeed" value="1" />
							</label>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Position</th>
					<td> 
						<fieldset>
							<label for="GP_PositionLeft">
								<input name="GP_Position" <?= ($options['GP_Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="GP_PositionLeft" value="Left" />
								left
							</label>
							<label for="GP_PositionRight">
								<input name="GP_Position" <?= ($options['GP_Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="GP_PositionRight" value="Right" />
								right
							</label>
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Vertical position</th>
					<td> 
						<fieldset>
							<label for="GP_VPositionMiddle">
								<input name="GP_VPosition" <?= ($options['GP_VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="GP_VPositionMiddle" value="Middle" />
								middle
							</label>
							<label for="GP_VPositionFixed">
								<input name="GP_VPosition" <?= ($options['GP_VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="GP_VPositionFixed" value="Fixed" />
								fixed: 
							</label>
							<input name="GP_VPositionPx" type="text" id="GP_VPositionPx" value="<?= $options['GP_VPositionPx'] ?>" class="small-text" /> px from top
						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Button position</th>
					<td> 
						<fieldset>
							<label for="GP_TabPositionTop">
								<input name="GP_TabPosition" <?= ($options['GP_TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionTop" value="Top" />
								top
							</label>
							<label for="GP_TabPositionMiddle">
								<input name="GP_TabPosition" <?= ($options['GP_TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionMiddle" value="Middle" />
								middle
							</label>
							<label for="GP_TabPositionBottom">
								<input name="GP_TabPosition" <?= ($options['GP_TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionBottom" value="Bottom" />
								bottom
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">Button design</th>
					<td> 
						<fieldset>
							<label for="GP_TabDesign1">
								<input name="GP_TabDesign" <?= ($options['GP_TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign1" value="1" />
								<img src="<? echo plugins_url('/img/gp1-left.png', __FILE__) ?>" />
							</label>
							<label for="GP_TabDesign2">
								<input name="GP_TabDesign" <?= ($options['GP_TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign2" value="2" />
								<img src="<? echo plugins_url('/img/gp2-left.png', __FILE__) ?>" />
							</label>
							<label for="GP_TabDesign3">
								<input name="GP_TabDesign" <?= ($options['GP_TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign3" value="3" />
								<img src="<? echo plugins_url('/img/gp3-left.png', __FILE__) ?>" />
							</label>

							<label for="GP_TabDesign7">
								<input name="GP_TabDesign" <?= ($options['GP_TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign7" value="7" />
								<img src="<? echo plugins_url('/img/gp7-left.png', __FILE__) ?>" />
							</label>
							<label for="GP_TabDesign8">
								<input name="GP_TabDesign" <?= ($options['GP_TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign8" value="8" />
								<img src="<? echo plugins_url('/img/gp8-left.png', __FILE__) ?>" />
							</label>
							<label for="GP_TabDesign9">
								<input name="GP_TabDesign" <?= ($options['GP_TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign9" value="9" />
								<img src="<? echo plugins_url('/img/gp9-left.png', __FILE__) ?>" />
							</label>

						</fieldset>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="GP_Border">Border width</label></th>
					<td><input name="GP_Border" type="text" id="GP_Border" value="<?= $options['GP_Border'] ?>" class="small-text" /> px</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="GP_BorderColor">Border color</label></th>
					<td>
						<input maxlength="7" name="GP_BorderColor" type="text" id="GP_BorderColor" value="<?= $options['GP_BorderColor'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #000000)
						<div id="GP_BorderColorPreview" style="background-color: <?= $options['GP_BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="GP_BackgroundColor">Background color</label></th>
					<td>
						<input maxlength="7" name="GP_BackgroundColor" type="text" id="GP_BackgroundColor" value="<?= $options['GP_BackgroundColor'] ?>" style="float: left; width: 70px;" class="small-text" /> (default: #000000)
						<div id="GP_BackgroundColorPreview" style="background-color: <?= $options['GP_BackgroundColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="GP_ZIndex">CSS z-index</label></th>
					<td><input name="GP_ZIndex" type="text" id="GP_ZIndex" value="<?= $options['GP_ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="GP_Language">Language</label></th>
					<td>
						<select name="GP_Language" id="GP_Language">
<?
foreach ($GP_Languages as $k => $v)
{
	echo '<option ' . ($options['GP_Language'] == $k ? 'selected' : '') . ' value="' . $k . '">' . $v . '</option>';
}
?>
						</select>
					</td>
				</tr>
				
				
			</tbody>
		</table>




		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="Save settings" />
			<input type="submit" name="preview" id="preview" value="Preview" />
		</p>
	</form>
</div>
<script type="text/javascript">
	jQuery('#BorderColor').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#BorderColor').val('#' + hex);
			jQuery('#BorderColorPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#BackgroundColor').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#BackgroundColor').val('#' + hex);
			jQuery('#BackgroundColorPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});

	jQuery('#TW_BorderColor').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#TW_BorderColor').val('#' + hex);
			jQuery('#TW_BorderColorPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#TW_ShellBackground').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#TW_ShellBackground').val('#' + hex);
			jQuery('#TW_ShellBackgroundPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#TW_ShellText').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#TW_ShellText').val('#' + hex);
			jQuery('#TW_ShellTextPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#TW_TweetBackground').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#TW_TweetBackground').val('#' + hex);
			jQuery('#TW_TweetBackgroundPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#TW_TweetText').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#TW_TweetText').val('#' + hex);
			jQuery('#TW_TweetTextPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#TW_Links').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#TW_Links').val('#' + hex);
			jQuery('#TW_LinksPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});

	jQuery('#GP_BorderColor').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#GP_BorderColor').val('#' + hex);
			jQuery('#GP_BorderColorPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
	jQuery('#GP_BackgroundColor').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#GP_BackgroundColor').val('#' + hex);
			jQuery('#GP_BackgroundColorPreview').css('background-color', '#' + hex);
		}
	})
	.bind('keyup', function(){
		jQuery(this).ColorPickerSetColor(this.value);
	});
</script>