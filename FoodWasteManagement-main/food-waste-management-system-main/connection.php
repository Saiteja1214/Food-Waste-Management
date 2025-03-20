<?php
$connection = mysqli_connect("localhost", "root", "", "food_db");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfull";
?>