<?php
/**
* Plugin Name: wp instagram gallery
* Plugin URI: https://wordpress.org/plugins/wp-instagram-gallery/
* Description: WP Instagram Gallery allows users to display instagram images with lots of customization options and in different layouts including Grid, Masonry and Slider. This plugin is very easy to use and completely responsive.
* License: GPL v2
* Version: 1.0
* Author: ydesignservices
* Author URI: http://www.ydesignservices.com/
* Text Domain: wpig
* Domain Path: /languages
*/
if (! defined( 'ABSPATH')){
	exit; // Exit if accessed directly
}

final class WpInstagramGallery{
	       public function __construct() {
           $this->define_constants();
           register_activation_hook( __FILE__, array($this,'installation') );
           $this->installation();
           $this->include_files();
		   add_action('plugins_loaded', array($this,'plugin_load_plugin_mlgm'));
	}

	private function define_constants() {
		  define('WPIG_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
		  define('WPIG_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	}
	
	function plugin_load_plugin_mlgm() {
    load_plugin_textdomain('wpig', FALSE, WPIG_PLUGIN_DIR.'languages/');
    }

       private function include_files(){
			  if (is_admin()) {
			  include_once(WPIG_PLUGIN_DIR.'includes/admin/admin.php');
          }
		  else {
				   include_once(WPIG_PLUGIN_DIR.'includes/shortcode.php' );
				   
		        }
	}

	function installation(){
	   include_once(WPIG_PLUGIN_DIR.'includes/admin/installation.php');
      }
	 
  }
  include_once('includes/custom.php');
  $GLOBALS['WpInstagramGallery'] =new WpInstagramGallery();
?>