<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/download.css">
  <title>ADVANCED LEVEL PAST PAPERS</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
         
    <h3 class="heading">ADVANCED LEVEL PASTPAPERS</h3>

<table class="space">
<thead>
    <th>Year</th>
    <th>Syllabus</th>
    <th>Download</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr >
      <td><?php echo $file['year']; ?></td>
      <td><?php echo $file['syllabus']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>