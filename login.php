<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
</head>
<?php
 require "header.php";
  ?>
<body>

<div class="signup">
<h1>LOG IN</h1>

 <form action="login form.php" method="post">
<ul>
  <li>
<input type="email" name="email" placeholder="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  </li>
  <li>
<input type="password" name="password" placeholder="password" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
 </li>
 <li>
 <Button class="btn" name="sign-in" value="1" type="submit">SIGN IN </Button> 
</li>
<li>
<a href="signup.php"><div id="btn2">SIGN UP</div></a>
</li>
</ul>  
</div>
  
</form>

  
<?php
 require "footer.php";
  ?>
 </body>
</html>
