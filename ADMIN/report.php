<?php
//Authetication of login
require('auth.php');

require_once 'C:/xampp/htdocs/@project/dbh.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave History per employee</title>
    <meta charset="utf-8">
    <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="report.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="refresh" content="300;url=index.html" />
</head>

<body>
<header>
  <div class="backup">
    <a href="viewleave.php">Back</a>
</div>
</header>
  <title >Report per employee</title>
  <div class="header">
    <h2>Leave History per employee</h2>
  </div>
  <form method="post" action="report.php" autocomplete="off">
    <div class="input-group">
      <label>Employee ID</label>
      <input type="text" name="id"  required autocomplete="off">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="search">Leave History</button>
    </div>
    
  </form>
  <table id="table1s">
            
			<tr>
				<th>Emp. ID</th>
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Leave Reason</th>
				<th>Status</th>
        <th>Manager Approval/Rejection Reason</th>
        <th id="days">Total Days </th>
			</tr>
  <?php
  if (isset($_POST['search'])) {
    $id = $_POST['id'];
    $empid = $id;
    $sql = "Select employee.id, employee.firstName, employee.lastName, leave_process.start, leave_process.end, leave_process.reason, leave_process.status,leave_process.Areason, leave_process.token From employee, leave_process Where employee.id = $id and leave_process.id = $id order by leave_process.token";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $date1 = new DateTime($row['start']);
				$date2 = new DateTime($row['end']);
				$interval = $date1->diff($date2);
        




				
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstName']." ". $row['lastName'] ."</td>";
        echo "<td>" . $row['start'] . "</td>";
        echo "<td>" . $row['end'] . "</td>";
        echo "<td>" . $row['reason'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['Areason'] . "</td>";
        echo "<td>" . $interval->format('%a') . "</td>";
        echo "</tr>";
      
      }
      
    } elseif (mysqli_num_rows($result) == 0) {
      echo "<tr><td colspan='10'><center>No result found for the given employee ID: $empid </td></tr>";
     
    }
    
  }
  ?>
  
  </table>
  <h2>Leave Report of an employee</h2>
<form action="pdf1.php" method="post" autocomplete="off" >
<div class="input-group">
      <label>Employee ID</label>
      <input type="text" name="id" autocomplete="off">
    </div>
            <input type="submit" value="Generate Report" class="btn" name="report">
        </form>
</body>
    </html>
