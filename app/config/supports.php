<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

if ( ! isset( $content_width ) ) $content_width = 640;

class themeSupports extends App {

	public function __construct() {
		add_action('after_setup_theme', array($this, 'themeSupports'), 6);
	}

	public function themeSupports() {
		/*
		* Make theme available for translation.
		* Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
		* If you're building a theme based on Twenty Seventeen, use a find and replace
		* to change 'twentyseventeen' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'TEXT_DOMAIN' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style',
		) );
		/*
		* Enable support for Post Formats.
		*
		* See: https://codex.wordpress.org/Post_Formats
		*/
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		) );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );
		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'featured-image', 540, 358, true );
		add_image_size( 'produse-galerie-thumb', 105, 70, true );
	}


}

$themeSupports = new themeSupports();