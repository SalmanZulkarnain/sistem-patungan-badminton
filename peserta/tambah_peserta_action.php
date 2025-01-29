<?php 

require_once '../functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(tambah_peserta() == TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        header('Location: tambah_peserta.php');
        exit();
    }
}