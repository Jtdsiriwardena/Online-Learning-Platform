<?php


// function for sessions with User id

function userLogin($con)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from users where id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	else{
		        echo '<script>';
                echo  "alert('Failed to Connect !')";
                echo '</script>';
	}

	
	header("Location: login.php");
	die;

}



?>