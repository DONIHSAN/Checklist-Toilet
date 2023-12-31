<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE tanggal LIKE '%".$q."%' or toilet_id LIKE '%".$q."%' or kloset LIKE '%".$q."%' or wastafel LIKE '%".$q."%' or lantai LIKE '%".$q."%' or dinding LIKE '%".$q."%' or sabun LIKE '%".$q."%' or bau LIKE '%".$q."%' or users_id LIKE '%".$q."%'" ;


}
$title = 'Checklist Toilet';
$sql = 'SELECT * FROM checklist ';
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
    <div class="container" style="background-color: #172627; width: 280%; padding: 10px; border-radius: 20px;">
        <br><br>
        <div class="head">
        <h1 style="color: #E3E6F3;">Sistem Checklist Toilet.</h1><br>
        <form>
            <div class="form-group" action="index.php" method="get">
                <label for="q" style="color: #FFFFFF; font-size: 17px;">Cari Data Toilet :</label>
                <input type="text" placeholder="  search"  id="q" name="q" class="input-q" value="<?php echo $q ?>">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Cari</button>
            </div>
        </form>
        <br><br>
        </div>
        <div class="main">
            <table class="table table-striped table-hover">
            <tr>
                <th style="color: #00BF63; text-align: center;">Tanggal</th>
                <th style="color: #00BF63; text-align: center;">Kode Toilet</th>
                <th style="color: #00BF63; text-align: center;">Kloset</th>
                <th style="color: #00BF63; text-align: center;">Wastafel</th>
                <th style="color: #00BF63; text-align: center;">Lantai</th>
                <th style="color: #00BF63; text-align: center;">Dinding</th>
                <th style="color: #00BF63; text-align: center;">Kaca</th>
                <th style="color: #00BF63; text-align: center;">Bau</th>
                <th style="color: #00BF63; text-align: center;">Sabun</th>
                <th style="color: #00BF63; text-align: center;">Petugas</th>
                <th style="color: #00BF63; text-align: center;">ID Barang</th>
                <th style="color: #00BF63; text-align: center;">Action</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['tanggal'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['toilet_id'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['kloset'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['wastafel'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['lantai'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['dinding'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['kaca'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['bau'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['sabun'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['users_id'];?></td>
                <td style="color: #E3E6F3; text-align: center;"><?= $row['id'];?></td>
                <td style="color: #E3E6F3; text-align: center;">
                    <a class="btn btn-warning" onclick="konfirmasiUbah(<?= $row['id'];?>)"><i class="fas fa-edit"></i> Ubah Data</a> 
                    <a class="btn btn-danger" onclick="konfirmasiHapus(<?= $row['id'];?>)"><i class="fas fa-trash"></i> Hapus Data</a>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #7eeef3;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br>
        <div>
        <a class="btn btn-light" href="tambah.php" style="border: radius 15px;"><i class="far fa-folder-open"></i> Tambah Data Checklist</a>
        </div> <br>
        <div>
        <a class="btn btn-light" href="home.php" style="border: radius 15px;"><i class="far fa-backspace"></i> Kembali</a>
        </div>
    </div>
</body>
<script>
    function konfirmasiUbah(idPengguna) {
        var hasil = confirm("Anda Yakin Ingin Mengubah Data Ini ?");
        if (hasil) {
            window.location.href = "ubah.php?id=" + idPengguna;
        }
    }
</script>

<script>
    function konfirmasiHapus(idPengguna) {
        var hasil = confirm("Anda Yakin Ingin Menghapus Data Ini ?");
        if (hasil) {
            window.location.href = "hapus.php?id=" + idPengguna;
        }
    }
</script>

</html>