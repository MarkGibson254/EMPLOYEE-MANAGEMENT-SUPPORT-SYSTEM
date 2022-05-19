<?php

require_once ('../dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['reset'])){
    
        //Using the mysqli_real_escape_string() function to sanitize the input
        
    
        $id = (isset($_GET['id']) ? $_GET['id'] : '');
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "UPDATE `employee` SET `password`='$password' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Password Succesfully Updated')
        window.location.href='viewemp.php';
        </SCRIPT>");

}
    
