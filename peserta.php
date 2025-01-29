<?php include 'header.php'; ?>
<body>
    <div class="container">
        <div class="a-container">
        <a href="peserta/tambah_peserta.php">Tambah Peserta</a>
        <a href="index.php">Kembali</a>
        </div>
    <table border=1 cellpadding=10 cellspacing=0>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count(get_list_peserta()) > 0) : ?>
            <?php $no = 1; foreach(get_list_peserta() as $peserta) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $peserta['nama_peserta']; ?></td>
                <td><?php echo $peserta['nomor_hp']; ?></td>
                <td><a href="peserta/edit_peserta.php?id=<?php echo $peserta['id'];  ?>">Detail</a> | 
                    <a href="peserta/hapus_peserta.php?id=<?php echo $peserta['id']; ?>" onclick="confirm('Apakah yakin pengen hapus?')">Hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    </div>  
</body>
<?php include 'footer.php'; ?>