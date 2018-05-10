<?php get_header(); ?> 
<!--END HEADER -->


<!-- Category items  -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">		
			<div class="col-sm-8 col-sm-offset-2">


				<div class="wide-row">


					<?php
					$categories = get_categories( array(
						'orderby' => 'name',
						'order'   => 'ASC'
					) );

					foreach( $categories as $category ) {
						$category_link = sprintf( 
							'<a href="%1$s" alt="%2$s">%3$s</a>',
							esc_url( get_category_link( $category->term_id ) ),
							esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
							esc_html( $category->name )
						);
						?>

						<a class="category-item" title="<?php echo $category->description ?>" href="<?php echo esc_url(get_category_link( $category->term_id )); ?>">
							<p class="cat-count"><?php echo $category->count ?></p>
							<i class="fas fa-anchor"></i>
							<p class="cat-name"><?php echo esc_html( $category->name ); ?></p>


						</a>


						<?php    
					} 

					?>



				</div>


			</div>
		</div>
	</div>
</div>	


<!-- End Category items  -->



<!-- TOP BUTTON -->
<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
<!-- END TOP BUTTON -->

<!-- FOOTER -->
<?php get_footer(); ?>














