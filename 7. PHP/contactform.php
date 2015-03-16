<?php

	if ($_POST["submit"]) {


		if (!$POST['name']) {

			$error="<br />Please enter your name";

		}

		if (!$POST['email']) {

			$error.="<br />Please enter your email address";
			
		}

		if (!$POST['comment']) {

			$error.="<br />Please enter a comment";
			
		}

		if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

			$error.="<br />Please enter a valid email address";
		}

		if ($error) {

			$result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error'</div>';
		}

		else {

			if (mail("test@allisoncodes.com", "Comment from website!", "Name: ".$_POST['name']." 

				Email: ".$_POST['email']."

				Comment: ".$_POST['comment'])

				) {

				$result='<div class="alert alert-success"><strong>Thank you! I will be in touch.</strong></div>';
			}

			else {

				$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Plese try again later.</div>';
			}
		}
	}
?>

<!doctype html>
<html>
<head>
    <title>Contact Form</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<style>

	.emailForm {
		border: 1px solid gray;
		border-radius: 10px;
		margin-top: 20px;
	}

	textarea {
		height: 120px;
	}

	form {

		padding-bottom: 20px;
	}

</style>
		
    
</head>
<body>

	<?php

		/*
		$emailTo = "allisontastic@gmail.com";
		$subject = "hi!";
		$body = "this is a test email";
		$header = "From: allison.harris23@gmail.com";

		mail($emailTo, $subject, $body, $header);
		*/

	?>

	<div class="container">

		<div class="row">

			<div class="col-md-6 col-md-offset-3 emailForm">

				<h1>My email form</h1>

				<?php echo $result; ?>

				<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>

				<form method="POST">

					<div class="form-group">

						<label for="name">

						<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name'; ?>" />

						</label>

					</div>

					<div class="form-group">

						<label for="email">

						<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email'; ?>" />

						</label>

					</div>

					<div class="form-group">

						<label for="comment">

						<textarea class="form-control" name="comment"><?php echo $_POST['comment'; ?> </textarea>

						</label>

					</div>

					<input type="submit" name="submit" class=" btn btn-success btn-lg" value="Submit" />
				</form>

			</div>

		</div>

	</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>


