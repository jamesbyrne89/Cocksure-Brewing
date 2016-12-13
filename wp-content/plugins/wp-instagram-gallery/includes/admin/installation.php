<?php
if (! defined( 'ABSPATH')){
exit; // Exit if accessed directly
}

global $wpdb;
//Roll & Capability
if(!get_role('wp_instagram_gallery')){
add_role('wp_instagram_gallery', 'Support Agent');
}
$role = get_role('wp_instagram_gallery' );
$role->add_cap('manage_wp_instagram_gallery');
$role->add_cap('read' );
$role = get_role('administrator' );
$role->add_cap('manage_wp_instagram_gallery');
?>