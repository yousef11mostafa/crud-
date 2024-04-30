<?php

require('connect.php');
$sql = 'select * from students';
$res = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>second page</title>
</head>

<body>
  <!-- start the body  -->

  <div class="container my-5">
    <a href="insert.php" class="btn btn-primary">add</a>

    <table class="table mt-4  ">
      <tr>
        <th>first name</th>
        <th>second name</th>
        <th>email</th>
        <th>phone</th>
        <th >options</th>
      </tr>


      <?php
      while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $mail = $row['email'];
        $phone = $row['phone'];
      ?>
        <tr>
          <td><?= $fname ?></td>
          <td><?= $lname ?></td>
          <td><?= $mail ?></td>
          <td><?= $phone ?></td>
          <td><a href="update.php?updateid=<?= $id ?>" class="btn btn-primary">update</a></td>
          <td><a href="delete.php?deleteid=<?= $id ?>" class="btn btn-danger">delete</a></td>
        </tr>
      <?php
      }
      ?>

    </table>

  </div>

  <!-- bootstrap link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>