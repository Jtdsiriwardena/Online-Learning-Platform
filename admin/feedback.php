
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedbacks</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/message.css">
</head>
<body>
    
<div class="table">


<div class="table-header">

<h1 style="margin: 10px;">Feedbacks</h1>

</div>



           <table>

               <thead>
                    <tr>
                      <th style="width: 20px">ID</th>
                      <th style="width: 70px">First Name</th>
                      <th style="width: 70px">Last Name</th>
                      <th style="width: 100px">Email</th>
                      <th style="width: 70px">Message</th>
                      
                   </tr>
               </thead>

               <tbody>



        
        <?php
                  $dbhost = "localhost";
                  $dbuser = "root";
                  $dbpass= "";
                  $dbname = "alphalearner_db";

                  $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

                $sql = "SELECT * FROM feedbacks";
                $result = $con->query($sql);

                while($row = $result->fetch_assoc()) {



                      
 
                   echo

                    "<tr>
                      <td>$row[id]</td>
                      <td>$row[firstname]</td>
                      <td>$row[lastname]</td>
                      <td>$row[email]</td>
                      <td>$row[message]</td>

                    </tr>";
                      
                }

         ?>

        </tbody>

    </table>
        
    </div>

    </div>



    </body>
</html>