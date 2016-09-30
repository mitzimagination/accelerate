<?php
/**
 * The template for displaying the homepage
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


<section class="home-page">

	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
<section class="recent-posts">
    <div class="site-content">
        <div class="blog-post">
            <h4>From the blog</h4>
             <?php while ( have_posts() ) : the_post(); ?>
       <h2><?php the_title(); ?></h2>
       <?php the_excerpt(); ?> 
       <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
     <?php endwhile; ?> 
        </div>
    </div>
</section>

<?php get_footer(); ?>