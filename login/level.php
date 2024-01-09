<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = userLogin($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Choose Your GCE LEVEL</title>
	<link rel="stylesheet" href="css/level.css">
</head>

<body>
    

	<div class="header">

	<section class="home">
		<div class="top-heading">
	<h1>HELLO, <?php echo $user_data['first_name'];  ?> 
	<?php echo $user_data['last_name'];  ?> 
	CHOOSE YOUR GCE LEVEL</h1>
	</div>
   
	<form method="POST">

<button name="Logout">SIGN OUT</button>


 </form>

    </section>

    </div>


	<?php
         if(isset($_POST['Logout'])) 
         {
            header("location: login.php");
         }

    ?>





<div class="subject-cards">
<a href="http://localhost/AlphaLearner/login/ordinary.php" class="ol">Ordinary Level</a>
<a href="http://localhost/AlphaLearner/login/advanced.php" class="al">Advanced Level</a>


</div>


</body>
</html>