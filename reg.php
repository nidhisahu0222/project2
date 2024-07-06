<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'root', '', 'register');

$Firstname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `form` (`Firstname`, `email`, `password`) VALUES ('$Firstname', '$email', '$password')";

$result = mysqli_query($conn, $sql);   

if($result){
    session_start();
    $_SESSION['name'] = $Firstname;
    $_SESSION['email'] = $email;
    header("location:db.php");
}else{
    die(mysqli_error($conn));
}

?>  