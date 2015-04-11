<?php
	
	$request_stripped1 = str_replace(URL_ROOT, '', $globalPath);
	$request = str_replace('/', '', $request_stripped1);

	if($request=='contact'){

	}else{
		View::route(true,'main');
	}

	

?>