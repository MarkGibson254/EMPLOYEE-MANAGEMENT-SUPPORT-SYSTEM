<?php

require('auth.php');
require_once('C:/xampp/htdocs/@project/dbh.php');

?>

<!DOCTYPE html>
<html lang="en">
    <title >Admin Panel</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="home.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="refresh" content="300;url=logout.php" />
        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
        
    </head>
    <body>
        <header>
            <div class="navbar">
                <a href="ahome.php" class="active">Home</a>
                <a href="viewemp.php" >View Employees</a>
                <a href="addemp.php">Add Employees</a>
                <a href="empfiles.php">Employee Documents</a>
                <a href = "addfiles.php">Add Employee Documents</a>
                <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Leave Management <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content" id="myDropdown">
                        <a href="Pleave.php">Pending Leave</a>
                        <a href="viewleave.php"class="active">Leave History</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </header>  
          <div class="divider"></div>
        <div class="content">
            <p>MANAGER PANEL</p>
            <p>MANAGER PANEL</p>
        </div>
    </body>
</html>
