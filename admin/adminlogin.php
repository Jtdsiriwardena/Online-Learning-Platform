<?php
      require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login1.css">
</head>
<body>
      
          <div class="section" id="section">

            <h1>Admin Login</h1>

            <form method = "POST" action="">

            <div class="details">
                <input id="text" type="text"  name="username">
                <label>Username</label>
            </div>

            <div class="details">
                <input id="text" type="password"  name="password">
                <label>Password</label>
            </div>

            <input type="submit" id="button" name="login" value="Login">

            </form>
          </div>

          <?php
                   if(isset($_POST['login']))
                   {
                    $query = "SELECT * FROM `admin` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'";
                    $result=mysqli_query($con,$query);


                    if(mysqli_num_rows($result)==1)
                    {
                        session_start();
                        header("location: dashboard.php");
                    }
                    else
                    {
                        echo "<script>alert('Incorrect Password ! ');</script>";
                    }
                   }
          ?>

</body>
</html>