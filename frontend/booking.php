<?php
session_start();
?><html>
<title>AIRLINE BOOKING</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
 <div class="header">
<center><h1>
AIRLINE TICKET BOOKING
</h1></center>
<center></div>
<div><h4>Welcome
<?php echo $_SESSION['name'];
?></h4><div></center>
<form>
<p><button type="button" onclick="location.href='domes.php'">DOMESTIC FLIGHT</button>
 </p>
 <p>
 <button type="button" onclick="location.href='intern.php'">INTERNATIONAL FLIGHT</button>
 </P><P>
<button type="button" onclick="location.href='ticket.php'">DETAILS</button>
<button type="button" onclick="location.href='cancel.html'">CANCEL TICKET</button></P>
  <button type="button" onclick="location.href='welcome.html'">Logout</button>
</FORM>
</HTML>
