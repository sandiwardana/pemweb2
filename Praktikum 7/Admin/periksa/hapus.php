<?php
require_once('../koneksi.php');
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM periksa WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $pasien = $stmt->fetch();
    if ($pasien) {
        $sql = "DELETE FROM periksa WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$_GET['id']]);
        echo "<script>alert('Data Terhapus seperti masalalu bos')</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    } else {
        echo "<script>alert('Data tidak ditemukan')</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
}