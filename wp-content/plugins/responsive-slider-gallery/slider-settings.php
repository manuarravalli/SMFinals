<?php
//toggle button CSS
wp_enqueue_style('awl-toogle-button-css', RSG_PLUGIN_URL . 'css/toogle-button.css');

//css dropdown toggle
wp_enqueue_style( 'awl-bootstrap-css', RSG_PLUGIN_URL .'css/bootstrap.css' );
wp_enqueue_style('awl-font-awesome-css', RSG_PLUGIN_URL . 'css/font-awesome.css');
wp_enqueue_style('awl-styles-css', RSG_PLUGIN_URL . 'css/styles.css');

//js
wp_enqueue_script('jquery');
wp_enqueue_script( 'awl-bootstrap-js',  RSG_PLUGIN_URL .'js/bootstrap.js', array( 'jquery' ), '', true  );

?>
<style>
	.res_slider_settings {
		font-size: 16px !important;
		padding-left: 4px;
		font: initial;
		margin-top: 5px;
		font-weight: 500;
		padding-left:20px;
	}
	.input_width {
		margin-left: 18px !important;
		border-width: 1px 1px 1px 6px !important;
		border-color: #3366ff !important;
		width: 30% !important; 
	}
</style>
<div>
	<p style="font-family:Georgia; font-size: 22px; margin-bottom: -20px;"><?php _e('Copy Slider Shortcode', rsg_txt_dm); ?></p>
	<p class="input-text-wrap">
		<?php _e('Copy & Embed shortcode into any Page/Post/Text Widget to preview your slider on site', rsg_txt_dm); ?><br>
		<input type="text" name="shortcode" id="shortcode" value="<?php echo "[responsive-slider id=".$post->ID."]"; ?>" readonly style="height: 60px; width:300px;  background-color: InactiveBorder;  font-style: italic; text-align: center; font-size: 24px; border: 2px dashed;" onmouseover="return pulseOff();" onmouseout="return pulseStart();">
	</p>
</div>
<p class="input-text-wrap">
	<p class="bg-title"><?php _e('A. Width', rsg_txt_dm); ?></p><br>
	<?php if(isset($allslidesetting['width'])) $width = $allslidesetting['width']; else $width = "100%"; ?>
	<input class="input_width" type="text" name="width" id="width" value="<?php echo $width; ?>"><br>
	<p class="res_slider_settings"><?php _e('Set slider width in pixels and percents like 300px / 600px / 800px OR 25% / 50% / 100%', rsg_txt_dm); ?></p>
</p>

<p class="input-text-wrap">
	<p class="bg-title"><?php _e('B. Height', rsg_txt_dm); ?></p><br>
	<?php if(isset($allslidesetting['height'])) $height = $allslidesetting['height']; else $height = ""; ?>
	<input class="input_width" type="text" name="height" id="height" value="<?php echo $height; ?>"><br>
	<p class="res_slider_settings"><?php _e('Set slider height in pixels and percents like 300px / 600px / 800px OR 25% / 50% / 100%', rsg_txt_dm); ?>
</p>

<p class="bg-title"><?php _e('C. Navigation Style', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['nav-style'])) $navstyle = $allslidesetting['nav-style']; else $navstyle = "dots"; ?>
	<input type="radio" name="nav-style" id="nav-style1" value="dots" <?php if($navstyle == "dots") echo "checked=checked"; ?>>
	<label for="nav-style1"><?php _e('Dots', rsg_txt_dm); ?></label>
	<input type="radio" name="nav-style" id="nav-style3" value="false" <?php if($navstyle == "false") echo "checked=checked"; ?>>
	<label for="nav-style3"><?php _e('None', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set a navigation style like dots / none', rsg_txt_dm); ?></p>
</p>

<div class="dots_hs">
	<p class="input-text-wrap">
		<p class="bg-lower-title"><?php _e('1. Navigation Width', rsg_txt_dm); ?></p><br>
		<input class="input_width" type="text" name="nav-width" id="nav-width" value="<?php if(isset($allslidesetting['nav-width']) && $allslidesetting['nav-width'] != "") echo $allslidesetting['nav-width']; ?>"><br>
		<p class="res_slider_settings"><?php _e('Set navigation width in pixels or percent', rsg_txt_dm); ?></p>
	</p>
</div>

<p class="bg-title"><?php _e('D. Full Screen Slider', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['fullscreen'])) $fullscreen = $allslidesetting['fullscreen']; else $fullscreen = "true"; ?>
	<input type="radio" name="fullscreen" id="fullscreen1" value="true" <?php if($fullscreen == "true") echo "checked=checked"; ?>>
		<label for="fullscreen1"><?php _e('True', rsg_txt_dm); ?></label>
	<input type="radio" name="fullscreen" id="fullscreen2" value="false" <?php if($fullscreen == "false") echo "checked=checked"; ?>>
		<label for="fullscreen2"><?php _e('False', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set full screen view of slider like True / False / Native', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('E. Fit Slides', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['fit-slides'])) $fitslides = $allslidesetting['fit-slides']; else $fitslides = "cover"; ?>
	<input type="radio" name="fit-slides" id="fit-slides2" value="cover" <?php if($fitslides == "cover") echo "checked=checked"; ?>>
	<label for="fit-slides2"><?php _e('Cover', rsg_txt_dm); ?></label>
	<input type="radio" name="fit-slides" id="fit-slides4" value="none" <?php if($fitslides == "none") echo "checked=checked"; ?>>
	<label for="fit-slides4"><?php _e('None', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set how to fit slides into slider frame', rsg_txt_dm); ?></p>
</p>

<p class="input-text-wrap">
	<p class="bg-title"><?php _e('F. Transition Effect Duration', rsg_txt_dm); ?></p><br>
	<?php if(isset($allslidesetting['transition-duration'])) $transitionduration = $allslidesetting['transition-duration']; else $transitionduration = "300"; ?>
	<input class="input_width" type="text" name="transition-duration" id="transition-duration" value="<?php echo $transitionduration; ?>"><br>
	<p class="res_slider_settings"><?php _e('Set transition effect duration in millisecond between slides like 50 / 100 / 250 / 500', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('G. Slider Text', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['slide-text'])) $slidetext = $allslidesetting['slide-text']; else $slidetext = "false"; ?>
	<input type="radio" name="slide-text" id="slide-text1" value="true" <?php if($slidetext == "true") echo "checked=checked"; ?>>
	<label for="slide-text1"><?php _e('Yes', rsg_txt_dm); ?></label>
	<input type="radio" name="slide-text" id="slide-text2" value="false" <?php if($slidetext == "false") echo "checked=checked"; ?>>
	<label for="slide-text2"><?php _e('No', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set slider text visibility on slider', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('H. Auto Play', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['autoplay'])) $autoplay = $allslidesetting['autoplay']; else $autoplay = "true"; ?>
	<input type="radio" name="autoplay" id="autoplay1" value="true" <?php if($autoplay == "true") echo "checked=checked"; ?>>
	<label for="autoplay1"><?php _e('Yes', rsg_txt_dm); ?></label>
	<input type="radio" name="autoplay" id="autoplay2" value="false" <?php if($autoplay == "false") echo "checked=checked"; ?>>
	<label for="autoplay2"><?php _e('No', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set auto play to slides automatically', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('I. Loop', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['loop'])) $loop = $allslidesetting['loop']; else $loop = "true"; ?>
	<input type="radio" name="loop" id="loop1" value="true" <?php if($loop == "true") echo "checked=checked"; ?>>
	<label for="loop1"><?php _e('Yes', rsg_txt_dm); ?></label>
	<input type="radio" name="loop" id="loop2" value="false" <?php if($loop == "false") echo "checked=checked"; ?>>
	<label for="loop2"><?php _e('No', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set loop to slides continuously', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('J. Navigation Arrow', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['nav-arrow'])) $navarrow = $allslidesetting['nav-arrow']; else $navarrow = "true"; ?>
	<input type="radio" name="nav-arrow" id="nav-arrow2" value="true" <?php if($navarrow == "true") echo "checked=checked"; ?>>
	<label for="nav-arrow2"><?php _e('Show', rsg_txt_dm); ?></label>
	<input type="radio" name="nav-arrow" id="nav-arrow3" value="false" <?php if($navarrow == "false") echo "checked=checked"; ?>>
	<label for="nav-arrow3"><?php _e('Hide', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set navigation arrow display options', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('K. Touch Slide', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php if(isset($allslidesetting['touch-slide'])) $touchslide = $allslidesetting['touch-slide']; else $touchslide = "true"; ?>
	<input type="radio" name="touch-slide" id="touch-slide1" value="true" <?php if($touchslide == "true") echo "checked=checked"; ?>>
	<label for="touch-slide1"><?php _e('Yes', rsg_txt_dm); ?></label>
	<input type="radio" name="touch-slide" id="touch-slide2" value="false" <?php if($touchslide == "false") echo "checked=checked"; ?>>
	<label for="touch-slide2"><?php _e('No', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set touch slide to slide images using mouse touch or swipe action', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('L. Slide Loading Spinner', rsg_txt_dm); ?></p>
<p class="input-text-wrap switch-field em_size_field">		
	<?php if(isset($allslidesetting['spinner'])) $spinner = $allslidesetting['spinner']; else $spinner = "true"; ?>
	<input type="radio" name="spinner" id="spinner1" value="true" <?php if($spinner == "true") echo "checked=checked"; ?>>
	<label for="spinner1"><?php _e('Yes', rsg_txt_dm); ?></label>
	<input type="radio" name="spinner" id="spinner2" value="false" <?php if($spinner == "false") echo "checked=checked"; ?>>
	<label for="spinner2"><?php _e('No', rsg_txt_dm); ?></label>
	<p class="res_slider_settings"><?php _e('Set loading spinner option to show spinner while loading slides', rsg_txt_dm); ?></p>
</p>

<p class="bg-title"><?php _e('M. Premium Version Settings', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Ratio/Margin/Glimpse Settings', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Thumbnail Settings', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Full Screen Slider', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Slide Direction', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Click Transition', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Transition Effects', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Shuffle Slide Show', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Stop Auto Play On Touch', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Fit Slides', rsg_txt_dm); ?></p>
<p class="bg-lower-title"><?php _e('Slider Text Option', rsg_txt_dm); ?></p>
<p class="res_slider_settings"><?php _e('Upgrade To Pro Version For This All Settings', rsg_txt_dm); ?>
	<a href="https://awplife.com/wordpress-plugins/responsive-slider-gallery-premium/" target="_blank"><?php _e('Buy Premium Version', rsg_txt_dm); ?></a>
</p>

<input type="hidden" name="awl-save-settings" id="awl-save-settings" value="save-settings">

<hr>
	<p class="">
		<a href="https://awplife.com/demo/responsive-slider-gallery-premium/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize">Check Premium Version Live Demo</a>
		<a href="https://awplife.com/demo/responsive-slider-gallery-premium-admin/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize">Try Premium Version Admin Demo</a>
		<a href="https://awplife.com/wordpress-plugins/responsive-slider-gallery-premium/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize">Buy Premium Version</a>
	</p>
	<hr>
	<style>
		.awp_bale_offer {
			background-image: url("<?php echo RSG_PLUGIN_URL ?>/image/awp-bale.jpg");
			background-repeat:no-repeat;
			padding:30px;
		}
		.awp_bale_offer h1 {
			font-size:35px;
			color:#000000;
		}
		.awp_bale_offer h3 {
			font-size:25px;
			color:#000000;
		}
		.awp_bale_offer h2 {
			font-size:25px !important;
			color:#000002;
		}
	</style>
	<div class="row awp_bale_offer">
		<div class="">
			<h1><?php _e('Plugins Bale Offer', rsg_txt_dm); ?></h1>
			<h3><?php _e('Get All Premium Plugin - 20+ Premium Plugins ( Personal Licence) in just $149', rsg_txt_dm); ?> </h3>
			<h4> 8+ gallery plugins, 3+ Slider Plugin , Event , Testimonial , Contact Form, Social media, Popup Box, Weather Effect, Social share </h4>
			<h3><strike>$399</strike> $149 Only</h3>
		</div>
		<div class="">
			<a href="http://awplife.com/account/signup/all-premium-plugins" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php _e('BUY NOW', rsg_txt_dm); ?></a>
		</div>
	</div>
	<hr>
	<p>
		<h1><strong><?php _e('Try Our Other Free Plugins :', rsg_txt_dm); ?></strong></h1><br>
		<a href="https://wordpress.org/plugins/portfolio-filter-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Portfolio Filter Gallery</a>
		<a href="https://wordpress.org/plugins/blog-filter/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Blog Filter Gallery</a>
		<a href="https://wordpress.org/plugins/new-grid-gallery/" target="_blank" class="button button-primary  load-customize hide-if-no-customize">Grid Gallery</a>
		<a href="https://wordpress.org/plugins/new-social-media-widget/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Social Media</a>
		<a href="https://wordpress.org/plugins/new-image-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Image Gallery</a>
		<a href="https://wordpress.org/plugins/new-photo-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Photo Gallery</a>
		<a href="https://wordpress.org/plugins/responsive-slider-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Responsive Slider Gallery</a>
		<a href="https://wordpress.org/plugins/new-contact-form-widget/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Contact Form Widget</a><br><br>
		<a href="https://wordpress.org/plugins/facebook-likebox-widget-and-shortcode/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Facebook Likebox Plugin</a>
		<a href="https://wordpress.org/plugins/slider-responsive-slideshow/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Slider Responsive Slideshow</a>
		<a href="https://wordpress.org/plugins/new-video-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Video Gallery</a><br><br>
		<a href="https://wordpress.org/plugins/new-facebook-like-share-follow-button/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Facebook Like Share Follow Button</a>
		<a href="https://wordpress.org/plugins/new-google-plus-badge/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Google Plus Badge</a>
		<a href="https://wordpress.org/plugins/media-slider/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Media Slider</a>
		<a href="https://wordpress.org/plugins/weather-effect/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Weather Effect</a>
		<a href="https://wordpress.org/plugins/insta-type-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Instagram Type Gallery</a>
	</p><br>
	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>	
<script>
	// ===== Scroll to Top ==== 
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
			jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
		} else {
			jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
		}
	});
	jQuery('#return-to-top').click(function() {      // When arrow is clicked
		jQuery('body,html').animate({
			scrollTop : 0                       // Scroll to top of body
		}, 500);
	});
	
// Show Hide Settings
	// Navigation settings start
	var nav_style = jQuery('input[name="nav-style"]:checked').val();
		//on change to enable & disable navigation Setting
		if(nav_style == "dots") {
			jQuery('.dots_hs').show();
		}
		if(nav_style == "false") {
			jQuery('.dots_hs').hide();
		}

		//on change to enable & disable navigation Setting
		jQuery(document).ready(function() {
			jQuery('input[name="nav-style"]').change(function(){
				var nav_style = jQuery('input[name="nav-style"]:checked').val();
				if(nav_style == "dots") {
					jQuery('.dots_hs').show();
				}
				if(nav_style == "false") {
					jQuery('.dots_hs').hide();
				}
			});
		});
	// Navigation Setting End
	
	// Auto Play settings start
	var autoplay = jQuery('input[name="autoplay"]:checked').val();
		//on change to enable & disable navigation Setting
		if(autoplay == "true") {
			jQuery('.auto_sh').show();
		}
		if(autoplay == "false") {
			jQuery('.auto_sh').hide();
		}

		//on change to enable & disable Auto Play Setting
		jQuery(document).ready(function() {
			jQuery('input[name="autoplay"]').change(function(){
				var autoplay = jQuery('input[name="autoplay"]:checked').val();
				if(autoplay == "true") {
					jQuery('.auto_sh').show();
				}
				if(autoplay == "false") {
					jQuery('.auto_sh').hide();
				}
			});
		});
	// Auto Play Setting End
//show hide settings end

	//dropdown toggle on change effect
	jQuery(document).ready(function() {
		//accordion icon
		jQuery(function() {
			function toggleSign(e) {
				jQuery(e.target)
				.prev('.panel-heading')
				.find('i')
				.toggleClass('fa fa-chevron-down fa fa-chevron-up');
			}
			jQuery('#accordion').on('hidden.bs.collapse', toggleSign);
			jQuery('#accordion').on('shown.bs.collapse', toggleSign);

			});
		});
	
	// start pulse on page load
	function pulseEff() {
	   jQuery('#shortcode').fadeOut(600).fadeIn(600);
	};
	var Interval;
	Interval = setInterval(pulseEff,1500);

	// stop pulse
	function pulseOff() {
		clearInterval(Interval);
	}
	// start pulse
	function pulseStart() {
		Interval = setInterval(pulseEff,1500);
	}
</script>		