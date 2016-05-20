<html>
<head>
  <link rel="stylesheet" href="reg.css" type="text/css" />
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <video autoplay loop  class="bgvideo" id="bgvideo">
   <source src="2.mp4" type="video/mp4"></source>
  </video>
</body>
</html>
<h2 style="text-align:center;color:white;margin:auto;margin-right:545px;
border-radius:5px;width:300px;height:30px;margin-top:70px;font-family:cursive;">Registration</h2>
<form method="POST" action='reg.php'>
 <input type='text' name='name' placeholder='| Name'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
 <input type='text' name='surname' placeholder='| Surname'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
 <input type='text' name='login' placeholder='| Login'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
 <input type='password' name='password' placeholder='| Password'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
 <input type='password' name='rpassword' placeholder='| Repeat password'  required="" oninvalid="this.setCustomValidity('Feel it')" oninput="setCustomValidity('')" /></br>
 <input id='reg' type='submit' name='submit' value='Register' /></br>
</form>