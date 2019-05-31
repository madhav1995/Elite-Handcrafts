<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
    <link href='login.css' rel='stylesheet' type='text/css'>
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>

</head>
<?php
 require "header.php";
  ?>
<body>

<div class="box">
<h1>LOG IN</h1>

 <form action="login form.php" method="post">
<input type="email" name="email" placeholder="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="password" name="password" placeholder="password" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
 
 <Button class="btn" name="sign-in" value="1" type="submit">SIGN IN </Button> 
<!--<a href="login.php"><div class="btn" name = sign-in>Sign In</div></a>--> <!-- End Btn -->

<a href="signup.php"><div id="btn2">SIGN UP</div></a> <!-- End Btn2 -->
  
</div> <!-- End Box -->
  
</form>

<p id="box">Forgot your password? <u>Click Here!</u></p>
  
<?php
 require "footer.php";
  ?>
 </body>
</html>
