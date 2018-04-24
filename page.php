<?php get_header(); ?> 
	<!--END HEADER -->

	<?php	if (have_posts()) :
		while (have_posts()) : the_post(); 

			the_content();

				endwhile;

				else:

				 echo '<p>No content found</p>';

				 endif; 
				?>


				 

<!-- TOP BUTTON -->
<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
<!-- END TOP BUTTON -->	

<!-- Footer -->
<?php get_footer(); ?>
	
	















