<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
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
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
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
	<?php

		include 'user_header.php';
	?><br><br>

	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Payment has been done successfully.<br></p>
		<P><br>Click Next to get redirected Feedback.</P>
		<a href="popup.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>