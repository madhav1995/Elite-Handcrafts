<!DOCTYPE html>
<html>
  <head>
  <?php    require_once('DB.php');?>
  <?php include_once('functions.php');?>
   <title>PRODUCTS</title>
    <link rel="stylesheet" href="style.css" >
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
  </head>
 <?php
 require "header.php";
  ?>
<body>
  <?php
   getcats();

   getpro();

  get_pro_cat();
  
?>
</body>
 <?php
 require "footer.php";
  ?>
</html>
