<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1700385";
 $password = "moFAoW32z";
 $dbname = "a1700385";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

