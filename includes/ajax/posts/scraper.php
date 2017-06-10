<?php
/**
 * ajax -> posts -> scraper
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
if(!isset($_POST['query']) || is_empty($_POST['query'])) {
	_error(403);
}

// initialize the return array
$return = array();

// scraper
try {
	$link = $user->scraper(trim($_POST['query']));
	if($link) {
		$return['link'] = $link;
	}
} catch (Exception $e) {
	
}

// return & exit
return_json($return);

?>