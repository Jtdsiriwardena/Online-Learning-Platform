<?php
    session_start() ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ALPHA Learner Dashboard</title>
  <link rel="stylesheet" href="css/dash.css">

</head>
<body>


<div class="header">

<h1> Hello , Welcome to Alpha Learner Admin Dashboard </h1>

<form method="POST">

<div class="button">
<a href="http://localhost/AlphaLearner/admin/adminlogin.php">Sign Out</a>
</div>

</form>
</div>


    <section class="main">
      <div class="main-header">
        <h1>DASHBOARD</h1>
      </div>
      

      <div class="card-section">

      <div class="card">
          <img src="images/users.png">
          <h4>USERS</h4>
          
          <div class="button">
          <a href="http://localhost/AlphaLearner/users/users.php">View</a>
          </div>
        </div>

        <div class="card">
          <img src="images/videos.png">
          <h4>VIDEOS</h4>
          <div class="button">
          <a href="http://localhost/AlphaLearner/videos/advanced/index.php">Advanced</a>
          <a href="http://localhost/AlphaLearner/videos/ordinary/index.php">Ordinary</a>
          </div>
        </div>

        <div class="card">
          <img src="images/feedback.webp">
          <h4>FEEDBACKS</h4>
          <div class="button">
          <a href="http://localhost/AlphaLearner/admin/feedback.php">View</a>
          </div>
        </div>

        <div class="card">
          <img src="images/pastpapers.png">
          <h4>PASTPAPERS</h4>
          <div class="button">
          <a href="http://localhost/AlphaLearner/papers/advanced/index.php">Advanced</a>
          <a href="http://localhost/AlphaLearner/papers/ordinary/index.php">Ordinary</a>
          </div>
        </div>

    </div>
     </section>


       <div class="table">

       <div class="table-header">

       <p><b>INSERT ADMINS</b></p>


        <div>

        <input class= "input" type="text" placeholder="First Name" name="first_name">
        &nbsp &nbsp
        <input class= "input" type="text" placeholder="Last Name" name="last_name">
        &nbsp &nbsp
        <input class= "input" type="text" placeholder="Email" name="email">
        &nbsp &nbsp
        <input class= "input" type="text" placeholder="User Name" name="username">
        &nbsp &nbsp
        <input class= "input" type="text" placeholder="Password" name="password">
        &nbsp &nbsp
        <input class="upload" type='submit' value='Insert' name='but_upload'>

        </div>

        </div>

       

        <div class="table-section">
           <table>

               <thead>
                    <tr>
                      <th style="width: 20px">ID</th>
                      <th style="width: 70px">First Name</th>
                      <th style="width: 70px">Last Name</th>
                      <th style="width: 100px">Email</th>
                      <th style="width: 70px">Username</th>
                      <th style="width: 70px">Password</th>
                      <th style="width: 100px">Actions</th>
                   </tr>
               </thead>

               <tbody>



        
        <?php
                  $dbhost = "localhost";
                  $dbuser = "root";
                  $dbpass= "";
                  $dbname = "alphalearner_db";

                  $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

                $sql = "SELECT * FROM admin";
                $result = $con->query($sql);

                while($row = $result->fetch_assoc()) {



                      
 
                   echo

                    "<tr>
                      <td>$row[id]</td>
                      <td>$row[first_name]</td>
                      <td>$row[last_name]</td>
                      <td>$row[email]</td>
                      <td>$row[username]</td>
                      <td>$row[password]</td>
                      
                      
                      <td> 
                        <a href='/AlphaLearner/admin/update.php ?id=$row[id]'>Update</a>

                        &nbsp &nbsp

                        <a href='/AlphaLearner/admin/delete.php ?id=$row[id]'>Delete</a>
                      </td>

                    </tr>";
                      
                }

         ?>

        </tbody>

    </table>
        
    </div>

     </div>



 </body>

</html>




    

      