<?php
$servername = "localhost";
$myusername = "root";
$mypassword = "";
$db = "project";

// Create connection
$conn = mysqli_connect($servername,$myusername,$mypassword,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
