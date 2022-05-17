<?php

require_once ('C:/xampp/htdocs/@project/dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$maritalstatus = $_POST['maritalstatus'];
$birthday =$_POST['birthday'];
$country = $_POST['country'];
$province = $_POST['province'];
$emergencycontact = $_POST['emergencycontact'];


//image uploading
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`,`country`,`province`,`emergencycontact`,`maritalstatus`, `pic`) VALUES ('','$firstname','$lastName','$email','254','$birthday','$gender','$contact','$nid','$address','$dept','$degree','$country','$province','$emergencycontact','$maritalstatus','$filename')";

    $result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered The Employee')
    window.location.href='../ADMIN/viewemp.php';
    </SCRIPT>");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registration Failed Please Try Again')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}

?>