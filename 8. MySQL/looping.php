<?php

	$link = mysqli_connect("localhost", "cl20-exampledb", "K7.7grb-Y", "cl20-exampledb");

		if (mysqli_connect_error()) {

			die("Could not connect to database");

	}

	//$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('Beth', 'beth@gmail.com', 'apples')";

	// update a user's name
	//$query = "UPDATE `users` SET name = 'Ian O\'Neil' WHERE id = 3 LIMIT 1";

	//mysqli_query($link, $query)

	$name = "Ian O'Neil";

	$query = "SELECT `name` FROM users WHERE name = '".mysqli_real_escape_string($link, $name)"'";


	if ($result = mysqli_query($link, $query)) {

		echo mysqli_num_rows($result);

		while ($row = mysqli_fetch_array($result)) {

			print_r($row);

		}
	}

	else {

		echo "It failed!";
	}
	
?>