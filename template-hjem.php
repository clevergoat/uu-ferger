<?php 
/*
Template Name: Hjem
*/

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content container grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-sticky" class="main grid-x grid-padding-x small-12" role="main">
<?php
			// WP_Query arguments
			$args = array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'orderby'=> 'title',
				'order' => 'ASC',
				'meta_query' => array(
					array(
						'key' => '_wp_page_template',
						'value' => 'template-innhold.php', 
					)
				)
			);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		// do something
		
		echo '<div class="cell medium-3 text-center">';
		echo '<a href="' . get_the_permalink() . '">';
		echo '<div class="card">';
		echo '<div class="card-divider">';
		echo '<i class="fas ' . get_field(ikon) . ' fa-3x"></i>';
		echo '</div>';
		echo '<div class="card-section">';
		
        echo '<h5 class="subheader">' . get_the_title() . '</h5>';
	  echo '</div>';
	  echo '</div>';
	  
	  echo '</a>';
	  echo '</div>';
	  
	 }
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>