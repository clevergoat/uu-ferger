<?php 
/*
Template Name: Figurliste
*/

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content container">
	
		    <main id="main-sticky" class="main grid-x grid-padding-x small-12" role="main">
			<?php 
				$wpb_all_query = new WP_Query( array (
					'post_type'=>'page',
					'post_status'=>'publish',
					'posts_per_page'=>-1
					));
			?>
			
			<?php if ( $wpb_all_query->have_posts() ) : ?>
			<ul class="no-bullet bildelist">
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<?php
					$images =& get_children( array (
						'post_parent' => $post->ID,
						'post_type' => 'attachment',
						'post_mime_type' => 'image',
						'orderby'=> 'title',
						'order' => 'ASC'
					));

					if ( empty($images) ) {
						// no attachments here
					} else {
						foreach ( $images as $attachment_id => $attachment ) {
							if ( current(explode(' ', wp_get_attachment_caption( $attachment_id, 'caption') ) ) == 'Figur') {
							echo '<li>';
							echo '<a href="' . get_the_permalink() . '">' . wp_get_attachment_caption( $attachment_id, 'caption' ) . '</a>';
							echo '</li>';
						}
					}
					}
				?>
			<?php endwhile; ?>
			</ul>
			
				<?php wp_reset_postdata(); ?>
			
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>