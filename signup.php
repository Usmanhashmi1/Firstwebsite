<?php
include "db.php";
session_start();

?>

<!DOCTYPE html>

<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="styles/newstyle.css">
</head>
<body>
	<div class="header">
		<h2>Mobile Arena</h2>
		<img src="images/logo.png">
		<a href="login.php">Login</a>
	</div>
	<div>
		<form action="" method='post' class="sign-up">

			<h5>Enter your information below </h5>
			<input type="text" name="fname" placeholder="First Name" required>
			
			<input type="email" name="mail" placeholder="Email address" required>
			<input type="text" name="city" placeholder="City" required>
			
			<input type="password" name="psw" placeholder="Enter Password" required>
			<input type="submit" name="reg-btn" value="Register" style="margin-left: 10%;">
			
		</form>
		<?php
		if(isset($_POST['reg-btn']))

		{

			$name=$_POST["fname"];
			$email=$_POST["mail"];
			$password=$_POST["psw"];
			$city=$_POST["city"];

			$query="INSERT INTO customer_login (name,password,email,city) VALUES ('$name','$password','$email','$city')";
			$run=mysqli_query($con,$query);

			if($run){
				$_SESSION['email']=$email;

				echo "<script>  
				alert ('Insert Succesfull');
				</script>";

			}
			else {
              echo "<script>  
				alert ('Error in query');
				</script>";

			}
		}
		?>

	</div>
</body>
</html>