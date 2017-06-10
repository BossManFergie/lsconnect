<?php
/**
 * ajax -> chat -> check conversation
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
if(!isset($_GET['uid']) && !is_numeric($_GET['uid'])) {
	_error(400);
}


// check mutual conversation
try {

	// initialize the return array
	$return = array();

	// check mutual conversation
	$mutual_conversation = $user->get_mutual_conversation((array)$_GET['uid']);
	if($mutual_conversation) {
		$return['conversation_id'] = $mutual_conversation;
	}
	
	// return & exit
	return_json($return);

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>