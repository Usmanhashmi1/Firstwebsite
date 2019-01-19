<?php
include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Arena</title>
	<link rel="stylesheet" type="text/css" href="styles/newStyle.css">
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

	<div class="slideshow">

		<div class="mySlides">
			<img src="images/mob1.jpg"> 
		</div>

		<div class="mySlides">
			<img src="images/mob2.jpg"> 
		</div>

		<div class="mySlides">
			<img src="images/mob3.jpg"> 
		</div>

		<div class="mySlides">
			<img src="images/mob4.jpg"> 
		</div>

		<div class="mySlides">
			<img src="images/mob5.jpg"> 
		</div>
	</div>
	
	<div class="display">
		<?php
		$i=1;
		$top1=60;
		$top2=60;
		$retrivequery="SELECT *FROM mobilespecs";

		$run=mysqli_query($con,$retrivequery);
		while($get=mysqli_fetch_array($run)) {
			$id=$get['id'];
			$title=$get['title'];
			$image=$get['image'];
		if($i<4){
		?>
		<div class="subdisplay" style="top: 60px;left: <?php echo $top1; ?>px;">
			<img src="images/<?php echo $image; ?>"><p><?php echo $title?></p>
			<a href="detail.php?id=<?php echo $id;?>" ></a>
		</div>;
		<?php 
		$top1=$top1+390;
		}
		else{
			?>
		<div class="subdisplay" style="top: 450px;left:<?php echo $top2; ?>px">
			<img src="images/<?php echo $image;?>"><p><?php echo $title?></p>
			<a href="detail.php?id=<?php echo $id;?> "></a>
		</div>
		<?php
			$top2=$top2+390;		
		}
		
		$i++;
	} ?>
	</div>



	<script type="text/javascript">
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		    var i;
		    var slides = document.getElementsByClassName("mySlides");
		    for (i = 0; i < slides.length; i++) {
		        slides[i].style.display = "none"; 
	    	}
		    slideIndex++;
		    if (slideIndex > slides.length) {slideIndex = 1} 
		    slides[slideIndex-1].style.display = "block"; 
		    setTimeout(showSlides, 2000);
		}
	</script>
</body>
</html>