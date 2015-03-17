
<?php

	session_start();

	include("connection.php");

	if ($_POST['submit']=="Sign Up") {

		if (!$_POST['email']) $error="<br />Please enter your email";

			else if !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";

		if (!$_POST['password']) $error="<br />Please enter your password";

			else {

				if (strlen($_POST['password']) < 8) $error.="<br />Please enter a password with at least 8 characters";

				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please use at least one capital letter in your password";

			}

		if ($error) echo "There were error(s) in your signup details:".$error;

		else {

			if (mysqli_connect_error()) {

				die("Could not connect to database");
			}

			$query= "SELECT * FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";

			$result = mysqli_query($link, $query);

			$results = mysqli_num_rows($result);

			if ($results) echo "That email is already registered. Would you like to log in?";

			else {

				$query="INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')"; 

				mysqli_query($link, $query);

				echo "You've been signed up!";

				$_SESSION['id']=mysqli_insert_id($link);

				print_r($_SESSION);

				// redirect to logged in page
			}

		}

	}

	if ($_POST['submit']=="Log In") {

		$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."'AND 
		password='" .md5(md5($_POST['loginemail']) .$_POST['loginpassword']). "'LIMIT 1";

		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
		
		if($row){
		
			$_SESSION['id']=$row['id'];
			
			// redirect to logged in page
    
		}

		else {

			echo "We could not find a user with that email and password. Please try again.";

		}

	}

?>


<form method="post">

	<input type= "email" name= "email" id= "email" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type= "password" name= "password" value="<?php echo addslashes($_POST['password']); ?>"/>
	<input type= "submit" name="submit" value="Sign Up" />

</form>

<form method="post">

	<input type= "email" name= "loginemail" id= "loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type= "password" name= "loginpassword" value="<?php echo addslashes($_POST['password']); ?>"/>
	<input type= "submit" name="submit" value="Log In" />

</form>