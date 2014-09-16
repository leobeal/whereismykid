<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Where's my kid?</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css" /> 
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

</head>
<body onload="">
<div id='container'>
<?php include("inc/top.php")?>
<div id='mapgraph' class='box'>
	<img id='map' src='img/map.png' alt="Map" />
	<img id='gplay' src='img/gplay.png' alt="Play Store" />
</div>


<div id='login' class='box'>
	<form class='login' name="form1" method="post" action="checklogin.php">
		<input type="text" name="username" value="" id="username" placeholder="E-mail" /><br/>
		<input type="password" name="password" value="" id="password" placeholder="Password" /><br/>
		<input type="submit" class='loginbtn' name="Submit" value="Login" src='img/login_btn.png'>
	</form><br>
    <?php
    if(isset($_GET['message'])) echo "<script type=\"text/javascript\">alert('".$_GET['message']."') </script>";
	?>
	<a href="fb_login.php"><img id='fbloginbtn' src='img/fblogin_btn.png' alt="Facebook Login" /></a>
</div>

<?php include("inc/bottom.php");?>
</div>
</body>
</html>