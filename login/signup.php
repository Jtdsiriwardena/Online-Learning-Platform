<?php 
session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email']; 
		$gce_level = $_POST['gce_level'];       
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{

			
			
			$query = "insert into users (first_name,last_name,email,gce_level,username,password)
			values ('$first_name','$last_name','$email','$gce_level','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;

			echo '<script>';
            echo  "alert('Signup Successfully')";
            echo '</script>';
		}
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>


	<div class="area" id="area">
		
        <h1>Sign Up</h1>

		<form method="post">
            
		    <div class="detail">
			<input id="text" type="text" name="first_name">
            <label>First Name</label>
            </div>

			<div class="detail">
			<input id="text" type="text" name="last_name">
			<label >Last Name</label>
            </div>

			<div class="detail">
		    <input id="text" type="text" name="email">
			<label>Email</label>
            </div>
        
			<div class="detail">
			<input id="text" type="text" name="gce_level">
			<label>GCE Level &nbsp ( Advanced / Ordinary )</label>
            </div>

			<div class="detail">
			<input id="text" type="text" name="username">
			<label>Username*</label>
            </div>

			<div class="detail">
			<input id="text" type="password" name="password">
			<label>Password*</label>
            </div>
            
			<div class="signup">
			<input id="button" type="submit" value="Signup">
			</div>

		</form>
	</div>
</body>
</html>