<?php
/**
 * ajax -> payments -> paypal
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

// paypal
try {

	// check package
	$package = $user->get_package($_POST['id']);
	if(!$package) {
		_error(400);
	}
	/* check if user already subscribed to this package */
	if($user->_data['user_subscribed'] && $user->_data['user_package'] == $package['package_id']) {
		modal(SUCCESS, __("Subscribed"), __("You already subscribed to this package, Please select different package"));
	}

	// get paypal link
	$link = paypal($package['package_id'], $package['price']);

	// return & exit
	return_json( array('callback' => 'window.location.href = "'.$link.'";') );

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>