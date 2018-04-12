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
                    <h3 class="event-title text-left">
                        <?php the_field('eventOneTitle')?>
                    </h3>
                    <h5 class="indigo-text text-left">
                        <?php the_field('eventOneDate') ?>
                    </h5>
                    <p class="card-text text-left">
                        <?php the_field('eventOneDesc') ?>
                    </p>
                    <h3 class="event-title">
                        <?php the_field('eventTwoTitle')?>
                    </h3>
                    <h5 class="indigo-text">
                        <?php the_field('eventTwoDate') ?>
                    </h5>
                    <p class="card-text">
                        <?php the_field('eventTwoDesc') ?>
                    </p>
                    <h3 class="event-title">
                        <?php the_field('eventThreeTitle')?>
                    </h3>
                    <h5 class="indigo-text">
                        <?php the_field('eventThreeDate') ?>
                    </h5>
                    <p class="card-text">
                        <?php the_field('eventThreeDesc') ?>
                    </p>
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
                    <h3 class="event-title">
                        <?php the_field('workshopOneTitle'); ?>
                    </h3>
                    <h5 class="indigo-text">
                        <?php the_field('workshopOneDate'); ?>
                    </h5>
                    <p class="card-text">
                        <?php the_field('workshopOneDesc'); ?>
                    </p>
                    <h3 class="event-title">
                        <?php the_field('workshopTwoTitle'); ?>
                    </h3>
                    <h5 class="indigo-text">
                        <?php the_field('workshopTwoDate'); ?>
                    </h5>
                    <p class="card-text">
                        <?php the_field('workshopTwoDesc'); ?>
                    </p>
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