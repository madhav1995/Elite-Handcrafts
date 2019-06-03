
<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

  <head>
  <?php    require_once('DB.php');?>
  <?php include_once('includes/functions.php');?>
   <title>Elite Handcrafts</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
<div class="container"><a href="home.php"><img src="images/elite-logo.jpg" id="logo" /></a></div>
    <div><h1 class="heading1">Elite Handcrafts</h1></div>

<body>
  <div class="navbar">
    <a href="home.php">Home</a>
    <a href="products.php">Offers</a>
  <a href="products.php">Products</a>
    <a href="locations.php">Locations</a>
    <a href="contact.php">Contact Us</a>
    <a href="VIP.php">Become A VIP</a>
  </div>
  <?php
   getcats();

  get_pro_cat();
?>

 </body>
</html>
