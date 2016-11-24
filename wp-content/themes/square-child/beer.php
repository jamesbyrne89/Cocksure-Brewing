<?php /* Template Name:The Beer */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Square
 */

get_header(); ?>
<section id="beer-details-section">
<img id="pale-ale-feature" src="/wp-content/uploads/2016/11/rsz_1rsz_cocksure_bottle_pale-1-1024x954-1.png"/>
<!-- .entry-header -->
</section>
<div class="beer-container">
	<div id="beer-primary" class="content-area">
<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>
	

<section id="beer-info-section">

<div id="beer-info-left"><h2>P'Ale</h2><p>A fruity bite using three types of the finest malts and three bouncing flowered hops, this beer is bursting with complexity and flavour. One to savour, but one that will soon turn into two.</p></div>
<div id="beer-info-right">Tasting notes go here
 </div>
</section>
		

	</div><!-- #primary -->

</div>

<?php get_footer(); ?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}

</script>
