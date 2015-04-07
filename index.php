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

	if(!LOCAL_MODUS){
		echo "<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-53244565-1', 'auto');
		  ga('require', 'displayfeatures');
		  ga('send', 'pageview');
		</script>";
	}

?>