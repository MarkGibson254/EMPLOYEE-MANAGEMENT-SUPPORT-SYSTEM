<?php
// Downloads files
require_once ('../dbh.php');
//Selecting the file 
$sql="select file_name,per_id,filetype,date_uploaded,content from files where per_id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
//Downloading the file
header("Content-type: ".$row['filetype']);
header("Content-Disposition: attachment; filename=".$row['file_name']);
//The file
//remember to edit mysql.ini file to allow for large files i.e the packet size and max size
echo $row['content'];
?>