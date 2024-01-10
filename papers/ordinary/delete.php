<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `olpapers` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<script>';
           echo  "alert ('File deleleted sucessfully')";
        echo  '</script>';

        header("Location: index.php");
    }

    else{
        echo '<script>';
           echo  "alert('PDF deleted unsuccessful ! Try Again')";
         echo  '</script>';
    }

    
}

?>

