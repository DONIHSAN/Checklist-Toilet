<?php
session_start();
$title ='Home';
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Checklist Toilet</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body style="margin-top: 70px; background:#d8e6ed; background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <h2 style="color: #000000; text-align: center;">Selamat Datang di Aplikasi  <br>Sistem Checklist Toilet.</h2>
    <div class = "container" style= "width: 40%; padding: 30px;">
    <ul class="list-group">
        <li class="list-group-item" style="background-color: #00BF63; color:#172627; font-size: 20px;">Menu</li>
        <li class="list-group-item" type="" style="font-size: 27px; color: #FFFFFF;">
            <a style="color: #172627; text-decoration: none;" href="index.php"><i class="fas fa-database"></i> &nbsp;Checklist Toilet</a>
        </li>
        <li class="list-group-item" style="font-size: 27px; color: #FFFFFF;">
            <a style="color: #172627; text-decoration: none;" href="ind_toilet.php"><i class="fas fa-door-closed"></i> &nbsp;Data Toilet</a>
        </li>
    </ul>
    </div>
    <div class="d-grid gap-2 container" style="width:25%;">
        <a class="btn" href="login.php" style="border: radius 15px; background-color: #172627; color:#FFFFFF; font-size:18px;">Logout</a>
    </div>
</body>
</html>