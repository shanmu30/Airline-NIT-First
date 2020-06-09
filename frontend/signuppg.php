<?php
session_start();
$db=mysqli_connect("localhost","root","","ars");
if(isset($_POST['register_btn']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gen=$_POST['gen'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];

if($pass==$pass2)
{
$pass=md5(pass);
$sql="INSERT INTO signup(name,address,email,phone,gen,user,pass) VALUES('$name','$address','$email','$phone','$gen','$user','$pass')";
mysqli_query($db,$sql);
$_SESSION['message']="You are now logged in";
$_SESSION['name']=$name;
header("location:login.php");

}
else
{

$_SESSION['message']="the password miss match";


}}
?>
<!DOCTYPE html>
<html>
<head>
<title>AIRLINE RESERVATION</title>
</head>
<body>
<div class="header">
<center><h1>
AIRLINE REIGISTRATION
</h1></center>
<link rel="stylesheet" type="text/css" href="style.css"> 
</div>
<form method="post" action="signupp.php">
<table>
<tr>
<td>Name</td>
<td>
<input type="text" name="name" class="textInput">
</td>
</tr>
<tr>
<td>Address</td>
<td>
<input type="text" name="address" class="textInput">
</td>
</tr>

<td>Email</td>
<td>
<input type=""email" name="email" class="textInput">
</td>
</tr>
<tr>
<tr>
<td>Contact</td>
<td>
<input type="phone" name="phone" class="phone">
</td>
</tr>
<tr>
<td>Gender</td>
<td>
<input type="text" name="gen" class="textInput">
</td>
</tr>
<tr>
<td>User name</td>
<td>
<input type="text" name="user" class="textInput" required>
</td>
</tr>
<td>Password</td>
<td>
<input type="password" name="pass" class="textInput" required>
</td>
</tr>
<tr>
<td>re-enter Password</td>
<td>
<input type="password" name="pass2" class="textInput" required>
</td>
</tr>
<center><tr>
<td>
<input type="submit" name="register_btn" value="Register">
</td>
</tr>
</tr>
<tr>
<td>
<input type="reset" value="clear" name="rest" />
</td>
</tr>
</center>
</table>
</form>
<center>   <p class="message">Already have an account?<a href="login.php">
clickhere
</a></p>
</center>
</body>
</html>
