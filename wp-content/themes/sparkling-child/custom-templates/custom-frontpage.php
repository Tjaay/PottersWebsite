<?php /* Template Name: FrontPage */ ?>
 
<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
 
            // End of the loop.
        endwhile;
        ?>
 
    </main><!-- .site-main -->
    <?php get_sidebar( 'content-bottom' ); ?>
        <!-- marketing section -->
        <div class="container marketing ">
    <div class="row services">
        <div class="service col-lg-2"></div>
        <div class="service col-lg-4">
            <img class="rounded-circle" src="<?php the_field('benefits_image');?>" class="img-fluid">
            <div>
                <?php the_field('benefits')?>
                <?php ?>
            </div>
        </div>
        <div class="service col-lg-4">
            <img class="events-image" src="<?php the_field('events_image');?>" class="img-fluid">
            <p>
                <?php the_field('events_text')?>
            </p>
        </div>
        <div class="service col-lg-2"></div>
    </div>
</div>
    </div><!-- .content-area -->

    
<?php get_sidebar(); ?>
<?php get_footer(); ?>