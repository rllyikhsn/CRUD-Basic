<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    $tambah=$koneksi->query("INSERT INTO biodata VALUES ('','$nama','$umur')");

    echo '<script type="text/javascript">';
	echo 'alert("Proses Berhasil Dilakukan !")';
	echo '</script>';
    echo "<script>location='tabel.php';</script>";
?>
