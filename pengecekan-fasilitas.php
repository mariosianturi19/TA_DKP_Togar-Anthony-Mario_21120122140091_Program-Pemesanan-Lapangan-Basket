<!DOCTYPE html>
<html>
<head>
    <title>Fasilitas Lapangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: beige;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1 {
            margin-top: 20px;
            color: blue;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .gambar-container {
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .gambar-container img {
            width: 500px;
            height: 500px;
            margin-bottom: 0.1in;
            object-fit: cover;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .gambar-container img {
                width: 80%;
                height: auto;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <?php
    $gambar1 = "gambar1.jpg";
    $gambar2 = "gambar2.jpg";
    $gambar3 = "gambar3.jpg";
    $gambar4 = "gambar4.jpg";
    $gambar5 = "gambar5.jpg";
    $gambar6 = "gambar6.jpg";
    ?>

    <h1>Fasilitas Lapangan</h1>

    <div class="gambar-container">
        <img src="<?php echo $gambar1; ?>" alt="Gambar 1">
        <img src="<?php echo $gambar2; ?>" alt="Gambar 2">
        <img src="<?php echo $gambar3; ?>" alt="Gambar 3">
        <img src="<?php echo $gambar4; ?>" alt="Gambar 4">
        <img src="<?php echo $gambar5; ?>" alt="Gambar 5">
        <img src="<?php echo $gambar6; ?>" alt="Gambar 6">
    </div>
</body>
</html>
