<?php

include('config.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * FROM karyawan_bank WHERE nama='$keyword'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);



?>

<html>
    <body>
        <a href="add.php">Insert Data</a> <br> <br>

        <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword .." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : "" ?>">
            <button type="submit">Search</button>
        </form>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jabatan</th>
                <th>Pilihan</th>

            </tr>
            
            <?php foreach ($result as $result): ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['nama']; ?></td>
                    <td><?php echo $result['umur']; ?></td>
                    <td><?php echo $result['jabatan']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>
    </body>
</html>