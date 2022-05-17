<?php
//Authetication of login
require('auth.php');

require_once 'C:/xampp/htdocs/@project/dbh.php';

//$sql = "SELECT * from `leave_process`";
$sql = "Select employee.id, employee.firstName, employee.lastName, leave_process.start, leave_process.end, leave_process.reason, leave_process.status,leave_process.Areason, leave_process.token From employee, leave_process Where employee.id = leave_process.id order by employee.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
    <title >Leave Management</title>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="viewleave.css" rel="stylesheet" media="all">
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
        <div class="personal">
            <a href="report.php">View leave history Per employee ID</a>
        </div>
        
        <table>
            
			<tr>
				<th>Emp. ID</th>
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Reason</th>
				<th>Status</th>
                <th>Approval/Rejection Reason</th>
				<th>Options</th>
			</tr>
            <?php
            while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";
                    echo "<tr>";
                    echo "<td>".$employee['id']."</td>";
                    echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
                    echo "<td>".$employee['start']."</td>";
                    echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
                    echo "<td>".$employee['reason']."</td>";
                    echo "<td>".$employee['status']."</td>";
                    echo "<td>".$employee['Areason']."</td>";
                    echo "<td><a href='leaveapproval.php?token=".$employee['token']."'><p>Approve</p></a>  <a href='cancel.php?token=".$employee['token']."'><p>Reject</p></a></td>";
                    echo "</tr>";
                }
                
            ?>
        </table>
        <form action="pdf.php" method="post">
            <input type="submit" value="Generate Report" name="report">
        </form>
    </body>
</html>
