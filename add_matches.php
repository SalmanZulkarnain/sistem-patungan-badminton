<?php
require 'config.php';
require 'functions.php';

addMatches();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pertandingan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Pertandingan</h2>
        <div class="form-container">
        <form action="add_matches.php" method="POST">
            <div class="input-group">
                <label for="date">Tanggal:</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="input-group">
                <label for="time">Waktu:</label>
                <input type="time" id="time" name="time">
            </div>
            <div class="input-group">
                <label for="location">Lokasi:</label>
                <input type="text" id="location" name="location">
            </div>
            <div class="input-group">
                <label for="total_amount">Jumlah Total:</label>
                <input type="number" id="total_amount" name="total_amount">
            </div>
            <div class="input-group">
                <input type="submit" value="Tambah Pertandingan">
            </div>
        </form>
        </div>
        <div class="a-container">
            <a href="index.php">Kembali</a>
        </div>
    </div>
</body>

</html>