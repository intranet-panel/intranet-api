<?php
if (!defined('APP_API')) {
    exit();
}

define('APP_NAME', 'InPanel');
define('APP_SITE', 'https://inpanel.org');
define('APP_VERSION', '1.1.1');
define('APP_BUILD', '21');
define('APP_RELEASE', '2019-12-24 05:58:01 GMT+0800');
define('APP_DEBUG', 0);
header("X-Powered-By: INPANEL");
header("Copyright: INPANEL");
date_default_timezone_set('Asia/Shanghai');

require_once 'Request.php';
require_once 'Response.php';
$data = Request::getRequest();
Response::sendResponse($data);
