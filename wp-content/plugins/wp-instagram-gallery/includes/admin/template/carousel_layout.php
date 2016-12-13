<?php 
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
global $wpig_save_carousel_setting;
if(get_option('wpig_save_carousel_setting'))
{
$wpig_save_carousel_setting=get_option('wpig_save_carousel_setting');
}
?>
<div class="wpinsta_carousel_layout_show">
<h2 class="wpinsta_heading"><?php _e('Instagram Feed Settings','wpig'); ?></h2>
<table width="462"  class="yds-map-setting-table">
<tr class="wpinsta_row wp_carowsel_hide">
<td width="228" height="35" align="left" valign="top"><strong><?php _e('SELECT PAGINATION','wpig'); ?></strong></td>
<td width="144"><input class="yds-map-input color-field" type="radio" name="wpinsta_carouser_pagination" id="wpinsta_carouser_pagination" value="wpinsta_carouser_pagination" <?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_pagination'){echo'checked';}?>/><?php _e('Bullets ','wpig'); ?></td>
<td width="74"><img src="<?php echo esc_url(WPIG_PLUGIN_URL.'/assets/images/bullets.png');?>"></td>
</tr>
<tr class="wpinsta_row wp_carowsel_hide">
<td width="228" height="45" align="left" valign="top"></td>
<td><input class="yds-map-input color-field" type="radio" name="wpinsta_carouser_pagination" id="wpinsta_carouser_pagination" value="wpinsta_carouser_nextprev"<?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_nextprev'){echo'checked';}?> /><?php _e('Next/Previous','wpig'); ?></td>
<td><img src="<?php echo esc_url(WPIG_PLUGIN_URL.'/assets/images/next-prev.png');?>"></td>
</tr>
<tr class="wpinsta_row wp_carowsel_hide">
<td width="228" height="45" align="left" valign="top"></td>
<td><input class="yds-map-input color-field" type="radio" name="wpinsta_carouser_pagination" id="wpinsta_carouser_pagination" value="wpinsta_carouser_leftright" <?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_leftright'){echo'checked';}?>/><?php _e('Left/Right Arrow ','wpig'); ?></td>
<td><img src="<?php echo esc_url(WPIG_PLUGIN_URL.'/assets/images/left-right-arrow.png');?>"></td>
</tr>
<tr class="wpinsta_row" id="grid_loadmore">
<td width="228" height="35" align="left" valign="top"><strong><?php _e('LOAD MORE','wpig'); ?></strong></td>
<td width="144"><label class="wp_insta_switch">
	<input class="wp_insta_switch-input" type="checkbox" name="wpinsta_grid_load_more" value="yes" <?php if($wpig_save_carousel_setting['wpinsta_grid_load_more']=='yes'){echo'checked';}else{}?>/>
	<span class="wp_insta_switch-label" data-on="On" data-off="Off"></span> 
	<span class="wp_insta_switch-handle"></span> 
</label></td>
</tr>
<tr class="wpinsta_row">
<td width="228" height="45" align="left" valign="top"><strong><?php _e('IMAGE COUNT','wpig'); ?></strong></td>
<td><input class="yds-map-input color-field" type="number" name="wpinsta_carouser_imagecount" id="wpinsta_carouser_imagecount" value="<?php if($wpig_save_carousel_setting['wpinsta_carouser_imagecount']){echo $wpig_save_carousel_setting['wpinsta_carouser_imagecount'];}?>" min="1" max="100" style="width: 80px;"/></td>
</tr>
<tr class="wpinsta_row" id="wpinsta_IMAGE_SLIDER">
<td width="228" align="left" valign="top"><strong><?php _e('IMAGE PER SLIDE','wpig'); ?></strong></td>
<td><input class="yds-map-input color-field" type="number" name="wpinsta_image_slider_count" id="wpinsta_image_slider_count" value="<?php if($wpig_save_carousel_setting['wpinsta_image_slider_count']){echo $wpig_save_carousel_setting['wpinsta_image_slider_count'];}?>" min="1" max="100" size="4" style="width: 80px;"/></td>
</tr>
<tr class="wpinsta_row" id="wpinsta_hide_col">
<td width="228" align="left" valign="top"><strong><?php _e('NO OF COLUMNS','wpig'); ?></strong></td>
<td><input class="yds-map-input color-field" type="number" name="wpinsta_noof_column_count_grid" id="wpinsta_noof_column_count_grid" value="<?php if($wpig_save_carousel_setting['wpinsta_noof_column_count_grid']){echo $wpig_save_carousel_setting['wpinsta_noof_column_count_grid'];}?>" min="1" max="5" size="4" style="width: 80px;"/></td>
</tr>
<tr class="wpinsta_row">
<td width="228" height="45" align="left" valign="top"><strong><?php _e('LIGHTBOX','wpig'); ?></strong></td>
<td><label class="wp_insta_switch">
	<input class="wp_insta_switch-input" type="checkbox" name="wpinsta_lightbox_yes" value="yes"<?php if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes'){echo'checked';}else{}?>/>
	<span class="wp_insta_switch-label" data-on="On" data-off="Off"></span> 
	<span class="wp_insta_switch-handle"></span> 
</label></td>
</tr>
<tr class="wpinsta_row">
<td width="228" height="45" align="left" valign="top"><strong><?php _e('ANIMATION','wpig'); ?></strong></td>
<td><label class="wp_insta_switch">
	<input class="wp_insta_switch-input" type="checkbox" name="wpinsta_slider_animation" value="yes" <?php if($wpig_save_carousel_setting['wpinsta_slider_animation']=='yes'){echo'checked';}else{}?>/>
	<span class="wp_insta_switch-label" data-on="On" data-off="Off"></span> 
	<span class="wp_insta_switch-handle"></span> 
</label></td>
</tr>

</table>
</div>