
<?php
    
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Advanced Level Learning Videos</title>

   <!-- css file -->
   <link rel="stylesheet" href="css/videos.css">

</head>
<body>

<h3 class="top-heading" >ADVANCED LEVEL LEARNING VIDEOS</h3>
   
<div class="container">

<?php

$fetchVideos = mysqli_query($con, "SELECT * FROM alvideos ORDER BY id ASC");

        while($row = mysqli_fetch_assoc($fetchVideos))
        
        {

         $location = $row['location'];



      echo '<div class="container">';
   
      echo '<div class="video-list">';

            echo '<div class="heading">';
            echo "<h1> " .$row['title']. " </h1>";
            echo "<p> " .$row['description']. " </p>";
            echo "</div>";
   
      echo '<div class="video">';

      echo "<video src='".$location."' controls width='980px' height='520px' >";
      
      echo "</div>";
      
      echo "</div>";
   
      echo "</div>";


        }

   ?>


</div>



</body>
</html>