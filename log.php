<? php

if(isset($_POST[])) {
	
	require 'db.php';

	$mailUid = $_POST['mailUid'];
	$password = $_POST['pwd'];

	if (empty($mailUid)) || empty($password)) {
	header("location: index1.php?error=emptyfields");
	exit();
}
else {
	$sql = "SELECT * FROM users WHERE uidUsers=?" OR emailUsers=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: index1.php?error=emptyfields");
		exit();
    }
    else {
    	
    	mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
    	mysqli_stmt_execute($stmt);
    	$result = mysqli_stmt_get_result($stmt);
    	if ($row = mysqli_fetch_assoc($result))  {
    		$pwdCheck = password_verify($password, $row['pwdUsers']);
    		if($pwdcheck == false) {
    			header("location: index1.php?error=wrongpwd");
    			exit();

    		}
    		else if($pwdcheck == true) {
    			session_start();
    			$session['userId'] = $row['idusers'];
    			$session['userUid'] = $row['uidUsers'];

    			header("location: index1.php?login=success");
    			exit()

    		}

    	}
    	else {
    		header("location: index1.php?error=nouser");
    		exit();
    	}


    }


} 

