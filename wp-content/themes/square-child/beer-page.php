<?php
/**
 * The template for displaying all pages.
 *
 * @package Square
 */

get_header(); ?>

<header class="sq-main-header">
	<div class="sq-container">
		
	</div>
</header><!-- .entry-header -->

<div class="sq-container">
	<div id="primary" class="content-area">

			<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main" role="main">
<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>
