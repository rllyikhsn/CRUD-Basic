<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Diri | Ubah Data</title>
</head>
<body>
    <div align="center">
        <h1>TRAINING LABSI</h1>
    </div>
    <div align="center">
        <h4>Ubah Data</h4>
        <?php
            include 'koneksi.php';
            $data=$koneksi->query("SELECT * FROM biodata WHERE ID = '$_GET[id]'");
            $ubah=$data->fetch_assoc();
        ?>
        <form action="updatedata.php" method="post" id="oke">
            Nama : <input type="text" name="nama" id="nama" value="<?php echo $ubah['NAMA'] ?>"><br>
            Umur : <input type="text" name="umur" id="umur" value="<?php echo $ubah['UMUR'] ?>"><br>
            <input type="hidden" name="id" value="<?php echo $ubah['ID'] ?>">
            <input type="submit" value="Ubah Data" name="submit"/>
        </form>
    </div>
</body>
</html>
