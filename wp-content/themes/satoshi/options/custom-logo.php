<?php
	$option_fields[] = $logo_image = THEME_PREFIX . "logo_image";
	$option_fields[] = $logo_image_enabled = THEME_PREFIX . "logo_image_enabled";
	$option_fields[] = $logo_text = THEME_PREFIX . "logo_text";
	
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/satoshi/js/ajaxupload.3.5.js" ></script>
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#logo-upload-status');
		new AjaxUpload(btnUpload, {
			action: '../wp-content/themes/satoshi/upload-file.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status.text('Uploading...');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				if(response==="success"){
					$('<li></li>').appendTo('#files').html('<img src="../wp-content/themes/satoshi/images/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#<?php echo $logo_image; ?>').val(file);
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>

<div class="postbox">
    <h3>Logo Customization Options</h3>
    
    <div class="postbox-content">
    
    	<div class="option-row">
    		<p>Choose how you would like to display your logo.</p>
    	</div><!--end option-row-->
    
    	<div class="option-row">    	
    		<div class="option-name">
    			<label>Use Image For Logo</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="checkbox" id="<?php echo $logo_image_enabled; ?>" type="checkbox" name="<?php echo $logo_image_enabled; ?>" value="true"<?php checked(TRUE, (bool) get_option($logo_image_enabled)); ?> />
    		</div><!--end option-value-->   	
    	</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">    			   		    		
    			<label>Upload An Image</label>
    			<span id="logo-upload-status"></span>
    		</div><!--end option-name-->    
    		<div class="option-value">
    			<input class="logo-name" id="<?php echo $logo_image; ?>" type="text" name="<?php echo $logo_image; ?>" value="<?php echo get_option($logo_image); ?>" />
    			<input type="button" class="background_pattern_button" id="upload" value="Choose Logo" />
    			
    		</div><!--end option-value-->	
		</div><!--end option-row-->
		
		<div class="option-row">    	
    		<div class="option-name">
    			<label>Logo Text</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="input-box" id="<?php echo $logo_text; ?>" type="text" name="<?php echo $logo_text; ?>" value="<?php echo get_option($logo_text) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->

		<input type="submit" class="button" value="Save Changes" />
    
    </div>

</div><!--end postbox-->