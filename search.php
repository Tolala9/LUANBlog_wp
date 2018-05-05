<?php 

get_header();

if (have_posts()) : ?>

<!-- for searching -->
<!-- Archive TITLE -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">

				<div class="col-sm-4 col-sm-offset-2 col-xs-8 col-xs-offset-2 ">
					<div class="search-page-block-info">
						<h1 class="search-page-block-info__title">Search Results For: <?php the_search_query(); ?></h1>
						<hr>
						<div class="search-page-block-info__intro">
							<p>Bellow you can see the result of your search query, that contains all related info with your query.</p>
						</div>
					</div> 
				</div> 

				<div class="col-sm-4 col-sm-offset-0  col-xs-8 col-xs-offset-2 ">
					<div class="search-page-block-action">
						<h1 class="search-page-block-action__title">You can search again</h1>
						<hr>
						<div class="search-page-block-action__box">
							<form class="search-field-large" role="search" method="get" id="searchform"  action="<?php echo home_url( '/' ); ?>">
								<input type="text" placeholder="Search..." title="Type the text" value="" name="s" placeholder="<?php the_search_query(); ?>">
								<button class="submit" title="Begin search"><i class="fab fa-searchengin"></i></button>
							</form>
						</div>
					</div> 
				</div> 

			</div> 
		</div> 
	</div> 
	<!--END Archive TITLE -->

<div class="posts-wrap ">
	<!-- POST ITEM -->


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
												<i class="far fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">By <?php the_author() ?></a>
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
	?>
		<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="col-sm-8 col-sm-offset-2 col-xs-12">
					<div class="content-not-found-container">
						<h1>Sorry</h1>
						<i class="fas fa-align-left"></i>
						<h2>Content not found</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  echo '<p>No content found</p>'; -->
<?php
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