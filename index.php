<?php
include "logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="style.css">
<!-- google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Redressed&display=swap" rel="stylesheet">
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/1d96eeb854.js" crossorigin="anonymous"></script>
<title>COVID Tracker</title>
</head>
<body>
<div class="p-5 my-3 text-center container-fluid bg-light">
<h1>Covid-19 Tracker</h1>
</div>
<div class="container my-5">
<div class="row text-center">
<div class="col-md-4 text-warning">
<h5>Confirmed</h5>
<?php echo $total_confirmed; ?>
</div>
<div class="col-md-4 text-success">
<h5>Recovered</h5>
<?php echo $total_recovered; ?>
</div>
<div class="col-md-4 text-danger">
<h5>Deceased</h5>
<?php echo $total_dead;?>
</div>
</div>
</div>
<div class="container bg-light p-3 my-3 text-center">
    <h5>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</h5>
    <p class="text-muted">Stay indoors</p>
</div>
<div class="container-fluid">
<table class="table">
    <thead class="thead-dark"n>
<tr>
    <th scope="col">Countries</th>
    <th scope="col">Confirmed cases</th>
    <th scope="col">Recovered cases</th>
    <th scope="col" >Deaths</th>
</tr>
    </thead>
<tbody>
    <?php
    foreach($data as $key=>$value){
    $increase=$value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];
?>
<tr>
    <th><?php echo $key;?></th>
    <td>
    <?php echo $value[$days_count]['confirmed'];?>
    <?php if ($increase!=0){?>
    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php $increase;?></small>
   <?php }?>    
    </td>
    <td>
    <?php echo $value[$days_count]['recovered'];?>
    </td>
    <td>
    <?php echo $value[$days_count]['deaths'];?>
    </td>
</tr>
   <?php }?>
</tbody>
</table>
</div>
<footer class="footer mt-auto py-3">
<div class="container text-center">
    <span class="text-muted">2020 was a year</span>
</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>