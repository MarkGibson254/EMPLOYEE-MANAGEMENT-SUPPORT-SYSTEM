<?php 
session_start();
require_once('C:/xampp/htdocs/@project/dbh.php');

$email = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * from `admin` WHERE email = '$email' AND password = '$password'";

//echo "$sql";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    
    $_SESSION['email'] = $email;
    //echo ("logged in");
    header("Location: ../ADMIN/ahome.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>