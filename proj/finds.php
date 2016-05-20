
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="index.css" type="text/css"/>
<style type="text/css">
 a{
	text-decoration: none;
	font-family: cursive;
	color: black;
	
}
a p{
	margin-left: 280px;
	font-size: 40px;
	display: inline;
	color: grey;
}
</style>

<body >
	<a href='index.php'><p>Home</p></a>
	<a href='finds.php'><p>News</p></a>
	<a href='ad.php'><p>Add</p></a><hr>



<?php
$con=mysqli_connect("localhost","root","","users");
mysqli_select_db($con,"animals");
if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
} 

$sql = "SELECT  title, article FROM animals";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         
         echo "<p style='font-size:52px;font-family:cursive;margin-left:640px;margin-top:-10px;'>".$row['title']."</p><br>";
         echo "<p style='font-size:22px;font-family:cursive;margin-left:230px;margin-right:230px;'>".$row['article']."</p><br>";
     }
} else {
     echo "0 results";
}

$con->close();
?>  

</body>
</html>