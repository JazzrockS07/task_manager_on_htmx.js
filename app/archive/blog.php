<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class archiveBlog extends App {

	/**
	 * Method card_blog
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return HTML
	 */
	public static function card_blog(int $post_id = \null) {
		?>
		<div class="card-blog">
			<?= singleBlog::featured_image($post_id); ?>
			<div class="inner">
				<div class="info">
					<div class="left"><div class="inner"><?php 
						singleBlog::date($post_id); 
						singleBlog::author($post_id); 
					?></div><!-- End: inner --></div><!-- End: left -->
					<div class="right"><?php singleBlog::category($post_id); ?></div><!-- End: right -->
				</div><!-- End: header -->
				<div class="body"><?php 
					singleBlog::title($post_id, 3, true);
					singleBlog::excerpt($post_id);
				?></div><!-- End: body -->
			</div><!-- End: inner -->
		</div><!-- End: card-blog -->
		<?php
	}
	
	/**
	 * Method pagination
	 *
	 * @param object $wp_query [explicite description]
	 *
	 * @return HTML
	 */
	public static function pagination(object $wp_query) {
		$paged = $wp_query->query['paged'];
		$max   = intval( $wp_query->max_num_pages );
		/** Add current page to the array */
		if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="custom-pagination-wrap"><ul class="custom-pagination">' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="prev">%s</li>' . "\n", get_previous_posts_link('<') );
 
		/** Link to first page, plus ellipses if necessary */
		if ( ! in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';
	
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
	
			if ( ! in_array( 2, $links ) )
				echo '<li class="hellip">&hellip;</li>';
		}
	
		/** Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}
	
		/** Link to last page, plus ellipses if necessary */
		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) )
				echo '<li class="hellip">&hellip;</li>' . "\n";
	
			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}
	
		/** Next Post Link */
		if ( get_next_posts_link() )
			printf( '<li class="next">%s</li>' . "\n", get_next_posts_link('>') );
	
		echo '</ul></div>' . "\n";
	}

	public static function listing(string $post_type = 'post', int $term_id = \null, int $posts_per_page = 9) {
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$args = [
			'post_type' => $post_type,
			'posts_per_page' => $posts_per_page,
			'paged' => $paged
		];
		if($term_id) {
			$args['tax_query'] = [
				'relation' => 'AND', 
				[
					'taxonomy' => 'category',
					'field' => 'id',
					'terms' => $term_id,
					'operator' => 'IN'
				]
				];
		}
		$qry = new WP_Query($args);
	
		if($qry->have_posts()):
		?>
		<div class="custom-archive-blog">
			<div class="container">
				<div class="row">
					<?php while($qry->have_posts()): $qry->the_post(); ?>
					<div class="col-12 md:col-4 post-item-col"><?= self::card_blog(get_the_ID()) ?></div><!-- End: column -->
					<?php endwhile; ?>
				</div><!-- End: row -->
				<?php self::pagination($qry); ?>
			</div><!-- End: container -->
		</div><!-- End: custom-archive-blog -->
		<?php
		endif;
	}

	public static function render() {
		self::listing();
	}

}