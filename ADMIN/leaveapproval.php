<?php
include ('../dbh.php');
$token = $_GET['token'];
$sql = "SELECT token,status,Areason FROM `leave_process` WHERE token = '$token'";

$result = mysqli_query($conn, "UPDATE `leave_process` SET `status`='Approved',`Areason`='Agreed' WHERE token = $token;");
    if($result)
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated')
        window.location.href='viewleave.php';
        </SCRIPT>");
    }
    else
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Error')
        window.location.href='viewleave.php';
        </SCRIPT>");
    }

?>