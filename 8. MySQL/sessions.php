<?php

	session_start();

	$_SESSION['loginid'] = 1;

	echo $_SESSION['loginid'];

?>