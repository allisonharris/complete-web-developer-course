<?php

	$link = mysqli_connect("localhost", "cl20-exampledb", "K7.7grb-Y", "cl20-exampledb");

		if (mysqli_connect_error()) {

			die("Could not connect to database");

	}

	$query = "SELECT * FROM users";

	if ($result=mysqli_query($link, $query)) {

		$row = mysqli_fetch_array($result)

		print_r($row);
	}

	else {

		echo "It failed!";
	}
	
?>