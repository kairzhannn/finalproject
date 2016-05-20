
<html>
<head>
	<?php session_start();?>
	<link rel="icon" href="p.png">
	<title>Animal</title>
	<link rel="stylesheet" href="index.css" type="text/css"/>
</head>
<body>
	<div class="box">
		<div class="shapka">	
			<div class="photo"><a href='home.php'><img src="icon.jpg" title="move to the home" ></a><a href='register.php'><img src='o.png' style='width:60px;height:80px;float:right;margin-right:-50px;margin-top:30px;'/></a></div>
		<div class="golova">
			<?php

			if (empty($_SESSION['login'])) {
			?> 			<form method="POST" action='login_action.php'>
  <input id='l' type='text' name='login' placeholder='| Login'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
  <input id='p' type='password' name='password' placeholder='| Password'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
  <input id='e' type='submit' name='enter' value='Sign In' /></br>
</form>
		<?php	}
		else {
			?><span style='fon-size:30px;padding-top:60px;'><?= $_SESSION['name']." ".$_SESSION['surname']?></span> <span><a href="logout.php">Log out</a></span><br><br><br><br>

		<?php }
			 ?>


			<div class="new">
			<?php
	function search($words) {
		$words=htmlspecialchars($words);
		if($words==="") return false;
		$query_search='';

		$arraywords=(explode(' ', $words));
		foreach ($arraywords as $key => $value) {
			if(isset($arraywords[$key-1]))
				$query_search .= ' OR';
			$query_search .='title LIKE "%'.$value.'%" OR article LIKE "%'.$value.'%"';
		}
		$q="SELECT * FROM animals WHERE $query_search";
		$con=mysqli_connect("localhost","root","","users");
		$result_set=$con->query($q);
		$con->close();
		$results=array();
		$i=0;
		while ($row=$result_set->fetch_assoc()) {
			$results[$i]=$row;
			$i++;
		}
		return $results;
	}
	if(isset($_POST['poisk'])) {
		$words=$_POST['words'];
		$results=search($words);
		
	}
?>
<html>
<head>
</head>
<body>
	<form name='search' action='index.php' method='post'>
		<input type='text' name='words' style='height:25px;width:355px;margin-top:20px;margin-left:30px;' placeholder='| Search'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')">
		<input type='submit' name='poisk' value='Search' style="width:80px;height:25px;">
	</form>
	<?php
		if(isset($_POST['poisk'])) {
			echo "<p style='font-family:cursive;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results of search :<hr></p>";
			if($results===false) echo "Empty request";
			if(count($results)==0) echo "<p style='font-size:30px;margin-left:120px;font-family:cursive;'>No results found.</p>";
			else
				for ($i=0; $i < count($results) ; $i++) { 
					echo "<p style='font-size:22px;font-family:cursive;margin-left:220px;'>".$results[$i]['title']."</p><br>";
					echo "<p  style='margin-top:-20px;;font-family:cursive;'>".$results[$i]['article']."</p><br>";
				}
		}

	?>
</body>
</html>

			</div>
		</div>
		</div>
		<div class="spisok">
			<form action="">
			<ul class="color">
				<li style="font-family:cursive;"><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><br>
				<li style="font-family:cursive;" class="gol"><a href="#.php" class="down">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
			<div class="list">
			<a href="1.php" >Wild animals</a>
				<a href="2.php">Pets</a>
				<a href="3.php">Fishes</a>
				<a href="4.php">Insects</a>
				<a href="5.php">Birds</a>
			</div>
			<li style="font-family:cursive;"><a href="new.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				News&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><br>
			<li style="font-family:cursive;"><a href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><br>
			</ul>
			<!-- <<li style="font-family:cursive;"><a href="7.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><br>--> 
			</ul>
		</form>

		</div>
		
	</div>

</body>
</html>
