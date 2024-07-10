<?php
$koneksi = mysqli_connect("localhost", "root", "", "temuwuhnew");
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$query = "INSERT INTO komentar (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
mysqli_query($koneksi, $query);
header("Location: kontak.php");
exit();
mysqli_close($koneksi);
?>
