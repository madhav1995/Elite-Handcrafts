<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
   <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <div class="container"><a href="index.php"><img src="images/elitehandcrafts.png" id="logo" /></a></div>
  <div class="linkBtn">
<a href="addition.php">ADDITION</a>
<a href="admin_panel.php">ADMIN PANEL</a>
</div>
<br>
<br>
<br>
<br>
  <body>
<table class="table" border=1 cellpadding=1 cellspacing=1>
  <tr>
    <th>Title</th>
    <th>Product price</th>
    <th>Delete</th>
    </tr>
<?php
$servername = "localhost";
$dbUsername = "ictatjcu_elites";
$dbPassword = "123zxc";
$dbName = "ictatjcu_elites";

$con = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$con) {
	die("connection failed: ".mysqli_connect_error());
}
?>


<?php
  //selecting
  $select="SELECT * FROM products";
  //excecuting
  $records= mysqli_query($con,$select);
  while ($row = mysqli_fetch_array($records)) {
    echo"<tr>";
    echo"<td>".$row['pro_title']."</td>";
    echo"<td>".$row['pro_price']."</td>";

echo"<td><a href=delete1.php?id=".$row['pro_id'].">Delete</a></td>";

  }
 ?>
</table>
  </body>
</html>
