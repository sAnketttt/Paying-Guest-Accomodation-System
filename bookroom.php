<?php 
if(!isset($_SESSION['id']))
  header("Location:user_login.php");
?>
<?php

		include 'user_header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
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
		padding: 20px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from user_login";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	

	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>

		<!-- <br><br>
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
  				</div>
  				<div class="column">
    				<h3 style="text-align: center;">Executive Room</h3>
  				</div>
  				<div class="column">
    				<h3 style="text-align: center;">Standard Room</h3>
  				</div>
			</div>
		</div><br> -->
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Room Details</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Number of beds</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Delux</td>
					<td>1</td>
					<td>1000</td>
				</tr>
				<tr>
					<td>Executive</td>
					<td>2</td>
					<td>1800</td>
				</tr>
				<tr>
					<td>Standard</td>
					<td>4</td>
					<td>3000</td>
				</tr>
			</table><br><br>
			<form class="basic_box" action="bookroom1.php" method="post">
				<table>
					<br><br>
					<tr>
						<td style="text-align: left;">Select room type:</td>
						<td style="text-align: left;">
							<select name="rooms" required>
								<option value="">Select</option>
								<option value="Delux">Delux</option>
								<option value="Executive">Executive</option>
								<option value="Standard">Standard</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-in date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-out date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkout">
						</td>
					</tr>
				</table>
				<table>
					<br>
					<tr>
						<th>Features</th>
						<th>Service Cost per day</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ac" value="on">AC</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
						<td style="text-align: center;">150</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="lunch" value="on">Lunch</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
						<td style="text-align: center;">120</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="dinner" value="on">Dinner</td>
						<td style="text-align: center;">250</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="swimming" value="on">Swimming Pool Access</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr><br></tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>