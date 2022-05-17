<?php
//Authetication of login
require('auth.php');
require_once 'C:/xampp/htdocs/@project/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
    <title >Add Documents</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="addfiles.css" rel="stylesheet" media="all">
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
                <a href="addemp.php">Add Employees</a>
                <a href="empfiles.php">Employee Documents</a>
                <a href = "addfiles.php"class="active">Add Employee Documents</a>
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
        <div class="files">
          <h2 class="title">Add Employee Documents</h2>
          <form action="fileadd.php" method="POST" enctype="multipart/form-data">
            <div class="input-group">
              <label>Employee ID</label><br>
              <input class="input-group--1" type="number" name="id" required>
            </div>
            <div class="input-group">
              <label>Document Name</label><br>
              <input class="input-group--1" type="text" name="file_name" required>
            </div>
            <div class="input-group">
              <label>File Type</label><br>
              <input class="input-group--1" type="text" name="filetype" required>
            </div>
            <div class="input-group">
              <label>Date Uploaded</label><br>
              <input class="input-group--1" type="date" name="date_uploaded"  required>
            </div>
            <div class="file-select">
              <label>Select A Document</label><br>
              <input class="input-group--2" type="file" name="myfile" required>
            </div>
                <div class="proceed">
              <button type="submit" class="btn" name="upload">Upload</button>
            </div>
          </form>
        </div>



    </body>
</html>
