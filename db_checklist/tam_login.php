<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $role = $_POST['role'];

    $sql = 'INSERT INTO users ( username, password, nama, email, status, role)';
    $sql .= "VALUE ('$username', '$password', '$nama', '$email', '$status', '$role')";
    $result = mysqli_query($conn, $sql);
    header('location: login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin-top: 70px; background-image: url('img/bg5.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="container" style= "background-color: #144272; width: 40%; padding: 30px; border-radius: 20px;">
        <h1 style="color: #FFFFFF; text-align: center;">Tambah Akun</h1><br>
        <div class="main">
            <form method="post" action="tam_login.php" enctype="multipart/form-data">    
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                    <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                    <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
                    <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="">
                    <h6 style="color: #FFFFFF;">Status</h6>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option value=""></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Non Aktif</option>
                    </select>
                </div><br>
                <div class="">
                    <h6 style="color: #FFFFFF;">Role</h6>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option value=""></option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div><br>
                <input type="submit" name="submit" value="Simpan" class= "btn btn-primary" style="color:FFFFFF;">
            </form>
        </div>
    </div>
</body>
</html>