
<?php /* Template Name: Contact Page */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Square
 */

get_header(); ?>

<header class="contact-main-header">

<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="contact-container">
	<div id=contact-primary" class="content-area">

			<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main" role="main">

<section id="contact">
<ul id="contact-wrapper">
<li  id="contact-left">
<div>
	<h2>Drop us a line</h2>
			<p>Cocksure Brewing Co.</p>
		<p>123 Some Street</p>
		<p>Townville</p>
		<p>SW19 ABC</p>
<div class="sq-site-social">
				<?php 
					$facebook = get_theme_mod('square_social_facebook');
					$twitter = get_theme_mod('square_social_twitter');
					$google_plus = get_theme_mod('square_social_google_plus');
					$pinterest = get_theme_mod('square_social_pinterest');
					$youtube = get_theme_mod('square_social_youtube');
					$linkedin = get_theme_mod('square_social_linkedin');
					$instagram = get_theme_mod('square_social_instagram');

					if($facebook)
						echo '<a class="sq-facebook" href="'.esc_url( $facebook ).'" target="_blank"><i class="fa fa-facebook"></i></a>';

					if($twitter)
						echo '<a class="sq-twitter" href="'.esc_url( $twitter ).'" target="_blank"><i class="fa fa-twitter"></i></a>';

					if($google_plus)
						echo '<a class="sq-googleplus" href="'.esc_url( $google_plus ).'" target="_blank"><i class="fa fa-google-plus"></i></a>';

					if($pinterest)
						echo '<a class="sq-pinterest" href="'.esc_url( $pinterest ).'" target="_blank"><i class="fa fa-pinterest"></i></a>';

					if($youtube)
						echo '<a class="sq-youtube" href="'.esc_url( $youtube ).'" target="_blank"><i class="fa fa-youtube"></i></a>';

					if($linkedin)
						echo '<a class="sq-linkedin" href="'.esc_url( $linkedin ).'" target="_blank"><i class="fa fa-linkedin"></i></a>';

					if($instagram)
						echo '<a class="sq-instagram" href="'.esc_url( $instagram ).'" target="_blank"><i class="fa fa-instagram"></i></a>';
				?>
				</div>

</div></li>
<li id="contact-right">
<div>

<form name="htmlform" method="post" action="toyousender.php">

<input type="text" name="first_name" placeholder="Full Name" required>
  
<input  type="email" name="email" placeholder="Email" required>

<input  type="email" name="email" placeholder="Phone" required>
  
<textarea name="comments" placeholder="Message" required ></textarea>
  
<button name="send" type="submit" class="button submit">Send</button>
  
</form>
 
  </div>
  </li>
  </ul>
 </section>
<section id="careers-section">
  <div id="careers-wrapper">
  <h2>Come work for us</h2>
  Head Brewer
  </div>
  </section>
			

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>