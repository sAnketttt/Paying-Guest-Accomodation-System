<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$aname = $_POST["aname"];
	$pwd = $_POST["password"];
	$empid = $_POST["empid"];
	$sql = "INSERT INTO admin(aname, password, empid) VALUES('$aname', '$pwd', '$empid')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: admin_signed_up1.php");
	}
	else
	{
		header("Location: admin_signed_up2.php");
	}
?>
</body>
</html>