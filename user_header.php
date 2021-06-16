

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
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
	ul {
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
	li a:visited {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;	
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

		* {box-sizing: border-box;}

/*.dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 24px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: rgba(09,41,98,0.9);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(09,41,98,0.9);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: blue;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: rgba(09,41,98,0.9);}*/
</style>

</style>
<body>
	<!-- <div style="position: fixed; width: 100%;">
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 0px; font-size: 48px; position: sticky; z-index: 1">THE <p style="color: #e6b800; display: inline;">DELUXE</p> PG</td>
			<td id="td1" style="font-size: 25px; text-align: right;">
				<div class="dropdown" style="float:right;">
  					<button class="dropbtn" style="font-family: 'Times New Roman', Times, serif;"><i class="fa fa-user" style="font-size:36px;"></i>
						<?php //if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></button>
  					<div class="dropdown-content" style="right: 0;">
					    <a href="user_view.php">My Info</a>
					    <a href="user_logout.php">Logout</a>
					  </div>
					</div>
			 <a href="user_view.php"><i class="fa fa-user" style="font-size:36px"></i>
					<?php //if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></a></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_homepage.php">Home</a></li>
 		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="user_logout.php">Logout</a></li>
	</ul>
</div>
<br><br><br> -->

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
<br><br><br>
</body>
</html>