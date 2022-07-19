<?php



// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {

	return;

}



class singleWorker extends App {

	public static $projects;

	/**
	 * Method getowner
	 *
	 * @return void
	 */


	public static function getworkerprojects() {

		$current_user = get_current_user_id();
		$args = [
			'post_type' => 'task',
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
		$qry = new WP_Query($args);
		if($qry->have_posts()):
			while($qry->have_posts()): $qry->the_post();
				self::$projects[] = get_field('project')[0];
			endwhile;
			wp_reset_postdata();
		endif;

	}


}