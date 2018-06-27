<?php get_header(); ?> 
<!--END HEADER -->

<div class="posts-wrap ">
	<!-- POST ITEM --> 
	<ul>


	<?php	

	if ( is_user_logged_in() ){

		global $current_user;
		wp_get_current_user();

		$MyLikedPost = new Wp_Query(array(
			'posts_per_page' => -1,
			'post_type' => 'like',
			'meta_key' => 'liked_post_id',
			'order' => 'DESC',
			'author' => $current_user->ID,
		));

		if (have_posts()){
			while ($MyLikedPost->have_posts()) {
				$MyLikedPost->the_post();

				get_template_part('content-stared-posts');

			}
		
		}


	} else {
		get_template_part('content-notfound');
	}


	?>

</ul>
</div>


<!-- Footer -->

<?php get_footer(); ?>













