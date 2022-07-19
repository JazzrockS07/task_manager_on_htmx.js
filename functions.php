<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // Compiled Bootstrap
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/lib/bootstrap.min.css'));
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css', array('parent-style'), $modified_bootscoreChildCss);

	// style.css
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);

  //htmx.min.js
	wp_enqueue_script('htmx-js', get_stylesheet_directory_uri() . '/js/htmx.min.js', false, '', true);
}

define('PATH', get_stylesheet_directory( ));
define('URL', get_stylesheet_directory_uri(  ));

define('INCLUDES_PATH', PATH . '/inc');
define('INCLUDES_URI', URL . '/inc');

// Define path and URL to the ACF plugin.
define( 'ACF_PATH', INCLUDES_PATH . '/acf/' );
define( 'ACF_URL', INCLUDES_URI . '/acf/' );
define( 'ACFE_PATH', INCLUDES_PATH . '/acf-extended/');
define( 'ACFE_URL', INCLUDES_URI . '/acf-extended/');

include_once('app/app.php');
include_once('inc/acf/acf.php' );
include_once('inc/acf-extended/acf-extended.php' );
include_once('inc/acf-theme-code-pro/acf_theme_code_pro.php');


/*
 * auto allow comments for post_type = task
 */

add_filter( 'comments_open', 'my_comments_open', 10, 2 );

function my_comments_open( $open, $post_id ) {

	$post = get_post( $post_id );
	if ( 'task' == $post->post_type )
		$open = true;
	return $open;
}