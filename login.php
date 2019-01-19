<?php

include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/newstyle.css">
</head>
<body>
	<div class="header">
		<h2>Mobile Arena</h2>
		<img src="images/logo.png">
	</div>
	<div>
		<form action="" method="POST" class="login">
			<h5>Welcome to Mobile Arena!</h5>
			<input type="text" name="uname" placeholder="Enter Username" required>
			<input type="password" name="psw" placeholder="Enter Password" required>
			<input type="submit" name="login-btn" value="Login" style="margin-left: 10%;">
		</form>

		<?php
		
		if(isset($_POST['login-btn']))
		{
			$uname=$_POST["uname"];
			$password=$_POST["psw"];
			
			$login_query="SELECT *FROM customer_login WHERE email='$uname' AND password='$password'";
			$run_query=mysqli_query($con,$login_query);
			$checking=mysqli_num_rows($run_query);
			if($checking>0){
				$_SESSION['email']=$uname;
				echo "
				<script>  
				window.open('newIndex.php','_self');
				</script>";
			}else{
				echo "<script>  
				alert ('error');
				</script>";			
			}
			
		}
		?>

	</div>

</body>
</html>