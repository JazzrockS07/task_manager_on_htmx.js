<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class singleBlog extends App {


	/**
	 * Method title
	 *
	 * @param int $post_id [explicite description]
	 * @param int $size [explicite description]
	 * @param bool $anchor [explicite description]
	 *
	 * @return HTML
	 */
	public static function title(int $post_id = \null, int $size = 1, bool $anchor = false) {
		$output = '<h' . $size . ' class="title">';
		if($anchor) $output .= '<a href="' . get_permalink($post_id) . '">';
		$output .= get_the_title($post_id);
		if($anchor) $output .= '</a>';
		$output .= '</h' . $size . '>';
		echo $output;
	}
		
	/**
	 * Method featured_image
	 *
	 * @param int $post_id [explicite description]
	 * @param string $size [explicite description]
	 * @param bool $anchor [explicite description]
	 *
	 * @return HTML
	 */
	public static function featured_image(int $post_id = \null, string $size = 'featured-image', bool $anchor = false) {
		if(!has_post_thumbnail($post_id)) return;
		$thumb_id = get_post_thumbnail_id($post_id);
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, $size, true);
		$thumb_url = $thumb_url_array[0];


		$output = '<div class="featured-image">';
		if($anchor) $output .= '<a href="' . get_permalink($post_id) . '">';
		$output .= '<img src="' . $thumb_url . '" alt="' . get_the_title($post_id) . '">';
		if($anchor) $output .= '</a>';
		$output .= '</div>';
		
		echo $output;
	}
	
	/**
	 * Method date
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return HTML with date formatted
	 */
	public static function date(int $post_id = \null) {
		printf('<span class="date">%s</span>', get_the_date('d.m.Y', $post_id));
	}
	
	/**
	 * Method author
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return HTML
	 */
	public static function author(int $post_id = \null) {
		$post = get_post($post_id);
		$display_name = get_the_author_meta( 'display_name' , $post->post_author); 
		printf('<span class="author">%s</span>', $display_name);
	}
	
	/**
	 * Method category
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return HTML
	 */
	public static function category(int $post_id = \null) {
		$cat = get_the_category($post_id);
		printf('<span class="category"><a href="%s">%s</a></span>', get_term_link($cat[0]->term_id), $cat[0]->name);
	}


	public static function content(int $post_id = \null) {
		printf('<div class="content">%s</div>', wpautop(get_the_content( $post_id )));
	}	
	/**
	 * Method excerpt
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return HTML
	 */
	public static function excerpt(int $post_id = \null) {
		printf('<div class="excerpt">%s</div>', wpautop(get_the_excerpt( $post_id )));
	}

	private static function section_img_left_content_right(int $acf_query = \null) {
		$continut = get_sub_field( 'continut'. $acf_query );
		$imagine = get_sub_field( 'imagine'. $acf_query );
		if($imagine || $continut):
		?>
		<section class="section-<?= get_row_layout() ?>">
			<div class="section-container">
				<div class="container">
					<div class="row">
						<?php if ( $imagine ) : ?><div class="col-12 md:col-<?php if ( $continut ) : ?>6<?php else: ?>12<?php endif; ?> main-content"><img src="<?= $imagine['url']; ?>" alt="<?= $imagine['alt']; ?>" /></div><!-- End: main-content --><?php endif; ?>
						<div class="col-12 md:col-<?php if ( $imagine ) : ?>6<?php else: ?>12<?php endif; ?> main-content"><?= $continut; ?></div><!-- End: main-content -->
					</div><!-- End: row -->
				</div><!-- End: container -->
			</div>
		</section><!-- End: section -->
		<?php
		endif;
	}
	private static function section_img_right_content_left(int $acf_query = \null) {
		$continut = get_sub_field( 'continut'. $acf_query );
		$imagine = get_sub_field( 'imagine'. $acf_query );
		if($imagine || $continut):
		?>
		<section class="section-<?= get_row_layout() ?>">
			<div class="section-container">
				<div class="container">
					<div class="row md:flex-row-reverse">
						<?php if ( $imagine ) : ?><div class="col-12 md:col-<?php if ( $continut ) : ?>6<?php else: ?>12<?php endif; ?> main-content"><img src="<?= $imagine['url']; ?>" alt="<?= $imagine['alt']; ?>" /></div><!-- End: main-content --><?php endif; ?>
						<div class="col-12 md:col-<?php if ( $imagine ) : ?>6<?php else: ?>12<?php endif; ?> main-content"><?= $continut; ?></div><!-- End: main-content -->
					</div><!-- End: row -->
				</div><!-- End: container -->
			</div>
		</section><!-- End: section -->
		<?php
		endif;
	}

	private static function sections(int $post_id = \null) {
		
			?>
			<div class="sections">

			<div class="container">
				<div class="row">
					<div class="col-12 md:col-12 main-content">
						<?php the_content($post_id); ?>
					</div>
				</div>	
			</div>
			<?php 
			if ( have_rows( 'sectiuni' ) ):
			while ( have_rows( 'sectiuni' ) ) : the_row();
				if ( get_row_layout() == 'imagine_stanga_content_dreapta' ) :
					self::section_img_left_content_right();
				elseif ( get_row_layout() == 'imagine_dreapta_continut_stanga' ) :
					self::section_img_right_content_left();
				endif;
			endwhile; 
		
		endif;?></div><!-- End: sections -->
	<?php
	}

	public static function render() {
		if(have_posts()):
			while(have_posts()): the_post();
				$post_id = get_the_ID();
				self::sections($post_id);
			endwhile;
		endif;
	}

}