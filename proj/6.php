<link rel="stylesheet" href="1.css" type="text/css"/>
<html>
<head>
	<title>Channels</title>
<?php
include "index.php";
?>
<body>
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
		
		<!-- Run the plugin -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit({
					'bullets': true,
					'timer' : true,
					'animation' : 'horizontal-slide'
				});
			});
		</script>
</head>
		<div class='slide'><div id="featured"> 
			<img src="leo.jpg" alt="Link" />
			<a href="http://www.zurb.com/playground" target="_blank"><img src="tiger.jpg" alt="Ezio" rel="ezioCaption" /></a>
			<img src="catt.jpg" alt="Master Chief" />
			<img src="spider.jpg"  alt="Marcus Fenix" rel="marcusCaption" />
			<a href="http://www.zurb.com/playground" target="_blank"><img src="dogg.jpg" alt="Ezio" rel="ezioCaption" /></a>
			<img src="fox.jpg"  alt="Marcus Fenix" rel="marcusCaption" />
			<img src="snake.jpg" alt="Link" />
			<a href="http://www.zurb.com/playground" target="_blank"><img src="tiw.jpg" alt="Ezio" rel="ezioCaption" /></a>
		</div> </div>
		<span class="orbit-caption" id="ezioCaption"></span>
		<span class="orbit-caption" id="marcusCaption"></span>
		
	</center>
	</div>

</body>
</html>