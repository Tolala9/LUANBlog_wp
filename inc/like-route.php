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



function createLike(){
	return 'trying to create like';
}

function deleteLike(){
	return 'trying ot delete like';
}