<html>
<head>
    <?php include("navbar.php"); ?>
  <!-- mycss -->
  <link rel="stylesheet" type="text/css" href="styles/style_login.css">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
<?php
if(isset($_POST['submit'])){
$uname = $_POST['username'];
$email= $_POST['email'];
$pass = $_POST['password'];
require('set_connection.php');
$conn=connection();
$sql="select username from login where username='$uname'";
$uniq=$conn->query($sql);
$name = mysqli_fetch_assoc($uniq);
if($uname!=""&&$email!=""&&$pass!="")
{
 if(!$name['username']=='$uname')
 {
   $sql= "insert into login(username,email,password) values('$uname', '$email', '$pass')";
   $conn->query($sql);
   echo "registered successfully";
   header('location:login.php');
}
else
echo "try differrent username";
}else {
  echo "ALL VALUES MUST BE FILLED";
}
}
if(isset($_POST['login'])){
	header('location:login.php');
}
?>
</head>
<body>
  <div class="outer">
  <div class="all">
  <p> REGISTER YOURSELF </p>
<form action = "register.php" method ="post">
<input type="username" id="username" name="username" placeholder="username"><br><br>
<input type="username" id="email" name="email" placeholder="email"><br><br>
<input type="text" id="password" name="password" placeholder="password"><br><br>
<button type="submit" name= "login" >Back To Login </button>
<button type="submit" name= "submit" >REGISTER </button>
</form>
</div>
</div>
<!-- FOOTER -->
<div class="navbar1">
<a href="#">&copy debrief</a>
</div>
</body>
</html>
