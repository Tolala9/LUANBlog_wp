<?php 
/*hide admin bar*/ 
// show_admin_bar(false);





// function blog_files()
// {
// 	wp_enqueue_script('main-blog-js', get_theme_file_uri('/js/scripts.min.js'), NULL, microtime(), true);
	
// 	wp_enqueue_style('main-blog-styles', get_stylesheet_uri() , NULL, microtime());
// }
// add_action('wp_enqueue_scripts', 'blog_files');

 
	function blog_features()
	{
		register_nav_menus(array(
			'headerMenuLocation' => __('Header Menu Location'),
		  'footerMenuLocation' => __('Footer Menu Location'),
	));
		add_theme_support('title-tag');

		
	}

	add_action('after_setup_theme', 'blog_features'); 




 ?>