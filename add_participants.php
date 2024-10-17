<?php 
require 'config.php';
require 'functions.php';

$matches = viewMatches();
addParticipants();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Peserta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Peserta</h2>
        <div class="form-container">
            <form action="add_participants.php" method="POST">
                <div class="input-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name">
        
                </div>  
                
                <div class="input-group">
                    <label for="amount_paid">Jumlah Dibayar:</label>
                    <input type="number" id="amount_paid" name="amount_paid">
                    
                </div>
                
                <div class="input-group">
                    <label for="purpose">Tujuan:</label>
                    <textarea id="purpose" name="purpose"></textarea>
                    
                    </div>
                
                <div class="input-group">
                    <label for="match_id">ID Pertandingan:</label>
                    <select name="match_id" id="match_id">
                        <?php foreach($matches as $match) { ?>
                        <option value="<?php echo $match['match_id']; ?>"><?php echo $match['match_id']; ?></option>
                        <?php } ?>
                    </select>
                    
                </div>
                <div class="input-group">
                    <input type="submit" value="Tambah Peserta">
                </div>
            </form>
        </div>
        <div class="a-container">
            <a href="detail.php">Kembali</a>
        </div>
    </div>
</body>
</html>