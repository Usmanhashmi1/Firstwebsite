<?php
include "../db.php";
session_start();

?>

<!DOCTYPE html>

<html>
<head>
	<title>Insert Mobile Detail</title>
	<link rel="stylesheet" type="text/css" href="../styles/newstyle.css">
</head>
<body>
	<div class="header">
		<h2>Mobile Arena</h2>
		<img src="../images/logo.png">
		<?php 
		if(isset($_SESSION['adminlogin'])){
			echo "<a href='logout.php'>Logout</a>";
		}?>
	</div>
	<div>
		<form action="" method='post' class="sign-up">

			<h5>Enter Mobile information below </h5>

			<input type="text" name="title" placeholder="Title" required>
			<input type="text" name="display" placeholder="Dispaly" required>
			<input type="text" name="processor" placeholder="Processor" required>
			<input type="text" name="frontcam" placeholder="Frontcam" required>
			<input type="text" name="resolution" placeholder="Resolution" required>
			<input type="text" name="ram" placeholder="RAM" required>
			<input type="text" name="osversion" placeholder="OS Version" required>
			<input type="text" name="storage" placeholder="Storage" required>
			<input type="text" name="rarecam" placeholder="Rarecam" required>
			<input type="text" name="battery" placeholder="Battery" required>
			<input type="file" name="image" value="Choose Image" placeholder="Image" required>
			<input type="submit" name="reg-btn" value="Register" style="margin-left: 10%;">
		</form>
		
		<?
		
		if(isset($_POST['reg-btn'])){

			$title=$_POST["title"];
			$display=$_POST["display"];
			$processor=$_POST["processor"];
			$frontcam=$_POST["frontcam"];
			$resolution=$_POST["resolution"];
			$ram=$_POST["ram"];
			$osversion=$_POST["osversion"];
			$rarecam=$_POST["rarecam"];
			$battery=$_POST["battery"];
			
			$filetype=$_FILES['image']['type'];
			$image=$_FILES['image']['name'];
			$tmp_name=$_FILES['image']['tmp_name'];
			if($filetype=='image/jpeg' || $filetype=='image/png'){
						
			move_uploaded_file($tmp_name,'../images/$image');
			$query="INSERT INTO mobilespecs(display,processor,frontcam,resolution,ram,osversion,storage,rearcam,battery,image,title) VALUES ('$display','$processor','$frontcam','$resolution','$ram','$osversion','$storage','$rarecam','$battery','$image','$title')";
			$run=mysqli_query($con,$query);
			if($run){
				echo "<script>  
				alert ('Mobile detail Insert Succesfull');
				</script>";
			}
			else {
              echo "<script>  
				alert ('Error in query');
				</script>";

			}
		}
	}
		?>

	</div>
</body>
</html>