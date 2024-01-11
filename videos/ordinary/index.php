<!doctype html>
<html>
    <head>
        <?php

        include "connection.php";
     
        if(isset($_POST['but_upload'])){
            $maxsize = 52428800;  // maximum file size is 500MB

            $title = $_POST['title'];  
            $description = $_POST['description']; 

            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'] / 1000000; 
            $target_dir = 'videos/';
            $target_file = $target_dir . $_FILES["file"]["name"];
                
                
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {

                  echo '<script>';
                  echo  "alert('File must be less than 500 MB to upload')";
                  echo '</script>';

                }else{

                    
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                      
                        $query = "INSERT INTO olvideos (name,title,description,size,location) VALUES('".$name."','".$title."','".$description."','".$size."','".$target_file."')";

                        mysqli_query($con,$query);
                        echo '<script>';
                        echo  "alert('Your file uploaded successfully')";
                      echo '</script>';
      
                    }
                }
        
        }
        ?>

         <link rel="stylesheet" href="css/index.css">


    </head>
    <body>


       <form method="post" action="" enctype='multipart/form-data'>

       <div class="table">

       <div class="table-header">

       <p><b>ORDINARY LEVEL VIDEOS</b></p>

        <div>


        <input class= "input" type='file' name='file' />
        &nbsp &nbsp
        <input class= "input" type="text" placeholder="Title" name="title">
        &nbsp &nbsp
        <input class= "input" type="text" placeholder="Description" name="description">

        &nbsp &nbsp

        <input class="upload" type='submit' value='Upload' name='but_upload'>

        </div>

        </div>

       

        <div class="table-section">
           <table>

               <thead>
                    <tr>
                      <th style="width: 100px";>ID</th>
                      <th>Name</th>
                      <th style="width: 130px">Title</th>
                      <th>Description</th>
                      <th style="width: 100px">Size</th>
                      <th>Actions</th>
                   </tr>
               </thead>

               <tbody>



        
        <?php
                  $dbhost = "localhost";
                  $dbuser = "root";
                  $dbpass= "";
                  $dbname = "alphalearner_db";

                  $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

                $sql = "SELECT * FROM olvideos";
                $result = $con->query($sql);

                while($row = $result->fetch_assoc()) {



                      
 
                   echo

                    "<tr>
                      <td>$row[id]</td>
                      <td>$row[name]</td>
                      <td>$row[title]</td>
                      <td>$row[description]</td>
                      <td>$row[size] MB </td>
                      
                      
                      <td> 
                        <a href='http://localhost/AlphaLearner/videos/ordinary/delete.php ?id=$row[id]'>Delete</a>

                        &nbsp &nbsp

                        <a href='http://localhost/AlphaLearner/videos/ordinary/update.php ?id=$row[id]'>Update</a>
                      </td>

                    </tr>";
                      
                }

         ?>

        </tbody>

    </table>
        
    </div>

     </div>

  </form>

</body>


</html>