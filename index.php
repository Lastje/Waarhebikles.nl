<?php

	//include config file
	if($_SERVER['SERVER_NAME']=='localhost'){
		include'../whil/config/config.php';
	}else{
		include'config/config.php';
	}

	//pathHandler
	include DIRECTORY_CONFIG . 'requestPathHandler.php';

?>
