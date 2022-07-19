<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class themeHelpers extends App {

	public function __construct() {
		add_action('init', array($this, 'register_menu'));
		add_action('init', array($this, 'register_sidebar'));
	}

	/**
	 * Gets the path to a versioned Mix file in a theme.
	 *
	 * Use this function if you want to load theme dependencies. This function will cache the contents
	 * of the manifest file for you. This also means that you can’t work with different mix locations.
	 * For that, you’d need to use `mix_any()`.
	 *
	 * Inspired by <https://www.sitepoint.com/use-laravel-mix-non-laravel-projects/>.
	 *
	 * @since 1.0.0
	 *
	 * @param string $path The relative path to the file.
	 * @param string $manifest_directory Optional. Custom path to manifest directory. Default 'build'.
	 *
	 * @return string The versioned file URL.
	 */
	public static function mix( $path, $manifest_directory = 'public' ) {
		static $manifest;
		static $manifest_path;

		if ( ! $manifest_path ) {
			$manifest_path = get_theme_file_path( $manifest_directory . '/mix-manifest.json' );
		}

		// Bailout if manifest couldn’t be found
		if ( ! file_exists( $manifest_path ) ) {
			return get_theme_file_uri( $path );
		}

		if ( ! $manifest ) {
			// @codingStandardsIgnoreLine
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
		}

		// Remove manifest directory from path
		$path = str_replace( $manifest_directory, '', $path );
		// Make sure there’s a leading slash
		$path = '/' . ltrim( $path, '/' );
		
		// Bailout with default theme path if file could not be found in manifest
		if ( ! array_key_exists( $path, $manifest ) ) {
			return get_theme_file_uri( $path );
		}

		// Get file URL from manifest file
		$path = $manifest[ $path ];
		// Make sure there’s no leading slash
		$path = ltrim( $path, '/' );

		return get_theme_file_uri( trailingslashit( $manifest_directory ) . $path );
	}

	/**
	 * Gets the path to a versioned Mix file.
	 *
	 * The difference to the `mix()` function is that for this function, you need to provide the
	 * absolute paths to the file and the manifest directory. The benefit is that it’s more versatile
	 * and that you can use it for functionality that might not live in a theme, but in a plugin or a
	 * symlinked package.
	 *
	 * @since 1.1.0
	 *
	 * @param string $path               The full path to the file.
	 * @param string $manifest_directory The full path to the manifest directory.
	 * @param string $manifest_name      Optional. The name of the manifest file in
	 *                                   `$manifest_directory`. Default
	 *                                   `mix-manifest.json`.
	 * @return string The versioned file URL.
	 */
	public static function mix_any( $path, $manifest_directory, $manifest_name = 'mix-manifest.json' ) {
		$file_url = str_replace(
			trailingslashit( ABSPATH ),
			trailingslashit( site_url() ),
			$path
		);

		$manifest_path = trailingslashit( $manifest_directory ) . $manifest_name;

		// Bailout with file URL if manifest couldn’t be found.
		if ( ! file_exists( $manifest_path ) ) {
			return $file_url;
		}

		// @codingStandardsIgnoreLine
		$manifest       = json_decode( file_get_contents( $manifest_path ), true );
		$manifest_entry = str_replace( $manifest_directory, '', $path );

		// Make sure there’s a leading slash.
		$manifest_entry = '/' . ltrim( $manifest_entry, '/' );

		// Bailout with file URL could not be found in manifest.
		if ( ! array_key_exists( $manifest_entry, $manifest ) ) {
			return $file_url;
		}

		$file_path = $manifest[ $manifest_entry ];
		// Make sure there’s a leading slash.
		$file_path = '/' . ltrim( $file_path, '/' );

		// Add hash and return.
		return str_replace( $manifest_entry, $file_path, $file_url );
	}

	public static function getTemplateName() {
		global $template;
		$template = str_replace('.php', '', $template);
		return basename($template);
	}
	
	/**
	 * Method hex2rgba
	 *
	 * @param string $color - Hex value
	 * @param int $opacity - Opacity
	 *
	 * @return string
	 */
	public static function hex2rgba($color, $opacity = false) {
 
		$default = 'rgb(0,0,0)';
	 
		//Return default if no color provided
		if(empty($color))
			  return $default; 
	 
			//Sanitize $color if "#" is provided 
			if ($color[0] == '#' ) {
				$color = substr( $color, 1 );
			}
	 
			//Check if color has 6 or 3 characters and get values
			if (strlen($color) == 6) {
				$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
			} elseif ( strlen( $color ) == 3 ) {
				$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
			} else {
				return $default;
			}
	 
			//Convert hexadec to rgb
			$rgb =  array_map('hexdec', $hex);
	 
			//Check if opacity is set(rgba or rgb)
			if($opacity){
				// if(abs($opacity) > 1)
				// 	$opacity = 1.0;
				$output = 'rgba('.implode(",",$rgb).','. ($opacity / 100) .')';
			} else {
				$output = 'rgb('.implode(",",$rgb).')';
			}
	 
			//Return rgb(a) color string
			return $output;
	}

	public function register_menu() {
		if(function_exists('have_rows')):
			if ( have_rows( 'register_menu', 'theme_menus' ) ) :
				while ( have_rows( 'register_menu', 'theme_menus' ) ) : the_row();
					$titlu = get_sub_field('titlu');
					$slug_acf = get_sub_field('slug');
					if(empty($slug_acf)):
						$slug = $this->slug($titlu);
						update_sub_field('slug', $slug);
					else:
						$slug = $slug_acf;
					endif;

					$menu = [$slug => __( $titlu, 'TEXT_DOMAIN' )];
					register_nav_menus($menu);
				endwhile;
			else:
				// Default
				register_nav_menus( array(
					'primary-menu' => __( 'Primary Menu', 'TEXT_DOMAIN' ),
				) );
			endif;
		endif;
	}
	
	public function register_sidebar() {
		if(function_exists('have_rows')):
			if ( have_rows( 'register_sidebar', 'theme_sidebar' ) ) :
				while ( have_rows( 'register_sidebar', 'theme_sidebar' ) ) : the_row();
					$titlu = get_sub_field('titlu');
					$slug_acf = get_sub_field('slug');

					if(empty($slug_acf)):
						$slug = $this->slug($titlu);
						update_sub_field('slug', $slug);
					else:
						$slug = $slug_acf;
					endif;

					$options = array(
						'name'          => __( $titlu, 'TEXT_DOMAIN' ),
						'id'            => $slug,
						'description'   => '',
						'class'         => '',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div><!--end-widget-->',
						'before_title'  => '<h3 class="widget-title">',
						'after_title'   => '</h3>'
					);
					
					register_sidebar( $options );
				endwhile;
			else:
				// Nothing but expect default
			endif;
		endif;
	}

}

$themeHelpers = new themeHelpers();