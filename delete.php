<?php
include('config.php');
$id = $_GET['id'];


$delete = mysqli_query($connect, "DELETE FROM karyawan_bank WHERE id='$id' ");

if($delete)
header('location: list.php');
else
echo 'delete data gagal';