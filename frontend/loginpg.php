<?php
session_start();
$db=mysqli_connect("localhost","root","","ars");
if(isset($_POST['login_btn']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass=md5($pass);
$sql="SELECT * FROM signup WHERE user='$user' AND pass='$pass'";
$result=mysqli_query($db,$sql);
if($result)
{
$_SESSION['message']="You are now logged in";
$_SESSION['user']=$user;
header("location:booking.php");
}
else
{
$_SESSION['message']="Username or password missmatch";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>AIRLINES-LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="header" align="justify"><center>
<h1>
LOGIN
</h1></center>
</div>
<div align="justify">
<form method="post" action="login.php">
<table>
 <tr>
<td>User name</td>
<td>
<input type="text" name="user" class="textInput">
</td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="password" name="pass" class="textInput">
</td>
</tr>
<tr>
<td>
<input type="submit" name="login_btn" value="Login">
<input type="reset" name="reset_btn" value="Clear">
</td>
</tr>
</table>
</form></div>
<div align="center">
   <p class="message">not registered?<a href="signupp.php">
   clickhere
   </a></p></div>
   </body>
</html>
