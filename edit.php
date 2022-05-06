<?php


include('config.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan_bank WHERE id='$id' LIMIT 1 ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">

    <label for="">Nama</label> <br>
    <input type="text" name="nama" value="<?php echo $result[0]['nama']; ?>"> <br>
    <label for="">Umur</label><br>
    <input type="number" name="umur" value="<?php echo $result[0]['umur']; ?>"> <br>
    <label for="">Jabatan</label><br>
    <input type="text" name="jabatan" value="<?php echo $result[0]['jabatan']; ?>"> <br><br>
    <button type="submit">Update</button>
</form>
</html>