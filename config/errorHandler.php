<?php
	
	$errors = Error::readErrors();
	if(count($errors)>0){

		echo "<div  style='position:fixed;bottom:0px;width:100%;'>";

		foreach($errors as $number=>$error){
			
			switch ($error['prio']) {
				case '1':
					$class = 'alert alert-info';
					break;
				case '2':
					$class = 'alert alert-warning';
					break;
				case '3':
					$class = 'alert alert-danger';
					break;
				
				default:
					$class = 'alert alert-info';
					break;
			}

			echo "<div class='".$class." alert-dismissible'>";
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				echo "<strong>[".$number."]:</strong> ".$error['message'].". Fout gevonden in <strong>".$error['file']."</strong> op regel <strong>" .$error['line'] . "</strong>";
			echo "</div>";
		}

		echo "</div>";

		Error::clearAllErrors();

	}

?>