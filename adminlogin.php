<?php

if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "admin" && $password == "Apelite")		
	{
		session_start();
    			$session['username'] = $row['username'];
    			$session['password'] = $row['password'];
                header("location: admin_panel.php?");
    			}  
    			
    			else {
    			header("location: adminlogin1.php?error=wrongcredentials");

    		}

	
} 

?>