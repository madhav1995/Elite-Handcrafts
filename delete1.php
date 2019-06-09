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
  $select="DELETE FROM products WHERE pro_id='$_GET[id]'";
  //excecuting
  if(mysqli_query($con,$select))
  header("refresh:1; url=delete.php");
  else
echo" NOT DELETED";

 ?>
