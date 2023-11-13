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

    //define $myusername and $mypassword
    $myusername=$_POST['myusername'];
    $mypassword=$_POST['mypassword'];
    
    $sql = "INSERT INTO user (username, password) VALUES ('$myusername', '$mypassword') ";

    //mysql_num_row is counting table row
    if ($conn->query($sql) === TRUE)
	{
		//redirect to file "adminMenu.php"
		header("location:userMenu.php");
	}
    else{
		echo "<p>Wrong username or password. Please try again.</p>";
	}
	
	$conn->close();
?>