<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $toilet_id = $_POST['toilet_id'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

    $sql = 'INSERT INTO toilet (id, lokasi, keterangan) ';
    $sql .= "VALUE ('{$toilet_id}', '{$lokasi}', '{$keterangan}')";
    $result = mysqli_query($conn, $sql);
    header('location: ind_toilet.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Checklist Toilet</title>
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
<body style="margin-top: 50px; background-image: url('img/bg5.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="container" style="background-color: #144272; width: 45%; padding: 30px; border-radius: 20px;">
        <h1 style="color: #FFFFFF; text-align: center;">Tambah Data Toilet</h1><br>
        <div class="main">
            <form method="post" action="tam_toilet.php" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-text">Kode Toilet</span>
                    <input class="form-control" type="text" name="toilet_id">
                </div><br>
                <div class="input">
                    <label style="color: #FFFFFF;">Lokasi</label>
                    <select class="form-select" aria-label="Default select example" name="lokasi">
                        <option value=""></option>
                        <option value="Office">Office</option>
                        <option value="Factory 1">Factory 1</option>
                        <option value="Factory 2">Factory 2</option>
                        <option value="Security">Security</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #FFFFFF;">Keterangan</label>
                    <select class="form-select" aria-label="Default select example" name="keterangan">
                        <option value=""></option>
                        <option value="Sudah">Sudah</option>
                        <option value="Belum">Belum</option>
                    </select>
                </div> <br>
                <input class= "btn btn-primary" color: #FFFFFF;" type="submit" name="submit" value="Simpan">
            </form>
        </div>
    </div>
</body>
</html>