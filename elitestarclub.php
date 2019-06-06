<html>
<head>
	<title>ELITE STAR CLUB</title>
	<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
</head>
<?php
 require "header.php";
  ?>
<body>
  <div class="pageHeading">
    <h3>ELITE STAR CLUB</h3>
      <div class="signup">
           <h4>SIGNUP</h4>
           <form action="registration.php" method="post">
           <ul>
           <li>
           <label>USERNAME</label>
           <input type="text" name="Uid">
           <span>Enter your name here</span>
           </li>
           <li>
           <label>E-MAIL</label>
           <input type="text" name="mail">
           <span>Enter a valid e-mail id</span>
           </li>
           <li>
           <label>PASSWORD</label>
           <input type="password" name="Pwd">
           <span>Create a password</span>
           </li>
           <li>
           <label>CONFIRM PASSWORD</label>
           <input type="password" name="pwd-repeat">
           <span>Confirm your password</span>
           </li>
          
           <button type="submit" name="signup-submit" value="signup">SIGNUP</button>
         
           <li>
           <h6>ALREADY HAVE AN ACCOUNT ?<br><a href="login.php">LOGIN</a></h6>
           </li>
           </ul>
           </form>
       </div>
    
  </div>
  <?php
 require "footer.php";
  ?>
	</body>
	</html>