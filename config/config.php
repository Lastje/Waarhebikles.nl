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
	define('DIRECTORY_STYLE', ROOT . 'style/' );
	define('DIRECTORY_TEMPLATES', ROOT . 'templates/');
	define('DIRECTORY_FONT', ROOT . 'font/');
	define('DIRECTORY_BOOTSTRAP', DIRECTORY_STYLE . 'bootstrap/');
	define('DIRECTORY_CLASSES', ROOT . 'classes/');
	define('DIRECTORY_ACTIONS', ROOT . 'actions/');
	define('DIRECTORY_CONFIG', ROOT . 'config/');

	//include ROOT_classes
	//use later
	//include DIRECTORY_CLASSES . 'Masterclass.php';
	//include DIRECTORY_CLASSES . 'Database.php';

	//Database information
	if($local_development){
		define('DATABASE_NAME', 'joslast.new');
		define('DATABASE_HOST', 'localhost');
		define('DATABASE_USER', 'root');
		define('DATABASE_PASSWORD', '');
	} else {
		define('DATABASE_NAME', 'joslaor20_db');
		define('DATABASE_HOST', 'localhost');
		define('DATABASE_USER', 'joslaor20_db');
		define('DATABASE_PASSWORD', 'joslastww01');
	}

	//globals
	global $product_content;
	global $nav_pad;
	global $database;

	//database connection
	$database = new Database(DATABASE_HOST,DATABASE_NAME,DATABASE_USER,DATABASE_PASSWORD);

	//define globals;
	$product_content = null;
	$nav_pad = array();

	//include DEFAULT_classes

	//url
	$globalPath = $_SERVER['REQUEST_URI'];

	//session
	session_start();


?>