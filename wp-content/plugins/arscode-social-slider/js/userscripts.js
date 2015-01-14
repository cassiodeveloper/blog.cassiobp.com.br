jQuery(document).ready(function(){	
	var fblbFbOrgRight=jQuery('.fblbCenterOuterFb').css('right');
	var fblbFbOrgLeft=jQuery('.fblbCenterOuterFb').css('left');
	jQuery('.fblbRight.fblbCenterOuterFb').find('.fblbForm').hover(
		function(){
			jQuery(this).parents('.fblbCenterOuterFb').stop(true,false).animate({
				right: -3
			}, jQuery('.fblbLeft.fblbCenterOuterFb').find('.fblbForm').width());
		},
		function(){
			jQuery(this).parents('.fblbCenterOuterFb').stop(true,false).animate({
				right: fblbFbOrgRight
			}, jQuery('.fblbLeft.fblbCenterOuterFb').find('.fblbForm').width());
	});
	jQuery('.fblbLeft.fblbCenterOuterFb').find('.fblbForm').hover(
		function(){
			jQuery(this).parents('.fblbCenterOuterFb').stop(true,false).animate({
				left: -3
			}, jQuery('.fblbLeft.fblbCenterOuterFb').find('.fblbForm').width());
		},
		function(){
			jQuery(this).parents('.fblbCenterOuterFb').stop(true,false).animate({
				left: fblbFbOrgLeft
			}, jQuery('.fblbLeft.fblbCenterOuterFb').find('.fblbForm').width());
	});	
	var fblbTwOrgRight=jQuery('.fblbCenterOuterTw').css('right');
	var fblbTwOrgLeft=jQuery('.fblbCenterOuterTw').css('left');
	jQuery('.fblbRight.fblbCenterOuterTw').find('.fblbForm').hover(
		function(){
			jQuery(this).parents('.fblbCenterOuterTw').stop(true,false).animate({
				right: -3
			}, jQuery('.fblbLeft.fblbCenterOuterTw').find('.fblbForm').width());
		},
		function(){
			jQuery(this).parents('.fblbCenterOuterTw').stop(true,false).animate({
				right: fblbTwOrgRight
			}, jQuery('.fblbLeft.fblbCenterOuterTw').find('.fblbForm').width());
	});
	jQuery('.fblbLeft.fblbCenterOuterTw').find('.fblbForm').hover(
		function(){
			jQuery(this).parents('.fblbCenterOuterTw').stop(true,false).animate({
				left: -3
			}, jQuery('.fblbLeft.fblbCenterOuterTw').find('.fblbForm').width());
		},
		function(){
			jQuery(this).parents('.fblbCenterOuterTw').stop(true,false).animate({
				left: fblbTwOrgLeft
			}, jQuery('.fblbLeft.fblbCenterOuterTw').find('.fblbForm').width());
	});	
			
			
	var fblbGpOrgRight=jQuery('.fblbCenterOuterGp').css('right');
	var fblbGpOrgLeft=jQuery('.fblbCenterOuterGp').css('left');
	jQuery('.fblbRight.fblbCenterOuterGp').find('.fblbForm').hover(
		function(){
			jQuery(this).parents('.fblbCenterOuterGp').stop(true,false).animate({
				right: -3
			}, jQuery('.fblbLeft.fblbCenterOuterGp').find('.fblbForm').width());
		},
		function(){
			jQuery(this).parents('.fblbCenterOuterGp').stop(true,false).animate({
				right: fblbGpOrgRight
			}, jQuery('.fblbLeft.fblbCenterOuterGp').find('.fblbForm').width());
	});
	jQuery('.fblbLeft.fblbCenterOuterGp').find('.fblbForm').hover(
		function(){
			jQuery(this).parents('.fblbCenterOuterGp').stop(true,false).animate({
				left: -3
			}, jQuery('.fblbLeft.fblbCenterOuterGp').find('.fblbForm').width());
		},
		function(){
			jQuery(this).parents('.fblbCenterOuterGp').stop(true,false).animate({
				left: fblbGpOrgLeft
			}, jQuery('.fblbLeft.fblbCenterOuterGp').find('.fblbForm').width());
	});	
			
	// ===================
	jQuery('.fblbCenterOuter').find('.fblbForm').hover(
		function(){
			//jQuery('.fblbCenterOuter').not(jQuery(this).parents('.fblbCenterOuter')).hide();
			jQuery('.fblbCenterOuter').not(jQuery(this).parents('.fblbCenterOuter')).css('z-index',	parseInt(jQuery('.fblbCenterOuter').not(jQuery(this).parents('.fblbCenterOuter')).css('z-index'))-100);
		},
		function(){
			//jQuery('.fblbCenterOuter').not(jQuery(this).parents('.fblbCenterOuter')).show();
			jQuery('.fblbCenterOuter').not(jQuery(this).parents('.fblbCenterOuter')).css('z-index',	parseInt(jQuery('.fblbCenterOuter').not(jQuery(this).parents('.fblbCenterOuter')).css('z-index'))+100);
	});
});