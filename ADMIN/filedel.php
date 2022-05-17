<?php
//including the database connection file
include("C:/xampp/htdocs/@project/dbh.php");

echo ("Are you sure you want to delete this employee?");

//getting id of the data from url
$id = $_GET['per_id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM files WHERE per_id=$id");

//redirecting to the display page (index.php in our case)
header("Location:empfiles.php");
?>

