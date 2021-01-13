<?php
/**
 * The template about
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="about" class="home-page hero-content">
    <div class="hero-about">
      <h3>Accelerate is a srategy and marketing agency located in the hear of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
    </div>
  </div>

  <div class="main-content" role="main">
  			<?php while ( have_posts() ) : the_post(); ?>
  				<h2><?php the_title() ?></h2>
  				<?php the_content(); ?>
  			<?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->





<?php get_footer(); ?>
