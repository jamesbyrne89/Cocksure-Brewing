<?php 
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
global $wpig_configure_user;
if(isset($_POST['wpig_save_instasetting']))
{
	$current_user = wp_get_current_user();
    if ($current_user->has_cap('manage_options')) { 
	$wpig_configure_user=array(
			'AccessToken'=>sanitize_text_field($_POST['AccessToken']),
			'UserId'=>sanitize_text_field($_POST['UserId']),
	);
	update_option('wpig_configure_user',$wpig_configure_user);
	echo '<div class="updated">Your settings have been saved.</div>';
}
}
if(get_option('wpig_configure_user'))
{
$wpig_configure_user=get_option('wpig_configure_user');
}
?>
<h2 class="nav-tab-wrapper">
<a href="<?php echo admin_url("admin.php?page=manage-wp-instagram-gallery"); ?>" class="nav-tab  nav-tab-active"><?php _e('Instagram Settings ','wpig'); ?></a>
<a href="<?php echo admin_url("admin.php?page=configure-settings"); ?>" class="nav-tab"><?php _e('General Settings ','wpig'); ?></a>
<a href="<?php echo admin_url("admin.php?page=advanced-settings"); ?>" class="nav-tab"><?php _e('Advanced Settings ','wpig'); ?></a>
</h2>
<div class="yds_insta_wrap">
<form action="" method="post" class="wpinsta_content_wrap">
<table  class="yds-insta-setting-table">
<tr class="wpinsta_row"><td width="200" align="left" valign="top"><strong><?php _e('USER ID ','wpig'); ?></strong></td>
<td><input class="yds-map-input color-field" type="text" name="UserId" id="UserId" value="<?php if(!empty($wpig_configure_user['UserId'])){echo $wpig_configure_user['UserId']; }else {} ?>" /></td>
</tr>
   <tr class="wpinsta_row"><td width="200" align="left" valign="top"><strong><?php _e('ACCESS TOKEN ','wpig'); ?></strong></td>
   <td><input class="yds-map-input color-field" type="text" name="AccessToken" id="AccessToken" placeholder="" value="<?php if(!empty($wpig_configure_user['AccessToken'])){echo $wpig_configure_user['AccessToken']; }else {} ?>" /></td>
  </tr>
  <tr class="wpinsta_row"><td><button class="button button-primary" id="wpig_save_instasetting" name="wpig_save_instasetting" type="submit"><?php _e('Save Changes','wpig'); ?></button></td>
</tr>
  </table>
  </form></div>