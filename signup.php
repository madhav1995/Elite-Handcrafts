<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
</head>
 <?php
 require "header.php";
  ?>
<body>
<div class="signup">
           <h3>SIGNUP</h3>
           <form action="registration.php" method="post">
           <input type="text" name="Uid" placeholder="username"><br><br>
           <input type="text" name="mail" placeholder="E-mail"><br><br>
           <input type="password" name="Pwd" placeholder="password"><br><br>
           <input type="password" name="pwd-repeat" placeholder="Re-enter password"><br><br>
           <button type="submit" name="signup-submit" value="signup">SIGNUP</button><br><br>
           <h4>ALREADY HAVE AN ACCOUNT? <a href="login.php">LOGIN</a> here</h4>

           </form>
       </div>
    <?php
 require "footer.php";
  ?>
</body>

</html>


    






