<?php 
/*hide admin bar*/ 
show_admin_bar(false);

// Styles & Scripts linking
function university_files()
  {
    
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('main-university-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js');
    wp_enqueue_style('highlight-css', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css');

  }
add_action('wp_enqueue_scripts', 'university_files');


//Support Features 
	function blog_features()
	{

//Menu      
		register_nav_menus(array(
			'headerMenuLocation' => __('Header Menu Location'),
      'footerMenuLocation' => __('Footer Menu Location'),
		  'mobileMenuLocation' => __('Mobile Menu Location'),
	));

//Title tab
		add_theme_support('title-tag');

// Add Featured image support
add_theme_support('post-thumbnails');
add_image_size('blog-thumbnail', 730, 294, array('center', 'center')); 


		
	}

	add_action('after_setup_theme', 'blog_features'); 



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
    $excerpt_more = apply_filters('excerpt_more', ' &raquo; &raquo; &raquo; &raquo;');
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




/*======Add info from front-page to admin appearance customize screen=========*/
function blog_front_page($wp_customize)
{
 $wp_customize->add_section('blog-front-page-info', array(
  'title' => 'Front-page Info' 
));

//h2 Name
$wp_customize->add_setting('blog-front-page-name', array(
    'default' => 'Type here Site Name'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-name-control', array(
    'label' => 'Site Name',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-name'
)));


//p Quote text
$wp_customize->add_setting('blog-front-page-title-quote', array(
    'default' => 'Type here Title Quote'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-title-quote-control', array(
    'label' => 'Title Quote',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-title-quote',
    'type' => 'textarea'
)));

//p Quote author
$wp_customize->add_setting('blog-front-page-title-quote-author', array(
    'default' => 'Type here Title Quote Author'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-title-quote-author-control', array(
    'label' => 'Title Quote Author',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-title-quote-author'
)));

//img Intro Picture
$wp_customize->add_setting('blog-front-page-intro-picture');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'blog-front-pageintro-picture-control', array(
    'label' => 'Intro Picture',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-intro-picture',
    'width' => 730,
    'height' => 292
)));

//href link for LinkedIn
$wp_customize->add_setting('blog-front-page-social-linkedin', array(
    'default' => 'Type here LinkedIn Link'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-social-linkedin-control', array(
    'label' => 'LinkedIn Link',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-social-linkedin',
    'type' => 'url'
)));

//href link for LinkedIn
$wp_customize->add_setting('blog-front-page-social-linkedin', array(
    'default' => 'Type here LinkedIn Link'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-social-linkedin-control', array(
    'label' => 'LinkedIn Link',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-social-linkedin',
    'type' => 'url'
)));

//href link for LinkedIn
$wp_customize->add_setting('blog-front-page-social-facebook', array(
    'default' => 'Type here Facebook Link'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-social-facebook-control', array(
    'label' => 'Facebook Link',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-social-facebook',
    'type' => 'url'
)));

//href link for Git
$wp_customize->add_setting('blog-front-page-social-git', array(
    'default' => 'Type here Git Link'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-social-git-control', array(
    'label' => 'Git Link',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-social-git',
    'type' => 'url'
)));

//href link for Site
$wp_customize->add_setting('blog-front-page-social-site', array(
    'default' => 'Type here Site Link'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-social-site-control', array(
    'label' => 'Site Link',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-social-site',
    'type' => 'url'
)));

// Author site name
$wp_customize->add_setting('blog-front-page-author-site', array(
    'default' => 'Type here Author site name'
  ));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'blog-front-page-author-site-control', array(
    'label' => 'Author site name',
    'section' => 'blog-front-page-info',
    'settings' => 'blog-front-page-author-site'
)));



}
add_action('customize_register', 'blog_front_page');

/*============END Add info from front-page to admin appearance customize screen===========*/














 ?>
