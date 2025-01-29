<?php include '../header.php'; ?>
<body>
    <div class="container">
        <h2>Edit Peserta</h2>
        <div class="form-container">
            <form action="edit_peserta_action.php" method="POST">
                <input type="hidden" name="id" value="<?php echo get_edit_peserta()['id']; ?>">
                <div class="input-group">
                    <label for="nama_peserta">Nama peserta:</label>
                    <input type="text" id="nama_peserta" name="nama_peserta" value="<?php echo get_edit_peserta()['nama_peserta']; ?>">
                </div>  
                
                <div class="input-group">
                    <label for="nomor_hp">No HP:</label>
                    <input type="number" id="nomor_hp" name="nomor_hp" value="<?php echo get_edit_peserta()['nomor_hp']; ?>">
                </div>

                <div class="input-group">
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
        <div class="a-container">
            <a href="../index.php">Kembali</a>
        </div>
    </div>
</body>
<?php include '../footer.php'; ?>