<?php
session_start();
$db=mysqli_connect("localhost","root","","ars");
if(isset($_POST['save_btn']))
{
$title=$_POST['title'];
$name=$_POST['name'];
$passport=$_POST['passport'];
$visa=$_POST['visa'];
$source=$_POST['source'];
$dest=$_POST['dest'];
$date=$_POST['date'];
$sql="INSERT INTO intern(title,name,passport,visa,source,dest,date) VALUES('$title','$name','$passport','$visa','$source','$dest','$date')";
mysqli_query($db,$sql);
$_SESSION['name']=$name;
header("location:ticket.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>AIRLINE RESERVATION</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="header">
<h1>INTERNATIONAL FLIGHT
</h1>
</div>
<form method="post" action="intern.php">
<table>
<tr>
<td>Title</td>
<td><select name="title">
      <option selected="selected">Mr.</option>
      <option>Mrs</option>
   </select>
</td>
</tr>
<h2>If you want to view your ticket details enter your user name</h2>
<tr>
<td>Name</td>
<td>
<input type="text" name="name" class="textInput">
</td>
</tr>
<tr>
<tr>
<td>Passport number</td>
<td>
<input type="int" name="passport" class="textInput">
</td>
</tr>
<tr>
<tr>
<td>VISA</td>
<td>
<input type="int" name="visa" class="textInput">
</td>
</tr>
<tr>
<tr>
<td>From</td>
<td>
<select name="source">
      <option selected="selected">from</option>
    <option>MUMBAI</option>
    <option>KOLKATA</option>
    <option>CHENNAI</option>
	<option>KERALA</option>
	<option>TAMIL NADU</option>
	<option>RAJASTHAN</option>
	<option>KARNATAKA</option>
	<option>ANDRAPRADESH</option>
	<option>TELANGANA</option>
	</select>
</td>
</tr>
<td>To</td>
<td>
<select name="dest">
      <option selected="selected">to</option>
    <option>UNITED STATES</option>
    <option>LONDON</option>
    <option>CANADA</option>
	<option>DUBAI</option>
	<option>SPAIN</option>
	<option>AUSTRALIA</option>
	<option>S.AFRICA</option>
	<option>JAPAN</option>
	<option>KOREA</option>
</select>
</td>
</tr>
<tr>
<td>Date</td>
<td>
<input type="date" name="date" class="date">
</td>
</tr>
<tr>
<td>
<input type="submit" name="save_btn" value="Save">
</td>
</tr>
<tr>
 </table>
<P><input type="checkbox" required />I agree
</p>
<input type="reset" value="clear" />
</form>
</body>
</html>

