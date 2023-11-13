<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Booking</title>
</head>
	<style>
		* {
			background-color:white;
		}
		.title {
			text-align: center;
			font-size: 30px;
			margin-top: 50px;
			margin-bottom: 30px;
		}
		.center-button {
			text-align: center;
		    margin-top: -10px;
		    width: 200px;
		    color: #F79520;
		    text-decoration: none;
		    display:inline-block;
		    font-size:20px;
	   }
	   .custom-button {
		   background-color: #F79520;
		   color: white;
		   border: none;
		   width: 250px;
		   padding: 10px 20px;
		   font-size:18px;
		   text-align: center;
		   cursor:pointer;
		   margin-top: 10px;
       }
	</style>

<body>
	<div class="title">
	<h1>UPTM Cafe Booking List</h1></div>
	
	<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "uptm_cafe";
	
	$conn=new mysqli($servername, $username, $password, $dbName);

    //check connection
    if($conn->connect_error) 
	{
		die("Connection failed." .$conn->connect_error);
	}
	$sql = "SELECT * FROM booking";
	$result = $conn->query($sql);
	
	if ($result->num_rows >0) {
		echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
        echo '<tr><td align="center"><b>No</b></td>
        <td align="center"><b>Customer Name</b></td>
		<td align="center"><b>Gender</b></td>
		<td align="center"><b>Customer Email</b></td>
        <td align="center"><b>Customer Contact</b></td>
        <td align="center"><b>Date</b></td>
		<td align="center"><b>Time</b></td></tr>';
		
	}
	
	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo '<td align="center">'.$row["id"].'</td>';
        echo '<td align="center">'.$row["firstName"].'</td>';
		echo '<td align="center">'.$row["gender"].'</td>';
		echo '<td align="center">'.$row["email"].'</td>';
        echo '<td align="center">'.$row["phone"].'</td>';
        echo '<td align="center">'.$row["date"].'</td>';
		echo '<td align="center">'.$row["time"].'</td>';
        echo '</tr>';
    }
	
	echo '<tr>';
    echo '<td colspan="15" align="center">';
    echo '<div class="center-button">';
    echo '<a href="adminMenu.php">';
    echo '<input type="button" value="Back to Main Menu" class="custom-button">';
    echo '</a>';
    echo '</div>';
    echo '</td>';
    echo '</tr>';
    ?>
	
</body>
</html>
