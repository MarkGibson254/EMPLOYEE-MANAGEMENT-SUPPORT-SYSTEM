<?php
include ('../dbh.php');
$sql = "SELECT * FROM `leave_process` WHERE 1";

$result = mysqli_query($conn, $sql);
if(isset($_POST['update'])){
    $token = mysqli_real_escape_string($conn, $_POST['token']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $Areason = mysqli_real_escape_string($conn, $_POST['Areason']);

    
    $result1 = mysqli_query($conn, "UPDATE leave_process SET `Areason`='$Areason',`status`='$status' where token=$token ");
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewleave.php';
    </SCRIPT>");
}
?>
