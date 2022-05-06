<?php

include('config.php');

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jabatan = $_POST['jabatan'];

$insert = mysqli_query($connect, "INSERT INTO karyawan_bank SET nama='$nama', umur='$umur', jabatan='$jabatan'");

if($insert)
header('location: list.php');
else
echo 'input gagal';

?>

