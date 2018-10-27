<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    $ubah=$koneksi->query("UPDATE biodata SET NAMA='$nama', UMUR='$umur' WHERE ID='$id'");

    echo '<script type="text/javascript">';
	echo 'alert("Update Berhasil Dilakukan !")';
	echo '</script>';
    echo "<script>location='tabel.php';</script>";
?>