<?php
    $parking = $_GET['parking'];
    $stars = $_GET['stars'];
    $agora = $_GET['agora'];
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  <h1>Snack 3</h1>
    <?php
    foreach($hotels as $hotel){
      echo "<div>";
      echo "<h2>";
      if( ($hotel['vote'] >= $stars) && ($hotel['distance_to_center'] <= intval($agora))){
        echo $hotel['name'];
      echo "</h2>";
        echo "<ul>";
        echo "<li>";
          echo "<span>Parking: ";
            echo $parking;
          echo "</span>";
        echo "</li>";
        echo "</ul>";  
      }
      echo "</p>";
      echo "</div>";
    }
    ?>
</body>
</html>