<?php
/**
 * ajax -> core -> signup
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if($user->_logged_in) {
    return_json( array('callback' => 'window.location.reload();') );
}

// check if registration is open
if(!$system['registration_enabled']) {
	return_json( array('error' => true, 'message' => __('Registration is closed right now')) );
}

// signup
try {
	$user->sign_up($_POST);
    return_json( array('callback' => 'window.location.reload();') );
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>