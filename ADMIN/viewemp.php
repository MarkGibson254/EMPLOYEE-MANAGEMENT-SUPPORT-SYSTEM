<?php
require('auth.php');
require_once ('../dbh.php');
$sql=('SELECT *  FROM `employee` where 1');
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
    <title >View Employees</title>
    <head>
    <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="viewemp.css" rel="stylesheet" media="all">
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
                <a href="viewemp.php" class="active" >View Employees</a>
                <a href="addemp.php">Add Employees</a>
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
        <form method="post" action="search.php">
        <div class="tb">
        <label>Search</label>
        <div class="td">
        <input type="text" name="firstName" placeholder="Employee Firstname" autocomplete="off" ><i class="fa fa-search"></i>
        <button type="submit" type="hidden" class="btn2" name="search"></button>
    </div>
    </div>
    </form>
        <table>
            <tr>
                <th align ="center"> EMP .ID</th>
                <th align ="center">Picture</th>
                <th align ="center" >Employee name</th>
                <th align ="center">Email</th>
                <th align ="center">Contact</th>
                <th align ="center">Emergency Contact</th>
                <th align ="center">Address</th>
                <th align ="center">National ID</th>
                <th align ="center">Birthday</th>
                <th align ="center">Gender</th>
                <th align ="center">Department</th>
                <th align ="center">Highest Degree/Diploma</th>
                <th align ="center">Marital status</th>
                <th align ="center">Country</th>
                <th align ="center">Province</th>
                

                <th align ="center">Options</th>
                
            </tr>

            <?php
            
            while($employee = mysqli_fetch_assoc($result)){
                $space="   ";
                echo "<tr>";
                echo "<td align ='center'>".$employee['id']."</td>";
                echo "<td align ='center'><img src='/@project/ADMIN/images/".$employee['pic']."' width='100' height='100'></td>";
                echo "<td align ='center'>".$employee['firstName'] .$space .$employee['lastName'] ."</td>";
                echo "<td align ='center'>".$employee['email']."</td>";
                echo "<td align ='center'>".$employee['contact']."</td>";
                echo "<td align ='center'>".$employee['emergencycontact']."</td>";
                echo "<td align ='center'>".$employee['address']."</td>";
                echo "<td align ='center'>".$employee['nid']."</td>";
                echo "<td align ='center'>".$employee['birthday']."</td>";
                echo "<td align ='center'>".$employee['gender']."</td>";
                echo "<td align ='center'>".$employee['dept']."</td>";
                echo "<td align ='center'>".$employee['degree']."</td>";
                echo "<td align ='center'>".$employee['maritalstatus']."</td>";
                echo "<td align ='center'>".$employee['country']."</td>";
                echo "<td align ='center'>".$employee['province']."</td>";

                //Editing the employee data
                echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a><a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Confirm to Delete?')\">Delete</a></td>";
                echo "</tr>";
            }

            
            ?>
        </table>

    </body>

</html>