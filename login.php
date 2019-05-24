 <?php

if(isset($_POST['sign-in'])) {
	
	require 'DB.php';

	$mailUid = $_POST['email'];
	$password = $_POST['password'];

	if (empty($mailUid) || empty($password)) {
	header("location: login.html?error=emptyfields");
	exit();
}
else {
	$sql = "SELECT * FROM users WHERE emailUsers= '$mailUid';";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: login.html?error=notregistered");
		exit();
    }
    else {
    	
    	//mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
    	mysqli_stmt_execute($stmt);
    	$result = mysqli_stmt_get_result($stmt);
    	if ($row = mysqli_fetch_assoc($result))  {
    		$pwdCheck = password_verify($password, $row['pwdUsers']);
            if ($password != $row['pwdUsers'])
    		//if($pwdcheck == false) 
            {
                header("location: login.html?error=wrongpwd");
    			exit();

    		}
            else
//    		else if($pwdcheck == true) 
            {
    			session_start();
    			$session['userId'] = $row['idusers'];
    			$session['userUid'] = $row['uidUsers'];

    			header("location: index.php?login=success");
    			exit();

    		}

    	}
    	else {
    		header("location: offers.html?error=nouser");
    		exit();
    	}


    }


}
}

?>

