<?php 
if(!isset($_SESSION['id']))
  header("Location:user_login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 30px;
		overflow: hidden;
			
			z-index: 1;
			position: sticky;
/*			top: 0px;
*/	}
	td {
		padding: 15px;
overflow: hidden;
			z-index: 1;
			position: sticky;
/*			top: 0px;
*/	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	/*td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}*/
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
	

		* {box-sizing: border-box;}
		
		img {
			vertical-align: middle;
			background-size: cover;
		}
		.reserve_room:hover
		{
			color: #000;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #4AB8F9;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}
		/* Slideshow container */
		.slideshow-container {
		  max-width: 10000px;
		  position: relative;
		  margin: auto;
		  padding: 0px;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 30px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-shadow: 4px 4px black;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
		td a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	td a:visited {
	  	/*background-color: #e6b800;*/
	  	color: white;
	  	text-decoration: none;	
	}
	td a:active {
	  	/*background-color: #e6b800;*/
	  	color: white;
	  	text-decoration: none;		
	}
	td a:hover {
	  	/*background-color: #e6b800;*/
	  	color: white;
	  	text-decoration: none;
	}




</style>
<body>
	
	<div style="width: 100%;">
	<table style="position: fixed; width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> PG</td>
			<td id="td1" style="font-size: 25px; text-align: right;"><a href="user_view.php"><i class="fa fa-user" style="font-size:36px"></i>
				<?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></a></td>
		</tr>
	</table>
	<ul style="position: fixed; margin-top: 78px;" >
		<li><a href="user_homepage.php">Home</a></li>
 		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="user_logout.php">Logout</a></li>
	</ul>
</div>
<br><br>






	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/1.jpg" style="width:100%">
		  <div class="text">ENJOY THE DREAM EXPERIENCE</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/2.jpg" style="width:100%">
		  <div class="text">REDEfINE LUXURY</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/3.jpg" style="width:100%">
		  <div class="text">SAVOUR EVERY SERVE, EVERY SERVICE</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
		</script>

		<br><br>
		<h2 class="r_room" style="text-align: center;">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="basic_box" style="width: 90%;">
			<div class="row">
  				<div class="column">
    				<img src="images/Delux room.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/Executive room.jpg" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/Standard room.jpg" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3 style="text-align: center;">Deluxe Room</h3>
    				<h4 style="text-align: center;">Rs.1000</h4>
  				</div>
  				<div class="column">
    				<h3 style="text-align: center;">Executive Room</h3>
    				<h4 style="text-align: center;">Rs.1800</h4>    				    				
  				</div>
  				<div class="column">
    				<h3 style="text-align: center;">Standard Room</h3>
    				<h4 style="text-align: center;">Rs.3000</h4>    				
  				</div>
			</div>
		</div>
	</div>
</body>
</html>