<?php


// Create connection
$conn = mysqli_connect('localhost','root', '');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
}
$select_db = mysqli_select_db($conn,'register');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
?>