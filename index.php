<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Lapangan Basket</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="react.js"></script> 
</head>
<body>
    <h1>Pemesanan Lapangan Basket</h1>
    <div id="root"></div>

    <?php
    require_once 'Lapangan.php';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $jamMulai = $_POST['jam_mulai'];
        $jamSelesai = $_POST['jam_selesai'];

        $lapangan = new Lapangan('Basket', 350000);

        if ($lapangan->cekWaktu($tanggal, $jamMulai, $jamSelesai)) {
            header("Location: pemesanan-gagal.php");
            exit();
        } else {
            $lapangan->pesanLapangan($nama, $tanggal, $jamMulai, $jamSelesai);
            $durasi = $lapangan->hitungDurasi($jamMulai, $jamSelesai);
            $harga = $lapangan->hitungHarga($durasi);
            header("Location: pemesanan-berhasil.php?nama=$nama&tanggal=$tanggal&jam_mulai=$jamMulai&jam_selesai=$jamSelesai&durasi=$durasi&harga=$harga");
            exit();
        }
    }
    ?>

    <form method="POST" action="index.php" onsubmit="return validateForm()">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br>

        <label for="jam_mulai">Jam Mulai:</label>
        <input type="time" name="jam_mulai" required><br>

        <label for="jam_selesai">Jam Selesai:</label>
        <input type="time" name="jam_selesai" required><br>

        <input type="submit" name="submit" value="Pesan">
    </form>

    <a href="pengecekan-fasilitas.php" class="link-fasilitas" target="_blank">Cek Fasilitas Lapangan</a>
</body>
</html>
