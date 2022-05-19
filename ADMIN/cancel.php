<?php
require ('../dbh.php');
$token = (isset($_GET['token']) ? $_GET['token'] : '');
$status='Rejected';
$sql = "SELECT * from `leave_process` WHERE token=$token";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$Areason = $res['Areason'];

    }}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reject Leave</title>
    <link rel = "icon" href ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvMcNqJlWz-Jw2q7xtoQV8Ju0EjSMTAmcysw&usqp=CAU"type = "image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id="registration" action="canceled.php" method="POST">
            <div class="container">
                <p>TOKEN ID</p>
                <input type="text1" name="token" value="<?php echo $token; ?>">
                <p>LEAVE STATUS</p>
                <input type="text1" name="status" value="<?php echo $status;?>" readonly>
                
            <div class="input-group">
                <p>Reason for rejection</p>
                <input class="input--style-2" type="text" autocomplete="off" name="Areason" value=<?php echo $Areason?> required >
            </div>
            <div class="divider"></div>
            <button class="btn" type="submit" name="update">Reject</button>
            </div>
        </form>


        <style>
        body{
            background-color: grey;
        }
        .container{
            background-color: #6143e8;
            border-radius: 5em;
            padding: 30px;
            margin: 30px;
            text-align: center;
        }
        .container input[type="text"]{
            width: 200px;
            height: 40px;
            border-radius: 20px;
            border: 1px solid #6143e8;
            padding: 10px;
            margin: 10px;
            color:black;
            font-size: 15px;
            transition:1s;
        }
        .container input[type="text1"]
        {
            width: 200px;
            height: 40px;
            text-align: center;
            font-size: 20px;
            color: black;
            border-top-left-radius: 3em;
            border-top-right-radius: 3em;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border: 1px solid #6143e8;
            padding: 10px;
            margin: 10px;
            cursor: pointer;
        }
        .container input[type=text1]:hover{
            background-color: green;
            color: white;
            transition:1s;
        }
        .container input[type="text"]:focus{
            width: 500px;
        }
        p{
            font-size: 30px;
            color:white;
            text-shadow: 2px 2px black;
        }
        .divider{
            width: 100%;
            height: 5px;
            margin: 10px;
        }
        button {
    background-color: Red;
    color: white;
    border: bottom 5px;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width: 200px;
    cursor: pointer;
    border-radius: 10px;
}

button:hover {
    background-color: #4CAF50;
    color: white;
}
        .input--style-2 {
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 3px;
            padding: 12px 20px;
            margin: 10px 0px;
            color: #4CAF50;
        }

        </style>
       
    </body>
</html>