<?php

	//include config file
	if($_SERVER['SERVER_NAME']=='localhost'){
		include'../whil/config/config.php';
	}else{
		include'config/config.php';
	}

	//start of html
	include DIRECTORY_TEMPLATES . 'header.php';
	include DIRECTORY_TEMPLATES . 'menu.php';
	include DIRECTORY_TEMPLATES . 'error.php';

	//pathHandler
	include DIRECTORY_CONFIG . 'requestPathHandler.php';

	//end of html
	include DIRECTORY_TEMPLATES . 'footer.php';

?>