<?php
require '../dbh.php';

if (isset($_POST['upload'])) {
$conn = new PDO("mysql:host=localhost;dbname=project", "root", "");
//remove php bug
//needs extending time limit in sql configuration to allow for large files
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$id = htmlspecialchars($_POST['id']);
$date_uploaded = htmlspecialchars($_POST['date_uploaded']);
$per_id = '';
$filetype = htmlspecialchars($_POST['filetype']);
$filename = htmlspecialchars($_POST['file_name']);
$files = $_FILES['myfile'] ['name'];
$filetemp = $_FILES['myfile'] ['tmp_name'];
$fileerror = $_FILES['myfile'] ['error'];
$data= file_get_contents($_FILES['myfile']['tmp_name']);



            


            $stmt = $conn->prepare("INSERT INTO files (id, per_id,file_name,filetype,date_uploaded,content) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $id);
            $stmt->bindParam(2, $per_id);
            $stmt->bindParam(3, $filename);
            $stmt->bindParam(4, $filetype);
            $stmt->bindParam(5, $date_uploaded);
            $stmt->bindParam(6, $data);
            $stmt->execute();
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Succesfully Uploaded')
            </SCRIPT>");
            header("Location: empfiles.php");
            exit();
        }





?>