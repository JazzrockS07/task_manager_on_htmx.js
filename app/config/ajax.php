<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}



/**
 * Method newsletter_form_fields
 *
 * @return array
 */

function newsletter_form_fields() {
	return array(
		'name' => (isset($_POST['name'])) ? $_POST['name'] : '',
		'email' => (isset($_POST['email'])) ? $_POST['email'] : '',
		'phone' => (isset($_POST['phone'])) ? $_POST['phone'] : '',
	);
}


/**
 * Method newsletter_form_submit
 *
 * @return void
 */
function newsletter_form_submit() {
	$fields = newsletter_form_fields();
	$errors = new WP_Error();

	if(empty($fields['name'])) $errors->add('name', __('Te rugăm să completezi.', 'TEXT_DOMAIN')); else $errors->remove('name');

	if(empty($fields['email'])) $errors->add('email', __('Te rugăm să completezi.', 'TEXT_DOMAIN'));
	elseif(!is_email($fields['email'])) $errors->add('email', __('Te rugăm să introduci o adresă de email validă.', 'TEXT_DOMAIN'));
	else $errors->remove('name');

	if(empty($fields['phone'])) $errors->add('phone', __('Te rugăm să completezi.', 'TEXT_DOMAIN')); else $errors->remove('phone');

	if (count($errors->get_error_messages()) > 0) wp_send_json_error($errors); // Return error if validation fail

	$post_id = wp_insert_post([
		'post_title' => $fields['name'] . ' (' . $fields['email'] . ')',
		'post_type' => 'newsletter',
		'post_status' => 'publish'
	]);
	
	update_field('name', $fields['name'], $post_id);
	update_field('email', $fields['email'], $post_id);
	update_field('phone', $fields['phone'], $post_id);

	wp_send_json([
		'success' => true,
		'message' => __('Mulțumim pentru inscriere dvs.', 'TEXT_DOMAIN')
	]);
}
add_action('wp_ajax_newsletter_form', 'newsletter_form_submit');
add_action('wp_ajax_nopriv_newsletter_form', 'newsletter_form_submit');
