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
	<form name='search' action='find.php' method='post'>
		<input type='text' name='words'>
		<input type='submit' name='poisk' value='search'>
	</form>
	<?php
		if(isset($_POST['poisk'])) {
			echo "<h2>Results of search :</h2>";
			if($results===false) echo "Empty request";
			if(count($results)==0) echo 'No results found';
			else
				for ($i=0; $i < count($results) ; $i++) { 
					echo $results[$i]['title'].'<br>';
					echo $results[$i]['article'].'<br>';
				}
		}

	?>
</body>
</html>