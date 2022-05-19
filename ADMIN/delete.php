<?php
//including the database connection file
include("C:/xampp/htdocs/@project/dbh.php");
echo ("Are you sure you want to delete this employee?");

//getting id of the data from url
$id = $_GET['id'];

//deleting the employee from database
$result = mysqli_query($conn, "DELETE from employee WHERE id=$id");
$result2= mysqli_query($conn, "DELETE from files WHERE id=$id");

if ($result&&$result2) {
    echo "Employee deleted successfully.";
}

//redirecting to the display page (index.php in our case)
header("Location:viewemp.php");
?>

