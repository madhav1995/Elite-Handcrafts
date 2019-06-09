<html>
<head>
<title>Admin Panel  </title>
<link rel="stylesheet" href="style_admin.css">
   <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">

</head>

<div class="container"><a href="index.php"><img src="images/elitehandcrafts.png" id="logo" /></a></div>
<body>
<div id="header">
<center><img src="admin_icon.png">
<h3> Welcome to  Elite Handcrafts Admin Panel </h3></center>
</div>
<br>
<br>
<div id="sidemenu">
 <ul>
    <li><a href="addition.php" target="_blank"> ADD CONTENT </a></li>
	<li><a href="delete.php" target="_blank"> DELETE CONTENT </a></li>
	<li><a href="add.php" target="_blank"> CREDENTIALS </a></li>
	<li><a href="index.php" target="_blank"> ELITE HANDCRAFTS </a></li>
	<li><a href="adminlogout.php" target="_blank"> LOGOUT </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1 style="border: 2px solid #474853; 
">Data available</h1></center>
<?php
    include 'DB.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["id"]. "<br>" . "  Name: " . $row["name"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["pass"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>
</body>
</html>