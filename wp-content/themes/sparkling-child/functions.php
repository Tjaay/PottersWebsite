<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function ala_hidetitle_class($classes) {
  if (  is_front_page() ) :
    $classes[] = 'hidetitle';
    return $classes;
  endif;
    return $classes; 
}
add_filter('post_class', 'ala_hidetitle_class');

if ( ! function_exists( 'sparkling_featured_potter_slider' ) ) :
	/**
 * Featured image slider, displayed on front page for static page and blog
 */
	function sparkling_featured_potter_slider() {
		if ( is_front_page()) {
			echo '<div class="flexslider">';
			echo '<ul class="slides">';
			
			$count = 5;
			$slidecat1 = 190;

			$query1 = new WP_Query( array(
				'cat' => $slidecat1,
				'posts_per_page' => $count,
				'meta_query' => array(
			        array(
			         'key' => '_thumbnail_id',
			         'compare' => 'EXISTS'
			        ),
			    ),
			) );
			if ( $query1->have_posts() ) :
				while ( $query1->have_posts() ) : $query1->the_post();
						echo '<li class="potter"><a href="' . get_permalink() . '">';
					
					if ( (function_exists( 'has_post_thumbnail' )) && ( has_post_thumbnail() ) ) :
						if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'photon' ) ) {
							$feat_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
							$args = array(
								'resize' => '1440,550',
							);
							$photon_url = jetpack_photon_url( $feat_image_url[0], $args );
							echo '<img src="' . $photon_url . '">';
						} else {
							  echo get_the_post_thumbnail( get_the_ID(), 'activello-slider' );
						}
					endif;

					echo '<div class="flex-caption">';
					if ( get_the_title() != '' ) { echo '<h2 class="entry-title">Featured Potter</h2>';
					}
					if ( get_the_excerpt() != '' ) { echo '<div class="excerpt">' . get_the_excerpt() . '</div>';
					}
					echo '</div>';
					echo '</a></li>';
			  endwhile;
				endif;
			wp_reset_postdata();
			echo '</ul>';
			echo ' </div>';
		}// End if().
	}
endif;
?>