<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="unknown-page">

	<div class="site-content">
           <h1>Oops! It looks like you need to call a cab because walking looks difficult on this page.</h1>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='unknown-hero'>
               
				<?php the_content(); ?>
              
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site content -->
</section><!-- .home-page -->

<?php get_footer(); ?>