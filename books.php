<html>
<head><title>Books</title>
	<?php include("navbar.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- my css -->
<link rel="stylesheet" type="text/css" href="styles/style-pages.css">
</head>
<body>
<?php
	require('set_connection.php');
	$conn=connection();
	if(isset($_POST["submit"]))
	{
		if(isset($_SESSION['username'])&&$_COOKIE['username']&&$_COOKIE['password'])
		{
			$ques= $_POST['ques'];
			$ses_uname= $_SESSION['username'];
			$sql= "insert into record(username,ques) values('$ses_uname','$ques')";
			$conn->query($sql);
			header('location:books.php');
		}
	else
		echo "you must be logged in to post ques";
	}
	if(isset($_POST["logout"]))
	{
		session_destroy();
		setcookie("username","",time()-3600);
		setcookie("password","",time()-3600);
		header('location:login.php');
	}
	if(isset($_POST["login"]))
	{
		header('location:login.php');
	}
?>
<div class="parallax" id="bo"></div>
<?php 	$all="select ques,username from record;";
	$ar=$conn->query($all);
	echo "<br>";
	while($que = mysqli_fetch_assoc($ar))
	{
		echo "<div class='random'>{$que['username']}:-<br>".
		"{$que['ques']}</div><br>";
	}
 ?>
<form action="books.php" method="post">
	<textarea name="ques" id="textarea" placeholder="Start Typing A Question..."></textarea><br>
	<input type="submit" name="submit" value="Post Question">
<?php if(isset($_SESSION['username'])&&$_COOKIE['username']&&$_COOKIE['password'])
{
	echo '<input type="submit" name="logout" value="LOGOUT">';
}
else
	echo '<input type="submit" name="login" value="LOGIN">'; ?>
</form>
<!-- FOOTER -->
<div class="navbar1">
	<a href="#">&copy debrief</a>
</div>
</body>
</html>
