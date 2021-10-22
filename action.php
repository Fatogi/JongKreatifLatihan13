<?php
require_once("koneksi.php");

$error = 0;

if ( isset($_POST['kode_barang']) ) $kode_barang = $_POST['kode_barang'];
else $error = 1; 

if ( isset($_POST['nama_barang']) ) $nama_barang = $_POST['nama_barang'];
else $error = 1; 

if ( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; 

if ( isset($_POST['qty']) ) $qty = $_POST['qty'];
else $error = 1; 

if ( isset($_POST['tanggal']) ) $tanggal = $_POST['tanggal'];
else $error = 1; 

// if ( isset($_POST['dateOfBirth']) ) $dateOfBirth = $_POST['dateOfBirth'];
// else $error = 1; 

// if ( isset($_POST['phone']) ) $phone = $_POST['phone'];
// else $error = 1; 

if ($error == 1) {
    echo "Terjadi kesalahan pada proses input data";
    exit();
}

$query = "
    INSERT INTO barang
    (kode_barang, nama_barang, harga, qty, tanggal)
    VALUES
    ('{$kode_barang}', '{$nama_barang}', '{$harga}', '{$qty}', '{$tanggal}');";
    
$insert = mysqli_Query($mysqli, $query);
if ( $insert == false ) {
    echo "Echo dalam menambahkan data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}
?>