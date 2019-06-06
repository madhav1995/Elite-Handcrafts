<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<table border=1 cellpadding=1 cellspacing=1>
  <tr>
    <th>Title</th>
    <th>Product price</th>
    <th>Delete</th>
    </tr>
<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "elite";

$con = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$con) {
	die("connection failed: ".mysqli_connect_error());
}
?>
<div class="admin">
<a href="addition.php">Addition</a>
<a href="adminpanel.php">Admin page</a>
</div>
<style>
.admin{
  display: inline-block;
}
</style>
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
