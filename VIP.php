<html>
<head>
	<title>Our VIP club</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	</body>
	<div class="container"><a href="index.html"><img src="images/elite-logo.jpg" id="logo" /></a></div>
    <div><h1 class="heading1">Elite Handcrafts</h1></div>
    <br />
	<div class="navbar">
		<a href="index.html">Home</a>
      <a href="himalayan_salt.html">Offers</a>
      <div class="dropdown">
        <button class="dropbtn"> Products
        </button>
        <div class="dropdown-content">
            <a href="himalayan_salt.html">Himalayan Salt</a>
            <a href="bedroom.html">Bedroom & Living</a> 
            <a href="outdoor.html">Outdoor</a>
            <a href="others.html">Others</a>
        </div>
      </div> 
      <a href="locations.html">Locations</a>
      <a href="contact.html">Contact Us</a>
	</div>
   <div><img src="images/offerbanner.jpeg" class="homeimg" /></div>
	<div class="signup">
           <h1>SIGNUP</h1>
           <?php
           if (isset($_GET['error'])) {
              if ($_GET["error"] == "emptyfeilds") {
                echo '<p class="signuperror">Fill in all feilds!</p>';
              }
              elseif ($_GET["error"] == "invaliduidmail") {
                echo '<p class="signuperror">Invalid username and E-mail!</p>';
              }
            }
              elseif ($_GET["signup"] == "success") {
                echo '<p class="signupsuccess">Signup Successful</p>';
              }

           ?>
           <form action="registration.php" method="post">
           <input type="text" name="Uid" placeholder="username"><br><br>
           <input type="text" name="mail" placeholder="E-mail"><br><br>
           <input type="password" name="Pwd" placeholder="password"><br><br>
           <input type="password" name="pwd-repeat" placeholder="Re-enter password"><br><br>
           <button type="submit" name="signup-submit" value="signup">SIGNUP</button><br><br>
           <h4>Already have an Account? <a href="login.html">LOGIN</a> here</h4>

           </form>
       </div>
	 <footer class="footer">
      <h2>Elite Handcrafts</h2>
      <p>© 2019 Elite handcrafts. All Rights Reserved</p>
      <a href="https://www.facebook.com/EliteHandcrafts02/" class="fa fa-facebook"></a>
      <a href="https://www.instagram.com/elitehandcrafts/?hl=en" class="fa fa-instagram"></a>
     </footer>
	</html>