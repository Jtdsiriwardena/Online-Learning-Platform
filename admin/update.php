<?php 

include "connection.php";

    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$email = $_POST['email'];       
		$username = $_POST['username'];
		$password = $_POST['password'];

        $sql = "UPDATE `admin` SET `first_name`='$firstname',`last_name`='$lastname',`email`='$email',`username`='$username',`password`='$password' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

        header("Location: dashboard.php");

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `admin` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $firstname = $row['first_name'];
		    $lastname = $row['last_name'];
		    $email = $row['email'];       
		    $username = $row['username'];
		    $password = $row['password'];

            $id = $row['id'];

        }

    ?>


<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Admin Details</title>
            <link rel="stylesheet" href="css/update1.css">
        </head>
        <body>
            
        <div class="area">

<form action="" method="post">

   <h1>Update Details</h1>

  <div class="details">
  <label for="title">First Name: </label>
  <input type="text"  class="details-values" value="<?php echo $firstname; ?>" name="first_name">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  </div>

  <div class="details">
  <label for="year">Last Name: </label>
  <input type="text"  class="details-values" value="<?php echo $lastname; ?>" name="last_name">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  </div>

  <div class="details">
  <label for="syllabus">Email: </label>
  <input type="text" class="details-values" value="<?php echo $email; ?>" name="email">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  </div>

  <div class="details">
  <label for="syllabus">Username: </label>
  <input type="text" class="details-values" value="<?php echo $username; ?>" name="username">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  </div>

  <div class="details">
  <label for="syllabus">Password: </label>
  <input type="text"  class="details-values" value="<?php echo $password; ?>" name="password">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  </div>


  <input type="submit" value="UPDATE" name="update" class="submit">


</form>
</div>   

</body>
</html>



    <?php

   } else{ 

        header('Location: dashboard.php');

    } 

}

?> 