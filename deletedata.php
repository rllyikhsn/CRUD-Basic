<?php
    include 'koneksi.php';

    $hapus=$koneksi->query("DELETE FROM biodata WHERE ID='$_GET[id]'");

    echo '<script type="text/javascript">';
	echo 'alert("Data Berhasil Dihapus")';
	echo '</script>';
    echo "<script>location='tabel.php';</script>";
?>