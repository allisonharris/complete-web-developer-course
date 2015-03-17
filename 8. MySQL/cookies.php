<?php
	
	// sets cookie log in time
	//setcookie("id", "1234", time()+60*60*24);

	//sets cookies to expire
	setcookie("id", "", time()-3600);

	echo $_COOKIE['id'];
?>