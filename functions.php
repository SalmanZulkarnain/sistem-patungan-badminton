<?php

require 'config.php';

function connect_db()
{
    $db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    return $db;
}

function tambah_peserta_pertandingan()
{
    $pertandingan_id = $_POST['pertandingan_id'];
    $peserta_id = $_POST['peserta_id'];
    $jumlah_bayar = $_POST['jumlah_bayar'];

    if (!empty($pertandingan_id) && !empty($peserta_id) && !empty($jumlah_bayar)) {
        $result = connect_db()->query("INSERT INTO peserta_pertandingan (pertandingan_id, peserta_id, jumlah_bayar) VALUES ('$pertandingan_id', '$peserta_id', '$jumlah_bayar')");
        return $result;
    }
}

function tambah_peserta()
{
    $nama_peserta = $_POST['nama_peserta'];
    $nomor_hp = $_POST['nomor_hp'];

    if (!empty($nama_peserta) && !empty($nomor_hp)) {
        $result = connect_db()->query("INSERT INTO peserta (nama_peserta, nomor_hp) VALUES ('$nama_peserta', '$nomor_hp')");
        return $result;
    }
}

function tambah_pertandingan()
{
    $pesan = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tujuan_patungan = $_POST['tujuan_patungan'];
        $tempat_bermain = $_POST['tempat_bermain'];
        $tanggal_bermain = $_POST['tanggal_bermain'];
        $total_biaya = $_POST['total_biaya'];

        if (!empty($tujuan_patungan) && !empty($tempat_bermain) && !empty($tanggal_bermain) && !empty($total_biaya)) {
            $result = connect_db()->query("INSERT INTO pertandingan (tujuan_patungan, tempat_bermain, tanggal_bermain, total_biaya) VALUES ('$tujuan_patungan', '$tempat_bermain', '$tanggal_bermain', '$total_biaya')");

            if ($result == TRUE) {
                header('Location: detail.php');
                exit();
            } else {
                $pesan = 'Gagal menambahkan data';
            }
        } else {
            $pesan = 'Harap isi semua field';
        }
    }
    return $pesan;
}

function get_list_pertandingan()
{
    $result = connect_db()->query("SELECT * FROM pertandingan");

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

function get_list_peserta()
{
    $sql = "SELECT * FROM peserta";
    $result = connect_db()->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

function get_edit_peserta()
{
    $id = $_GET['id'];
    $result = connect_db()->query("SELECT * FROM peserta WHERE id = '$id'");

    if ($result) {
        return $result->fetch_assoc();
    }
}

function get_edit_pertandingan()
{
    $id = $_GET['id'];
    $result = connect_db()->query("SELECT * FROM pertandingan WHERE id = '$id'");

    if ($result == TRUE) {
        return $result->fetch_assoc();
    }
}

function update_peserta()
{
    $id = $_POST['id'];
    $nama_peserta = $_POST['nama_peserta'];
    $nomor_hp = $_POST['nomor_hp'];

    if (!empty($id) && !empty($nama_peserta) && !empty($nomor_hp)) {
        $result = connect_db()->query("UPDATE peserta SET nama_peserta = '$nama_peserta', nomor_hp = '$nomor_hp'");
        return $result;
    }
}

function hapus_peserta()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = connect_db()->query("DELETE FROM peserta WHERE id = '$id'");
    }
}

function hapus_pertandingan()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = connect_db()->query("DELETE FROM pertandingan WHERE id='$id'");

        if ($result == TRUE) {
            header('Location: detail.php');
            exit;
        } else {
            echo "Error: " . connect_db()->error;
        }
    }
}

function getPertandingan() {
    $sql = connect_db()->query("SELECT id FROM pertandingan");
    $data = [];

    while ($row = $sql->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}
function getPeserta() {
    $sql = connect_db()->query("SELECT id, nama_peserta FROM peserta");
    $data = [];

    while ($row = $sql->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}