<?php
require_once('../koneksi.php');
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM unit_kerja WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $unit_kerja = $stmt->fetch();
    if ($unit_kerja) { // Mengubah $pasien menjadi $unit_kerja
        $sql = "DELETE FROM unit_kerja WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$_GET['id']]);
        echo "<script>alert('Data Terhapus seperti masa lalu bos')</script>"; // Mengubah pesan alert
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    } else {
        echo "<script>alert('Data tidak ditemukan')</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
} 
?>
