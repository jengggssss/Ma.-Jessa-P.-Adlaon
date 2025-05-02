<?php
$host="localhost";
$user="root";
$pass= "";
$db= "psit15";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Something went wrong");
}

return $conn; // Add this line to return the connection
?>
