<?php
	include 'db.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link rel="stylesheet" type="text/css" href="styles/newstyle.css">
</head>
<body>
	<div class="header">
		<h2>Mobile Arena</h2>
		<img src="images/logo.png">
		<a href="signup.html">SignUp</a>
		<a href="login.html">Login</a>
	</div>
	<div class="model">
		<h1>Mobile Model</h1>
		<img src="images/model.png">
	</div>
	<div class="orderform">
		<form action="" method="post">
			<h3>Order Form</h3>
			<input type="text" name="cname" placeholder="Name">
			<input type="email" name="cmail" placeholder="Email">
			<input type="text" name="c-contact" placeholder="Phone Number">
			<input type="text" name="city" placeholder="City">
			<input type="text" name="cadd" placeholder="Address">
			<input type="submit" name="orderbtn" value="Place Order">
		</form>
		<?php
		if (isset($_POST['orderbtn']))

		{
			$name=$_POST["cname"];
			$email=$_POST["cmail"];
			$contact=$_POST["c-contact"];
			$city=$_POST["city"];
			$address=$_POST["cadd"];

			$query=" INSERT INTO ordertable (name,email,contact,city,address) VALUES ('$name','$email','$contact','$city','$address') ";
			$run=mysqli_query($con,$query);
			if($run){
				echo"<script> window.open ('newIndex.php','_self');
				</script>";
			}

		}


			?>

	</div>
</body>
</html>