<?php
$server_name="localhost";
$user_name="root";
$pass_word="";
$data_base="project";
// Create connection
$conn = mysqli_connect($server_name, $user_name, $pass_word,$data_base);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 // echo "Connected successfully";
?>