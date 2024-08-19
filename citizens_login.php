<?php
session_start();


include_once('connection.php'); 

	$email = $_GET['email'];
	$User_pass = $_GET['User_pass'];

    $sql = "SELECT *  FROM registration WHERE Email='$email' and User_pass='$User_pass'";
    $run =mysqli_query($mysqli,$sql);

    if(mysqli_num_rows($run) > 0 ){
		
		$row = mysqli_fetch_assoc($run);
		//echo "<h1>Login ...". $email." Email or Password...!</h1>";
		$_SESSION["email"] = $email;
		$_SESSION["User_pass"] = $User_pass;

		header("location:After_login.php");
	
    } else{
		echo "<h1>Login Failed...Incorrect Email or Password...!</h1>";
		}
?>

