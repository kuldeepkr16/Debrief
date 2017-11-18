<html>
<head>
<style>
.bttn{
	color:green;
}
</style>
<?php session_start();
if(isset($_GET['login'])){
	header('location:login.php');
}
if(isset($_GET['logout'])){
	session_destroy();
	setcookie("username","",time()-3600);
	setcookie("password","",time()-3600);
	header('location:login.php');
}
?>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity=
"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- my css -->
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/style-mobile.css">
<link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet">
<!-- for toggle button at navbar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=
"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<!-- NAVBAR -->
<nav class="navbar navbar-inverse ">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="main.php" class="navbar-brand"><p class="b">debrief...</p></a>
</div>
<div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li><a href="getintouch.html">GET IN TOUCH</a></li>
<li><a href="#section2">OUR FACEBOOK PAGE</a></li>
<li><a href="privacy.html">PRIVACY POLICIES</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">SOCIAL <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">FACEBOOK</a></li>
<li><a href="#">GMAIL</a></li>
</ul>
</li>
</ul>
<?php
 if(isset($_SESSION['username'])&&$_COOKIE['username']&&$_COOKIE['password']){
	echo '<form action= "navbar.php" method="get">
				<button type="submit" class="bttn" name= "logout" >LOGOUT </button>
				</form>';
	}
	else{
	echo '<form action= "navbar.php" method="get">
				<button type="submit" class="bttn" name= "login" >LOGIN </button>
				</form>';
	} ?>
</div>
</div>
</div>
</nav>
</html>
