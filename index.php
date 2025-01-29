<?php include 'header.php'; ?>
<body>
<div class="navbar">
        <ul>
            <li><a href="peserta.php">Peserta</a></li>
            <li><a href="pertandingan.php">Pertandingan</a></li>
        </ul>
    </div>
    <div class="container">
    <table border=1 cellpadding=10 cellspacing=0>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pertandingan</th>
                <th>ID Peserta</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count(get_list_all()) > 0) : ?>
            <?php $no = 1; foreach(get_list_all() as $peserta) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $peserta['peserta_id']; ?></td>
                <td><?php echo $peserta['pertandingan_id']; ?></td>
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