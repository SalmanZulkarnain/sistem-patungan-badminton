<?php
require 'functions.php';
include 'header.php';
// Add this block at the beginning of the file
if (isset($_GET['id'])) {
    hapus_pertandingan();
}
?>

<body>
    <div class="container">
        <div class="a-container">
            <a href="tambah_pertandingan.php">Tambah Pertandingan</a>
            <a href="index.php">Kembali</a>
        </div>
        <table border=1 cellpadding=10 cellspacing=0>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tujuan Patungan</th>
                    <th>Tempat Bermain</th>
                    <th>Tanggal Bermain</th>
                    <th>Total biaya</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count(get_list_pertandingan()) > 0) : ?>
                    <?php $no = 1;
                    foreach (get_list_pertandingan() as $pertandingan) : ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $pertandingan['tujuan_patungan']; ?></td>
                            <td><?php echo $pertandingan['tempat_bermain']; ?></td>
                            <td><?php echo $pertandingan['tanggal_bermain']; ?></td>
                            <td>Rp<?php echo number_format($pertandingan['total_biaya']); ?></td>
                            <td>
                                <a href="pertandingan_peserta.php?id=<?php echo $pertandingan['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
<?php include 'footer.php'; ?>