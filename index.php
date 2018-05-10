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

	else:

		get_template_part('content-notfound');

	endif; 
	?>
</div>






<!-- PAGINATION  -->
<div class="pagination-wrap">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 ">


				<div class="col-xs-12 col-sm-4 col-sm-offset-4">
					<div class="pagination-items">


						<div class="prev-btn">
							<a href="#"><span>Prev</span></a>
						</div>



						<div class="num-btn">
							<ul>
								<li><a href="#"><span>1</span></a></li>
								<li class="active"><a href="#"><span>2</span></a></li>
								<li><a href="#"><span>3</span></a></li>
								<li><a href="#"><span>4</span></a></li>
								<li><a href="#"><span>5</span></a></li> 

							</ul>
						</div>



						<div class="next-btn">
							<a href="#"><span>Next</span></a>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGINATION  -->   

<!-- TOP BUTTON -->
<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
<!-- END TOP BUTTON --> 

<!-- Footer -->

<?php get_footer(); ?>













