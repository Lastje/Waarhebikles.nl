<?php
	
	//information
	define('HOST_NAME',$_SERVER['SERVER_NAME']);
	define('EMAIL_INFO', 'info@website.nl');
	define('SITE_NAME', 'sitename');
	define('CLIENT_HOST',$_SERVER['REMOTE_ADDR']);

	//live or local
	if(HOST_NAME == 'localhost'){
		$local_development = true;
	}else{
		$local_development = false;
	}

	//adminmodus
	if(CLIENT_HOST == '127.0.0.1'){
		define('ADMIN_MODUS',true);
	}else{
		define('ADMIN_MODUS',false);
	}

	//structure
	if($local_development){
		define('ROOT', '../whil/');
		define('URL_ROOT', '/whil/');
		define('TEST_MODUS',true);
		define('LOCAL_MODUS',true);
	} else {
		define('ROOT', '');
		define('URL_ROOT', '');
		define('TEST_MODUS',false);
		define('LOCAL_MODUS',false);
	}
	define('DIRECTORY_STYLE', URL_ROOT . 'style/' );
	define('DIRECTORY_JS', URL_ROOT . 'style/js/' );
	define('DIRECTORY_TEMPLATES', ROOT . 'templates/');
	define('DIRECTORY_FONT', ROOT . 'font/');
	define('DIRECTORY_BOOTSTRAP', DIRECTORY_STYLE . 'bootstrap/');
	define('DIRECTORY_CLASSES', ROOT . 'classes/');
	define('DIRECTORY_ACTIONS', ROOT . 'actions/');
	define('DIRECTORY_CONFIG', ROOT . 'config/');

	//include ROOT_classes
	//use later
	include DIRECTORY_CLASSES . 'Masterclass.php';
	include DIRECTORY_CLASSES . 'View.php';
	include DIRECTORY_CLASSES . 'Database.php';

	//entities
	include DIRECTORY_CLASSES . 'School.php';


	//Database information
	define('DATABASE_NAME', 'joslaor20_whil');
	define('DATABASE_HOST', '159.253.0.17:3306');
	define('DATABASE_USER', 'joslaor20_whil');
	define('DATABASE_PASSWORD', 'whiljljjk');

	//globals
	global $nav_pad;
	global $global_database;

	//database connection
	$connectionInfo = array();
	$connectionInfo['host'] = DATABASE_HOST;
	$connectionInfo['database_name'] = DATABASE_NAME;
	$connectionInfo['user'] = DATABASE_USER;
	$connectionInfo['password'] = DATABASE_PASSWORD;
	$database = new Database($connectionInfo);

	//define globals;
	$nav_pad = array();

	//include DEFAULT_classes

	//url
	$globalPath = $_SERVER['REQUEST_URI'];

	//session
	session_start();


?>