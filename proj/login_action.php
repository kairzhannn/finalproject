<?php
$login = $_POST['login'];
$password = $_POST['password'];
$con=mysqli_connect("localhost","root","","users");
mysqli_select_db($con,"animal");


$query = ("SELECT * FROM animal WHERE login='$login' AND password='$password'");
$result=$con->query($query);
if (mysqli_num_rows($result)>0) {
	session_start();
	$row = $result->fetch_array();
	$_SESSION['login'] = $row['login'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['surname'] = $row['surname'];

	header("location: index.php");
}
	else{
		echo "<p style='font-size:50px;font-family:cursive;margin:257px;color:grey;'>Wrong password or login<a style='text-decoration:none;color:black;' href='index.php'> Back</a></p>";
	}
?>

