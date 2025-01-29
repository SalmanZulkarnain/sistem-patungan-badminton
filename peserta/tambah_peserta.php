<?php include '../header.php'; ?>
<body>
    <div class="container">
        <h2>Tambah Peserta</h2>
        <div class="form-container">
            <form action="tambah_peserta_action.php" method="POST">
                <div class="input-group">
                    <label for="nama_peserta">Nama peserta:</label>
                    <input type="text" id="nama_peserta" name="nama_peserta">
                </div>  
                
                <div class="input-group">
                    <label for="nomor_hp">No HP:</label>
                    <input type="number" id="nomor_hp" name="nomor_hp">
                </div>

                <div class="input-group">
                    <input type="submit" value="Tambah">
                </div>
            </form>
        </div>
        <div class="a-container">
            <a href="../index.php">Kembali</a>
        </div>
    </div>
</body>
<?php include '../footer.php'; ?>