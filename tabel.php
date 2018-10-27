<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Diri</title>
</head>
<body>
    <div align="center">
        <h1>TRAINING LABSI</h1>
    </div>
    <div align="center">
        <p><a href="tambahdata.php">Tambah Data</a></p>
        <table cellspasing=5 border=5>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th colspan=2>Proses</th>
            </tr>
            <?php
                include 'koneksi.php';
                $biodata = $koneksi->query("SELECT*FROM biodata");
                while ($data=$biodata->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $data['ID'] ?></td>
                <td><?php echo $data['NAMA'] ?></td>
                <td><?php echo $data['UMUR'] ?></td>
                <td><a href="ubahdata.php?id=<?php echo $data['ID'] ?>">Ubah</a></td>
                <td><a href="deletedata.php?id=<?php echo $data['ID'] ?>">Hapus</a></td>
                <?php } ?>
            </tr>
        </table>
    </div>
</body>
</html>