<?php



// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {

	return;

}



class singleOwner extends App {

	public static $owner = 0;

	/**
	 * Method getowner
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return void
	 */


	public static function getowner() {

			$current_user = get_current_user_id();

			$args = ['post_type' => 'client',];

			$qry = new WP_Query($args);
			if($qry->have_posts()):
				while($qry->have_posts()): $qry->the_post();
					if(get_field('owner_firma')[0]['ID'] == $current_user) {
						self::$owner = get_the_ID();
					}
				endwhile;
				wp_reset_postdata();
			endif;

	}


}