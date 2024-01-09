<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{

			
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: level.php");
						die;
					}
				}
			}
			         echo '<script>';
                         echo  "alert('Login Successfully !')";
                      echo '</script>';
		}
		else

		{
			         echo '<script>';
                        echo  "alert('Wrong Username and Password !')";
                      echo '</script>';
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

	<link rel="stylesheet" href="css/login.css">

</head>
<body>

<div class="section" id="section">
 
    <h1>Log In</h1>

	<form method="post">

    <div class="details">
    <input id="text" type="text" name="username">
    <label>Username</label>
    </div>

    <div class="details">
    <input id="text" type="password" name="password"> 
    <label >Enter Password</label> 
    </div>

	<div class="signup">
    <input type="submit" id= "button" value="Login">
	</div>

    <div class="signup">
    Not a User ? <a href="signup.php">Click to Signup</a>
    </div>

  </form>

  </div>


</body>
</html>