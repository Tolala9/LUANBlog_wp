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


its archive file


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
									single_tag_title('All Post with Tag / ');
								} elseif (is_author()) {
									the_post();
									echo 'All Post by / ' . get_the_author();
									rewind_posts();
								} elseif (is_day()) {
									echo 'Daily Archives: ' . get_the_date();
								} elseif (is_month()) {
									echo 'Monthly Archives: ' . get_the_date('F Y');
								} elseif (is_year()) {
									echo 'Monthly Archives: ' . get_the_date('Y');
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
			while (have_posts()) : the_post(); ?>

				<div class="post-item <?php if ( has_post_thumbnail() ) {
					?>
					has-thumbnail <?php } ?>
					">

					<!-- IMG container -->
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="col-sm-8 col-sm-offset-2">

									<div class="post-img">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('blog-thumbnail');?>
										</a>
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
											<span><?php the_category(); ?></span>
										</div>

										<div class="post-date">
											<div class="gray-line"></div>
											<span class="date-wrap"><span class="day"><?php the_time('j') ?></span><span class="month">
												<?php the_time('F Y') ?></span></span>
											</div>
											<a href="<?php the_permalink(); ?>">
												<div class="post-text-wrap">

													<div class="post-text-small">
														<h3><?php the_title(); ?></h3>
														<p>
															<?php echo get_the_excerpt(); ?>

														</p>
														<div class="gray-line"></div>
														<div class="post-footer"> 

															<div class="post-author">
																<i class="far fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">By <?php the_author() ?></a>
															</div>

															<div class="post-tags">
																<div class="post-tags-icon">
																	<a href="#"><i class="fas fa-tags"></i></a>
																</div>
																<div class="post-tags-content">
																	<?php the_tags('' ,'' ,''); ?>
																</div>
															</div>

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
						<!-- </div>	 -->
					</div>

					<?php  


				endwhile;

			else:

				echo '<p>No content found</p>';

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