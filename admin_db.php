<html>
<body><?php
	$conn = mysqli_connect("localhost", "root", "", "iwp"); //$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) //if ($conn->connect_error)
{
  die("Connection failed: " . mysqli_connect_error()); //die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin where aname='" . $_POST['aname'] . "' AND password='" . $_POST['password'] . "'";
$result = mysqli_query($conn, $sql); //$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) //if ($result->num_rows > 0)
{
		$row = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['aid'] = $row['aid'];
		$_SESSION['aname'] = $row['aname'];
  		header("Location:admin_view.php"); 

}
else{
	echo '<script>alert("Invalid Credentials")</script>';
	echo '<script>window.location.href = "admin_login.php"</script>';
}
?>
</body>
</html>