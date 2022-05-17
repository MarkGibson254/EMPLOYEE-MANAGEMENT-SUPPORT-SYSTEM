<?php
//Authetication of login
require('auth.php');
require_once 'C:/xampp/htdocs/@project/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
    <title >Add Employees</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="addemp.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="refresh" content="300;url=index.html" />
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
                <a href="ahome.php">Home</a>
                <a href="viewemp.php" >View Employees</a>
                <a href="addemp.php"class="active">Add Employees</a>
                <a href="empfiles.php">Employee Documents</a>
                <a href = "addfiles.php">Add Employee Documents</a>
                <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Leave Management <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content" id="myDropdown">
                        <a href="Pleave.php">Pending Leave</a>
                        <a href="viewleave.php">Leave History</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </header>
        <div class="divider"></div>
        <div class="employee">
            <h2 class="title">Add an Employee</h2>
            <form action="addempprocess.php" method="POST" enctype="multipart/form-data">
                <div class="form-body">
                <div class="horizontal-group">
                <div class="form-group left">
                    <label>Firstname</label><br>
                    <input class="input-group--1" type="text" name="firstName" required>
                </div>
                <div class="form-group right">
                    <label>Lastname</label><br>
                    <input class="input-group--1" type="text" name="lastName" required>
                </div>
                </div>
                <br>
                <br>
                <div class="input-group">
                    <label>Email</label><br>
                    <input class="input-group--1" type="email" name="email" required>
                </div>
                <div class="horizontal-group">
                <div class="form-group left">
                    <label>Contact</label><br>
                    <input class="input-group--1" type="text" name="contact" required>
                </div>
                <div class="form-group right">
                    <label>Emergency Contact</label><br>
                    <input class="input-group--1" type="text" name="emergencycontact" required>
                </div>
                </div>
                
                <div class="input-group">
                    <label>Address</label><br>
                    <input class="input-group--1" type="text" name="address" required>
                </div>
                <div class="horizontal-group">
                <div class="form-group left">
                    <label>Date of Birth</label><br>
                    <input class="input-group--1" type="date" name="birthday" required>
                </div>
                <div class="form-group right">
                    <label>Gender</label><br>
                    <select>
                        <option>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                </div>
                <br>
                <br><br><br><br><br><br>
                <div class="input-group">
                    <label>National ID number</label><br>
                    <input class="input-group--1" type="text" name="nid" required>
                </div>
                <div class="input-group">
                    <label>Department</label><br>
                    <input class="input-group--1" type="text" name="dept" required>
                </div>
                <div class="input-group">
                    <label>Highest Degree/Diploma</label><br>
                    <input class="input-group--1" type="text" name="degree" required>
                </div>
                <div class="input-group">
                    <label>Marital Status</label><br>
                    <input class="input-group--1" type="text" name="maritalstatus" required>
                </div>
                <div class="horizontal-group">
                <div class="form-group left">
                    <label>Country</label><br>
                    <input class="input-group--1" type="text" name="country" required>
                </div>
                <div class="form-group right">
                    <label>Province</label><br>
                    <input class="input-group--1" type="text" name="province" required>
                </div>
                </div>
                <br><br><br><br><br><br>
                <div class="input-group-file">
                    <label>Select Picture</label><br>
                    <input class="input-group--1" type="file" name="file" required>
                </div>
                <div class="proceed">
                    <button type="submit" class="btn">Add Employee</button>
                </div>
                </div>
            </form>
        </div>
    </body>
</html>
