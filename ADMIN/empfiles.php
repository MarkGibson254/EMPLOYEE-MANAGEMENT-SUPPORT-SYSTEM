<?php
require('auth.php');
require_once ('../dbh.php');
$sql=('SELECT *  FROM `employee`,`files` where employee.id=files.id');
$result = mysqli_query($conn, $sql);
$employee = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
    <title >View Documents</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="empfiles.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="refresh" content="300;url=index.html" />
        <script>
            function confirmation(){
    var result = confirm("Are you sure to delete?");
    if(result){
        // Delete logic goes here
    }
}
            
        </script>
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
                <a href="empfiles.php" class="active">Employee Documents</a>
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
        <table>
            <tr>
                <th>EMP ID</th>
                <th>Picture</th>
                <th>Employee Name</th>
                <th>File ID</th>
                <th>File Name</th>
                <th>File Type</th>
                <th>Date Uploaded</th>
                <th>Action</th>
            </tr>
            <?php
            foreach($employee as $emp){
                echo "<tr>";
                echo "<td>".$emp['id']."</td>";
                echo "<td><img src='/@project/ADMIN/images/".$emp['pic']."' width='100' height='100'></td>";
                echo "<td>".$emp['firstName']." ".$emp['lastName']."</td>";
                echo "<td>".$emp['per_id']."</td>";
                echo "<td>".$emp['file_name']."</td>";
                echo "<td>".$emp['filetype']."</td>";
                echo "<td>".$emp['date_uploaded']."</td>";
                echo "<td><a href=\"filing.php?id=$emp[per_id]\">Download</a><a href=\"filedel.php?per_id=$emp[per_id]\" onClick=\"return confirm('Confirm to Delete?')\">Delete</a></td>";
                echo "</tr>";
            }

            ?>
           
 </body>
</html>