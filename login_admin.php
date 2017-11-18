<html>
<head>
		<?php include("navbar.php"); ?>
	<!-- mycss -->
	<link rel="stylesheet" type="text/css" href="styles/style_login.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
<?php
if(isset($_POST['submit'])){
$admin_name= $_POST['username'];
$admin_pass=$_POST['password'];
if($admin_name=="kuldeep"&&$admin_pass=="kumar"){
  header('location:answer.php');
}
else
echo "incorrect username or password";
}
?>
</head>
<body>
	<div class="outer">
<div class="all">
	<p> ADMIN LOGIN HERE </p>
<form action = "login_admin.php" method ="post">
<input type="username" id="username" name="username"><br><br>
<input type="text" id="password" name="password"><br><br>
<button type="submit" name= "submit" >LOGIN </button>
</form>
</div>
</div>
<!-- FOOTER -->
<div class="navbar1">
<a href="#">&copy debrief</a>
</div>
</body>
</html>
