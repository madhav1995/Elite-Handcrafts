<?php

if (isset($_POST['signup-submit'])) {
	require 'DB.php';

	$username = $_POST['Uid'];
	$email = $_POST['mail'];
	$password = $_POST['Pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        /*print_r($_POST);
        exit();*/
		header("location: elitestarclub.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !Preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("location: elitestarclub.php?error=invalidmailuid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    header("location: elitestarclub.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!Preg_match("/^[a-zA-Z0-9]*$/", $username)) {
	    header("location: elitestarclub.php?error=invalidmail&mail=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat) {
    	header("location: elitestarclub.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}	
    else {
    	$sql = "SELECT uidUsers From users where uidUsers=?";
    	$stmt =mysqli_stmt_init($conn);    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        	header("location: elitestarclub.php?error=sqlerror");
        	exit();
            }
            else {
            	mysqli_stmt_bind_param($stmt, "s", $username);
            	mysqli_stmt_execute($stmt);
            	mysqli_stmt_store_result($stmt);
            	$resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0) {
            		header("location: elitestarclub.php?error=usertaken&mail=".$email);
        	        exit();
        	}
            		else {

            			$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) values (?, ?, ?)";
            			$stmt = mysqli_stmt_init($conn);
            			if (!mysqli_stmt_prepare($stmt, $sql)) {
            				  header("location: elitestarclub.php?error=sqlerror");
        	         exit();
                        	}

            			else {
                             
                            $hashedpwd = password_hash($passwword, PASSWORD_DEFAULT);

            				mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
            	            mysqli_stmt_execute($stmt);
            	            header("location: login.php?signup=success");
        	         exit();
            	            
            			}

            		}	
            }





        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);


}
else {

	header("location: elitestarclub.php");
        	         exit();


}