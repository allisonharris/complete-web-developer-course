<!doctype html>
<html>
<head>
<title>My First Webpage</title>

<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body>
<div>

<?php
	 	
 if ($_GET["submit"]) {

	 if ($_GET["name"]) {

	 echo "Your name is ".$_GET["name"];

	 } 

	 else {

	 	 echo "Please enter your name";
					
	 }
			
 }
	 	 	
?>

<form>
	<label for="name">Name</label>
	<input name="name" type="text" />
	<input type="submit" name="submit" value="Submit Your Name" />
</form>

</div>
</body>
</html>