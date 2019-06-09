<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Franchise Enquiry Form</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" >
        <script src="form.js"></script>
    </head>
    <?php
 require "header.php";
  ?>
    <body >
    <form class="franchise" id="reused_form">
    <h2>ELITE FRANCHISE</h2>
<ul>
<li>                        
<label> Name</label>
<input type="text" name="name" class="field-style field-split">
<span>Enter your name here</span>
</li>
<li>
<label> Email</label>
<input type="email" name="email" class="field-style field-split">
<span>Enter a valid e-mail id</span>
</li>
<li>
<label> Contact</label>
<input type="text" name="contact" class="field-style field-split">
<span>Enter Mobile Number</span>
</li>
<li>                                    
<label> Message</label>
<textarea type="textarea" name="message" class="field-style"></textarea>
<span>Enter your message</span>
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