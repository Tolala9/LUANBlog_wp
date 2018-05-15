<?php get_header(); ?> 
<!--END HEADER -->


<!-- Category items  -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">		
			<div class="col-sm-8 col-sm-offset-2">


				<div class="wide-row-tags">


					<?php
					$tags = get_tags( array(
						'orderby' => 'name',
						'order'   => 'ASC'
					) );

					foreach( $tags as $tag ) {
						$tag_link = sprintf( 
							'<a href="%1$s" alt="%2$s">%3$s</a>',
							esc_url( get_tag_link( $tag->term_id ) ),
							esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $tag->name ) ),
							esc_html( $tag->name )
						);
						?>

						<a class="tag-item" title="<?php echo $tag->description ?>" href="<?php echo esc_url(get_category_link( $tag->term_id )); ?>">
							<p class="tag-count"><?php echo $tag->count ?></p>
							<i class="fas fa-tag"></i>
							<p class="tag-name"><?php echo esc_html( $tag->name ); ?></p>


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

<!-- FOOTER -->
<?php get_footer(); ?>














