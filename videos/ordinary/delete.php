<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `olvideos` WHERE `id`='$id'";

     $result = $con->query($sql);

     if ($result == TRUE) {

        echo '<script>';
        echo  "alert('Video deleted succeddfully')";
        echo '</script>';

        header("Location: index.php");

    }

    {

        echo '<script>';
        echo  "alert('Video couldn't deleted !')";
        echo '</script>';

        header("Location: index.php");

    }


} 

?>