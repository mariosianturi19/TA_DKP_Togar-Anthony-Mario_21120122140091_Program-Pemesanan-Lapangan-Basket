<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Berhasil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="react.js"></script>
</head>
<body>
    <h1>Pemesanan Berhasil</h1>

    <?php
    $nama = $_GET['nama'];
    $tanggal = $_GET['tanggal'];
    $jamMulai = $_GET['jam_mulai'];
    $jamSelesai = $_GET['jam_selesai'];
    $harga = $_GET['harga'];
    $durasi = $_GET['durasi'];

    echo "<p class='success'>Lapangan berhasil dipesan oleh $nama pada tanggal $tanggal dari jam $jamMulai sampai jam $jamSelesai.</p>";
    echo "<p class='harga'>Durasi: $durasi Jam</p>";
    echo "<p class='harga'>Total harga: Rp $harga</p>";
    ?>

    <a href="index.php" onclick="return konfirmasiKembali();" class="kembali">Kembali</a>
</body>
</html>
