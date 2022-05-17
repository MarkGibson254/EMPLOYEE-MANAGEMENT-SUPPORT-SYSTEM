

<?php
    require('auth.php');
    require_once ('C:/xampp/htdocs/@project/dbh.php');
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
    $emergencycontact= $res['emergencycontact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
    $country = $res['country'];
    $province = $res['province'];
    $maritalstatus = $res['maritalstatus'];
	
}
}

?>

<!DOCTYPE html>
<html lang="en">
    <title >View Employees</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="edit.css" rel="stylesheet" media="all">
        <meta http-equiv="refresh" content="300;url=index.html" />
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="nav-cont">
                <a href="ahome.php">Home</a>
                <a href="viewemp.php" >View Employees</a>
                <a href="edit.php?id=<?php echo $id?>" class="active">Edit Employees</a>
                <a href="passreset.php?id=<?php echo $id?>" >Reset user Password</a>
                <a href="logout.php">Log Out</a>
                </div>
            </div>
        </header>
        <div class="divider"></div>
        <div class="profile">
        <div class="profile-content">
            <h2 class="profile-title">Update Employee Profile</h2>
            <form id = "registration" action="edit1.php" method="POST">
            <div class="input-group">
                
                <p>EMp id</p>
                <input class="input--style-2" type="text1" name="id" value="<?php echo $id; ?>" readonly >
            </div>
            <div class="input-group">
                <div class="input--group-1">
                <p>First Name</p>
                <input class="input--style-2" type="text" name="firstName" value="<?php echo $firstname; ?>" >
            </div>
            </div>
            <div class="input-group">
                <div class="input--group-1">
                <p>Last Name</p>
                <input class="input--style-2" type="text" name="lastName" value="<?php echo $lastname; ?>" >
            </div>
            </div>

            <div class="input-group">
                <p>Email</p>
                <input class="input--style-1" type="text" name="email" value="<?php echo $email;?>" >
            </div>
            <div class="input-group">
                <p>Contact</p>
                <input class="input--style-1" type="text" name="contact" value="<?php echo $contact;?>" >
            </div>
            <div class="input-group">
                <p>Emergency Contact</p>
                <input class="input--style-1" type="text" name="emergencycontact" value="<?php echo $emergencycontact;?>" >
            </div>
            <div class="input-group">
                <p>Department</p>
                <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>" >
            </div>
            <div class="input-group">
                <p>Degree</p>
                <input class="input--style-1" type="text" name="degree" value="<?php echo $degree;?>" >
            </div>
            <div class="input-group">
                <p>Address</p>
                <input class="input--style-1" type="text" name="address" value="<?php echo $address;?>" >
            </div>

            <div class="input-group">
                <p>Birthday</p>
                <input class="input--style-1" type="date" name="birthday" value="<?php echo $birthday;?>" >
            </div>
            <div class="input-group">
                <p>NID</p>
                <input class="input--style-1" type="text" name="nid" value="<?php echo $nid;?>" >
            </div>

            <div class="input-group">
                <p>Gender</p>
                <input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>" >
            </div>
            
            <div class="input-group">
                <p>Marital status</p>
                <input class="input--style-1" type="text" name="maritalstatus" value="<?php echo $maritalstatus;?>" >
        </div>
            
            <div class="input-group">
                <p>Country</p>
                <input class="input--style-1" type="text" name="country" value="<?php echo $country;?>" >
        </div>

            <div class="input-group">
                <p>Province</p>
                <input class="input--style-1" type="text" name="province" value="<?php echo $province;?>" >
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" name="update" class="btn-primary">Update</button>
            </div>
        </div>
        </form>
    </div>
</html>

