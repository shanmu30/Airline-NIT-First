<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ars";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT title,name,source,dest,date FROM domes WHERE name='ads'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "NAME ==> " . $row["title"]. "". $row["name"]. "<br>";
		echo "FROM ==>" . $row["source"]."<br>";

		echo " TO  ==>  " . $row["dest"]. "<br>";
		echo "DATE ==>  " . $row["date"]. "<br>";    }
} else {
    echo "0 results";
}
$conn->close();
?>

<html>
<link rel="stylesheet" type="text/css" href="style.css"> 
</html>
