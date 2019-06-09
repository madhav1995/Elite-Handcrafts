<html
<style >
<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

</style>

<?php

 $conn = mysqli_connect("localhost","ictatjcu_elites","123zxc","ictatjcu_elites");

 if(mysqli_connect_errno()){

  echo"Failed to connect : " . mysqli_connect_error();

}

//getting categories

function getcats(){

	global $conn;

	$get_cats = "select * from categories";
	$run_cats = mysqli_query($conn,$get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){


		$cat_title = $row_cats['cat_title'];
        $cat_id = $row_cats['cat_id'];

    echo "<div class=products><a href='products.php?cat=$cat_id'>$cat_title</a></div>";
	}
}?>
<?php
//random products

function getpro(){


if(!isset($_GET['cat'])){


global $conn;

    $get_pro = "select * from products order by RAND() LIMIT 0,6";
    $run_pro = mysqli_query($conn,$get_pro);



    while($row_pro_cat = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro_cat['pro_id'];
        $product_category = $row_pro_cat['pro_cat'];
        $product_title = $row_pro_cat['pro_title'];
        $product_price = $row_pro_cat['pro_price'];
        $product_image = $row_pro_cat['image'];
        $product_desc=$row_pro_cat['pro_desc'];

        echo"<div class='flex-container'>
        PRODUCT
        <div class='product_img'><span class='images'><img src='product_images/$product_image' alt='' border='2'  /></a></div>
          TITLE:
          <div class='product_title'>$product_title</div>
          DESCRIPTION:
          <div class='product_desc'>$product_desc</div>
          PRICE:
          <div class='product_price'>$ $product_price</div>
</div>
       ";
}    }
}?>

<?php
//getting products accordingly
function get_pro_cat(){
	if(isset($_GET['cat'])){
		$cat_id = $_GET['cat'];
	global $conn;
    $get_pro_cat = "select * from products where pro_cat ='$cat_id' ";
    $run_pro_cat = mysqli_query($conn,$get_pro_cat);
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
        echo"<div class='flex-container'>
        PRODUCT
        <div class='product_img'><span class='images'><img src='product_images/$product_image' alt='' border='2'  /></a></div>
          TITLE:
          <div class='product_title'>$product_title</div>
          DESCRIPTION:
          <div class='product_desc'>$product_desc</div>
          PRICE:
          <div class='product_price'>$ $product_price</div>
</div>
       ";
}    }
}?>
