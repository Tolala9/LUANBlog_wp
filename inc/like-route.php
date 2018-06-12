<?php  

add_action('rest_api_init', 'BlogLikeRoutes');

function BlogLikeRoutes() {

	register_rest_route('blog/v1', 'manageLike', array(
		'methods' => 'POST',
		'callback' => 'createLike'
	));

	register_rest_route('blog/v1', 'manageLike', array(
		'methods' => 'DELETE',
		'callback' => 'deleteLike'
	));
}



function createLike($data){

	if (is_user_logged_in()) {

		$post =	sanitize_text_field($data['postId']);

		$existQuery =new Wp_Query(array(
			'author' => get_current_user_id(),
			'post_type' => 'like',
			'meta_query' => array(
				array(
					'key' => 'liked_post_id',
					'compare' => '=',
					'value' => $post

				)
			)
		));

		if ($existQuery->found_posts == 0 AND get_post_type($post) == 'post') {
			return wp_insert_post(array (
				'post_type' => 'like',
				'post_status' => 'publish',
				'post_title' => 'Like post',
				'meta_input' => array(
					'liked_post_id' => $post
				)
			));
		} else {
			die("Invalid post id");
		}


	} else {
		die("Only logged in users can create a like.");
	}


}

function deleteLike($data){
	$starId = sanitize_text_field($data['like']);

	if (get_current_user_id() == get_post_field('post_author', $starId) AND get_post_type($starId) == 'like') {
		wp_delete_post($starId, true); //true-skip the trash
		return 'Congrats, like deleted.';
	} else {
		die("You do not have permission to delete that.");
	}
}