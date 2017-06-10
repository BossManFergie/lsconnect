<?php
/**
 * ajax -> posts -> product editor
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if(!$user->_logged_in) {
    modal(LOGIN);
}

// check user activated
if($system['activation_enabled'] && !$user->_data['user_activated']) {
	modal(MESSAGE, __("Not Activated"), __("Before you can interact with other users, you need to confirm your email address"));
}

// valid inputs
if(!isset($_GET['post_id']) || !is_numeric($_GET['post_id'])) {
	_error(400);
}

// product editor
try {

	// initialize the return array
	$return = array();

	// get post
	$post = $user->get_post($_GET['post_id']);
	if(!$post)  {
		_error(400);
	}
	/* assign variables */
	$smarty->assign('post', $post);
	$smarty->assign('market_categories', $user->get_market_categories());
	/* return */
	$return['template'] = $smarty->fetch("ajax.product_editor.tpl");
	$return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template);";

	// return & exit
	return_json($return);

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>