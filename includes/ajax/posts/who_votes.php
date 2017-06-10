<?php
/**
 * ajax -> posts -> votes
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
if(!isset($_GET['option_id']) || !is_numeric($_GET['option_id'])) {
	_error(400);
}


// get votes
try {

	// initialize the return array
	$return = array();

	// get votes
	$users = $user->who_votes($_GET['option_id']);
	/* assign variables */
	$smarty->assign('users', $users);
	$smarty->assign('id', $_GET['option_id']);
	/* return */
	$return['template'] = $smarty->fetch("ajax.who_votes.tpl");
	$return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template);";

	// return & exit
	return_json($return);

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}


?>