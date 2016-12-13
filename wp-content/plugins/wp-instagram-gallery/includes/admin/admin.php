<?php
if (!defined('ABSPATH')){
exit; // Exit if accessed directly
}
final class WpInstagramGalleryAdmin
{
public function __construct()
{
add_action('admin_menu', array( $this, 'wpig_admin_menu' ) );
}
function wpig_admin_menu() {
add_menu_page(__('Wp Instagram Gallery','wpig'), __('Wp Instagram Gallery','wpig'), 'manage_wp_instagram_gallery', 'manage-wp-instagram-gallery', array($this,'plugin_usage'),WPIG_PLUGIN_URL.'assets/images/instagram-new-icon.png', '22.56');
add_submenu_page('manage-wp-instagram-gallery', __('Instagram Settings','wpig'), __('Instagram Settings','wpig'), 'manage_options', 'manage-wp-instagram-gallery');
add_submenu_page('manage-wp-instagram-gallery', __('General Settings','wpig'), __('General Settings','wpig'), 'manage_options', 'configure-settings', array($this,'configure_settings') );
add_submenu_page('manage-wp-instagram-gallery', __('Advanced Settings','wpig'), __('Advanced Settings','wpig'), 'manage_options', 'advanced-settings', array($this,'advanced_settings') );
}
function  plugin_usage() {
wp_enqueue_style('wpinsta_admin_css',WPIG_PLUGIN_URL.'assets/css/wpinsta_admin.css', false, '1.0.0', 'all' );
include_once('plugin-usage.php');
} 
function  configure_settings() {
wp_enqueue_style('wpinsta_admin_css',WPIG_PLUGIN_URL.'assets/css/wpinsta_admin.css', false, '1.0.0', 'all' );
include_once('configure-settings.php');
}
function  advanced_settings() {
wp_enqueue_style('wpinsta_admin_css',WPIG_PLUGIN_URL.'assets/css/wpinsta_admin.css', false, '1.0.0', 'all' );
wp_enqueue_script('wpinsta_admin_js', WPIG_PLUGIN_URL.'assets/js/wpinsta_admin.js', array('jquery'), '1.0.0', false);
include_once('advanced-settings.php');
}
}
$GLOBALS['WpInstagramGalleryAdmin']=new WpInstagramGalleryAdmin();
?>