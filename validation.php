<?php 

session_start();

$host = 'localhost';
$myroot = "root";
$pass = '';
$my_db = 'registration';

$con = mysqli_connect($host, $myroot);


mysqli_select_db($con, $my_db);

$name = $_POST['logUser'];
$pass = $_POST['logPass'];


$check = "select * from regdata where fname='$name' && pass='$pass'";

$result = mysqli_query($con, $check);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['userName']=$name;
    header('location:home.php');
}
else{
    header('location:signIn.php');
    
}


?>