<?php
include 'api.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">name</th>
      <th scope="col">birth year</th>
      <th scope="col">death year</th>
      <th scope="col">description</th>
      <th scope="col">ascension year</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($profile as $row): ?>
    <tr>

      <th scope="row"></th>
      <td><?= $row['name'] ?></td>
      <td><?= $row['birth_year'] ?></td>
      <td><?= $row['death_year'] ?></td>
      <td><?= $row['description'] ?></td>
      <td><?= $row['ascension_year'] ?></td>
    </tr>

    <?php endforeach; ?>
    
  </tbody>
</table>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>