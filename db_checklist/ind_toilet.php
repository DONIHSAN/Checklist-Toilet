<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE keterangan LIKE '%".$q."%' or lokasi LIKE '%".$q."%'";
}
$title = 'Toilet';
$sql = 'SELECT * FROM toilet ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
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
<body style="margin-top: 30px; background-image: url('img/bg3.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="container" class="container" style="background-color: #172627; width: 45%; padding: 20px; border-radius: 20px;">
        <br><br>
        <div class="head">
        <h1 style="color: #E3E6F3;">List Data Toilet.</h1><br>
        <form>
            <div class="form-group" action="" method="get" >
                <label for="q" style="color: #FFFFFF; font-size: 17px;">Cari Data Toilet : </label>
                <input type="text" placeholder="  search"  id="q" name="q" class="input-q"  value="<?php echo $q ?>">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Cari</button>
            </div>
        </form>
        <br>
        </div>
        <div class="main">
            <table class="table table-striped table-hover">
            <tr>
                <th style="color: #00BF63; text-align: center;">Kode Toilet</th>
                <th style="color: #00BF63; text-align: center;">Lokasi Toilet</th>
                <th style="color: #00BF63; text-align: center;">Keterangan</th>
                <th style="color: #00BF63; text-align: center;">Action</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['id'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['lokasi'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['keterangan'];?></td>
                <td style="color: #E3E6F3; text-align: center;">
                    <a class="btn btn-danger" onclick="konfirmasiHapus(<?= $row['id'];?>)"><i class="fas fa-trash"></i> Hapus Data</a>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #FFFFFF;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br>
        <div>
        <a class="btn btn-light" href="tam_toilet.php" style="border: radius 15px;"><i class="far fa-folder-open"></i> Tambah Data Toilet</a>
        </div> <br>
        <div>
        <a class="btn btn-light" href="home.php" style="border: radius 15px;"><i class="far fa-backspace"></i> Kembali</a>
        </div>
    </div>
</body>
<script>
    function konfirmasiHapus(idPengguna) {
        var hasil = confirm("Anda Yakin Ingin Menghapus Data Ini ?");
        if (hasil) {
            window.location.href = "hap_toilet.php?id=" + idPengguna;
        }
    }
</script>
</html>