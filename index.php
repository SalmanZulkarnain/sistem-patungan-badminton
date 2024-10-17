<?php 

require 'config.php';
require 'functions.php';

$matches = viewMatches();
deleteMatch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lihat Pertandingan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="a-container">
        <a href="add_matches.php">Tambah Pertandingan</a>
        </div>
    <table border=1 cellpadding=10 cellspacing=0>
        <thead>
            <tr>
                <th>No</th>
                <th>Match ID</th>
                <th>Tanggal</th>
                <th>Waktu Main</th>
                <th>Lokasi</th>
                <th>Total Patungan</th>
                <th colspan=2>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($matches as $key => $match) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $match['match_id']; ?></td>
                <td><?php echo $match['date']; ?></td>
                <td><?php echo $match['time_awal']; ?> - <?php echo $match['time_akhir']; ?></td>
                <td><?php echo $match['location']; ?></td>
                <td>Rp<?php echo number_format($match['total_amount']); ?></td>
                <td><a href="detail.php">Detail</a></td>
                <td><a href="index.php?delete=<?php echo $match['match_id']; ?>" onclick="confirm('Apakah yakin pengen hapus?')">Hapus</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>  
</body>
</html>