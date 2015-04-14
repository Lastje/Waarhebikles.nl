<?php
	
	class Error {

		/*==========================================================*\

			RULES FOR SETTING ERRORS :)

			-----------------------------------------------------

			number: 
				use logic names and number to see where the error starts
			message: 
				short message that will describe the problem
			prio:
				1 - info
				2 - warning
				3 - danger

			* Errors wil only be shown to a ADMIN/DEVELOPER * 

		\*==========================================================*/

		public static function setError($number,$message,$prio,$file,$line){
			$_SESSION['error'][$number] = array("message"=>$message,"prio"=>$prio,"file"=>$file,"line"=>$line);
		}

		public static function clearAllErrors(){
			unset($_SESSION['error']);
		}

		public static function readErrors(){
			if(isset($_SESSION['error'])){
				return $_SESSION['error']; 
			}
		}

	}

?>