<?php
include 'db.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="styles/newstyle.css">
</head>
<body>
	<div class="header">
		<h2>Mobile Arena</h2>
		<img src="images/logo.png">
		<?php
		if(!isset($_SESSION['email'])){

		echo '
		<a href="signup.php">SignUp</a>
		<a href="login.php">Login</a>';
		}
		else {
			echo '<a href="logout.php">Logout</a>';

		}?>
	</div>
	
	<a href="order.html" class="ORDER">Order Now</a>
	<div class="specification">
		<div>
			<?php
				$getid=$_GET['id'];
				$Detailquery="SELECT * FROM mobilespecs WHERE id='$getid'";
				$run=mysqli_query($con,$Detailquery);
				while($get=mysqli_fetch_array($run)){
					$id=$get['id'];
					$display=$get['display'];
					$processor=$get['processor'];
					$frontcam=$get['frontcam'];
					$rearcam=$get['rearcam'];
					$resolution=$get['resolution'];
					$ram=$get['ram'];
					$os=$get['osversion'];
					$storage=$get['storage'];
					$battery=$get['battery'];
					$image=$get['image'];
				echo '
			<p>Display</p>
			<span>',$display,'-inch</span>
		</div>
		<div>
			<p>Processor</p>
			<span>',$processor,'GHz quad-core</span>
		</div>
		<div>
			<p>Front Camera</p>
			<span>',$frontcam,'-megapixel</span>
		</div>
		<div>
			<p>Resolution</p>
			<span>',$resolution,' pixels</span>
		</div>
		<div>
			<p>RAM</p>
			<span>',$ram,'GB</span>
		</div>
		<div>
			<p>OS</p>
			<span>Android ',$os,'</span>
		</div>
		<div>
			<p>Storage</p>
			<span>',$storage,'GB</span>
		</div>
		<div>
			<p>Rear Camera</p>
			<span>',$rearcam,'-megapixel</span>
		</div>
		<div>
			<p>Battery Capacity</p>
			<span>',$battery,'mAh</span>
		</div> 
		
	</div>

	<div class="model">
		<h1>Mobile </h1>
		<img src="images/',$image,'">	
	</div>';
	}?>

</body>
</html>