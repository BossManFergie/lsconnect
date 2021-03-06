<?php
/**
 * admin
 */

// set override_shutdown
$override_shutdown = true;

// fetch bootstrap
require('bootstrap.php');

// user access
user_access();

// check admin logged in
if(!$user->_is_admin) {
    _error(__('System Message'), __("You don't have the right permission to access this"));
}

try {

	// check view
	switch ($_GET['view']) {
		case '':
			// page header
			page_header(__("Admin Panel"));

			// update view
			$_GET['view'] = 'dashboard';

			// get insights
			/* total users */
			$get_users = $db->query("SELECT * FROM users") or _error(SQL_ERROR);
	    	$insights['users'] = $get_users->num_rows;
	    	/* males|females */
	    	$get_males = $db->query("SELECT * FROM users WHERE user_gender = 'male'");
		    $insights['users_males'] = $get_males->num_rows;
		    $get_females = $db->query("SELECT * FROM users WHERE user_gender = 'female'");
		    $insights['users_females'] = $get_females->num_rows;
		    $insights['users_males_percent'] = round(($insights['users_males']/$insights['users'])*100, 2);
		    $insights['users_females_percent'] = round(100 - $insights['users_males_percent']);
		    /* banned */
		    $get_banned = $db->query("SELECT * FROM users WHERE user_banned = '1'") or _error(SQL_ERROR);
	    	$insights['banned'] = $get_banned->num_rows;
		    /* not activated */
		    $get_not_activated = $db->query("SELECT * FROM users WHERE user_activated = '0'") or _error(SQL_ERROR);
	    	$insights['not_activated'] = $get_not_activated->num_rows;
	    	/* online */
		    $get_online = $db->query("SELECT * FROM users_online") or _error(SQL_ERROR);
	    	$insights['online'] = $get_online->num_rows;
	    	/* posts */
		    $get_posts = $db->query("SELECT * FROM posts") or _error(SQL_ERROR);
	    	$insights['posts'] = $get_posts->num_rows;
	    	/* comments */
		    $get_comments = $db->query("SELECT * FROM posts_comments") or _error(SQL_ERROR);
	    	$insights['comments'] = $get_comments->num_rows;
	    	/* pages */
		    $get_pages = $db->query("SELECT * FROM pages") or _error(SQL_ERROR);
	    	$insights['pages'] = $get_pages->num_rows;
	    	/* groups */
		    $get_groups = $db->query("SELECT * FROM groups") or _error(SQL_ERROR);
	    	$insights['groups'] = $get_groups->num_rows;
	    	/* messages */
		    $get_messages = $db->query("SELECT * FROM conversations_messages") or _error(SQL_ERROR);
	    	$insights['messages'] = $get_messages->num_rows;
	    	/* notifications */
		    $get_notifications = $db->query("SELECT * FROM notifications") or _error(SQL_ERROR);
	    	$insights['notifications'] = $get_notifications->num_rows;

	    	// get chart data
			for($i=1; $i <= 12; $i++) {
				/* get users */
				$get_monthly_users = $db->query("SELECT * FROM users WHERE YEAR(user_registered) = YEAR(CURRENT_DATE()) AND MONTH(user_registered) = $i");
				$chart['users'][$i] = $get_monthly_users->num_rows;
				/* get pages */
				$get_monthly_pages = $db->query("SELECT * FROM pages WHERE YEAR(page_date) = YEAR(CURRENT_DATE()) AND MONTH(page_date) = $i");
				$chart['pages'][$i] = $get_monthly_pages->num_rows;
				/* get groups */
				$get_monthly_groups = $db->query("SELECT * FROM groups WHERE YEAR(group_date) = YEAR(CURRENT_DATE()) AND MONTH(group_date) = $i");
				$chart['groups'][$i] = $get_monthly_groups->num_rows;
				/* get posts */
				$get_monthly_posts = $db->query("SELECT * FROM posts WHERE YEAR(time) = YEAR(CURRENT_DATE()) AND MONTH(time) = $i");
				$chart['posts'][$i] = $get_monthly_posts->num_rows;
			}

	    	// assign variables
			$smarty->assign('insights', $insights);
			$smarty->assign('chart', $chart);
			break;

		case 'settings':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("System Settings"));
					break;

				case 'registration':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Registration Settings"));
					break;

				case 'emails':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Emails Settings"));
					break;

				case 'sms':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("SMS Settings"));
					break;

				case 'chat':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Chat Settings"));
					break;

				case 'uploads':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Uploads Settings"));

					// get PHP upload_max_filesize
					$max_upload_size = ini_get("upload_max_filesize");
					/* assign variables */
					$smarty->assign('max_upload_size', $max_upload_size);
					break;

				case 'security':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Security Settings"));
					break;

				case 'payments':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Payments Settings"));
					break;

				case 'limits':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Limits Settings"));
					break;

				case 'analytics':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Analytics Settings"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'themes':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Themes"));

					// get data
					$get_rows = $db->query("SELECT * FROM system_themes") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM system_themes WHERE theme_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Themes")." &rsaquo; ".$data['name']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Themes")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'design':
			// page header
			page_header(__("Admin")." &rsaquo; ".__("Design"));
			break;

		case 'languages':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Languages"));

					// get data
					$get_rows = $db->query("SELECT * FROM system_languages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM system_languages WHERE language_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Languages")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Languages")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'users':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM users WHERE user_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['user_picture'] = User::get_picture($data['user_picture'], $data['user_gender']);
					/* get user's friends */
					$data['friends'] = count($user->get_friends_ids($data['user_id']));
					$data['followings'] = count($user->get_followings_ids($data['user_id']));
					$data['followers'] = count($user->get_followers_ids($data['user_id']));
					/* parse birthdate */
					$data['user_birthdate_parsed'] = date_parse($data['user_birthdate']);
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".$data['user_fullname']);
					break;

				case 'admins':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Admins"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_group = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'moderators':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Moderators"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_group = '2'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'online':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Online"));
					
					// get data
					$get_rows = $db->query("SELECT users.* FROM users_online INNER JOIN users ON users_online.user_id = users.user_id") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'banned':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Banned"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_banned = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'pages':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM pages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['page_picture'] = User::get_picture($row['page_picture'], 'page');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_page':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM pages WHERE page_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['page_picture'] = User::get_picture($data['page_picture'], 'page');
					/* get categories */
					$data['categories'] = $user->get_pages_categories();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".$data['page_title']);
					break;

				case 'categories':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".__("Categories"));
					
					// get data
					$rows = $user->get_pages_categories();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_category':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM pages_categories WHERE category_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".__("Categories")." &rsaquo; ".$data['category_name']);
					break;

				case 'add_category':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".__("Categories")." &rsaquo; ".__("Add New Category"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'groups':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Groups"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM groups") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['group_picture'] = User::get_picture($row['group_picture'], 'group');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM groups WHERE group_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['group_picture'] = User::get_picture($data['group_picture'], 'page');
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Groups")." &rsaquo; ".$data['group_title']);
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'games':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Games"));

					// get data
					$get_rows = $db->query("SELECT * FROM games") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['thumbnail'] = $user->get_picture($row['thumbnail'], 'game');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM games WHERE game_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Games")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Games")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'market':
			// get content
			switch ($_GET['sub_view']) {
				case 'categories':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Market")." &rsaquo; ".__("Categories"));
					
					// get data
					$rows = $user->get_market_categories();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_category':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM market_categories WHERE category_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Market")." &rsaquo; ".__("Categories")." &rsaquo; ".$data['category_name']);
					break;

				case 'add_category':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Market")." &rsaquo; ".__("Categories")." &rsaquo; ".__("Add New Category"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'packages':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages"));

					// get data
					$get_rows = $db->query("SELECT * FROM packages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['icon'] = User::get_picture($row['icon'], 'package');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM packages WHERE package_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".$data['name']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".__("Add New"));
					break;

				case 'subscribers':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".__("Subscribers"));

					// get data
					$get_rows = $db->query("SELECT users.user_id, users.user_name, users.user_fullname, users.user_gender, users.user_picture, users.user_subscription_date, packages.* FROM users INNER JOIN packages ON users.user_package = packages.package_id WHERE users.user_subscribed = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['icon'] = User::get_picture($row['icon'], 'package');
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}

					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'earnings':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".__("Earnings"));

					// get data
					$total_earnings = 0;
					$month_earnings = 0;
					$get_rows = $db->query("SELECT * FROM packages_payments") or _error(SQL_ERROR);
					$rows = array();
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row_month = date("n",strtotime($row['payment_date']));
							if($rows[$row['package_name']]) {
								$rows[$row['package_name']]['sales']++;
								if($rows[$row['package_name']]['months_sales'][$row_month]) {
									$rows[$row['package_name']]['months_sales'][$row_month]++;
								} else {
									$rows[$row['package_name']]['months_sales'][$row_month] = 1;
								}
								$rows[$row['package_name']]['earnings'] += $row['package_price'];
								/* add to month earnings */
								if($row_month == date('n')) {
									$month_earnings += $row['package_price'];
								}
								/* add to total earnings */
								$total_earnings += $row['package_price'];
							} else {
								$rows[$row['package_name']]['sales'] = 1;
								$rows[$row['package_name']]['months_sales'][$row_month] = 1;
								$rows[$row['package_name']]['earnings'] = $row['package_price'];
								/* add to month earnings */
								if($row_month == date('n')) {
									$month_earnings += $row['package_price'];
								}
								/* add to total earnings */
								$total_earnings += $row['package_price'];
							}
						}
					}
					/* prepare months sales */
					if($rows) {
						foreach ($rows as $key => $value) {
							for($i=1; $i <= 12; $i++) {
								if($rows[$key]['months_sales'][$i]) {
									continue;
								} else {
									$rows[$key]['months_sales'][$i] = 0;
								}
							}
						}
					}

					// assign variables
					$smarty->assign('total_earnings', $total_earnings);
					$smarty->assign('month_earnings', $month_earnings);
					$smarty->assign('rows', $rows);
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'affiliates':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Affiliates"));
					break;

				case 'payments':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Affiliates")." &rsaquo; ".__("Payment Requests"));

					// get data
					$get_rows = $db->query("SELECT affiliates_payments.*, users.user_id, users.user_name, users.user_fullname, users.user_gender, users.user_picture FROM affiliates_payments INNER JOIN users ON affiliates_payments.user_id = users.user_id WHERE affiliates_payments.status = '0'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'reports':
			// page header
			page_header(__("Admin")." &rsaquo; ".__("Reports"));

			// get data
			$get_rows = $db->query("SELECT reports.*, users.user_name, users.user_fullname, users.user_picture, users.user_gender FROM reports INNER JOIN users ON reports.user_id = users.user_id") or _error(SQL_ERROR);
			if($get_rows->num_rows > 0) {
				while($row = $get_rows->fetch_assoc()) {
					$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
					/* get reported node */
					if($row['node_type'] == "user") {
						$get_node = $db->query(sprintf("SELECT user_name, user_fullname, user_gender, user_picture FROM users WHERE user_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['user_picture'] = User::get_picture($node['user_picture'], $node['user_gender']);
						$node['color'] = 'primary';

					} elseif ($row['node_type'] == 'page') {
						$get_node = $db->query(sprintf("SELECT page_name, page_title, page_picture FROM pages WHERE page_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['page_picture'] = User::get_picture($node['page_picture'], 'page');
						$node['color'] = 'info';

					} elseif ($row['node_type'] == 'group') {
						$get_node = $db->query(sprintf("SELECT group_name, group_title, group_picture FROM groups WHERE group_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['group_picture'] = User::get_picture($node['group_picture'], 'group');
						$node['color'] = 'warning';

					} elseif ($row['node_type'] == 'comment') {
						$get_comment = $db->query(sprintf("SELECT * FROM posts_comments WHERE comment_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						$comment = $get_comment->fetch_assoc();
						$row['url'] = ($comment['node_type'] == "photo")? $system['system_url'].'/photos/'.$comment['node_id'] : $system['system_url'].'/posts/'.$comment['node_id'];
						$node['color'] = 'default';

					} elseif ($row['node_type'] == 'post') {
						$node['color'] = 'danger';
					}
					$row['node'] = $node;
					$rows[] = $row;
				}
			}
			
			// assign variables
			$smarty->assign('rows', $rows);
			break;

		case 'banned_ips':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Banned IPs"));

					// get data
					$get_rows = $db->query("SELECT * FROM banned_ips") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Banned IPs")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'verification':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Verification")." &rsaquo; ".__("Requests"));
					
					// get data
					$get_rows = $db->query("SELECT verification_requests.*, users.user_name, users.user_fullname, users.user_gender, users.user_picture, pages.page_name, pages.page_title, pages.page_picture FROM verification_requests LEFT JOIN users ON verification_requests.node_type = 'user' AND verification_requests.node_id = users.user_id LEFT JOIN pages ON verification_requests.node_type = 'page' AND verification_requests.node_id = pages.page_id WHERE status = '0'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							/* get node */
							if($row['node_type'] == "user") {
								$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
								$row['color'] = 'primary';
							} elseif ($row['node_type'] == 'page') {
								$row['page_picture'] = User::get_picture($row['page_picture'], 'page');
								$row['color'] = 'info';
							}
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'users':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Verification")." &rsaquo; ".__("Verified Users"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_verified = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}

					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'pages':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Verification")." &rsaquo; ".__("Verified Pages"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM pages WHERE page_verified = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['page_picture'] = User::get_picture($row['page_picture'], 'page');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;
				
				default:
					_error(404);
					break;
			}
			break;
		
		case 'custom_fields':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Custom Fields"));

					// get data
					$get_rows = $db->query("SELECT * FROM custom_fields") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM custom_fields WHERE field_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Custom Fields")." &rsaquo; ".$data['label']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Custom Fields")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'static':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Static Pages"));

					// get data
					$get_rows = $db->query("SELECT * FROM static_pages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM static_pages WHERE page_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Static Pages")." &rsaquo; ".$data['page_title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Static Pages")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'announcements':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Announcements"));

					// get data
					$get_rows = $db->query("SELECT * FROM announcements") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM announcements WHERE announcement_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Announcements")." &rsaquo; ".$data['name']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Announcements")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'newsletter':
			// page header
			page_header(__("Admin")." &rsaquo; ".__("Newsletter"));
			break;

		case 'ads':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Ads"));

					// get data
					$get_rows = $db->query("SELECT * FROM ads") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM ads WHERE ads_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Ads")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Ads")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'widgets':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Widgets"));

					// get data
					$get_rows = $db->query("SELECT * FROM widgets") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM widgets WHERE widget_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Widgets")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Widgets")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		default:
			_error(404);
	}
	/* assign variables */
	$smarty->assign('view', $_GET['view']);
	$smarty->assign('sub_view', $_GET['sub_view']);

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("admin");

?>