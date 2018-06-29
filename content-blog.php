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
												<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="far fa-user"></i></a><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">By <?php the_author() ?></a>
											</div>

											<div class="post-tags">
												<div class="post-tags-icon">
													<a href="<?php echo site_url('/tags') ?>"><i class="fas fa-tags"></i></a>
												</div>
												<div class="post-tags-content">
													<?php the_tags('' ,'' ,''); ?>
												</div>
											</div>
											
											<div class="post-action">

												<div class="post-box">
													<i class="far fa-share-square" title="Share"></i>
													<div class="post-box-wrap hidden">
														<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
															ADDTOANY_SHARE_SAVE_KIT( array( 
																'buttons' => array( 
																	'facebook', 
																	'copy_link',
																	'pocket', 
																),
															) );
														} 
														?> 
													</div>
												</div>







												<?php 
												$likeCount =new Wp_Query(array(
													'post_type' => 'like',
													'meta_query' => array(
														array(
															'key' => 'liked_post_id',
															'compare' => '=',
															'value' => get_the_ID()

														)
													)
												));

												$existStatus = 'no';

												if (is_user_logged_in()) {

													$existQuery =new Wp_Query(array(
														'author' => get_current_user_id(),
														'post_type' => 'like',
														'meta_query' => array(
															array(
																'key' => 'liked_post_id',
																'compare' => '=',
																'value' => get_the_ID()

															)
														)
													));

													if ($existQuery->found_posts) {
														$existStatus = 'yes';
													}
												}



												?><?php  ?>

												<span class="star-box" data-star="<?php echo $existQuery->posts[0]->ID; ?>" data-post="<?php the_ID(); ?>" data-exist="<?php  echo $existStatus;?>">
													<i class="far fa-star"></i>
													<i class="fas fa-star"></i>
													<span class="star-count"><?php echo $likeCount->found_posts; ?></span>


												</span>
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