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
$answer = $_POST['ans'];
if($uname!=""&&$answer!=""){
    $sql="insert into record(ans) values('$answer') where username='$uname'";
    $conn->query($sql);
    echo "answer posted successfully";
}
}
?>
</head>
<body>
	<div class="outer">
<div class="all">
	<p> LOGIN HERE </p>
<form action = "answer.php" method ="post">
<input type="username" id="username" name="username"><br><br>
<textarea name="ans" id="textarea" placeholder="Type Your Answer..."></textarea><br>
<button type="submit" name= "submit" >POST ANSWER </button>
</form>
</div>
</div>
<!-- FOOTER -->
<div class="navbar1">
<a href="#">&copy debrief</a>
</div>
</body>
</html>
