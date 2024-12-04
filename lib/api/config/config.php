 <?php
$koneksi = mysqli_connect('localhost', 'root', '', 'api_uas');

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
