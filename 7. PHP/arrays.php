<?php
	
	$myArray = array("pizza", "coffee", "chocolate");

	print_r($myArray);

	echo $myArray[2];

	echo "<br /><br />";

	$anotherArray[0] = "pizza";
	$anotherArray[1] = "yogurt";

	print_r($anotherArray);

	echo "<br /><br />";

	$thirdArray = array [

		"France" => "French",
		"USA" => "English",
		"Spain" => "Spanish"
	];

	print_r($thirdArray);

	echo "<br /><br />";

	unset($thirdArray["Spain"]);

	print_r($thirdArray)




?>