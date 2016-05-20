
<!DOCTYPE html>
<html>
<title>News</title>
<link rel="icon" href="p.png"
	<link rel="stylesheet" href="index.css" type="text/css"/>
<style type="text/css">
 a{
	text-decoration: none;
	font-family: cursive;
	color: black;

	
}
a p{
	margin-left: 180px;
	font-size: 40px;
	display: inline;
	color: grey;
}
body{
  background:url('2.jpg') no-repeat;
  background-size: 100%;
  font-family: ;
}
</style>

<body >
	<a href='index.php'><p>Home</p></a>
	<a href='new.php'><p>News</p></a>
	<a href='ad.php'><p>Add</p></a>
	<a href='delete.php'><p>Delete</p></a>



<?php
$con=mysqli_connect("localhost","root","","users");
mysqli_select_db($con,"animals");
if ($con->connect_error) {
     
} 

$sql = "SELECT  title, article FROM animals ORDER BY title,article desc";
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