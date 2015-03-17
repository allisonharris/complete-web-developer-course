<?php

	// this is a very secure way to store even a non-secure password such as "password"
	echo md5(md5($row['id'])."password");

?>