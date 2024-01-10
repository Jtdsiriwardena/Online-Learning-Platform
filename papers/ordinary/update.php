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

  <link rel="stylesheet" href="css/update.css">

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>

    <?php
       $sql = "SELECT * FROM olpapers WHERE id='{$id}' ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows( $result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {   
        ?>


<div class="area">

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

       <h1>Update Details</h1>

      <div class="details">
      <label for="title">Title: </label>
      <input type="text" placeholder="Title" class="details-values" value="<?php echo $row['title'] ?>" name="title">
      </div>

      <div class="details">
      <label for="year">Year: </label>
      <input type="text" placeholder="Year" class="details-values" value="<?php echo $row['year'] ?>" name="year">
      </div>

      <div class="details">
      <label for="syllabus">Syllabus: </label>
      <input type="text" placeholder="syllabus" class="details-values" value="<?php echo $row['syllabus'] ?>" name="syllabus">
      </div>


      <input type="submit" value="UPDATE" name="submit" class="submit">

      

    </form>
</div>
    <?php
         }
      }
    ?>

</body>
</html>

<?php
 if(isset($_POST['submit'])){

  $title = $_POST['title'];
  $year = $_POST['year'];
  $syllabus = $_POST['syllabus'];

        $sql1 = "UPDATE olpapers SET title='$title',year='$year',syllabus='$syllabus' WHERE id='{$id}' ";
        $result1 = mysqli_query($conn, $sql1) ;
          ?>
          <script>
             alert('PDF updated sucessfully');
          </script>
 <?php
 header("Location: index.php");

 }

 if($conn->connect_error){

         echo '<script>';
           echo  "alert('PDF update unsuccessful ! Try Again')";
         echo  '</script>';
   }

  