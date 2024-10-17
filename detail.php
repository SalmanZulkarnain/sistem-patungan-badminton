<?php

require 'config.php';
require 'functions.php';

$participants = viewParticipants();
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
            <a href="add_participants.php">Tambah Peserta</a>
            <a href="index.php">Kembali</a>

        </div>
        <table border=1 cellpadding=10 cellspacing=0>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Participant ID</th>
                    <th>Nama</th>
                    <th>Bayar</th>
                    <th>Tujuan</th>
                    <th>Match ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participants as $key => $participant) { ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $participant['participant_id']; ?></td>
                        <td><?php echo $participant['name']; ?></td>
                        <td>Rp<?php echo number_format($participant['amount_paid']); ?></td>
                        <td><?php echo $participant['purpose']; ?></td>
                        <td><?php echo $participant['match_id']; ?></td>
                        <td><a href="index.php?delete=<?php echo $match['match_id']; ?>"
                            onclick="confirm('Apakah yakin pengen hapus?')">Hapus</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>