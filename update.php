<?php
include('config.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jabatan = $_POST['jabatan'];

$update = mysqli_query($connect, "UPDATE karyawan_bank SET nama='$nama', umur='$umur', jabatan='$jabatan' WHERE id ='$id' ");

if($update)
header('location: list.php');
else
echo 'update data gagal';

?>