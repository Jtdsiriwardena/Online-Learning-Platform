<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/indx.css">
    <title>ORDINARY LEVEL PASTPAPERS</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  </head>
  <body>

  <div class="main">

    <div class="area">

    <form action="index.php" method="post" enctype="multipart/form-data">

       <h1>Ordinary Level Pastpapers</h1>

      <div class="details">
      <label for="title">Title: </label>
      <input type="text" placeholder="Title" class="details-values"  name="title">
      </div>

      <div class="details">
      <label for="year">Year: </label>
      <input type="text" placeholder="Year" class="details-values" name="year">
      </div>

      <div class="details">
      <label for="syllabus">Syllabus: </label>
      <input type="text" placeholder="syllabus" class="details-values" name="syllabus">
      </div>

      <div class="details">
      <label for="syllabus">Pastpaper: </label>
      <input type="file" placeholder="Pastpaper" class="details-values" name="myfile">
      </div>


      <input type="submit" value="UPLOAD" name="save" class="submit">

      

    </form>
</div>



    <div class="table-section">
           <table>

               <thead>
                    <tr>
                      <th style="width:100px" >ID</th>
                      <th style="width:150px">Name</th>
                      <th style="width:150px">Title</th>
                      <th style="width:120px">Year</th>
                      <th style="width:150px">Syllabus</th>
                      <th style="width:250px">Actions</th>
                   </tr>
               </thead>

               <tbody>


    
    <?php
                  $host = "localhost";
                  $user = "root";
                  $password = "";
                  $dbname = "alphalearner_db";

                  $con = mysqli_connect($host,$user,$password,$dbname);


                $sql = "SELECT * FROM olpapers";
                $result = $con->query($sql);

                while($row = $result->fetch_assoc()) {
                      echo "
                      <tr>
                      <td>$row[id]</td>
                      <td>$row[name]</td>
                      <td>$row[title]</td>
                      <td>$row[year]</td>
                      <td>$row[syllabus]</td>
                     
                     
                      
                      
                      <td> 
                        <a href='http://localhost/AlphaLearner/papers/ordinary/delete.php ?id=$row[id]'>Delete</a>
                        <a href='http://localhost/AlphaLearner/papers/ordinary/update.php ?id=$row[id]'>Update</a>
                      </td>
                    </tr>
                      ";   
                }

         ?>

</tbody>

    </table>
        
    </div>

    </div>

     </div>





  </body>
</html>