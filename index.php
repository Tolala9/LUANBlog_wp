<?php get_header(); ?> 
<!--END HEADER -->
<!-- PAGE TITLE -->
<div class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="title-flex">
					<div class="blog-title">blog</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE TITLE -->





<div class="posts-wrap ">
	<!-- POST ITEM --> 


	<?php	if (have_posts()) : 
		while (have_posts()) : the_post(); 

			get_template_part('content-blog');

		endwhile; 

			get_template_part('content-pagination');

		
	else:

			get_template_part('content-notfound');

	endif; 
	?>
</div>


<!-- Footer -->

<?php get_footer(); ?>













