<?php get_header(); ?> 
	<!--END HEADER -->
	hello

	<?php	if (have_posts()) :
		while (have_posts()) : the_post(); 

			the_content();

				endwhile;

				else:

				 echo '<p>No content found</p>';

				 endif; 
				?>



<!-- Footer -->
<?php get_footer(); ?>
	
	















