<?php
$koneksi = mysqli_connect("localhost", "root", "", "temuwuhnew");
$query = "SELECT * FROM komentar ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='komentar'>";
        echo "<h3>" . $row['nama'] . "</h3>";
        echo "<p>" . $row['pesan'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Belum ada komentar.";
}
mysqli_close($koneksi);
?>
