<?php
/**
 * Template Name: Home Page
 *
 * @package square
 */

$square_page = '';
$square_page_array = get_pages();
if(is_array($square_page_array)){
	$square_page = $square_page_array[0]->ID;
}

if ( 'page' == get_option( 'show_on_front' ) ) {
get_header(); 
?>

<section id="top-image">
<span id="splash-text">Ruffling feathers</span>
	<img class='img-responsive' src="/wp-content/uploads/2016/11/rsz_1rsz_cocksure_bottle_pale-1-1024x954-1.png">
</section>

<section id="intro-section">
<div id="intro-holder">
	<p>To the un-appreciators and the haters, sorry, but Cocksure Brewing Co. is not for you.</p><p>But for the individual trying to escape that painful beer existence, we are here and we come with better beer.</p>
<p>
Go about your day how you want to live it, be yourself, back yourself and through your journey.</p> <p>Ruffle some feathers.</p>
<p>
Life is too short to be one of those sheep, pessimistic bores.</p><p> Surround yourself by people who think like you, like the things that you like and life will be that much more fun.
</p>
<br/>
<p>
<strong>For the makers and creators.</strong>
</p>
</div>
</section>

<section id="beer-section">
<ul id="beer-info-wrapper">
<li>
	<div id="beer-left">
		<img id="pale-ale" src="/wp-content/uploads/2016/11/rsz_1rsz_cocksure_bottle_pale-1-1024x954-1.png"/>
		<span class="overlay-yellow"></span>
	</div>
	</li>
	<li>
	<div id="beer-right"><h2>P'Ale</h2>
		<p>A fruity bite using three types of the finest malts and three bouncing flowered hops, this beer is bursting with complexity and flavour. One to savour, but one that will soon turn into two.</p>
	 	<div class="cta-button"><a href="/cocksure/the-beer/">About this beer<span class="arrows">>></span></a></div>
	 </div>
</li>
<li>
	 <div id="beer-left-second"><h2>IPA</h2>
		<p>A hoppy bite using finest malts and bouncing flavoursome flowered hops, this beer is bursting with character. One to savour, but one that will soon turn into three.</p>
	 	<div class="cta-button"><a href="/cocksure/the-beer/">About this beer<span class="arrows">>></span></a></div>
	 </div>

	</li>
	<li>
	 	<div id="beer-right-second">
		<img id="ipa" src="/wp-content/uploads/2016/11/download.jpg"/>
		<span class="overlay-green"></span>
	</div>
	</li>
</section>
<section id="charity-section">
<h2>No Clucking Way!</h2>
<img src="/wp-content/uploads/2016/11/COCKSURE_GACAH2-1.png"/>
<p>Not only do we make good beer, but, we our do our bit for others!</p>
 <div class="cta-button"><a href="/cocksure/give-a-cock-a-home/">Learn more<span class="arrows">>></span></a></div>
</section>

<section id="news-section">
<div id="news-header"><div id="news-wrapper"><img src="/wp-content/uploads/2016/11/COCKSURE_FB_PROFILE.jpg"/><div id="news-header-text"><h3 id="news-section-header">Get your fix of brew news</h3>Get the latest Cocksure news straight to your inbox</div><span class="cta-button"><a href="mailto:mail@jamestbyrne.com">Sign up<span class="arrows">>></span></a></span></div></div>

<?php if ( is_active_sidebar( 'square-above-footer' ) ) : ?>
<div class="insta-grid">
<?php dynamic_sidebar( 'square-above-footer'); ?>
	
</div>
<?php endif; ?>
</section>

<section id="contact-section"></section>

 

<?php } ?>
<?php 
get_footer(); 