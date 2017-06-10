<?php
/**
 * ajax -> posts -> reaction
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

// reaction
try {

	// initialize the return array
	$return = array();

	switch ($_POST['do']) {

		case 'share':
			$user->share($_POST['id']);
			break;

		case 'delete_post':
			$user->delete_post($_POST['id']);
			break;

		case 'sold_post':
			$user->sold_post($_POST['id']);
			break;

		case 'unsold_post':
			$user->unsold_post($_POST['id']);
			break;

		case 'save_post':
			$user->save_post($_POST['id']);
			break;

		case 'unsave_post':
			$user->unsave_post($_POST['id']);
			break;

		case 'boost_post':
			$user->boost_post($_POST['id']);
			break;

		case 'unboost_post':
			$user->unboost_post($_POST['id']);
			break;

		case 'pin_post':
			$user->pin_post($_POST['id']);
			break;

		case 'unpin_post':
			$user->unpin_post($_POST['id']);
			break;

		case 'like_post':
			$user->like_post($_POST['id']);
			break;

		case 'unlike_post':
			$user->unlike_post($_POST['id']);
			break;

		case 'hide_post':
			$user->hide_post($_POST['id']);
			break;

		case 'unhide_post':
			$user->unhide_post($_POST['id']);
			break;

		case 'delete_comment':
			$user->delete_comment($_POST['id']);
			break;

		case 'like_comment':
			$user->like_comment($_POST['id']);
			break;

		case 'unlike_comment':
			$user->unlike_comment($_POST['id']);
			break;

		case 'like_photo':
			$user->like_photo($_POST['id']);
			break;

		case 'unlike_photo':
			$user->unlike_photo($_POST['id']);
			break;

		case 'add_vote':
			$user->add_vote($_POST['id']);
			break;

		case 'delete_vote':
			$user->delete_vote($_POST['id']);
			break;

		case 'change_vote':
			// valid inputs
			if(!isset($_POST['checked_id']) || !is_numeric($_POST['checked_id'])) {
				_error(400);
			}
			$user->change_vote($_POST['id'], $_POST['checked_id']);
			break;

		case 'hide_announcement':
			$user->hide_announcement($_POST['id']);
			break;
	}

	// return & exit
	return_json($return);

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>