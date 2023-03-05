<?php
$mysqli = new mysqli("localhost","root","root","beta");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$sql = "SELECT * FROM offers";
$result = $mysqli->query($sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>