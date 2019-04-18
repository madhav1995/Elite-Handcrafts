<!DOCTYPE html>
		<html>
		<head>
			<title>ADMIN Login</title>
		<link rel="stylesheet" type="text/css" href="login.css">
		</head>
		<body>
			<form method="POST">
				<table>
					<tr>
						<td>User Type</td>
						<td>
							<select name="type">
								<option value="-1">Select User Type</option>
								<option value="Admin">Admin</option>
								<option value="User">User</option>
						    </select>
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" placeholder="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd" placeholder="password"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		</body>
		</html>
		<?php 
 
         $servername = "localhost";
         $username = "root";
         $password = "";
         $db = "multilevel";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h3>© 2019 Elite handcrafts. All rights reserved</h3>";

         if(isset($_POST['submit']))
         {
         	$type = $_POST['type'];
         	$username = $_POST['username'];
         	$password = $_POST['pwd'];

         	$sql="select * from login where username='$username' and password='$password' and type='$type'";
         	$result=mysqli_query($conn, $sql);

         	while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
         		if($row['username']==$username && $row['password']==$password && $row['type']=='Admin')
         		{
         			header("Location: admin.html");
         		}elseif($row['username']==$username && $row['password']==$password && $row['type']=='User')
         		{
         			header("Location: user.html");
         		}
         	}
         }
		 ?>