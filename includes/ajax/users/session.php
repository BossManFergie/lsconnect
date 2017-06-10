<?php
/**
 * ajax -> users -> session
 * 
 * @package Sngine v2+
 * @author Zamblek
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
if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
	_error(400);
}

// session
try {

	// delete session
	$db->query(sprintf("DELETE FROM users_sessions WHERE session_id = %s AND user_id", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);

	// return
	return_json();

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>