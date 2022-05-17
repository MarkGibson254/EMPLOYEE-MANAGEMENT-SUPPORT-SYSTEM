<?php
//including the database connection file
require_once ('C:/xampp/htdocs/@project/dbh.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;
$reason = $_POST['reason'];

$start = $_POST['start'];
//echo "$reason";
$end = $_POST['end'];

$sql = "INSERT INTO `leave_process`(`id`,`token`, `start`, `end`, `reason`, `status`) VALUES ('$id','','$start','$end','$reason','Pending')";

$result = mysqli_query($conn, $sql);

//redirecting to the display page (index.php in our case)
if($result){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Applied')
    window.location.href='../leavehst.php?id=$id';
    </SCRIPT>");
}
else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Error')
    window.location.href='leavemng.php?id=$id';
    </SCRIPT>");
}
?>

