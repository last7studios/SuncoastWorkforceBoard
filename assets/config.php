<?
//// Defined Var and star session
if(!session_id()){
	session_start(); 
}


ini_set('display_errors',1); 
error_reporting(E_ALL ^ E_NOTICE);

///LOGIN VARS
define(USERNAME,ucfirst($_SESSION['username']));
define(USERID,$_SESSION['user_id']);
define(PERMISSION,$_SESSION['permission']);
define(AUTH, 'admin,super_admin');


define(SYSTEM_EMAIL,'info@last7studios.com');


// SYSTEM PATHING
define(BASE_URL, 'http://71.251.84.8/Suncoast%20Workforce/');
define(ADMIN_PATH, BASE_URL.'admin/');
define(IMAGE_PATH, BASE_URL.'assets/images/');
define(CSS_PATH, BASE_URL.'assets/css/');
define(JS_PATH, BASE_URL.'assets/js/');
?>