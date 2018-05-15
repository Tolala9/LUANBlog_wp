<?php get_header(); ?>
<!--END HEADER -->


<!--ARCHIVE ITEMS -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">	

			<div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-2 ">

				<div class="archive-item archive-item-recentpost">
					<div class="arch-item-title"><a href="<?php echo site_url('/blog/') ?>">
						5 Recent Posts
					</a></div>
					<div class="gray-line"></div>
					<div class="arch-item-content">
						<ul>
							<?php  

							$recentPosts = new Wp_Query(array(
								'posts_per_page' => 5,

							));

							while ($recentPosts->have_posts()) {
								$recentPosts->the_post(); ?>


								<li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
								<div class="gray-line"></div>

								<?php } 
								wp_reset_postdata();
								?> 


							</ul>

						</div>
					</div>


					<div class="archive-item archive-item-popularpost">
						<div class="arch-item-title">
							<a href="#">Popular Posts</a>
						</div>
						<div class="gray-line"></div>
						<div class="arch-item-content">
							<ul>
								<li><a href="#">The first post about something...</a></li>
								<li><a href="#">The first post about something...</a></li>
								<li><a href="#">The first post about something...</a></li>
							</ul>


						</div>
					</div>


				</div>


				<div class="col-sm-4 col-sm-offset-1 col-md-2 col-md-offset-1  col-lg-2 col-lg-offset-0">


					<div class="archive-item archive-item-categories">

						<div class="arch-item-title"><a title="View all categories" href="<?php echo site_url('/categories/') ?>">
							5 Top Categories
						</a></div>
						<div class="gray-line"></div>
						<div class="arch-item-content">
							<ul>

								<?php
								$categories = get_categories( array(
									'orderby' => 'count',
									'order'   => 'DESC',
									'number'   => '5',
								) );

								foreach( $categories as $category ) {
									$category_link = sprintf( 
										'<a href="%1$s" alt="%2$s">%3$s</a>',
										esc_url( get_category_link( $category->term_id ) ),
										esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
										esc_html( $category->name )
									);
									?>

									<li><a href="<?php echo esc_url(get_category_link( $category->term_id )); ?>" title="<?php echo $category->description ?>"><?php echo esc_html( $category->name ); ?></a></li>

									<?php    
								} 

								?>

							</ul>

						</div>

					</div>



					<div class="archive-item archive-item-tags">
						<div class="arch-item-title">
							<a title="View all tags" href="<?php echo site_url('/tags') ?>">10 Top Tags</a>
						</div>
						<div class="gray-line"></div>
						<div class="arch-item-content">
							<ul>


								<?php
								$tagsArch = get_tags( array(
									'orderby' => 'count',
									'order'   => 'DESC',
									'number'   => '10',

								) );

								foreach( $tagsArch as $tag ) {
									$tag_link = sprintf( 
										'<a href="%1$s" alt="%2$s">%3$s</a>',
										esc_url( get_tag_link( $tag->term_id ) ),
										esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $tag->name ) ),
										esc_html( $tag->name )
									);
									?>

									<li>
										<a href="<?php echo esc_url(get_category_link( $tag->term_id )); ?>" title="<?php echo $tag->description ?>"><?php echo esc_html( $tag->name ); ?></a>
									</li>

									<?php    
								} 

								?>


							</ul>


						</div>
					</div>






				</div>

				<div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1  col-lg-3 col-lg-offset-0">

					<div class="archive-item archive-item-search">
						<div class="arch-item-title"><a href="<?php echo site_url('/?s') ?>">
							Search
						</a></div>
						<div class="gray-line"></div>
						<form class="archive-search-field" role="search" method="get" id="searchform"  action="<?php echo home_url( '/' ); ?>">
							<input type="text" title="Type the text" placeholder="Search..." value="" name="s" placeholder="<?php the_search_query(); ?>">
							<button class="submit" title="Begin search"><i class="fab fa-searchengin"></i></button>
						</form>

					</div>









					<div class="archive-item archive-item-socials">
						<div class="arch-item-title"><a href="<?php echo site_url('/') ?>">
							Follow
						</a></div>
						<div class="gray-line"></div>
						<div class="arch-item-content">
							<ul>
								<li><a class="folow-item" title="LinkedIn" href="https://www.linkedin.com/in/anatolii-lukavenko/" target="_blank"  ><i class="fab fa-linkedin-in"></i></a></li>
								<li><a  class="folow-item" title="Facebook" href="https://www.facebook.com/profile.php?id=100004768836692" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
								<li><a class="folow-item" title="Git" href="https://github.com/Tolala9" target="_blank"><i class="fab fa-git"></i></a></li>
								<li><a class="folow-item" title="Site" href="http://luancv.000webhostapp.com/" target="_blank"><i class="fab fa-internet-explorer"></i></a></li>
							</ul>

						</div>
					</div>

				</div>



			</div>
		</div>
	</div>
	<!-- END ARCHIVE ITEMS -->

	<?php get_footer(); ?>
