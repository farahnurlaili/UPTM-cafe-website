<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Logout</title>
    <style>
        * {
            background-color: white;
        }
        .container {
            text-align: center;
            margin-top: 270px;
        }
        .logout-button {
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
        <h1 style="font-size: 40px;">Logout Page</h1>
        <?php
        // Add PHP code here for session handling, if needed

        // Example PHP code to destroy the session
        session_start();
        session_destroy();
        ?>
        <p style="font-size: 20px;margin-bottom: 50px;">You have been successfully logged out.</p>
        <a href="login page.html" class="logout-button">Login</a>
    </div>
</body>
</html>
