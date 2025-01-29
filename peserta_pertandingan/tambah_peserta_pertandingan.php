<?php include 'header.php'; ?>
<?php 
tambah_peserta_pertandingan();
$matches = getPertandingan();
$participants = getPeserta();
?>

<body>
    <div class="container">
        <h2>Tambah Pertandingan</h2>
        <div class="form-container">
            <?php if (!empty($pesan)) {
                echo $pesan;
            }
            ?>
            <form method="POST">
                <div class="input-group">
                    <label for="peserta_id">ID Peserta:</label>
                    <select name="peserta_id" id="peserta_id">
                        <option value="">Pilih Nama Peserta</option>
                        <?php foreach ($participants as $participant): ?>
                            <option value="<?= $participant['id']; ?>"><?= $participant['nama_peserta']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="pertandingan_id">ID Pertandingan:</label>
                    <select name="pertandingan_id" id="pertandingan_id">
                        <option value="">Pilih ID Pertandingan</option>
                        <?php foreach ($matches as $match): ?>
                            <option value="<?= $match['id']; ?>"><?= $match['id']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="jumlah_bayar">Jumlah Bayar:</label>
                    <input type="number" id="jumlah_bayar" name="jumlah_bayar">
                </div>
                <div class="input-group">
                    <input type="submit" value="Kirim">
                </div>
            </form>
        </div>
        <div class="a-container">
            <a href="index.php">Kembali</a>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>