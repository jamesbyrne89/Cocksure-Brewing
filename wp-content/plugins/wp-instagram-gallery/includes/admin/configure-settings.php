<?php 
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
global $wpig_configure;
if(isset($_POST['wpig_save_instashort_code']))
{
	$current_user = wp_get_current_user();
    if ($current_user->has_cap('manage_options')) { 
	$wpig_configure=array(
			'wp_insta_switch_yes'=>sanitize_text_field(@$_POST['wp_insta_switch_yes']),
	);
	update_option('wpig_configure',$wpig_configure);
	echo '<div class="updated">Your settings have been saved.</div>';
}
}
if(get_option('wpig_configure'))
{
$wpig_configure=get_option('wpig_configure');
}
?>
<h2 class="nav-tab-wrapper">
<a href="<?php echo admin_url("admin.php?page=manage-wp-instagram-gallery"); ?>" class="nav-tab"><?php _e('Instagram Settings ','wpig'); ?></a>
<a href="<?php echo admin_url("admin.php?page=configure-settings"); ?>" class="nav-tab nav-tab-active"><?php _e('General Settings ','wpig'); ?></a>
<a href="<?php echo admin_url("admin.php?page=advanced-settings"); ?>" class="nav-tab"><?php _e('Advanced Settings ','wpig'); ?></a>
</h2>
<div class="yds_insta_wrap">
<form action="" method="post" class="wpinsta_content_wrap">
<table  class="yds-insta-setting-table">
<tr class="wpinsta_row"><td width="200" align="left" valign="top"><strong><?php _e('PLUGIN SHORT CODE','wpig'); ?></strong></td>
    <td><input type="text" value="[wp-instagram-gallery]"  readonly onclick="this.focus();this.select()" title="To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac)."></td></tr>
   <tr class="wpinsta_row"><td width="200" align="left" valign="top"><strong><?php _e('INSTAGRAM FOLLOW BUTTON ','wpig'); ?></strong></td>
   <td height="60"><label class="wp_insta_switch">
	<input class="wp_insta_switch-input" type="checkbox" name="wp_insta_switch_yes" value="1"<?php if($wpig_configure['wp_insta_switch_yes']==1){echo'checked';}else{}?>/>
	<span class="wp_insta_switch-label" data-on="On" data-off="Off"></span> 
	<span class="wp_insta_switch-handle"></span> 
</label></td></tr>
  <tr class="wpinsta_row"><td><button class="button button-primary" id="wpig_save_instashort_code" name="wpig_save_instashort_code" type="submit"><?php _e('Save Changes','wpig'); ?></button></td>
</tr>
</table>
  </form>
</div>