<?php
session_start();
require("config.php");
?>

<html>
<head>
<link rel="stylesheet" href="Student.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title> Welcome </title>

</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">

<div> 
    <button class="button button1"><a href="noticeprevS.php" style="color: #ffffff">Notice</a></button> <br>
	<button class="button button1"><a href="routine1S.php" style="color: #ffffff">Routine</a></button> <br>
	<button class="button button1"><a href="exam_schedS.php" style="color: #ffffff">Exam Schedule</a></button><br>
	<button class="button button1" name="logout"> <a href="index.php" style="color: #ffffff">Log out </a></button><br>
	<button class="button button1"> <a href="helpS.php" style="color: #ffffff">About</a></button>
  </div>
</div>
</div>
</body>
</html>

