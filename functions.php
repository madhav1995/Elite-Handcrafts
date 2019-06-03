<html
<style >
<link rel="stylesheet" href="style.css" />

</style>

<?php

 $con = mysqli_connect("localhost","root","","elite");

 if(mysqli_connect_errno()){

  echo"Failed to connect : " . mysqli_connect_error();

}

//getting categories

function getcats(){

	global $con;

	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con,$get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){


		$cat_title = $row_cats['cat_title'];
        $cat_id = $row_cats['cat_id'];

    echo "<div class=even><a href='products.php?cat=$cat_id'>$cat_title</a></div>";
	}
}?>


<?php
//getting products accordingly
function get_pro_cat(){
	if(isset($_GET['cat'])){
		$cat_id = $_GET['cat'];
	global $con;
    $get_pro_cat = "select * from products where pro_cat ='$cat_id' ";
    $run_pro_cat = mysqli_query($con,$get_pro_cat);
    $count_row = mysqli_num_rows($run_pro_cat);
     if($count_row==0){
    	echo "<script>alert('OUT OF STOCK')</script>";
    	echo "<script>window.open('products.php','_self')</script>";
    }
    while($row_pro_cat = mysqli_fetch_array($run_pro_cat)){
       $product_id = $row_pro_cat['pro_id'];
        $product_category = $row_pro_cat['pro_cat'];
        $product_title = $row_pro_cat['pro_title'];
        $product_price = $row_pro_cat['pro_price'];
        $product_image = $row_pro_cat['image'];
        $product_desc=$row_pro_cat['pro_desc'];
        echo"<div class='grid-container'>
          <div class='product_title'><span class='Title'>$product_title</a></div>
          <div class='product_img'><span class='images'><img src='product_images/$product_image' alt='' border='20'  /></a></div>
          <div class='prod_price'><span class='price'>$ $product_price</span></div>
</div>
       ";
}    }
}?>
