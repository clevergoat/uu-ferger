<?php 
/*
Template Name: Innhold
*/

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content container grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-sticky" class="main small-12 large-8 medium-8 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>