<?php
	
	class View extends Masterclass{

		public static function route($initHtml,$file){
			if($initHtml){
				include DIRECTORY_TEMPLATES . 'header.php';
				include DIRECTORY_TEMPLATES . 'menu.php';
				include DIRECTORY_TEMPLATES . $file . '.php';
				include DIRECTORY_CONFIG . 'errorHandler.php'; 
				include DIRECTORY_TEMPLATES . 'footer.php';
			}else{
				include DIRECTORY_TEMPLATES . $file . '.php'; 
			}
		}

	}

?>