<?php 

require_once '../functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(update_peserta() == TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        $pesan = 'Gagal mengupdate data';
        header('Location: ../index.php?pesan='.$pesan.'');
        exit();
    }
}