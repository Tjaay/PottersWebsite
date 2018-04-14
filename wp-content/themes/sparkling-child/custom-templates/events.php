<?php /* Template Name: Events */ ?>
 
<?php get_header(); ?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="event-card-container">
            <div class="view overlay">
                <img src="<?php the_field('upcomingEventsPage');?>" class="img-fluid">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card card-cascade wider reverse my-4">
                <div class="card-body">
                    <h2 class="card-title">
                        <strong>Upcoming Events</strong>
                    </h2>
                    <?php the_field('upcoming_events_text');?>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>

        <br>
        <br>

        <div class="event-card-container">
            <div class="view overlay">
                <img src="<?php the_field('upcomingWorkshopsImg');?>" class="img-fluid">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card card-cascade wider reverse my-4">
                <div class="card-body">
                    <h2 class="card-title">
                        <strong>Upcoming Workshops</strong>
                    </h2>
                    <?php the_field('upcoming_workshops_text');?>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>

    </main>
    <!-- .site-main -->
</div>
<!-- .content-area -->
 
<?php get_footer(); ?>