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
                                <form id="reused_form">
                                    <div class="signup">
                                        <label><i class="fa fa-user"></i> Name</label>
                                        <input type="text" name="name" placeholder="Enter Name">
                                    </div>
                                    <div class="signup">
                                        <label><i class="fa fa-envelope"></i> Email</label>
                                        <input type="email" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="signup">
                                        <label><i class="fa fa-phone"></i> Contact</label>
                                        <input type="text" name="contact" placeholder="Enter Mobile Number"></input>
                                    </div>
                                    <div class="signup">
                                        <label><i class="fa fa-comment"></i> Message</label>
                                        <input type="text" name="message" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="signup">
                                        <button>SEND</button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
    <?php
 require "footer.php";
  ?>
    </body>
</html>