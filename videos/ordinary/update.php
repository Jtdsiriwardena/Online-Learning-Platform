<?php
 include "connection.php";
 if (isset($_GET['id'])){
 	$id = $_GET['id'];
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>Update File</title>

</head>
<body>
  
  <div class="">
    <div class="">
      <p>Update File</p>
    </div>

    <?php

$id = $_GET['id'];

       $sql = "SELECT * FROM olvideos WHERE id='{$id}' ";
      $result = mysqli_query($con, $sql) or die('query failed');

      if (mysqli_num_rows( $result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {   
        ?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <input type="text" placeholder="Title" value="<?php echo $row['title'] ?>" name="title">
      <input type="text" placeholder="Description" value="<?php echo $row['description'] ?>" name="desc">
      <input type="submit" value="Update Video" name="submit">
    </form>

    <?php
         }
      }
    ?>
  </div>

</body>
</html>

<?php
 if(isset($_POST['submit'])){

  $title = $_POST['title'];
  $description = $_POST['desc'];

        $sql1 = "UPDATE olvideos SET title='$title',description='$description' WHERE id='{$id}' ";
        $result1 = mysqli_query($con, $sql1) or die('query failed');

        echo '<script>';
        echo  "alert('Video Updated Successfully')";
        echo '</script>';

        header("Location: index.php");

          ?>
           
 <?php

   }

?>