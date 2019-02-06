<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1700385";
 $password = "moFAoW32z";
 $dbname = "a1700385";
 // Create connection
GIT Exercises 4 (12)
29.12.2018
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

