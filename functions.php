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

// Customize excerpt word count length
	// function custom_excerpt_length()
	// {
	// 	return 25;
	// }

	// add_filter('excerpt_length', 'custom_excerpt_length');

// Customize excerpt 
function new_wp_trim_excerpt($text) {
  $raw_excerpt = $text;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text, '');
    $excerpt_length = apply_filters('excerpt_length', 60);
    $excerpt_more = apply_filters('excerpt_more', 'read more');
    $words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
    if ( count($words) > $excerpt_length ) {
      array_pop($words);
      $text = implode(' ', $words);
      $text = $text . $excerpt_more;
      } 
    else {
      $text = implode(' ', $words);
      }
    }
  return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);
  }
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');



 ?>