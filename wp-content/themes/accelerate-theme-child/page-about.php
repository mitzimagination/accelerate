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

<section class="about-page">

	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
				<h1><span class="color-scheme">Accelerate</span> is a marketing and strategy company located
                in the heart of NYC.  We build business by making our clients
                visible and their customers smile.</h1>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->

<section class="about-page-services-title">

    <div class="services-title">
    
        <h3>OUR SERVICES</h3>
        <p>We take pride in our clients and the content we create
        for them.<br>Here's a brief overview of our offered services.</p>

    </div><!--.site_content-->


</section><!--.about_page-->

<section class="services">
    <div class="site-content">
     
       <?php query_posts('posts_per_page=4&post_type=services'); ?>
                 
       <?php while ( have_posts() ) : the_post(); 
                
                $image_1 = get_field("image_1");
                $size = "medium";?>

        <div class ="about-services-posts">
        <div class ="about-services-images">

        <?php echo wp_get_attachment_image($image_1, $size); ?></div>

        <div class ="about-services-content">
        <div class ="services-post-title"><?php the_title(); ?></div>

        <?php the_content(); ?></div>
        
            </div>

            </div>
                
           
        <?php endwhile; //end of the loop. ?>
        <?php wp_reset_query(); // resets the altered query back to the original ?>

</section>



<?php get_footer(); ?>