
<?php /* Template Name: Give A Cock A Home */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Square
 */

get_header(); ?>

<header class="gacah-main-header">
<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
	
	</div>
</header><!-- .entry-header -->

<div class="gacah-container">
	<div id=gacah-primary" class="content-area">

			<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main" role="main">

<section id="gacah-one">



  </section>
			

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>