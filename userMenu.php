<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Menu Login</title>
    <style>
        * {
            background-color:white;
        }
        .container {
            text-align: center;
            margin-top: 270px;
        }
        .home-button {
            background-color: #F79520;
            color: white;
			font-family: Arial;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="font-size: 35px;">Login Successful!</h1>
        <?php
        // Add PHP code here for session handling, if needed

        // Example PHP code to destroy the session
        session_start();
        session_destroy();
        ?>
        <p style="font-size: 20px;margin-bottom: 50px;">You have been successfully logged in.</p>
        <a href="homepage cafe.html" class="home-button">Home</a>
    </div>
</body>
</html>
