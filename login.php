<html>
<head>
		<?php include("navbar.php"); ?>
	<!-- mycss -->
	<link rel="stylesheet" type="text/css" href="styles/style_login.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
<?php
if(isset($_POST['submit'])){
require('set_connection.php');
$conn=connection();
$uname = $_POST['username'];
$pass = $_POST['password'];
require('validate.php');
$chk= valid($uname, $pass, $conn);
if($chk){
$_SESSION['username']=$uname;
setcookie("username",$uname,time()+(86400*30));
setcookie("password",$pass,time()+(86400*30));
header('location:main.php');
}
else
echo "incorrect username or password";
}
if(isset($_POST['skip'])){
	header('location:main.php');
}
?>
</head>
<body>
	<div class="outer">
		<div class="all">
			<?php if(!isset($_SESSION['username'])){
			echo '<p> LOGIN HERE </p>
			<form action = "login.php" method ="post">
				<input type="username" id="username" name="username"><br><br>
				<input type="text" id="password" name="password"><br><br>
				<button type="submit" name= "submit" >LOGIN </button>
				<button type="submit" name= "skip">Skip login>> </button><br><br>
				<a href="register.php" > NEW? REGISTER HERE>> </a>
			</form>';
		}
		else {
			header('location:main.php');
		}?>
		</div>
	</div>
<!-- FOOTER -->
<div class="navbar1">
<a href="#">&copy debrief</a>
</div>
</body>
</html>
