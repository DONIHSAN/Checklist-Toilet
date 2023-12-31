<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM toilet WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);
header('location: ind_toilet.php');
?>
