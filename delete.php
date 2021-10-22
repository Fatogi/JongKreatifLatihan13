<?php
require_once("koneksi.php");
if ( isset($_GET["kode_barang"]) ) $nis = $_GET["kode_barang"];
else {
    echo "Barang TIdak Ditemukan! <a href'index.php'>Kembali</a>";
    exit();
}
$query = "DELETE FROM barang WHERE kode_barang = '{$nis}'";
$result = mysqli_query($mysqli, $query);

if (! $result) {
    exit("Gagal Menghapus Data!");
}

header("Location: index.php");


?>
