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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<header>
    <form action="index.php" method="GET">
        <fieldset>
           
             <div class="mb-3">
                <label for="parking" class="form-label">Parking</label>
                 <select id="parking" class="form-select"name='parking'>
                    <option value='1'>Si</option>
                 </select>
            </div>
              

                     <button type="submit" class="btn btn-primary">Hotel Filter</button>
        </fieldset>
    </form>
</header>

<main>

  <div class="container"> 

  <div class="row">

<table class=".table-striped-columns ">
    <thead>
        <tr>
             <th scope="col">Name</th>
             <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance from center</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($hotels as $hotel) { ?>


        <tr>
            <td><?php echo $hotel['name'];?></td>
            <td><?php echo $hotel['description'];?></td>
            <td><?php echo $hotel['parking']?'Yes':'No';?></td>
            <td><?php echo $hotel['vote'];?></td>
            <td><?php echo $hotel['distance_to_center'];?></td>

        </tr>

        <?php } ?>
    
    </tbody>
</table>
</div>

</div>

</main>

<!--
<ul>

    <?php foreach($hotels as $hotel) { ?>

        <li>
            Name: <?php echo $hotel['name'];?>
            -Description: <?php echo $hotel['description'];?>
            -Parking: <?php echo $hotel['parking']; ?>
            -Vote: <?php echo $hotel['vote'];?>
            -Distance to center: <?php echo $hotel['distance_to_center'];?>
           
        </li>
    <?php } ?>

</ul>
    -->

</body>
</html>