<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $tanggal = $_POST['tanggal'];
    $toilet_id = $_POST['toilet_id'];
    $kloset = $_POST['kloset'];
    $wastafel = $_POST['wastafel'];
    $lantai = $_POST['lantai'];
    $dinding = $_POST['dinding'];
    $kaca = $_POST['kaca'];
    $bau = $_POST['bau'];
    $sabun = $_POST['sabun'];
    $users_id = $_POST['users_id'];

    $sql = 'INSERT INTO checklist (tanggal, toilet_id, kloset, wastafel, lantai, dinding, kaca, bau, sabun, users_id) ';
    $sql .= "VALUE ('{$tanggal}', '{$toilet_id}', '{$kloset}', '{$wastafel}', '{$lantai}', '{$dinding}', '{$kaca}', '{$bau}', '{$sabun}', '{$users_id}')";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>

        .input {
            margin-bottom: 10px;
        }

        .input label {
            margin-bottom: 10px;
        }

    </style>

</head>
<body style="margin-top: 30px; background-image: url('img/bg5.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="container" style="background-color: #144272; width: 45%; padding: 30px; border-radius: 20px;">
        <h1 style="color: #FFFFFF; text-align: center;">Tambah Data</h1><br>
        <div class="main">
            <form method="post" action="tambah.php" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-text">Tanggal</span>
                    <input class="form-control" type="date" name="tanggal" data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy">
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Kode Toilet</span>
                    <input class="form-control" type="text" name="toilet_id">
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Kode Petugas</span>
                    <input class="form-control" type="text" name="users_id">
                </div><br>  
                <div class="input">
                    <label style="color: #FFFFFF;">Kloset</label>
                    <select class="form-select" aria-label="Default select example" name="kloset">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Wastafel</label>
                    <select class="form-select" aria-label="Default select example" name="wastafel">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Lantai</label>
                    <select class="form-select" aria-label="Default select example" name="lantai">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Dinding</label>
                    <select class="form-select" aria-label="Default select example" name="dinding">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Kaca</label>
                    <select class="form-select" aria-label="Default select example" name="kaca">
                        <option value=""></option>
                        <option value="Bersih">Bersih</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Bau</label>
                    <select class="form-select" aria-label="Default select example" name="bau">
                        <option value=""></option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Sabun</label>
                    <select class="form-select" aria-label="Default select example" name="sabun">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Habis">Habis</option>
                        <option value="Hilang">Hilang</option>
                    </select>
                </div><br>               
                <input class= "btn btn-primary" color: #FFFFFF;" type="submit" name="submit" value="Simpan">
            </form>
        </div>
    </div>
</body>
</html>