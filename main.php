<html>
<head>
<title>HOME</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity=
"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Walter+Turncoat|Lemonada|Ultra" rel="stylesheet">
<!-- my css -->
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/style-mobile.css">
<link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet">
<!-- SOCIAL MEDIA ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- for toggle button at navbar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=
"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php include("navbar.php");?>
<!-- SLIDES -->
<div class="container">
   <div id="content-slider">
      <div id="slider">  <!-- Slider container -->
         <div id="mask">  <!-- Mask -->
         <ul>
         <li id="first" class="firstanimation">  <!-- class for animation -->
         <a href="#"> <img src="images/prog_lang.jpg" alt="Programming Languages"/> </a>
         <div class="t"> <h1>Programming Languages</h1> </div>
         </li>

         <li id="second" class="secondanimation">
         <a href="#"> <img src="images/dslr.jpg" alt="Photography"/> </a>
         <div class="t"> <h1>Photography</h1> </div>
         </li>

         <li id="third" class="thirdanimation">
         <a href="#"> <img src="images/books.jpg" alt="Books"/> </a>
         <div class="t"> <h1>Study</h1> </div>
         </li>

         <li id="fourth" class="fourthanimation">
         <a href="#"> <img src="images/techi.jpg" alt="Technical"/> </a>
         <div class="t"> <h1>Technical</h1> </div>
         </li>

         <li id="fifth" class="fifthanimation">
         <a href="#"> <img src="images/music1.jpg" alt="Music"/> </a>
         <div class="t"> <h1>Music</h1> </div>
         </li>
         </ul>
         </div>  <!-- End Mask -->
         </div>  <!-- End Slider Container -->
   </div>
</div>

<!-- Content -->
<div class="container-fluid">
<div class="row">
    <div class="col-sm-4" id="s1" style="background-color:#cfd8dc;">
      <dl>
         <dt><a href="prog.php">Programming Languages</a></dt>
            <dd>C</dd>
            <dd>C++</dd>
            <dd>JAVA</dd>
            <dd>HTML</dd>
            <dd>CSS</dd>
            <dd>JScript</dd>
            <dd>JQuery</dd>
            <dd>PHP</dd>
            <dd>Python</dd><br>
         <dt><a href="tech.php">Technical</a></dt>
            <dd>Mobile</dd>
            <dd>Computer(Laptop/Desktop)</dd><br>
         <dt><a href="photo.php">Photography</a></dt>
            <dd>Tips</dd>
            <dd>Reviews On Camera</dd><br>
         <dt><a href="songs.php">Songs</a></dt>
            <dd>Hindi</dd>
            <dd>Punjabi</dd>
            <dd>English</dd><br>
         <dt><a href="books.php">Books</a></dt>
            <dd>11th</dd>
            <dd>12th</dd>
            <dd>IIT</dd>
            <dd>AIPMT</dd>
            <dd>Engineering</dd>
            <dd>Medical</dd><br>
         <dt><a href="videos.php">Videos</a></dt>
            <dd>Hindi</dd>
            <dd>Punjabi</dd>
            <dd>English</dd>
      </dl>
    </div>
    <div class="col-sm-8" id="s" style="background-color:lavender;">
<!-- Buttons -->
<div class="buttons">
	<a class="btn" href="prog.php">Programming Languages</a>
   <a class="btn" href="photo.php">Photography Questions</a>
   <a class="btn" href="books.php">Books suggestions</a>
   <a class="btn" href="tech.php">Technical Questions</a>
	<a class="btn" href="songs.php">Songs Suggestions</a>
	<a class="btn" href="video.php">Video songs Suggestions</a>
	<div id='a8' class="a">
	<h2><u>How We Are Different...?</u></h2>
	<p>We Are Students Like You And Will Try To Give You The Answer Of Our Level. You Ask Question And We Will Search Best Answers For You.</p>
	</div>
	</div></div>
</div>
</div>

<div class="parallax">
<p class="follow">Follow Us And Help Us Improve</p>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>

<!-- FOOTER -->
<div class="navbar1">
<a href="#">&copy debrief</a>
</div>

</body>
</html>
