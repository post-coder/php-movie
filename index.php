<?php


require_once './db.php';

?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film</title>

  <link rel="stylesheet" href="css/style.css">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <?php include './Views/partials/header.php' ?>
  <div class="container">
    <main>
  
      <table>
        <thead>
          <th>Titolo</th>
          <th>Durata</th>
          <th>Produttore</th>
          <th>Generi</th>
        </thead>
        
        <tbody>
          <?php
          foreach($movies as $movie) {
            ?>
            <tr>
              <td><?= $movie->title ?></td>
              <td><?= $movie->getLengthHours() ?></td>
              <td><?= $movie->producer ?></td>
              <!-- <td>
                <?= $movie->getGenresNames() ?>
              </td> -->
              <td>
                <?php
                foreach($movie->genres as $genre) {
                  ?>
                  <span class="movie-genre" style="background-color: <?= $genre->color ?>"><?= $genre->name ?></span>
                  <?php
                }
                ?>
                
              </td>
            </tr>
            <?php
          }
          ?>
          
        </tbody>
      </table>
  
    </main>

  </div>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>