<link rel="stylesheet" href="1.css" type="text/css"/>
<html>
<head >
	<title>Home</title>
<?php
include "index.php";
?>
<style type="text/css">
	  		
	  		#featured { width: 940px; height: 450px; background: #009cff url('orbit/loading.gif') no-repeat center center;
	  		 overflow: hidden;border: 2px solid lightgrey;border-radius: 2px; }

	  	</style>
		
	  	<link rel="stylesheet" href="orbit.css">	
		<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="jquery.orbit.min.js"></script>
		
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit({
					'timer' : true,
					'animation' : 'horizontal-slide'
				});
			});
		</script>
</head>
<body>
		<div class='slide'><div id="featured"> 
			<img src="fir.jpg" alt="Link" />
			<img src="n4.jpg" alt="Ezio" rel="ezioCaption" />
			<img src="n3.jpg" alt="Master Chief" />
			<img src="n7.jpg"  alt="Marcus Fenix" rel="marcusCaption" />
			<img src="n5.jpg" alt="Ezio" rel="ezioCaption" />
			<img src="n6.jpg"  alt="Marcus Fenix" rel="marcusCaption" />
			<img src="n8.jpg" alt="Link" />
			<img src="n9.jpg" alt="Ezio" rel="ezioCaption" />
		</div> </div>
		<span class="orbit-caption" id="ezioCaption"></span>
		<span class="orbit-caption" id="marcusCaption"></span>
		
</body>
</html>