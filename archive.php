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


	<?php	if (have_posts()) : ?>

		<!-- Archive TITLE -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="col-sm-4 col-sm-offset-2 col-xs-8 ">
						<div class="archive-page-block">
							<h1 class="archive-page-block__title">
								<?php 
								if (is_category()) {
									// single_cat_title();
									single_cat_title('All Posts from Category / ');
								} elseif (is_tag()) {
									single_tag_title('All Posts with Tag / ');
								} elseif (is_author()) {
									the_post();
									echo 'All Posts by / ' . get_the_author();
									rewind_posts();
								} elseif (is_day()) {
									echo 'Daily Archives: ' . get_the_date();
								} elseif (is_month()) {
									echo 'Monthly Archives: ' . get_the_date('F Y');
								} elseif (is_year()) {
									echo 'Year Archives: ' . get_the_date('Y');
								} else {
									echo 'Archives:';
								}
								?>
							</h1>  
							<hr>
							<div class="archive-page-block__intro">
								<p>
									<?php
									if (is_category()) {
										$catID = get_the_category();
										echo category_description( $catID[0] );  
									} elseif (is_day()) {
										echo ' All Posts posted on this Day';
										} elseif (is_month()) {
										echo ' All Posts posted on this Month';
										} elseif (is_year()) {
										echo ' All Posts posted on this Year';
									} elseif (is_tag()) {
									echo tag_description();
									} if (get_the_author_meta( 'description' )):
											the_author_meta('description');

										endif;
									
									?></p>

								</div>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<!--END Archive TITLE -->


			<?php
			while (have_posts()) : the_post(); 

				get_template_part('content-blog');


				endwhile;

			else:

				get_template_part('content-notfound');

			endif; 
			?>
		</div>






		

		<!-- TOP BUTTON -->
		<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
		<!-- END TOP BUTTON --> 

		<!-- Footer -->

		<?php get_footer(); ?>