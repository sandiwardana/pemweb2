<?php 
require 'koneksi.php';
$fullname= $_POST['fullname'];
$username= $_POST['nama'];
$password=$_POST['password'];

$query_sql = "INSERT INTO users (fullname,nama,password)  VALUES ('$fullname','$username','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("location : index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
?>