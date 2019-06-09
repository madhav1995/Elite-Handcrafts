<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CONTACT US</title> 
        <link rel="stylesheet" href="style.css" >
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
        <script src="form.js"></script>
    </head>
<?php
 require "header.php";
  ?>
    <body>
 <form class="signup">
<ul>
<li>                        
<label><i class="fa fa-user"></i> Name</label>
<input type="text" name="name">
<span>Enter your name here></span>
</li>
<li>
<label><i class="fa fa-envelope"></i> Email</label>
<input type="email" name="email">
<span>Enter a valid e-mail id></span>
</li>
<li>
<label><i class="fa fa-phone"></i> Contact</label>
<input type="text" name="contact" >
<span>Enter Mobile Number></span>
</li>
<li>                                    
<label><i class="fa fa-comment"></i> Message</label>
<input type="text" name="message">
<span>Enter your message></span>
</li>
<li>
<button>SEND</button>
</li>                                   
</ul>
</form>
<div id="error_message" style="width:100%; height:100%; display:none; ">
 <h4> Error! Sorry there was an error sending your form. </h4>
</div>
<div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
    <?php
 require "footer.php";
  ?>
    </body>
</html>