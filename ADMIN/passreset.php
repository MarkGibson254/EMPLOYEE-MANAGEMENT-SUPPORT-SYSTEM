<?php
    require('auth.php');
    require_once ('../dbh.php');
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
    $space='  ';
	if($result){
        
	while($res = mysqli_fetch_assoc($result)){
    $firstname = $res['firstName'];
	$lastname = $res['lastName'];
    $empName=$res['firstName'] .$space. $res['lastName'];
	$email = $res['email'];
    $password = $res['password'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <title >Password Reset</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="edit.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <meta http-equiv="refresh" content="300;url=index.html" />
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="nav-cont">
                <a href="ahome.php">Home</a>
                <a href="viewemp.php" >View Employees</a>
                <a href="edit.php?id=<?php echo $id?>" >Edit Employees</a>
                <a href="passreset.php?id=<?php echo $id?>" class="active">Reset user Password</a>
                <a href="logout.php">Log Out</a>
                </div>
            </div>
        </header>
        <div class="divider"></div>
        <div class="branding">
            <h2>Reset User Password</h2>
        </div>
        <form action="passreset1.php?id=<?php echo $id?>" method="POST">
            <div class="branding1">
                <div class="branding2">
                    <p>Employee Name</p>
                    <input class="style1" type="text3" name="name" value="<?php echo $empName; ?> "readonly >
                </div>
                <div class="branding2">
                    <p>ID</p>
                    <input class="style1" type="text3" name="name" value="<?php echo $id; ?> "readonly >
                </div>
                <div class="branding2">
                    <p>Email</p>
                    <input class="style1"  type="text3" name="email" value="<?php echo $email; ?> "readonly >
                </div>
                <div class="branding2">
                    <p>Password</p>
                    <input class="style1"  type="text3" name="password" value="<?php echo $password; ?> " >
                </div>
                <div class="control-group--1">
            <div class="controls">
                <button type="submit" name="reset" class="btn">Reset</button>
            </div>
            </div>
        </form>
    </body>
</html>
