<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signed Up Users</title>
    <link rel="stylesheet" href="user.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    

<div class="table">


<div class="table-header">

<p><b>Signed Up Users</b></p>

     <div class="counts">



     </div>


 </div>



 <div class="table-section">
    <table>

        <thead>
             <tr>
               <th style="width:100px;" >ID</th>
               <th style="width:120px;" >First Name</th>
               <th style="width:120px;">Last Name</th>
               <th style="width:180px;">Email</th>
               <th style="width:120px;">GCE Level</th>
               <th style="width:120px;">Username</th>
            </tr>
        </thead>

        <tbody>



 
 <?php
           $dbhost = "localhost";
           $dbuser = "root";
           $dbpass= "";
           $dbname = "alphalearner_db";

           $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

         $sql = "SELECT * FROM users";
         $result = $con->query($sql);

         while($row = $result->fetch_assoc()) {



               

            echo

             "<tr>
               <td>$row[id]</td>
               <td>$row[first_name]</td>
               <td>$row[last_name]</td>
               <td>$row[email]</td>
               <td>$row[gce_level]</td>
               <td>$row[username]</td>
               
             </tr>";
               
         }



  ?>

 </tbody>

</table>
 
</div>

</div>





</body>
</html>