<?php



// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {

	return;

}



class archiveTask extends App {


	public static function listing(string $post_type = 'task', int $owner = \null, int $posts_per_page = 10) {

		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

		if (is_user_logged_in()) {
			$current_user = get_current_user_id();
			if ($owner == 0) {
				$args = [
					'post_type' => $post_type,
					'posts_per_page' => $posts_per_page,
					'paged' => $paged,
					'meta_query' => array(
						array(
							'key' => 'assigned_to', // name of custom field
							'value' => array (
								'key' => 'ID',
								'value' => $current_user
							)
						)
					)
				];
			} else {
				$args = [
					'post_type' => $post_type,
					'posts_per_page' => $posts_per_page,
					'paged' => $paged,
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
						singleTask::createtask(get_the_ID());

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