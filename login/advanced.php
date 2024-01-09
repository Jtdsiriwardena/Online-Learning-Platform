<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = userLogin($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>CHOOSE YOUR LEARNING METHOD</title>

	<link rel="stylesheet" href="css/level1.css">
</head>

<body>
    

	<div class="header">

	<section class="home"><div class="top-heading">
	<h1>HELLO,  <?php echo $user_data['first_name'];?> 
	<?php echo $user_data['last_name'];  ?> 
	CHOOSE YOUR LEARNING METHOD </h1>
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
<a href="http://localhost/AlphaLearner/videos/advanced/videos.php" class="vid">LEARNING VIDEOS</a>
<a href="http://localhost/AlphaLearner/papers/advanced/downloads.php" class="papers">PASTPAPERS</a>
<a href="http://localhost/AlphaLearner/quiz/Advanced/home.html" class="quiz">ONLINE QUIZZESS</a>


</div>



</body>
</html>