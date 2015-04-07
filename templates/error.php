<?php

// 1 = foutmelding
// 2 = informatie
// 3 = fatal error
// 0 = succes

if(isset($_SESSION['error'])){

	$error = $_SESSION['error'];
	$message = $_SESSION['error_message'];
	$html = '';

	switch ($error) {
		case '1':
			$html = '<div class="alert alert-warning" role="alert"><strong>Let op!: </strong>'.$message.'</div>'; 
			break;
		case '2':
			$html = '<div class="alert alert-info" role="alert"><strong>Informatie: </strong>'.$message.'</div>';
			break;
		case '3':
			$html = '<div class="alert alert-danger" role="alert"><strong>Error!: </strong>'.$message.'</div>';
			break;
		case '0':
			$html = '<div class="alert alert-success" role="alert"><strong>Gelukt!: </strong>'.$message.'</div>';
			break;
		
	}

	echo $html;

	unset($_SESSION['error']);
	unset($_SESSION['message']);
}

?>