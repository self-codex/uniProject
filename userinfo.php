<?php

session_start();

$host = 'localhost';
$user='root';
$pass = '';
$db = 'contact';

$con = mysqli_connect("$host", "$user"); // create connection in localhost

// if($con){
//     echo "connection successful";
// }
// else{
//     echo "not connection ";
// }

mysqli_select_db($con, $db); // select db 
  
// value get in user to store in variable for insert in db

$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];
$userComment = $_POST['userComment'];

$query = " insert into userinfo(name, email, phone, comment) values ('$userName', '$userEmail', '$userPhone', '$userComment') ";  // value insert in db


mysqli_query($con, $query); // query fire


header('location:index.php'); // after submit to redereact home page


?>