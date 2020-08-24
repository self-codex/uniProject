<?php 

session_start();

$host = 'localhost';
$myroot = "root";
$pass = '';
$my_db = 'registration';

$con = mysqli_connect($host, $myroot);


mysqli_select_db($con, $my_db);

$firstName = $_POST['userFName'];
$lastName = $_POST['userLName'];
$email = $_POST['userEmail'];
$pass = $_POST['userPass'];



$uniq = "select * from regdata where email='$firstName'";

$result = mysqli_query($con, $uniq);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "User Name is already taken Please an Other!";
}
else{
    $query = "insert into regdata(fname, lname, email, pass) values ('$firstName','$lastName','$email','$pass')";
    mysqli_query($con, $query);
    echo "Registration successful";
}

// echo "$query";

header('location:index.php');


?>
