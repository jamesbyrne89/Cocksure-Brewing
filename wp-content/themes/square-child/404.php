

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Square
 */

get_header(); ?>

<header class="sq-404-header">
<div class="sq-404-container">
		<h1 class="sq-main-title"><?php esc_html_e( '404', 'square' ); ?></h1>
	</div>

	<p><?php esc_html_e( 'Yikes! Sorry, we couldn&rsquo;t find that page.', 'square' ); ?></p>
<div class="cta-button"><a href="/cocksure/the-beer/">Get me home<span class="arrows">>></span></a></div>
</div>

</header><!-- .entry-header -->




<?php get_footer(); ?>
