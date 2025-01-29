<?php 

require_once '../functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(tambah_peserta_pertandingan() == TRUE) {
        header('Location: peserta_pertandingan.php');
        exit();
    } else {
        header('Location: tambah_peserta_pertandingan.php');
        exit();
    }
}