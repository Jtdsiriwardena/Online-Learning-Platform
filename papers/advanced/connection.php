<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'alphalearner_db');

$sql = "SELECT * FROM alpapers";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);



if (isset($_POST['save'])) { 

    
    $filename = $_FILES['myfile']['name'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $syllabus = $_POST['syllabus'];


    // destination of the file
    $destination = 'uploads/' . $filename;


   
    $file = $_FILES['myfile']['tmp_name'];


        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO alpapers (name,title,year, syllabus) VALUES ('$filename','$title','$year', '$syllabus')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        }
    }






// file downloading
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    
    $sql = "SELECT * FROM alpapers WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

    }

}