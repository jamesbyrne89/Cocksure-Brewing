<?php
/**
 * The template for displaying all single posts.
 *
 * @package Square
 */

get_header(); ?>

<header class="single-main-header"><main id="main" class="site-main" role="main">
<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
		</main><!-- #main -->
	<div class="sq-container">
	
	</div>
</header><!-- .entry-header -->

<div class="single-sq-container">
	
	<div id="single-primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
		
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>
