<?php
session_start();
$db=mysqli_connect("localhost","root","","ars");
if(isset($_POST['continue_btn']))
{
$title=$_POST['title'];
$name=$_POST['name'];
$source=$_POST['source'];
$dest=$_POST['dest'];
$date=$_POST['date'];
$sql="INSERT INTO domes(title,name,source,dest,date) VALUES('$title','$name','$source','$dest','$date')";
mysqli_query($db,$sql);
$_SESSION['name']=$name;
	header("location:ticket1.php");
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
<center><h1>
RESERVATION
</h1></center>
</div>
<form method="post" action="domes.php">
<table>
<tr>
<td>Title</td>
<td><select name="title">
      <option selected="selected">Mr.</option>
      <option>Ms.</option>
   </select>
</td>
</tr>
<tr>
<td>Name</td>
<td>
<input type="text" name="name" class="textInput">
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
<tr>
<td>Date</td>
<td>
<input type="date" name="date" class="date">
</td>
</tr>
<tr>
<td>
<P><input type="checkbox" required />I agree
</p>
</td></tr>
<tr>
<td>
<input type="submit" name="continue_btn" value="Continue">
</td>
</tr>
<tr>
</table>
</form>
<input type="reset" value="clear" />
</body>
</html>
