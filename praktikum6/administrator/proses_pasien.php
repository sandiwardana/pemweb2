<?php

require_once 'koneksi.php';

$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan = $_POST['kelurahan'];

$data = array($_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan);

$_proses = $_POST['proses'];
if ($_proses == "Simpan") {
    $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else if ($_proses == "Edit") {
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, gender=?, email=?, alamat=?, kelurahan_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else {
    if (isset($_GET['idx'])) {
        $idx = $_GET['idx'];
        $sql = "DELETE FROM pasien WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$idx]);
    }
}

// Redirect ke halaman data_pasien.php
header("Location: data_pasien.php");
exit();
