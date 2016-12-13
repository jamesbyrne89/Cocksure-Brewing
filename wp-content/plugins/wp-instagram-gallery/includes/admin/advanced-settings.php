<?php if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}?>
<h2 class="nav-tab-wrapper">
<a href="<?php echo admin_url("admin.php?page=manage-wp-instagram-gallery"); ?>" class="nav-tab"><?php _e('Instagram Settings','wpig'); ?></a>
<a href="<?php echo admin_url("admin.php?page=configure-settings"); ?>" class="nav-tab"><?php _e('General Settings','wpig'); ?></a>
<a href="<?php echo admin_url("admin.php?page=advanced-settings"); ?>" class="nav-tab nav-tab-active"><?php _e('Advanced Settings','wpig'); ?></a>
</h2>
<?php
if(isset($_POST['wpig_save_carousel_setting']))
{
	$current_user = wp_get_current_user();
    if ($current_user->has_cap('manage_options')) { 
	$wpig_save_carousel_setting=array(
			'wpinsta_carouser_pagination'=>sanitize_text_field($_POST['wpinsta_carouser_pagination']),
			'wpinsta_grid_load_more'=>sanitize_text_field($_POST['wpinsta_grid_load_more']),
			'wpinsta_carouser_imagecount'=>absint($_POST['wpinsta_carouser_imagecount']),
			'wpinsta_image_slider_count'=>absint($_POST['wpinsta_image_slider_count']),
			'wpinsta_noof_column_count_grid'=>absint($_POST['wpinsta_noof_column_count_grid']),
			'wpinsta_lightbox_yes'=>sanitize_text_field($_POST['wpinsta_lightbox_yes']),
			'wpinsta_slider_animation'=>sanitize_text_field($_POST['wpinsta_slider_animation'])
	);
	update_option('wpig_save_carousel_setting',$wpig_save_carousel_setting);
	update_option('wpinsta_radio_settongs',$_POST['wpinsta_layoutselect']);
}
}
if(get_option('wpig_save_carousel_setting'))
{
$wpinsta_radio_settongs=get_option('wpinsta_radio_settongs');
} 

?>
<form method="post">
<div class="yds_insta_wrap">
<div class="wpinsta_layout_wrap">
<h2 class="wpinsta_heading"><?php _e('Choose Instagram Layout','wpig'); ?></h2>
   <label>
  <div class="wpinsta_layout_inner inner_carousel">
    <div class="style-title"><input class="carousel_layout" type="radio" name="wpinsta_layoutselect" id="wpinsta_layoutselect" value="carousel_layout" <?php if(isset($_POST['wpinsta_radio_settongs'])&&$_POST['wpinsta_radio_settongs']=='carousel_layout'){echo'checked';}elseif($wpinsta_radio_settongs=='carousel_layout'){echo'checked';}else{?>checked<?php }?>> <?php _e('Carousel Layout','wpig'); ?></div>
    <div class="wpinsta_layout_col">
       <img src="<?php echo esc_url(WPIG_PLUGIN_URL.'/assets/images/carousel.png');?>">
      </div><!--wpinsta_layout_col-->
    </div>
    </label>
    <!--wpinsta_layout_inner-->
    <label>
    <div class="wpinsta_layout_inner inner_grid">
      <div class="style-title"><input class="grid_layout" type="radio" name="wpinsta_layoutselect" id="wpinsta_layoutselect" value="grid_layout" <?php if(isset($_POST['wpinsta_radio_settongs'])&&$_POST['wpinsta_radio_settongs']=='grid_layout'){echo'checked';}elseif($wpinsta_radio_settongs=='grid_layout'){echo'checked';}?>><?php _e('Grid Layout','wpig'); ?> </div>
      <div class="wpinsta_layout_col">
        <img src="<?php echo esc_url(WPIG_PLUGIN_URL.'/assets/images/grid.png');?>">
      </div><!--wpinsta_layout_col-->
    </div>
    </label>
    <!--wpinsta_layout_inner-->
    <label>
    <div class="wpinsta_layout_inner inner_masonry">
      <div class="style-title"><input class="masonry_layout" type="radio" name="wpinsta_layoutselect" id="wpinsta_layoutselect" value="masonry_layout" <?php if(isset($_POST['wpinsta_radio_settongs'])&&$_POST['wpinsta_radio_settongs']=='masonry_layout'){echo'checked';}elseif($wpinsta_radio_settongs=='masonry_layout'){echo'checked';}?>><?php _e('Masonry Layout ','wpig'); ?></div>
      <div class="wpinsta_layout_col">
        <img src="<?php echo esc_url(WPIG_PLUGIN_URL.'/assets/images/masonry-img.png');?>">
    </div><!--wpinsta_layout_col-->
  </div>
  </label>
  <!--wpinsta_layout_inner-->
 
</div><!--wpinsta_layout_wrap-->
<?php
if(isset($_POST['wpig_save_carousel_setting'])){?><div class="updated">Your settings have been saved.</div><?php }?>

<?php include_once('template/carousel_layout.php');	?>
    
</div>
<div><button class="button button-primary" id="wpig_save_carousel_setting" name="wpig_save_carousel_setting" type="submit"><?php _e('Save Settings','wpig'); ?></button></div>
</form>
