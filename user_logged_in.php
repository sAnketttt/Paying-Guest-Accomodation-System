<html>
<body><?php
	$conn = mysqli_connect("localhost", "root", "", "iwp"); //$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) //if ($conn->connect_error)
{
  die("Connection failed: " . mysqli_connect_error()); //die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user_login where phone='" . $_POST['phone'] . "' AND password='" . $_POST['password'] . "'";
$result = mysqli_query($conn, $sql); //$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) //if ($result->num_rows > 0)
{
		$row = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['idproof'] = $row['idproof'];
		$_SESSION['dob'] = $row['dob'];
  		header("Location:user_homepage.php"); 

}
else{
	echo '<script>alert("Invalid Credentials")</script>';
	echo '<script>window.location.href = "user_login.php"</script>';
}
?>
</body>
</html>