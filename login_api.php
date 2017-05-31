<?php 
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];

	require 'connectDB.php';
	$sql = "SELECT user_email,user_password
	        FROM users
	        WHERE user_email = '$email' AND user_password = '$password';
	        ";
	
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
	    while ($rows = $result->fetch_assoc()) {
	        $_SESSION['userLogin'] = $email;
            header('Location: index.php');
	    }
	}else{
	    echo $sql;
	}
	$mysqli->close();
 ?>