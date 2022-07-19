<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class taxonomyCategory extends App {

	/**
	 * Method jumbotron
	 *
	 * @param string $acf_query [explicite description]
	 *
	 * @return void
	 */
	public static function jumbotron(string $acf_query = 'post_archive') {
		if ( have_rows( 'header', $acf_query ) ) :
			while ( have_rows( 'header', $acf_query ) ) : the_row();
				customSection::jumbotron(get_sub_field( 'titlu' ), get_sub_field( 'imagine_background' ));
			endwhile;
		endif;
	}

	private static function listing() {
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$qry = new WP_Query([
			'post_type' => 'post',
			'posts_per_page' => 9,
			'paged' => $paged
		]);
		self::jumbotron();
		if($qry->have_posts()):
		?>
		<div class="custom-archive-blog">
			<div class="container">
				<div class="row">
					<?php while($qry->have_posts()): $qry->the_post(); ?>
					<div class="col-12 md:col-4 post-item-col"><?= self::card_blog(get_the_ID()) ?></div><!-- End: column -->
					<?php endwhile; ?>
				</div><!-- End: row -->
				<?php archiveBlog::pagination($qry); ?>
			</div><!-- End: container -->
		</div><!-- End: custom-archive-blog -->
		<?php
		endif;
	}

	public static function render() {
		$post_type = 'post';

		$taxonomyData = get_queried_object();

		// Define taxonomy prefix
		// Replace NULL with the name of the taxonomy eg 'category'
		$taxonomy_prefix = $taxonomyData->taxonomy;

		// Define term ID
		// Replace NULL with ID of term to be queried eg '123' 
		$term_id = $taxonomyData->term_id;

		// Define prefixed term ID
		$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;

		
		archiveBlog::listing($post_type, $term_id, 9);
	}

}