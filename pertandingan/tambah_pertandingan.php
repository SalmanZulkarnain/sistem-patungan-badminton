<?php include 'header.php'; ?>
<?php $pesan = tambah_pertandingan(); ?>

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
                    <label for="tujuan_patungan">Tujuan Patungan:</label>
                    <input type="text" id="tujuan_patungan" name="tujuan_patungan">
                </div>
                <div class="input-group">
                    <label for="tempat_bermain">Tempat bermain:</label>
                    <input type="text" id="tempat_bermain" name="tempat_bermain">
                </div>
                <div class="input-group">
                    <label for="tanggal_bermain">Tanggal bermain:</label>
                    <input type="date" id="tanggal_bermain" name="tanggal_bermain">
                </div>
                <div class="input-group">
                    <label for="total_biaya">Jumlah Total:</label>
                    <input type="number" id="total_biaya" name="total_biaya">
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
<?php include 'footer.php'; ?>