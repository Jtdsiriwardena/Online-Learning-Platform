<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `alvideos` WHERE `id`='$id'";

     $result = $con->query($sql);

     if ($result == TRUE) {

        echo '<script>';
        echo  "alert('Video deleted successfully')";
        echo '</script>';

        header("Location: index.php");

    }

    else {
        echo '<script>';
        echo  "alert('Couldn't deleted !')";
        echo '</script>';

    }


} 

?>