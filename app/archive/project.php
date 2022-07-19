<?php



// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {

	return;

}



class archiveProject extends App {


	public static function listing(string $post_type = 'project', int $owner = \null, array $projects = \null, int $posts_per_page = 10) {

		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

		if (is_user_logged_in()) {
			if ($owner != 0) {
				// this is owner
				$args = [
					'post_type' => $post_type,
					'posts_per_page' => $posts_per_page,
					'paged' => $paged,
					'meta_query' => array(
						array(
							'key' => 'owner', // name of custom field
							'value' => $owner,
							'compare' => 'LIKE'
						)
					)
				];
			} else {
				// this is worker
				$args = [
					'post_type' => 'project',
					'post__in' => $projects,
				];
			}
		} else {
			$args = [
				'post_type' => $post_type,
				'posts_per_page' => $posts_per_page,
				'paged' => $paged,
			];
		}

		$qry = new WP_Query($args);



		if($qry->have_posts()):

			?>
			<section class="main bg-bright py-4">
				<div class="container">
					<?php while($qry->have_posts()): $qry->the_post();
						singleProject::section_name(get_the_ID());
						singleProject::section_tasks(get_the_ID());
					endwhile; ?>

					<?php wp_reset_postdata(); ?>
				</div>
			</section>
		<?php

		endif;

	}



	public static function render() {

		self::listing();

	}



}