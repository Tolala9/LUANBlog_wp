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


its index file

<div class="posts-wrap ">
		<!-- POST ITEM -->
		

	<?php	if (have_posts()) : 
		while (have_posts()) : the_post(); ?>

<div class="post-item ">
		<!-- INFO container -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12">

						<div class="col-sm-8 col-sm-offset-2">
							<div class="post-inf">

								<div class="post-cat">
									<div class="gray-line"></div>
									<span><?php the_category(); ?></span>
								</div>

								<div class="post-date">
									<div class="gray-line"></div>
									<span class="date-wrap"><span class="day"><?php the_time('j') ?></span><span class="month">
									<?php the_time('F Y') ?></span></span>
								</div>
								<a href="<?php echo get_template_directory_uri(); ?>/post.php"><div class="post-text-wrap">
									<div class="post-text-small">
										<h3><?php the_title(); ?></h3>
										<p>
					         		<?php echo get_the_excerpt(); ?>
											
										</p>
										<div class="gray-line"></div>
										<div class="post-footer"> 
											<i class="far fa-user"></i><a href="#">By Anatolii </a>
											<div class="post-action">
												<i class="far fa-share-square"></i><i class="far fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</a>

						</div>

					</div>

				</div>
			</div>
		</div>	
		</div>	

		<?php  
			

				endwhile;

				else:

				 echo '<p>No content found</p>';

				 endif; 
				?>
			</div>


<div class="posts-wrap ">
		<!-- POST ITEM -->
		<div class="post-item ">

			<!-- IMG container -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="col-sm-8 col-sm-offset-2">

							<div class="post-img">
								<a href="<?php echo site_url('/post.php') ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/post_1_cr.png" alt=""></a>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- INFO container -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12">

						<div class="col-sm-8 col-sm-offset-2">
							<div class="post-inf">

								<div class="post-cat">
									<div class="gray-line"></div>
									<a href="archive.html"><span>Sublime Text</span></a>
								</div>

								<div class="post-date">
									<div class="gray-line"></div>
									<span class="date-wrap"><span class="day">23</span><span class="month">
									march 2018</span></span>
								</div>
								<a href="<?php echo get_template_directory_uri(); ?>/post.php"><div class="post-text-wrap">
									<div class="post-text-small">
										<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien ante, volutpat id justo in, efficitur aliquet ligula. Nulla sed lorem et eros interdum sollicitudin. Quisque tristique volutpat mollis. ac ornare turpis vulputatealiquet ligula. Nulla sed lorem et eros interdum in...
										</p>
										<div class="gray-line"></div>
										<div class="post-footer"> 
											<i class="far fa-user"></i><a href="#">By Anatolii </a>
											<div class="post-action">
												<i class="far fa-share-square"></i><i class="far fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</a>

						</div>

					</div>

				</div>
			</div>
		</div>

	</div>
	<!--END POST ITEM -->		



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
	
	















