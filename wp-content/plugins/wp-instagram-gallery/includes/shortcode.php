<?php
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
final class WpInstagramGalleryShortcode{
	public function __construct() {
     add_shortcode('wp-instagram-gallery', array($this, 'wp_instagram_gallery'));
	}
	function wp_instagram_gallery()
	{
		//Register css and js
		wp_enqueue_style('magnific-popup_css',WPIG_PLUGIN_URL.'assets/css/magnific-popup.css', false, '1.0.0', 'all' );
		wp_enqueue_style('owl_carousel_css',WPIG_PLUGIN_URL.'assets/css/owl.carousel.css', false, '1.0.0', 'all' );
		wp_enqueue_style('grid_style_css',WPIG_PLUGIN_URL.'assets/css/grid_style.css', false, '1.0.0', 'all' );
		wp_enqueue_script('jquery_carousel_min_js', WPIG_PLUGIN_URL.'assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', false);
		wp_enqueue_script('wpinsta_pinterest_grid_js', WPIG_PLUGIN_URL.'assets/js/wpinsta-pinterest_grid.js', array('jquery'), '1.0.0', false);
		wp_enqueue_script('lightbox_bxslider_min_js', WPIG_PLUGIN_URL.'assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', false);
		global $wpig_configure;
		$wpig_configure=get_option('wpig_configure_user');
		$instagram_userid=$wpig_configure['UserId'];
		$access_token=$wpig_configure['AccessToken'];
		$wpig_save_carousel_setting=get_option('wpig_save_carousel_setting');
		$ImagesCount=$wpig_save_carousel_setting['wpinsta_carouser_imagecount'];
		//echo'<pre>';print_r($wpig_save_carousel_setting);
        $wpig_configurefowwlow=get_option('wpig_configure');
		//echo'<pre>';print_r($wpig_configurefowwlow);
		
		$url='https://api.instagram.com/v1/users/'.$instagram_userid.'/media/recent/?count='.$ImagesCount.'&access_token='.$access_token;
	try {
		$curl_connection = curl_init($url);
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		$data = json_decode(curl_exec($curl_connection), true);
		//echo'<pre>';print_r($data);
		$wpinstauser=$data['data'][0]['user']['username'];
        $wpinsta_radio_settongs=get_option('wpinsta_radio_settongs');
if($wpinsta_radio_settongs=='carousel_layout')
{
	if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_leftright'){
       $html='<div class="insta_gallery_slide wpinsta_arrow_show">';
	}else{
		$html='<div class="insta_gallery_slide">';
	}
	   if($wpig_configurefowwlow['wp_insta_switch_yes']=='1')
	   {
	    $html.='<a href="https://www.instagram.com/'.$wpinstauser.'/" target="_blank" class="wpinsta_followsus"><img src='.WPIG_PLUGIN_URL.'assets/images/follow-button.png></a>';
	   }
	   if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes'){
		   $html.='<ul id="wpinsta_gallery_front" class="owl-carousel zoom-gallery">';
	   }else{
	   $html.='<ul id="wpinsta_gallery_front" class="owl-carousel">';
	   }
		foreach($data['data'] as $tribute_instagram_vale)
		{
			if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes')
			{
		$html.='<li class="item"><a href="'.esc_url($tribute_instagram_vale['images']['standard_resolution']['url']).'"><img src="'.esc_url($tribute_instagram_vale['images']['standard_resolution']['url']).'" data-source="'.esc_url($tribute_instagram_vale['images']['standard_resolution']['url']).'>"></a></li>';
			}else
			{
				$html.='<li class="item"><a href="https://www.instagram.com/'.$wpinstauser.'/" target="_blank"><img src="'.esc_url($tribute_instagram_vale['images']['standard_resolution']['url']).'" data-source="'.esc_url($tribute_instagram_vale['images']['standard_resolution']['url']).'>"></a></li>';
			}
		}
		$html.='</ul></div>';
		return $html;	
}
if($wpinsta_radio_settongs=='grid_layout')
{
	if($wpig_configurefowwlow['wp_insta_switch_yes']=='1')
	   {
	     echo'<a href="https://www.instagram.com/'.$wpinstauser.'/" target="_blank" class="wpinsta_followsus"><img src='.WPIG_PLUGIN_URL.'assets/images/follow-button.png></a>';
	   }
	   ?>
	<div id="rigrid_front_grid" class="rigrid_front_grid <?php if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes'){?>zoom-gallery zoom_gallery_grid <?php }?>">
    <ul id="split_col<?php echo $wpig_save_carousel_setting['wpinsta_noof_column_count_grid'];?>" class="epinsta_loadmore_li">
    <?php 
	foreach($data['data'] as $tribute_instagram_vale)
		{?>
        <li><a href="<?php if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes'){echo esc_url($tribute_instagram_vale['images']['standard_resolution']['url']);}else{echo esc_url($tribute_instagram_vale['link']);}?>" data-source="<?php echo esc_url($tribute_instagram_vale['images']['standard_resolution']['url']);?>">
        <div class="wpinsta_featured_image" style="background:url(<?php echo esc_url($tribute_instagram_vale['images']['standard_resolution']['url']);?>);background-position: center center;background-repeat: no-repeat;background-size: cover;" ></div>
		
	</a>
    </li>
    
<?php }?>
    </ul>
    
    </div>
    <?php if($wpig_save_carousel_setting['wpinsta_grid_load_more']=='yes'){?>
    <a id='more' next_url='<?php echo $data['pagination']['next_url'];?>' href='#' class="wpinsta_followsus wpinstaLoadmore"></a>
    <span id="gifimage"></span>
    <?php }?>
<?php }

if($wpinsta_radio_settongs=='masonry_layout')
{
	if($wpig_configurefowwlow['wp_insta_switch_yes']=='1')
	   {
	    echo'<a href="https://www.instagram.com/'.$wpinstauser.'/" target="_blank" class="wpinsta_followsus"><img src='.WPIG_PLUGIN_URL.'assets/images/follow-button.png></a>';
	   }?>
 <section id="wpinsta_masonry_blog-landing" class="<?php if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes'){?>zoom-gallery<?php }?>">
  <?php
  
  foreach($data['data'] as $tribute_instagram_vale)
		{?>
<div class="wpinsta_masonry_white-panel">
<a href="<?php if($wpig_save_carousel_setting['wpinsta_lightbox_yes']=='yes'){echo esc_url($tribute_instagram_vale['images']['standard_resolution']['url']);}else{echo esc_url($tribute_instagram_vale['link']);}?>" data-source="<?php echo esc_url($tribute_instagram_vale['images']['standard_resolution']['url']);?>"><img src="<?php echo esc_url($tribute_instagram_vale['images']['standard_resolution']['url']);?>"></a>
</div>
<?php }?>
 </section>
<?php if($wpig_save_carousel_setting['wpinsta_grid_load_more']=='yes'){?>
    <a id='more_masonry_load' next_url='<?php if($data['pagination']['next_url']){echo $data['pagination']['next_url'];}?>' href='#' class="wpinsta_followsus"></a>
    <span id="gifimage"></span>
    <?php }?>
<?php }


	} catch(Exception $e) {
		return $e->getMessage();
	}
		
		  
	}
}
$GLOBALS['WpInstagramGalleryShortcode'] =new WpInstagramGalleryShortcode();
?>

