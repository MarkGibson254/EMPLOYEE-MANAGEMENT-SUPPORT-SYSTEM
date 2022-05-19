<?php
//Authetication of login
require('auth.php');

require_once ('../dbh.php');


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
                <a href="viewemp.php"class="active" >View Employees</a>
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
        <form method="post" action="search.php">
        <div class="tb">
        <label>Search</label>
        <div class="td">
        <input type="text" name="firstName" placeholder="Employee Firstname" autocomplete="off" ><i class="fa fa-search"></i>
        <button type="submit" type="hidden" class="btn2" name="search"></button>
    </div>
    </div>
    </form>
<?php
if(isset($_POST['search']))
{
    $firstName = $_POST['firstName'];
    $sql = "SELECT * FROM employee WHERE firstName = '$firstName'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0)
    {
        echo "<table>";
        echo "<tr>";
        echo "<th>Emp ID</th>";
        echo "<th>Picture</th>";
        echo "<th>Employee Name</th>";
        echo "<th>Email</th>";
        echo "<th>Contact</th>";
        echo "<th>Emergency Contact</th>";
        echo "<th>Address</th>";
        echo "<th>National ID</th>";
        echo "<th>Date of Birth</th>";
        echo "<th>Gender</th>";
        echo "<th>Department</th>";
        echo "<th>Highest Degree/Diploma</th>";
        echo "<th>Marital Status</th>";
        echo "<th>Country</th>";
        echo "<th>Province</th>";
        echo "<th>Options</th>";
        echo "</tr>";
        while($employee = mysqli_fetch_assoc($result))
        {
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
    echo "</table>";
      
} else {
 
  echo "<center>No result found for the given Employee Name : ".$firstName."</center>";
}
}
?>
    </body>
</html>