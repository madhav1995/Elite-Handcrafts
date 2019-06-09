<?php

  include("DB.php");
   ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>





<title>Elitehandcrafts Admin Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
   <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->


</head>
<div class="container"><a href="index.php"><img src="images/elitehandcrafts.png" id="logo" /></a></div>
<br>
<br>
<div class= linkBtn>
<a href="admin_panel.php" >ADMIN PANEL</a>
<a href="delete.php">DELETE CONTENT</a>
</div>
<body>
<div class="contactus">
  
    <form action="" method="POST" enctype="multipart/form-data">
   
      <h4>INSERT NEW PRODUCTS HERE</h4>
     
             <ul>
              <li>
              <label><strong>Product Title:</strong></label>
              <input type="text" class="contact_input" name="product_title" required />
              <span>Enter product title</span>
              </li>
              <li>
              <label><strong>Product Category:</strong></label>

           <select name="product_cat" required>

           <option></option>


           <?php



	$get_cats = "select * from categories";
	$run_cats = mysqli_query($conn,$get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){

	$cat_tit = $row_cats['cat_title'];
    $cat_id = $row_cats['cat_id'];


     echo "<option value=$cat_id>$cat_tit</option>";



     }
           ?>

           </select>
          <span>Choose product category</span>


         </li>  

          
              <li>
            <label><strong>Product Image:</strong></label>
            <input type="file" class="contact_input" name="product_image" required />
            <span>Select product image</span>

            </li>
            <li>
            <label><strong>Product Price:</strong></label>&nbsp;
            <input type="text" class="contact_input" name="product_price" required />

            </li>
            <li>
            <label><strong>Product Description:</strong></label>
           <textarea name="product_desc" class="contact_input" cols="33" rows="7" required></textarea>
           <span>Enter product description</span>

            </li>
            &nbsp;
             <li>
            <input type="submit"  name="index" value="INSERT" style="width: 336px"/>
             </li>
            &nbsp;<br />

</ul>
</form>
          </div>


</body>

</html>


<?php


if(isset($_POST['index'])){

  //getting text data
 $product_title = $_POST['product_title'];
 $product_cat = $_POST['product_cat'];
 $product_price = $_POST['product_price'];
 $product_desc = $_POST['product_desc'];
  //getting image data
 $product_image = $_FILES['product_image']['name'];
 $product_image_tmp = $_FILES['product_image']['tmp_name'];

 move_uploaded_file($product_image_tmp,"product_images/$product_image");

 $insert_product = "insert into products (pro_cat,pro_title,pro_price,pro_desc,image) values ('$product_cat','$product_title','$product_price','$product_desc','$product_image')";
 $run_product = mysqli_query($conn,$insert_product);

 if($run_product){

 echo"<script>alert('Product Has been inserted')</script>";

 }


}


?>
