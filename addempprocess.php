<?php
include 'C:/xampp/htdocs/@project/dbh.php';
if(isset($_POST['upload'])){
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$emergencycontact = $_POST['emergencycontact'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$nid = $_POST['nid'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$maritalstatus = $_POST['maritalstatus'];
$country = $_POST['country'];
$province = $_POST['province'];
$filename=basename($_FILES["image"]["name"]);
$targetDir="C:/xampp/htdocs/@project/images";
$destinationfile=$targetDir . $filename;
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$destinationfile)){
    
    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `contact`, `emergencyContact`, `address`, `birthday`, `nid`, `gender`,`dept`,`degree`,`maritalstatus`,`country`,`province`,`pic`) VALUES ('','$firstname','$lastname','$email','254','$contact','$emergencycontact','$dob','$nid','$gender','$dept','$degree','$maritalstatus','$country','$province','$filename')";
    $result = mysqli_query($conn,$sql);

    if(($result) == 1){
    
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Registered The Employee')
        window.location.href='..//viewemp.php';
        </SCRIPT>");
    }
    
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Register The Employee')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }
}
else{
    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `contact`, `emergencyContact`, `address`, `birthday`, `nid`, `gender`,`dept`,`degree`,`maritalstatus`,`country`,`province`,`pic`) VALUES ('','$firstname','$lastname','$email','254','$contact','$emergencycontact','$dob','$nid','$gender','$dept','$degree','$maritalstatus','$country','$province','$filename')";
    $result = mysqli_query($conn,$sql);
    if(($result) == 1){
    
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Registered The Employee')
        window.location.href='..//viewemp.php';
        </SCRIPT>");
    }
        
        else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Failed to Register The Employee')
            window.location.href='javascript:history.go(-1)';
            </SCRIPT>");
        }
    
}

}
}


?>