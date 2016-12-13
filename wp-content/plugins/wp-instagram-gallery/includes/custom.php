<?php 
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
ob_start();
function Wpinsta_custom_function()
{
global $wpig_save_carousel_setting;
$wpig_save_carousel_setting=get_option('wpig_save_carousel_setting');
$wpinsta_radio_settongs=get_option('wpinsta_radio_settongs');
?>
<script>
<?php if($wpinsta_radio_settongs=='carousel_layout'){?>
jQuery(document).ready(function($){
 jQuery("#wpinsta_gallery_front").owlCarousel({
    items :<?php echo $wpig_save_carousel_setting['wpinsta_image_slider_count'];?>,
    autoPlay : true,
    stopOnHover : true,
    navigation :<?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_nextprev'){echo'true';}else{echo'false';}?>,
    navigationText : ["prev","next"],
	<?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_leftright'){?>
	navigation :<?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_leftright'){echo'true';}else{echo'false';}?>,
    navigationText : ["<img src='<?php echo WPIG_PLUGIN_URL.'assets/images/left.png';?>' class='wpinsta_arrow_left'>","<img src='<?php echo WPIG_PLUGIN_URL.'assets/images/right.png';?>' class='wpinsta_arrow_right'>"],
	<?php }?>
    pagination :<?php if($wpig_save_carousel_setting['wpinsta_carouser_pagination']=='wpinsta_carouser_pagination'){echo'true';}else{echo'false';}?>,
    paginationNumbers: false,
   transitionStyle : "goDown"
 });
 });
 <?php }?>
jQuery(document).ready(function($) {
<?php if($wpinsta_radio_settongs=='masonry_layout'){?>	
  jQuery(function(){
   jQuery('#wpinsta_masonry_blog-landing').pinterest_grid({
                no_columns: <?php echo $wpig_save_carousel_setting['wpinsta_noof_column_count_grid'];?>,
                padding_x: 15,
                padding_y: 15,
                margin_bottom: 50,
                single_column_breakpoint: 700
            });
  });
  <?php }?>
  <?php if($wpinsta_radio_settongs=='grid_layout'){?> 
function loadEmUp(next_url){
	url = next_url;
	jQuery(function() {
		jQuery("#gifimage").show();
	    jQuery.ajax({
		    	type: "GET",
		        dataType: "jsonp",
		        cache: false,
		        url: url ,
		        success: function(data) {
		  		next_url = data.pagination.next_url;
				//alert(next_url);
		  		count = <?php echo $wpig_save_carousel_setting['wpinsta_noof_column_count_grid'];?>; 
				jQuery("#gifimage").hide();
	            for (var i = 0; i < count; i++) {
						if (typeof data.data[i] !== 'undefined' ) {
						//console.log("id: " + data.data[i].id);
							jQuery(".epinsta_loadmore_li").append("<li><a href='" + data.data[i].images.standard_resolution.url +"' data-source='" + data.data[i].images.standard_resolution.url +"'><div class='wpinsta_featured_image' style='background:url("+ data.data[i].images.standard_resolution.url +");background-position: center center;background-repeat: no-repeat;background-size: cover';></div></a></li>"
						); 
						 
						}  
	      		}     
		  		jQuery("#gifimage").hide();	  	
		  		console.log("next_url: " + next_url);
		  		jQuery("#showMore").hide();
				
		  		if (typeof next_url === 'undefined' || next_url.length < 10 ) {
			  		console.log("NO MORE");
			  		jQuery("#gifimage").hide();
			  		jQuery( "#more" ).attr( "next_url", "");
					
		  		}
		  		
	      		else {
			        console.log("displaying more");
			        jQuery( "#more" ).attr( "next_url", next_url);
			        last_url = next_url;
	      		}
	        }
	    });
	});
	
}
jQuery(window).scroll(function() {
    if(jQuery(window).scrollTop() == jQuery(document).height() - jQuery(window).height()) {
         var next_url = jQuery('#more').attr('next_url');
		 jQuery("#gifimage").html('<img src="<?php echo WPIG_PLUGIN_URL.'assets/images/bx_loader.gif';?>">');
		loadEmUp(next_url);
		if(next_url=='')
		{
         jQuery("#gifimage").html('No more image');
		}
		return false;
    }
});
<?php }?>
<?php if($wpinsta_radio_settongs=='masonry_layout'){?>   
function loadEmUp_masonery(next_url){
	url = next_url;
	jQuery(function() {
		jQuery("#gifimage").show();
	    jQuery.ajax({
		    	type: "GET",
		        dataType: "jsonp",
		        cache: false,
		        url: url ,
		        success: function(data) {
		  		next_url = data.pagination.next_url;
		  		count = <?php echo $wpig_save_carousel_setting['wpinsta_noof_column_count_grid'];?>;
				jQuery("#gifimage").hide(); 
	            for (var i = 0; i < count; i++) {
						if (typeof data.data[i] !== 'undefined' ) {
						jQuery('.wpinsta_masonry_white-panel').animate({opacity:1});
							jQuery("#wpinsta_masonry_blog-landing").append("<div class='wpinsta_masonry_white-panel loadmasonery'><a  href='" + data.data[i].images.standard_resolution.url +"' data-source='" + data.data[i].images.standard_resolution.url +"'><img class='instagram-image' src='" + data.data[i].images.standard_resolution.url +"' /></a></div>"
						);  
						} 
	      		}     
		  		console.log("next_url: " + next_url);
		  		jQuery("#showMore").hide();
		  		if (typeof next_url === 'undefined' || next_url.length < 10 ) {
			  		console.log("NO MORE");
			  		jQuery("#gifimage").hide();
			  		jQuery( "#more_masonry_load" ).attr( "next_url", "");
		  		}
	      		else {
			        console.log("displaying more");
			        jQuery("#showMore").show();
			        jQuery( "#more_masonry_load" ).attr( "next_url", next_url);
			        last_url = next_url;
		      		}
	        }
	    });
	});
}
 jQuery(window).scroll(function() {
    if(jQuery(window).scrollTop() == jQuery(document).height() - jQuery(window).height()) {
         var next_url = jQuery('#more_masonry_load').attr('next_url');
		 jQuery("#gifimage").html('<img src="<?php echo WPIG_PLUGIN_URL.'assets/images/bx_loader.gif';?>">');
		loadEmUp_masonery(next_url);
		if(next_url=='')
		{
         jQuery("#gifimage").html('No more image');
		}
		return false;
    }
}); 
 <?php }?>     
});
</script>
<?php if($wpig_save_carousel_setting['wpinsta_slider_animation']=='yes'){?>
<style>
.wpinsta_masonry_white-panel img{
  -webkit-transition:all 0.5s ease-out;
  -moz-transition:all 0.5s ease-out;
  -ms-transition:all 0.5s ease-out;
  -o-transition:all 0.5s ease-out;
  transition:all 0.5s ease-out;
 
}

.wpinsta_masonry_white-panel:hover img {
  -webkit-transform:scale(1.3);
  -moz-transform:scale(1.3);
  -ms-transform:scale(1.3);
  -o-transform:scale(1.3);
  transform:scale(1.3);
}
.epinsta_loadmore_li li img{
	 -webkit-transition:all 0.5s ease-out;
  -moz-transition:all 0.5s ease-out;
  -ms-transition:all 0.5s ease-out;
  -o-transition:all 0.5s ease-out;
  transition:all 0.5s ease-out;
	}
	.epinsta_loadmore_li li:hover img{
	  -webkit-transform:scale(1.3);
  -moz-transform:scale(1.3);
  -ms-transform:scale(1.3);
  -o-transform:scale(1.3);
  transform:scale(1.3);
	}
	
	.item{overflow:hidden;}
	.item img {
	 -webkit-transition:all 0.5s ease-out;
  -moz-transition:all 0.5s ease-out;
  -ms-transition:all 0.5s ease-out;
  -o-transition:all 0.5s ease-out;
  transition:all 0.5s ease-out;
	}
	.item:hover img{
	  -webkit-transform:scale(1.3);
  -moz-transform:scale(1.3);
  -ms-transform:scale(1.3);
  -o-transform:scale(1.3);
  transform:scale(1.3);
	}

</style>
<?php }?>
<?php }
add_action('wp_footer','Wpinsta_custom_function');
?>

