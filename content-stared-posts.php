<?php  

$MyLikedPost = new Wp_Query(array(
			'post_type' => 'like',
			'meta_key' => 'liked_post_id',
			'order' => 'DESC',
			'author' => $current_user->ID,
		));

$likePostID = get_field('liked_post_id');

?>


<div class="post-item">

	
	<!-- INFO container -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">

				<div class="col-sm-8 col-sm-offset-2">


					<div class="post-inf">
						

						
							<a href="<?php the_permalink($likePostID); ?>">
								<div class="post-text-wrap">

									<div class="post-text-small">
										<h3><?php echo get_post_field('post_title', $likePostID); ?></h3>
										
										<div class="gray-line"></div>
										
										<div class="post-footer"> 

											


											

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