<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Form per filtrare gli hotel con parcheggio -->
<form method="GET">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="true" id="<parking>" name="<parking>" <?php echo isset($_GET['parking']) ? 'checked' : ''; ?>>
    <label class="form-check-label" for="<parking>">Mostra solo hotel con parcheggio</label>
  </div>
  <button type="<parking>" class="<parking>">Filtra</button>
</form>

    <?php
$hotels = [
  [
    "name" => "Hotel Belvedere",
    "description" => "Hotel Belvedere Descrizione",
    "parking" => true,
    "vote"=> 4,
    "distance_to_center" => 10.4
  ],
  [
    "name" => "Hotel Futuro",
    "description" => "Hotel Futuro Descrizione",
    "parking" => true,
    "vote"=> 2,
    "distance_to_center" => 2
  ],
  [
    "name" => "Hotel Rivamare",
    "description" => "Hotel Rivamare Descrizione",
    "parking" => false,
    "vote"=> 1,
    "distance_to_center" => 1
  ],
  [
    "name" => "Hotel Bellavista",
    "description" => "Hotel Bellavista Descrizione",
    "parking" => false,
    "vote"=> 5,
    "distance_to_center" => 5.5
  ],
  [
    "name" => "Hotel Milano",
    "description" => "Hotel Milano Descrizione",
    "parking" => true,
    "vote"=> 2,
    "distance_to_center" => 50
  ]
];

// Filtra gli hotel in base alla presenza del parcheggio se richiesto dall'utente
if (isset($_GET['parking'])) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'];
    });
  }
?>

<table class="table">
<thead>
<tr>
<th scope="col">Nome</th>
<th scope="col">Descrizione</th>
<th scope="col">Parcheggio</th>
<th scope="col">Voto</th>
<th scope="col">Distanza dal centro (km)</th>
</tr>
</thead>
<tbody>

<?php foreach ($hotels as $hotel) { ?>
<tr>
<td><?php echo $hotel['name']; ?></td>
<td><?php echo $hotel['description']; ?></td>
<td><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td> 
<td><?php echo $hotel['vote']; ?></td> 
<td><?php echo $hotel['distance_to_center']; ?></td> 
</tr> 
<?php } ?>

</tbody> 
</table>
</body>
</html>


