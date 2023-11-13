<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Booking Session</title>
    <style>
        * {
            background-color: white;
        }
        .form-container {
            text-align: center;
            margin-top: 50px;
        }
        input[type="text"] {
            width: 250px;
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #F79520;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }
        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
		select[name="new_date"] 
		{
			width: 20%;
		    height: 20%;
		    text-align: center;
		    font-size: 20px;
	    }
		.btn-secondary {
            background-color: #F79520;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none; /* Remove underline for anchor tags */
         }
         .btn-secondary {
            margin-top: 30px;
		    font-family: Arial;
			margin-right:400px;
		}
		.btn-primary {
			align:center;
			margin-left:580px;
			margin-top: 30px;
		}
    </style>
</head>
<body>
    <div class="form-container">
    <h1 style="margin-top: 250px; font-size: 50px;">Update Booking Date</h1>
    <form action="processUpdate.php" method="post">
        <input type="hidden" name="booking_id" value="<?php echo $_GET['id']; ?>">
        <p style="font-size: 22px;">CURRENT DATE: <?php echo $_GET['date']; ?></p>
        <input type="date" name="new_date">
    </div>
    <input type="hidden" name="booking_id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="submit" value="Update Date" class="btn-primary">
    </form>
    <a href="adminMenu.php" class="btn-secondary">Back to Main Menu</a>
</div>

</body>
</html>



