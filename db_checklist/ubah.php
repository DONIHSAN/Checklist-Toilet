<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
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

    $sql = "UPDATE checklist SET tanggal = '$tanggal', toilet_id = '$toilet_id', kloset = '$kloset', 
    wastafel = '$wastafel', lantai = '$lantai', dinding = '$dinding', kaca = '$kaca', 
    bau = '$bau', sabun = '$sabun', users_id = '$users_id' ";
    $sql .= "WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);

    header('location: index.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM checklist WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    if (!$result) die('Error: Data tidak tersedia');
    $data = mysqli_fetch_array($result); 

    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data</title>
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
<body style="margin-top: 30px; background-image: url('img/bg5.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;"">
    <div class="container" style="background-color: #144272; width: 50%; padding: 30px; border-radius: 20px;">
        <h1 style="color: #E3E6F3; text-align: center;">Ubah Data</h1><br>
        <div class="main">
            <form method="post" action="ubah.php" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-text">Tanggal</span>
                    <input class="form-control" type="date" name="tanggal" data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy" value = "<?php echo $data['tanggal'];?>"/>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Kode Toilet</span>
                    <input class="form-control" type="text" name="toilet_id" value="<?php echo $data['toilet_id'];?>"/>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Kode Petugas</span>
                    <input class="form-control" type="text" name="users_id" value="<?php echo $data['users_id'];?>"/>
                </div><br>
                <div class="input">
                    <label style="color: #E3E6F3;">Kloset</label>
                    <select class="form-select" aria-label="Default select example" name="kloset">
                        <option <?php echo is_select ('Bersih', $data['kloset']);?> value="Bersih">Bersih</option>
                        <option <?php echo is_select ('Kotor', $data['kloset']);?> value="Kotor">Kotor</option>
                        <option <?php echo is_select ('Rusak', $data['kloset']);?> value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #E3E6F3;">Wastafel</label>
                    <select class="form-select" aria-label="Default select example" name="wastafel">
                        <option <?php echo is_select ('Bersih', $data['wastafel']);?> value="Bersih">Bersih</option>
                        <option <?php echo is_select ('Kotor', $data['wastafel']);?> value="Kotor">Kotor</option>
                        <option <?php echo is_select ('Rusak', $data['wastafel']);?> value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #E3E6F3;">Lantai</label>
                    <select class="form-select" aria-label="Default select example" name="lantai">
                        <option <?php echo is_select ('Bersih', $data['lantai']);?> value="Bersih">Bersih</option>
                        <option <?php echo is_select ('Kotor', $data['lantai']);?> value="Kotor">Kotor</option>
                        <option <?php echo is_select ('Rusak', $data['lantai']);?> value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #E3E6F3;">Dinding</label>
                    <select class="form-select" aria-label="Default select example" name="dinding">
                        <option <?php echo is_select ('Bersih', $data['dinding']);?> value="Bersih">Bersih</option>
                        <option <?php echo is_select ('Kotor', $data['dinding']);?> value="Kotor">Kotor</option>
                        <option <?php echo is_select ('Rusak', $data['dinding']);?> value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #E3E6F3;">Kaca</label>
                    <select class="form-select" aria-label="Default select example" name="kaca">
                        <option <?php echo is_select ('Bersih', $data['kaca']);?> value="Bersih">Bersih</option>
                        <option <?php echo is_select ('Kotor', $data['kaca']);?> value="Kotor">Kotor</option>
                        <option <?php echo is_select ('Rusak', $data['kaca']);?> value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #E3E6F3;">Bau</label>
                    <select class="form-select" aria-label="Default select example" name="bau">
                        <option <?php echo is_select ('Ya', $data['bau']);?> value="Ya">Ya</option>
                        <option <?php echo is_select ('Tidak', $data['bau']);?> value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="input">
                    <label style="color: #E3E6F3;">Sabun</label>
                    <select class="form-select" aria-label="Default select example" name="sabun">
                        <option <?php echo is_select ('Ada', $data['sabun']);?> value="Ada">Ada</option>
                        <option <?php echo is_select ('Habis', $data['sabun']);?> value="Habis">Habis</option>
                        <option <?php echo is_select ('Hilang', $data['sabun']);?> value="Hilang">Hilang</option>
                    </select>
                </div><br>
                <div>
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                <input class="btn btn-primary" type="submit" name="submit" value="Simpan"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>