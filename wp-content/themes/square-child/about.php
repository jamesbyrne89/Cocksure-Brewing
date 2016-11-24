<?php /* Template Name: About */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Square
 */

get_header(); ?>

<header class="sq-main-header">
<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
	<div class="about-container">
		
	</div>
</header><!-- .entry-header -->

<div class="about-container">
<div id="post-wrapper">
	<div id="about-primary" class="content-area">

			<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main" role="main">

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
</div>

<?php get_footer(); ?>
