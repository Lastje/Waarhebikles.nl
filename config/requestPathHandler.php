<?php
	
	$request = str_replace(URL_ROOT, '', $globalPath);

	if(isset($_SESSION['userId'])){

		if(1 == 2){

		}else{
			include DIRECTORY_TEMPLATES . 'main.php';
		}

	}else{

		include DIRECTORY_TEMPLATES . 'inloggen.php';

	}

	

	

?>