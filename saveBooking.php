<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Save Booking</title>
</head>
	<style>
		* {
			background-color:white;
		}
		.date {
			text-align: center;
			margin-top: 20px;
			font-family: Arial;
			font-size: 26px;
		}
		.booking {
			text-align: center;
			font-family: Arial;
			font-size: 34px;
			margin-top: 50px;
		}
		.details-container {
			text-align: center;
			margin: 0 auto;
			max-width: 350px;
		}
		.details {
			text-align: left;
		}
		/* Add this code to your existing CSS or style section */
		
        .center-button {
			text-align: center;
            margin-top: -10px;
        }

        .custom-button {
			display: inline-block;
            padding: 10px 20px;
            color: #F79520;
            text-decoration: none;
            font-size: 20px;
        }

        .custom-button:hover {
			background-color: white;
            /* Add any additional styles for hover effect */
        }

        .backButton,
        .homeButton {
			display: inline-block;
            background-color: #F79520;
            color: white;
			font-family: Arial;
            border: none;
            width: 80px;
            padding: 10px 20px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
         }


		.success-message {
			font-size:28px;
			text-align: center;
			animation: checkmark 2s ease both;
			color:#1F3EF9;
			margin-top: 70px;
		}
		
		@keyframes checkmark {
        0% {
            transform: scale(0);
        }
        70% {
            transform: scale(1.0);
        }
        100% {
            transform: scale(1);
        }
    }
	</style>

<body>
	<?php
	
	$date = date("d-m-Y");
	$time = date("H:i");
	
	//get input values from booking form
	extract($_POST);
	
	?>
	
	<div class="date">
	<Date and Time:<b><?php print($date). ' '.$time;?></b></p>
	</div>
    
<section class="booking">
    <h1 style="margin-top: 50px;">Booking Details</h1><br>
    <div class="details-container">
    <table>
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>NAME</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($first_name)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>GENDER</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($gender)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>EMAIL</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($email)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>CONTACT</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($phone)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>DATE</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($date)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>TIME</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($time)?></b></td>
		</tr>

        </table>
		</div>
	</section>

<?php
	$servername="localhost";
    $username="root";
    $password="";
    $dbName="uptm_cafe";
	
	//create connection
	$conn=new mysqli($servername, $username, $password, $dbName);
	
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed." .$conn->connect_error);
	}
	
	//create query
	$sql = "INSERT INTO booking (firstName, gender, email, phone, date, time) VALUES ('$first_name', '$gender', '$email', '$phone', '$date', '$time')";
	
	//execute query
	if ($conn->query($sql) === TRUE) 
	{
		echo "<p class='success-message'>Your booking has been made successfully!</p>";
    }

	else 
	{
		echo "Error. " .$sql. "<br>" .$conn->error;
	}
	
	//close connection
	$conn->close(); 
?>

<br>
<form>
    <div class="center-button">
        <a href="booking cafe.html" class="backButton">Back</a>
        <a href="homepage cafe.html" class="homeButton">Home</a>
    </div>
</form>
</body>
</html>