<!DOCTYPE html>
<html>
<head>
    <title>loginAutoUserRegister</title>
</head>
    <style>
		* {
        background-color: white;
    }
    .message {
        text-align: center;
        font-size: 30px;
        margin-top: 300px;
    }
    .error-message {
        text-align: center;
        font-size: 30px;
        margin-top: 300px;
        color: red;
    }
    .center-button {
        text-align: center;
        margin-top: 30px;
    }
    .custom-button {
        background-color: #F79520;
        color: white;
        border: none;
        width: 100px;
        padding: 10px 20px;
        font-size: 18px;
        text-align: center;
        cursor: pointer;
    }
	</style>

<body>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "uptm_cafe";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user registration data from the HTML form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert user data into the database
$sql = "INSERT INTO user_register (firstName, lastName, phone, email, username, password) 
        VALUES ('$firstName', '$lastName', '$phone', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) 
{
	echo '<div class="message">Registration successful!</div>';
} 
else {
    echo '<div class="error-message">Error register: ' . $conn->error . '</div>';
}

// Close the database connection
$conn->close();
?>

<div class="center-button">
    <a href="user login cafe.html">
        <input type="button" value="Login" class="custom-button">
    </a>
</div>
	</body>
</html>

</body>
</html>