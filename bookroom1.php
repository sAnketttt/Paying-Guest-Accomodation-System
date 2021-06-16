<html>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$room = $_POST["rooms"];
	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];
	$ac = isset($_POST["ac"]) ? "true":"false";
	$breakfast = isset($_POST["breakfast"]) ? "true":"false";
	$lunch = isset($_POST["lunch"]) ? "true":"false";
	$snacks = isset($_POST["snacks"]) ? "true":"false";
	$dinner = isset($_POST["dinner"]) ? "true":"false";
	$swimming = isset($_POST["swimming"]) ? "true":"false";
	$in = strtotime($checkin);
	$out = strtotime($checkout);
	$diff = abs($out - $in); 
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$phone = $_SESSION['phone'];
	$name = $_SESSION['name'];
	$pid = $_SESSION['idproof'];
	$id = $_SESSION['id'];
	$status = "Waiting";
	$price = 0;
	if(strcmp($room, "Delux")==0)
	{
		$price = 1000;
	}
	else if(strcmp($room, "Executive")==0)
	{
		$price = 1800;
	}
	else if(strcmp($room, "Standard")==0)
	{
		$price = 3000;
	}
	$price = $price*$days;
	$additional = 0;
	if(strcmp($ac, "true")==0)
	{
		$additional = $additional + 300;
	}
	if(strcmp($breakfast, "true")==0)
	{
		$additional = $additional + 150;
	}
	if(strcmp($lunch, "true")==0)
	{
		$additional = $additional + 300;
	}
	if(strcmp($snacks, "true")==0)
	{
		$additional = $additional + 120;
	}
	if(strcmp($dinner, "true")==0)
	{
		$additional = $additional + 250;
	}
	if(strcmp($swimming, "true")==0)
	{
		$additional = $additional + 300;
	}
	$sqlt = "SELECT * from book_id";
	$result=mysqli_query($conn,$sqlt);
	$row=mysqli_fetch_row($result);
	$t = $row[0];
	$price = $price + $days*$additional;
	$sql = "INSERT INTO user_room_book VALUES ('$phone', '$name', '$pid', '$room', '$checkin', '$checkout', '$days', '$ac', '$breakfast', '$lunch', '$snacks', '$dinner', '$swimming', '$status', '$price', '$t','$id')";
	mysqli_query($conn, $sql);
	$t = $t + 1;
	$sqlt = "DELETE from book_id";
	mysqli_query($conn,$sqlt);
	$sqlt = "INSERT INTO book_id VALUES ('$t')";
	mysqli_query($conn,$sqlt);
	header("Location: bookroom2.php");
	?>
</html>