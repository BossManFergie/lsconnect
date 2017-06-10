<?php
/**
 * ajax -> users -> started
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

// started
try {
	$user->settings('started', $_POST);
	return_json( array('success' => true, 'message' => __("Your info has been updated")) );
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>