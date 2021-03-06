<?php
/**
 * functions
 */


/* ------------------------------- */
/* Core */
/* ------------------------------- */

/**
 * check_system_requirements
 * 
 * @return void
 */
function check_system_requirements() {
    /* set required php version*/
    $required_php_version = '5.4';
    /* check php version */
    $php_version = phpversion();
    if(version_compare( $required_php_version, $php_version, '>')) {
        _error("Installation Error", sprintf('<p class="text-center">Your server is running PHP version %1$s but LS Connect requires at least %3$s.</p>', $php_version, $required_php_version));
    }
    /* check if mysqli enabled */
    if(!extension_loaded('mysqli')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "mysqli" extension which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
    /* check if curl enabled */
    if(!extension_loaded('curl')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "cURL" extension which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
    /* check if intl enabled */
    if(!extension_loaded('intl')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "intl" extension which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
    /* check if json_decode enabled */
    if(!function_exists('json_decode')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "json_decode()" function which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
    /* check if base64_decode enabled */
    if(!function_exists('base64_decode')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "base64_decode()" function which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
    /* check if mail enabled */
    if(!function_exists('mail')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "mail()" function which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
    if(!function_exists('getimagesize')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the "getimagesize()" function which is required by LS Connect.</p><small>Back to your server admin or hosting provider to enable it for you</small>');
    }
}




/**
 * get_system_url
 * 
 * @return string
 */
function get_system_url() {
    $protocol = ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? "https://" : "http://";
    return $protocol.$_SERVER['HTTP_HOST'].BASEPATH;
}


/**
 * check_system_url
 * 
 * @return void
 */
function check_system_url() {
    $parsed_url = parse_url(SYS_URL);
    $protocol = ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? "https" : "http";
    if( ($parsed_url['scheme'] != $protocol) || ($parsed_url['host'] != $_SERVER['HTTP_HOST']) ) {
        header('Location: '.SYS_URL);
    }
}


/**
 * redirect
 * 
 * @param string $url
 * @return void
 */
function redirect($url = null) {
    if($url) {
        header('Location: '.SYS_URL.$url);
    } else {
        header('Location: '.SYS_URL);
    }
    exit;
}



/* ------------------------------- */
/* Security */
/* ------------------------------- */

/**
 * secure
 * 
 * @param string $value
 * @param string $type
 * @param boolean $quoted
 * @return string
 */
function secure($value, $type = "", $quoted = true) {
    global $db;
    if($value !== 'null') {
        // [1] Sanitize //
        /* Escape all (single-quote, double quote, backslash, NULs) */
        if(get_magic_quotes_gpc()) {
            $value = stripslashes($value);
        }
        /* Convert all applicable characters to HTML entities */
        $value = htmlentities($value, ENT_QUOTES, 'utf-8');
        // [2] Safe SQL //
        $value = $db->real_escape_string($value);
        switch ($type) {
            case 'int':
                $value = ($quoted)? "'".intval($value)."'" : intval($value);
                break;
            case 'datetime':
                $value = ($quoted)? "'".set_datetime($value)."'" : set_datetime($value);
                break;
            case 'search':
                if($quoted) {
                    $value = (!is_empty($value))? "'%".$value."%'" : "''";
                } else {
                    $value = (!is_empty($value))? "'%%".$value."%%'" : "''";
                }
                break;
            default:
                $value = (!is_empty($value))? "'".$value."'" : "''";
                break;
        }
    }
    return $value;
}


/**
 * session_hash
 * 
 * @param string $hash
 * @return array
 */
function session_hash($hash) {
//    $hash_tokens = explode('-', $hash);
//    if(count($hash_tokens) != 6) {
//        _error(__("Error"), __("Your session hash has been broken, Please contact LS Connect's support!"));
//    }
//    $position = array_rand($hash_tokens);
//    $token = $hash_tokens[$position];
//    return array('token' => $token, 'position' => $position+1);
}



/* ------------------------------- */
/* Validation */
/* ------------------------------- */

/**
 * is_ajax
 * 
 * @return void
 */
function is_ajax() {
    if( !isset($_SERVER['HTTP_X_REQUESTED_WITH']) || ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') ) {
        redirect();
    }
}


/**
 * is_empty
 * 
 * @param string $value
 * @return boolean
 */
function is_empty($value) {
    if(strlen(trim(preg_replace('/\xc2\xa0/',' ',$value))) == 0) {
        return true;
    } else {
        return false;
    }
}


/**
 * valid_email
 * 
 * @param string $email
 * @return boolean
 */
function valid_email($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        return true;
    } else {
        return false;
    }
}


/**
 * valid_url
 * 
 * @param string $url
 * @return boolean
 */
function valid_url($url) {
    if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED) !== false) {
        return true;
    } else {
        return false;
    }
}


/**
 * valid_username
 * 
 * @param string $username
 * @return boolean
 */
function valid_username($username) {
    if(strlen($username) >= 3 && preg_match('/^[a-zA-Z0-9]+([_|.]?[a-zA-Z0-9])*$/', $username)) {
        return true;
    } else {
        return false;
    }
}


/**
 * reserved_username
 * 
 * @param string $username
 * @return boolean
 */
function reserved_username($username) {
    $reserved_usernames = array('install', 'static', 'contact', 'contacts', 'sign', 'signin', 'login', 'signup', 'register', 'signout', 'logout', 'reset', 'activation', 'connect', 'revoke', 'packages', 'started', 'search', 'friends', 'messages', 'message', 'notifications', 'notification', 'settings', 'setting', 'posts', 'post', 'photos', 'photo', 'create', 'pages', 'page', 'groups', 'group', 'games', 'game', 'saved', 'directory', 'products', 'product', 'market', 'admincp', 'admin', 'admins');
    if(in_array(strtolower($username), $reserved_usernames)) {
        return true;
    } else {
        return false;
    }
}


/**
 * valid_name
 * 
 * @param string $name
 * @return boolean
 */
function valid_name($name) {
    if(preg_match("/^[\\p{L} ]+$/ui", $name)) {
        return true;
    } else {
        return false;
    }
}


/**
 * valid_location
 * 
 * @param string $location
 * @return boolean
 */
function valid_location($location) {
    if(preg_match("/^[\\p{L} ,]+$/ui", $location)) {
        return true;
    } else {
        return false;
    }
}


/**
 * valid_extension
 * 
 * @param string $extension
 * @param string $allowed_extensions
 * @return boolean
 */
function valid_extension($extension, $allowed_extensions) {
    $extensions = explode(',', $allowed_extensions);
    foreach ($extensions as $key => $value) {
        $extensions[$key] = strtolower(trim($value));
    }
    if(is_array($extensions) && in_array($extension, $extensions)) {
        return true;
    }
    return false;
}



/* ------------------------------- */
/* Date */
/* ------------------------------- */

/**
 * set_datetime
 * 
 * @param string $date
 * @return string
 */
function set_datetime($date) {
    return date("Y-m-d H:i:s", strtotime($date));
}


/**
 * get_datetime
 * 
 * @param string $date
 * @return string
 */
function get_datetime($date) {
    return date("m/d/Y g:i A", strtotime($date));
}



/* ------------------------------- */
/* JSON */
/* ------------------------------- */

/**
 * _json_decode
 * 
 * @param string $string
 * @return string
 */
function _json_decode($string) {
    if(get_magic_quotes_gpc()) $string = stripslashes($string);
    return json_decode($string);
}


/**
 * return_json
 * 
 * @param array $response
 * @return json
 */
function return_json($response = '') {
    header('Content-Type: application/json');
    exit(json_encode($response));
}



/* ------------------------------- */
/* Error */
/* ------------------------------- */

/**
 * _error
 * 
 * @return void
 */
function _error() {
    $args = func_get_args();
    if(count($args) > 1) {
        $title = $args[0];
        $message = $args[1];
    } else {
        switch ($args[0]) {
            case 'DB_ERROR':
                $title = "Database Error";
                $message = "<div class='text-left'><h1>"."Error establishing a database connection"."</h1>
                            <p>"."This either means that the username and password information in your config.php file is incorrect or we can't contact the database server at localhost. This could mean your host's database server is down."."</p>
                            <ul>
                                <li>"."Are you sure you have the correct username and password?"."</li>
                                <li>"."Are you sure that you have typed the correct hostname?"."</li>
                                <li>"."Are you sure that the database server is running?"."</li>
                            </ul>
                            <p>"."If you're unsure what these terms mean you should probably contact your host.</p>
                            </div>";
                break;

            case 'SQL_ERROR':
                $title = __("Database Error");
                $message = __("An error occurred while writing to database. Please try again later");
                break;

            case 'SQL_ERROR_THROWEN':
                throw new Exception(__("An error occurred while writing to database. Please try again later"));
                break;

            case '404':
                header('HTTP/1.0 404 Not Found');
                $title = __("404 Not Found");
                $message = __("The requested URL was not found on this server. That's all we know");
                break;

            case '400':
                header('HTTP/1.0 400 Bad Request');
                exit;

            case '403':
                header('HTTP/1.0 403 Access Denied');
                exit;
            
            default:
                $title = __("Error");
                $message = __("There is some thing went wrong");
                break;
        }
    }
    echo '<!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <title>'.$title.'</title>
                <style type="text/css">
                    html {
                        background: #f1f1f1;
                    }
                    body {
                        color: #555;
                        font-family: "Open Sans", Arial,sans-serif;
                        margin: 0;
                        padding: 0;
                    }
                    .error-title {
                        background: #ce3426;
                        color: #fff;
                        text-align: center;
                        font-size: 34px;
                        font-weight: 100;
                        line-height: 50px;
                        padding: 60px 0;
                    }
                    .error-message {
                        margin: 1em auto;
                        padding: 1em 2em;
                        max-width: 600px;
                        font-size: 1em;
                        line-height: 1.8em;
                        text-align: center;
                    }
                    .error-message .code,
                    .error-message p {
                        margin-top: 0;
                        margin-bottom: 1.3em;
                    }
                    .error-message .code {
                        font-family: Consolas, Monaco, monospace;
                        background: rgba(0, 0, 0, 0.7);
                        padding: 10px;
                        color: rgba(255, 255, 255, 0.7);
                        word-break: break-all;
                        border-radius: 2px;
                    }
                    h1 {
                        font-size: 1.2em;
                    }
                    
                    ul li {
                        margin-bottom: 1em;
                        font-size: 0.9em;
                    }
                    a {
                        color: #ce3426;
                        text-decoration: none;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                    .button {
                        background: #f7f7f7;
                        border: 1px solid #cccccc;
                        color: #555;
                        display: inline-block;
                        text-decoration: none;
                        margin: 0;
                        padding: 5px 10px;
                        cursor: pointer;
                        -webkit-border-radius: 3px;
                        -webkit-appearance: none;
                        border-radius: 3px;
                        white-space: nowrap;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing:    border-box;
                        box-sizing:         border-box;

                        -webkit-box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
                        box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
                        vertical-align: top;
                    }

                    .button.button-large {
                        height: 29px;
                        line-height: 28px;
                        padding: 0 12px;
                    }

                    .button:hover,
                    .button:focus {
                        background: #fafafa;
                        border-color: #999;
                        color: #222;
                        text-decoration: none;
                    }

                    .button:focus  {
                        -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.2);
                        box-shadow: 1px 1px 1px rgba(0,0,0,.2);
                    }

                    .button:active {
                        background: #eee;
                        border-color: #999;
                        color: #333;
                        -webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                        box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                    }
                    .text-left {
                        text-align: left;
                    }
                    .text-center {
                        text-align: center;
                    }
                </style>
            </head>
            <body>
                <div class="error-title">'.$title.'</div>
                <div class="error-message">'.$message.'</div>
            </body>
            </html>';
    exit;
}



/* ------------------------------- */
/* Email */
/* ------------------------------- */

/**
 * send_mail
 * 
 * @param string $email
 * @param string $subject
 * @param string $body
 * @param boolean $only_smtp
 * @return boolean
 */
function _email($email, $subject, $body, $only_smtp = false) {
    global $system;
    /* set header */
    $header  = "MIME-Version: 1.0\r\n";
    $header .= "Mailer: ".$system['system_title']."\r\n";
    $header .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n";
    /* send email */
    if($system['email_smtp_enabled']) {
        /* SMTP */
        require_once(ABSPATH.'includes/libs/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer;
        $mail->CharSet = "UTF-8";
        $mail->isSMTP();
        $mail->Host = $system['email_smtp_server'];
        $mail->SMTPAuth = ($system['email_smtp_authentication'])? true : false;
        $mail->Username = $system['email_smtp_username'];
        $mail->Password = $system['email_smtp_password'];
        $mail->SMTPSecure = ($system['email_smtp_ssl'])? 'ssl': 'tls';
        $mail->Port = $system['email_smtp_port'];
        $setfrom = (is_empty($system['email_smtp_setfrom']))? $system['email_smtp_username']: $system['email_smtp_setfrom'];
        $mail->setFrom($setfrom, $system['system_title']);
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = $body;
        if(!$mail->send()) {
            /* send using mail() */
            if(!mail($email, $subject, $body, $header)) {
                return false;
            }
        }
    } else {
        if($only_smtp) {
            return false;
        }
        /* send using mail() */
        if(!mail($email, $subject, $body, $header)) {
            return false;
        }
    }
    return true;
}


/**
 * email_smtp_test
 * 
 * @return void
 */
function email_smtp_test() {
    global $system;
    /* prepare test email */
    $subject = __("Test SMTP Connection on")." ".$system['system_title'];
    $body  = __("This is a test email");
    $body .= "\r\n\r".$system['system_title']." ".__("Team");
    /* send email */
    if(!_email($system['system_email'], $subject, $body, true)) {
        throw new Exception(__("Test email could not be sent. Please check your settings"));
    }
}



/* ------------------------------- */
/* SMS */
/* ------------------------------- */

/**
 * sms_send
 * 
 * @param string $phone
 * @param string $message
 * @return boolean
 */
function sms_send($phone, $message) {
    global $system;
    require_once(ABSPATH.'includes/libs/Twilio/autoload.php');
    $client = new Twilio\Rest\Client($system['twilio_sid'], $system['twilio_token']);
    $message = $client->account->messages->create(
        $phone,
        array(
            'from' => $system['twilio_phone'],
            'body' => $message
        )
    );
    if(!$message->sid) {
        return false;
    }
    return true;
}


/**
 * sms_test
 * 
 * @return void
 */
function sms_test() {
    global $system;
    require_once(ABSPATH.'includes/libs/Twilio/autoload.php');
    $client = new Twilio\Rest\Client($system['twilio_sid'], $system['twilio_token']);
    $message = $client->account->messages->create(
        $system['system_phone'],
        array(
            'from' => $system['twilio_phone'],
            'body' => __("Test SMS from")." ".$system['system_title']
        )
    );
    if(!$message->sid) {
        throw new Exception(__("Test SMS could not be sent. Please check your settings"));
    }
}



/* ------------------------------- */
/* AWS S3 */
/* ------------------------------- */


/**
 * aws_s3_test
 * 
 * @return void
 */
function aws_s3_test() {
    global $system;
    require_once(ABSPATH.'includes/libs/AWS/aws-autoloader.php');
    $s3Client = Aws\S3\S3Client::factory(array(
        'version'    => 'latest',
        'region'      => $system['s3_region'],
        'credentials' => array(
            'key'    => $system['s3_key'],
            'secret' => $system['s3_secret'],
        )
    ));
    $buckets = $s3Client->listBuckets();
    if(empty($buckets)) {
        throw new Exception(__("There is no buckets in your account"));
    }
    if(!$s3Client->doesBucketExist($system['s3_bucket'])) {
        throw new Exception(__("There is no bucket with this name in your account"));
    }
}



/**
 * aws_s3_upload
 * 
 * @param string $path
 * @param string $file_name
 * @return void
 */
function aws_s3_upload($path, $file_name) {
    global $system;
    require_once(ABSPATH.'includes/libs/AWS/aws-autoloader.php');
    $s3Client = Aws\S3\S3Client::factory(array(
        'version'    => 'latest',
        'region'      => $system['s3_region'],
        'credentials' => array(
            'key'    => $system['s3_key'],
            'secret' => $system['s3_secret'],
        )
    ));
    $Key = 'uploads/'.$file_name;
    $s3Client->putObject([
        'Bucket' => $system['s3_bucket'],
        'Key'    => $Key,
        'Body'   => fopen($path, 'r+'),
        'ACL'    => 'public-read',
    ]);
    /* remove local file */
    gc_collect_cycles();
    if($s3Client->doesObjectExist($system['s3_bucket'], $Key)) {
        unlink($path);
    }
}


/* ------------------------------- */
/* Paypal */
/* ------------------------------- */


/**
 * paypal
 * 
 * @param integer $package_id
 * @param string $price
 * @return string
 */
function paypal($package_id, $price) {
    global $system;
    /* prepare */
    $product = $system['system_title']." ".__('Pro Package');
    $description = __('Pay For')." ".$system['system_title'];
    $URL['success'] = $system['system_url']."/paypal.php?status=success&package_id=".$package_id;
    $URL['cancel'] = $system['system_url']."/paypal.php?status=cancel";
    /* Paypal */
    require_once(ABSPATH.'includes/libs/PayPal/autoload.php');
    $paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            $system['paypal_id'],
            $system['paypal_secret']
        )
    );
    $paypal->setConfig(
        array(
            'mode' => $system['paypal_mode']
        )
    );
    $payer = new PayPal\Api\Payer();
    $payer->setPaymentMethod('paypal');
    $item = new PayPal\Api\Item();
    $item->setName($product)->setQuantity(1)->setPrice($price)->setCurrency($system['system_currency']);
    $itemList = new PayPal\Api\ItemList();
    $itemList->setItems(array(
        $item
    ));
    $details = new PayPal\Api\Details();
    $details->setSubtotal($price);
    $amount = new PayPal\Api\Amount();
    $amount->setCurrency($system['system_currency'])->setTotal($price)->setDetails($details);
    $transaction = new PayPal\Api\Transaction();
    $transaction->setAmount($amount)->setItemList($itemList)->setDescription($description)->setInvoiceNumber(uniqid());
    $redirectUrls = new PayPal\Api\RedirectUrls();
    $redirectUrls->setReturnUrl($URL['success'])->setCancelUrl($URL['cancel']);
    $payment = new PayPal\Api\Payment();
    $payment->setIntent('sale')->setPayer($payer)->setRedirectUrls($redirectUrls)->setTransactions(array(
        $transaction
    ));
    $payment->create($paypal);
    return $payment->getApprovalLink();
}


/**
 * paypal_check
 * 
 * @param string $paymentId
 * @param string $PayerID
 * @return boolean
 */
function paypal_check($paymentId, $PayerID) {
    global $system;
    require_once(ABSPATH.'includes/libs/PayPal/autoload.php');
    $paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            $system['paypal_id'],
            $system['paypal_secret']
        )
    );
    $paypal->setConfig(
        array(
            'mode' => $system['paypal_mode']
        )
    );
    $payment = PayPal\Api\Payment::get($paymentId, $paypal);
    $execute = new PayPal\Api\PaymentExecution();
    $execute->setPayerId($PayerID);
    $result = $payment->execute($execute, $paypal);
    return true;
}



/* ------------------------------- */
/* User Access */
/* ------------------------------- */

/**
 * user_access
 * 
 * @return void
 */
function user_access() {
    global $user, $system;
    if(!$user->_logged_in) {
        user_login();
    } else {
        /* check registration type */
        if($system['registration_type'] == "paid" && $user->_data['user_group'] > '1' && !$user->_data['user_subscribed']) {
            redirect('/packages');
        }
        /* check if getted started */
        if($system['getting_started'] && !$user->_data['user_started']) {
            redirect('/started');
        }
    }
}


/**
 * user_login
 * 
 * @return void
 */
function user_login() {
    global $smarty;
    $smarty->assign('highlight', __("You must sign in to see this page"));
    page_header(__("Sign in"));
    page_footer('sign');
    exit;
}



/* ------------------------------- */
/* Modal */
/* ------------------------------- */

/**
 * modal
 * 
 * @return json
 */
function modal() {
    $args = func_get_args();
    switch ($args[0]) {
        case 'LOGIN':
            return_json( array("callback" => "modal('#modal-login')") );
            break;
        case 'MESSAGE':
            return_json( array("callback" => "modal('#modal-message', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        case 'ERROR':
            return_json( array("callback" => "modal('#modal-error', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        case 'SUCCESS':
            return_json( array("callback" => "modal('#modal-success', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        default:
            if(isset($args[1])) {
                return_json( array("callback" => "modal('".$args[0]."', ".$args[1].")") );
            } else {
                return_json( array("callback" => "modal('".$args[0]."')") );
            }
            break;
    }
}



/* ------------------------------- */
/* Popover */
/* ------------------------------- */

/**
 * popover
 * 
 * @param integer $uid
 * @param string $username
 * @param string $name
 * @return string
 */
function popover($uid, $username, $name) {
    global $system;
    $popover = '<span class="js_user-popover" data-uid="'.$uid.'"><a href="'.$system['system_url'].'/'.$username.'">'.$name.'</a></span>';
    return $popover;
}



/* ------------------------------- */
/* Page */
/* ------------------------------- */

/**
 * page_header
 * 
 * @param string $title
 * @param string $description
 * @return void
 */
function page_header($title, $description = '') {
    global $smarty, $system;
    $description = ($description != '')? $description : $system['system_description'];
    $smarty->assign('page_title', $title);
    $smarty->assign('page_description', $description);
}


/**
 * page_footer
 * 
 * @param string $page
 * @return void
 */
function page_footer($page) {
    global $smarty;
    $smarty->assign('page', $page);
    $smarty->display("$page.tpl");
}



/* ------------------------------- */
/* Text */
/* ------------------------------- */

/**
 * parse
 * 
 * @param string $text
 * @param boolean $nl2br
 * @param boolean $mention
 * @return string
 */
function parse($text, $nl2br = true, $mention = true) {
    /* decode urls */
    $text = decode_urls($text);
    /* decode emoji */
    $text = decode_emoji($text);
    /* decode #hashtag */
    $text = decode_hashtag($text);
    /* decode @mention */
    if($mention) {
        $text = decode_mention($text);
    }
    /* censored words */
    $text = censored_words($text);
    /* nl2br */
    if($nl2br) {
        $text = nl2br($text);
    }
    return $text;
}


/**
 * decode_urls
 * 
 * @param string $text
 * @return string
 */
function decode_urls($text) {
    $text = preg_replace('/(https?:\/\/[^\s]+)/', "<a target='_blank' href=\"$1\">$1</a>", $text);
    return $text;
}


/**
 * decode_emoji
 * 
 * @param string $text
 * @return string
 */
function decode_emoji($text) {
    $emoji = array(
        ':\)'       => '<i data-emoji=":)" class="js_emoji twa twa-xlg twa-smile"></i>',
        ':\('       => '<i data-emoji=":(" class="js_emoji twa twa-xlg twa-worried"></i>',
        ':P'       => '<i data-emoji=":P" class="js_emoji twa twa-xlg twa-stuck-out-tongue"></i>',
        ':D'       => '<i data-emoji=":D" class="js_emoji twa twa-xlg twa-smiley"></i>',
        ':O'       => '<i data-emoji=":O" class="js_emoji twa twa-xlg twa-open-mouth"></i>',
        ';\)'       => '<i data-emoji=";)" class="js_emoji twa twa-xlg twa-wink"></i>',
        ':@'       => '<i data-emoji=":@" class="js_emoji twa twa-xlg twa-angry"></i>',
        ':\/'       => '<i data-emoji=":/" class="js_emoji twa twa-xlg twa-confused"></i>',
        ';\('       => '<i data-emoji=";(" class="js_emoji twa twa-xlg twa-sob"></i>',
        '\^\_\^'      => '<i data-emoji="^_^" class="js_emoji twa twa-xlg twa-grin"></i>',
        'B\|'       => '<i data-emoji="B|" class="js_emoji twa twa-xlg twa-sunglasses"></i>',
        '<3'       => '<i data-emoji="<3" class="js_emoji twa twa-xlg twa-heart"></i>',
        '&lt;3'       => '<i data-emoji="<3" class="js_emoji twa twa-xlg twa-heart"></i>',
        '&amp;lt;3'       => '<i data-emoji="<3" class="js_emoji twa twa-xlg twa-heart"></i>',
        'O:\)'      => '<i data-emoji="O:)" class="js_emoji twa twa-xlg twa-innocent"></i>',
        '\(devil\)'  => '<i data-emoji="(devil)" class="js_emoji twa twa-xlg twa-rage"></i>',
        ':S'       => '<i data-emoji=":S" class="js_emoji twa twa-xlg twa-worried"></i>',
        '\*\)'       => '<i data-emoji="*)" class="js_emoji twa twa-xlg twa-kissing-heart"></i>',
        '\(y\)'      => '<i data-emoji="(y)" class="js_emoji twa twa-xlg twa-thumbsup"></i>',
        '\(n\)'      => '<i data-emoji="(n)" class="js_emoji twa twa-xlg twa-thumbsdown"></i>'
    );
    foreach($emoji as $pattern => $replacement) {
        $pattern = '/(^|\s)'.$pattern.'/i';
        $text = preg_replace($pattern, $replacement, $text); 
    }
    return $text;
}


/**
 * decode_hashtag
 * 
 * @param string $text
 * @return string
 */
function decode_hashtag($text) {
    global $system;
    $pattern = '/(#|\x{ff03}){1}([0-9_\p{L}]*[_\p{L}][0-9_\p{L}]*)/u';
    $text = preg_replace($pattern, '<a href="'.$system['system_url'].'/search/hashtag/$2">$0</a>', $text);
    return $text;
}


/**
 * decode_mention
 * 
 * @param string $text
 * @return string
 */
function decode_mention($text) {
    global $user;
    $text = preg_replace_callback('/\[([a-z0-9._]+)\]/i', array($user, 'get_mentions'), $text);
    return $text;
}


/**
 * decode_text
 * 
 * @param string $string
 * @return string
 */
function decode_text($string) { 
    return base64_decode($string);
}


/* ------------------------------- */
/* Post Feelings */
/* ------------------------------- */

/**
 * get_feelings
 * 
 * @return array
 */
function get_feelings() {
    $feelings = array(
        array("icon" => "smile",          "action" => "Feeling",      "text" => __("Feeling"),      "placeholder" => __("How are you feeling?")),
        array("icon" => "headphones",     "action" => "Listening To", "text" => __("Listening To"), "placeholder" => __("What are you listening to?")),
        array("icon" => "eyeglasses",     "action" => "Watching",     "text" => __("Watching"),     "placeholder" => __("What are you watching?")),
        array("icon" => "video-game",     "action" => "Playing",      "text" => __("Playing"),      "placeholder" => __("What are you playing?")),
        array("icon" => "cake",           "action" => "Eating",       "text" => __("Eating"),       "placeholder" => __("What are you eating?")),
        array("icon" => "tropical-drink", "action" => "Drinking",     "text" => __("Drinking"),     "placeholder" => __("What are you drinking?")),
        array("icon" => "airplane",       "action" => "Traveling To", "text" => __("Traveling To"), "placeholder" => __("Where are you going?")),
        array("icon" => "books",          "action" => "Reading",      "text" => __("Reading"),      "placeholder" => __("What are you reading?")),
        array("icon" => "calendar",       "action" => "Attending",    "text" => __("Attending"),    "placeholder" => __("What are you attending?")),
        array("icon" => "tada",           "action" => "Celebrating",  "text" => __("Celebrating"),  "placeholder" => __("What are you celebrating?")),
        array("icon" => "mag-right",      "action" => "Looking For",  "text" => __("Looking For"),  "placeholder" => __("What are you looking for?"))
    );
    return $feelings;
}


/**
 * get_feelings_types
 * 
 * @return array
 */
function get_feelings_types() {
    $feelings_types = array(
        array("icon" => "smile",                         "action" => "Happy",      "text" => __("Happy")),
        array("icon" => "heart-eyes",                    "action" => "Loved",      "text" => __("Loved")),
        array("icon" => "satisfied",                     "action" => "Satisfied",  "text" => __("Satisfied")),
        array("icon" => "muscle",                        "action" => "Strong",     "text" => __("Strong")),
        array("icon" => "disappointed",                  "action" => "Sad",        "text" => __("Sad")),
        array("icon" => "stuck-out-tongue-winking-eye",  "action" => "Crazy",      "text" => __("Crazy")),
        array("icon" => "sweat",                         "action" => "Tired",      "text" => __("Tired")),
        array("icon" => "sleeping",                      "action" => "Sleepy",     "text" => __("Sleepy")),
        array("icon" => "confused",                      "action" => "Confused",   "text" => __("Confused")),
        array("icon" => "worried",                       "action" => "Worried",    "text" => __("Worried")),
        array("icon" => "angry",                         "action" => "Angry",      "text" => __("Angry")),
        array("icon" => "rage",                          "action" => "Annoyed",    "text" => __("Annoyed")),
        array("icon" => "open-mouth",                    "action" => "Shocked",    "text" => __("Shocked")),
        array("icon" => "pensive",                       "action" => "Down",       "text" => __("Down")),
        array("icon" => "confounded",                    "action" => "Confounded", "text" => __("Confounded"))
    );
    return $feelings_types;
}


/**
 * get_feeling_icon
 * 
 * @param string $needle
 * @param array $array
 * @param string $key
 * @return string
 */
function get_feeling_icon($needle, $array, $key = "action") {
   foreach ($array as $_key => $_val) {
       if($_val[$key] === $needle) {
           return $array[$_key]['icon'];
       }
   }
   return false;
}



/* ------------------------------- */
/* Censored Words */
/* ------------------------------- */

/**
 * censored_words
 * 
 * @param string $text
 * @return string
 */
function censored_words($text) {
    global $system;
    if($system['censored_words_enabled']) {
        $bad_words = explode(',', $system['censored_words']);
        if(count($bad_words) > 0) {
            foreach($bad_words as $word) {
                $pattern = '/'.$word.'/i';
                $text = preg_replace($pattern, str_repeat('*', strlen($word)), $text);
            }
        }
    }
    return $text;
}



/* ------------------------------- */
/* General */
/* ------------------------------- */

/**
 * get_ip
 * 
 * @return string
 */
function get_user_ip() {
    /* handle CloudFlare IP addresses */
    return (isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']);
}


/**
 * get_os
 * 
 * @return string
 */
function get_user_os() {
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i'      =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );
    foreach($os_array as $regex => $value) {
        if(preg_match($regex, $_SERVER['HTTP_USER_AGENT'])) {
            $os_platform = $value;
        }
    }   
    return $os_platform;
}


/**
 * get_browser
 * 
 * @return string
 */
function get_user_browser() {
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Firefox',
        '/safari/i'     =>  'Safari',
        '/chrome/i'     =>  'Chrome',
        '/edge/i'       =>  'Edge',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser'
    );
    foreach($browser_array as $regex => $value) {
        if(preg_match($regex, $_SERVER['HTTP_USER_AGENT'])) {
            $browser = $value;
        }
    }
    return $browser;
}


/**
 * get_extension
 * 
 * @param string $path
 * @return string
 */
function get_extension($path) {
    return strtolower(pathinfo($path, PATHINFO_EXTENSION));
}


/**
 * ger_origenal_url
 * 
 * @param string $url
 * @return string
 */
function ger_origenal_url($url) {
    if(_is_short_url($url)) {
        $headers = get_headers($url, 1);
        if(isset($headers['Location'])) {
            $url = $headers['Location'];
            if(is_array($url)) {
                foreach ($url as $url) {
                    $url = $url . "\n";
                }
            }
        }
    }
    return $url;
}


/**
 * _is_short_url
 * 
 * @param string $url
 * @return string
 */
function _is_short_url($url) {
    // 1. Overall URL length - May be a max of 30 charecters
    if (strlen($url) > 30) return false;
    $parts = parse_url($url);
    // No query string & no fragment
    if (isset($parts["query"]) || isset($parts["fragment"])) return false;
    $path = $parts["path"];
    $pathParts = explode("/", $path);
    // 3. Number of '/' after protocol (http://) - Max 2
    if (count($pathParts) > 2) return false;
    // 2. URL length after last '/' - May be a max of 20 characters
    $lastPath = array_pop($pathParts);
    if (strlen($lastPath) > 20) return false;
    // 4. Max length of host
    if (strlen($parts["host"]) > 10) return false;
    return true;
}


/**
 * get_array_key
 * 
 * @param array $array
 * @param integer $current
 * @param integer $offset
 * @return mixed
 */
function get_array_key($array, $current, $offset = 1) {
    $keys = array_keys($array);
    $index = array_search($current, $keys);
    if(isset($keys[$index + $offset])) {
        return $keys[$index + $offset];
    }
    return false;
}


/**
 * get_hash_key
 * 
 * @param integer $length
 * @return string
 */
function get_hash_key($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);
    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
    return $result;
}


/**
 * get_hash_token
 * 
 * @return string
 */
function get_hash_token() {
    return md5(time()*rand(1, 9999));
}


/**
 * get_url_text
 * 
 * @param string $string
 * @param integer $length
 * @return string
 */
function get_url_text($string, $length = 10) {
    $string = htmlspecialchars_decode($string, ENT_QUOTES);
    $string = preg_replace('/[^\\pL\d]+/u', '-', $string);
    $string = trim($string, '-');
    $words = explode("-",$string);
    if(count($words) > $length) {
        $string = "";
        for($i = 0; $i < $length; $i++) {
            $string .= "-".$words[$i];
        }
        $string = trim($string, '-');
    }
    return $string;
}


/**
 * get_firstname
 * 
 * @param string $fullname
 * @return string
 */
function get_firstname($fullname) {
    $name = explode(" ", $fullname);
    return $name[0];
}

?>