<?php
$con=mysqli_connect("localhost","root","","users");
mysqli_select_db($con,"animals");
if(isset($_POST['add']))
{
	$title=$_POST['title']; 
	$article=$_POST['article'];
    $query=$con->query("INSERT INTO animals VALUES ('', '$title', '$article')");
}
?>
<html>
<head>
	<link rel="stylesheet" href="index.css" type="text/css"/>
	<link rel="icon" href="p.png"
	><title>Add</title>
	</head>
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
p{
	font-family: cursive;
	font-size: 40px;
	margin-left: 300px;
}
</style>

<body >
	<a href='index.php'><p>Home</p></a>
	<a href='new.php'><p>News</p></a>
	<a href='ad.php'><p>Add</p></a>
	<a href='delete.php'><p>Delete</p></a>
	<?php
		session_start(); 
		if(isset($_SESSION['login'])){
	?>
	<p id='v'>Add Information</p>
	
	<form method="POST" action='ad.php'>
	  <input id='z' type='text' name='title' placeholder='| Title'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
	  <input id='x' type='text' name='article' placeholder='| Article'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
	  <input id='c' type='submit' name='add' value='Add' /></br>
	</form>
<?php } else{?>
	<a href='index.php'><p style='color:grey;'>You have to Sign In -> Back</a></p>
	<?php } ?>
</body>
</html>
