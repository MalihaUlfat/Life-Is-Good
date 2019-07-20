<?php
session_start();
//connectivity
require('config.php');
if(isset($_POST['login']))
{
	$u = $_POST['uname'];
	$p = $_POST['upass'];
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;

	//user check
	$q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
	$cq = mysqli_query($conn,$q);
	$arr=mysqli_fetch_array($cq);
	if($arr['username']==$u and $arr['password']==$p)
	 {
			if($arr['username']=="admin")
				{
					echo "<script>document.location='admin.php'</script>"; 
					//echo "<center><h2 style='color:green'>welcome admin</h2></center>";
				}
			if ($arr['username']=="teacher")
				{
					echo "<script>document.location='teacher1.php'</script>"; //(edit the page)
					//header('location:teacher1.php');
				}
			if($arr['username']=="student")
				{
					echo "<script>document.location='student.php'</script>";
					//echo "<center><h2 style='color:green'>welcome admin</h2></center>";
				}
	}
	else
	{
		echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
	}
}

?>

<html>
<head>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<button class="button button1"><a href="help.php" style="color: #ffffff">About</a></button> <br>
<div class="wrapper fadeInDown">
  <div id="formContent">
	<div class="fadeIn first">
      <img src="Icon classroom manager.jpg" id="icon" alt="User Icon" />
  	</div>
	<div align="center">
	 <form method="post">
		
			<font size="+2"><strong>Login Panel</strong></font></legend>
			<p><b>UserName</b><input type="text" name="uname" required/>*</p>
		<p><b>Password</b><input type="password" name="upass" required/>*</p><br>
		<p><input type="submit" value="Login" name="login"/></p>
		
	 </form>
	</div>
	<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
</div>
</div>
</body>
</html> 