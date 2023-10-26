<?php

$hotels = [

  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CDN bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"  crossorigin="anonymous"></script>

  <title>php-hotel</title>
</head>
<body>

  <div class="container my-5">
    <div class="row">
      <div class="col">
        <h1>Tabella Hotel:</h1>
      <table class="table">
        <thead>
          <tr>
            
            <?php foreach($hotels[0] as $key => $hotel): ?>
            <th scope="col"><?php echo $key ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>

        <tbody>
          <?php foreach($hotels as $hotel): ?>
          <tr>
            <td><?php echo $hotel['name']?></td>
            <td><?php echo $hotel['description']?></td>
            <td><?php echo (($hotel['parking'] == 'true')? 'Si' : 'No') ?></td>
            <td><?php echo $hotel['vote']?></td>
            <td><?php echo $hotel['distance_to_center']?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        
        
      </table>
      </div>
    </div>
  </div>
  
</body>
</html>