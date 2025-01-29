<?php

require_once '../functions.php';

if(hapus_peserta() == TRUE) 
{
    header('Location: ../index.php');
    exit();
} 
else
{
    $pesan = 'Data gagal dihapus';
    header('Location: ../index.php?pesan='.$pesan.'');
    exit();
}