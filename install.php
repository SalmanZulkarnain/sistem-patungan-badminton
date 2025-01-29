<?php 
require_once 'config.php';

// 1. connect
$db = new mysqli(HOSTNAME, USERNAME, PASSWORD);

if ($db->connect_error) {
    echo "Gagal konek";
}

// 2. buat database
$sql_buat_db = "CREATE DATABASE db_patungan_badminton";
$eksekusi_buat_db = $db->query($sql_buat_db);

if(!$eksekusi_buat_db) {
    echo "Buat db patungan badminton gagal" . '<br>';
}

// 3. masuk db db_patungan_badminton
$sql_masuk_db = "USE db_patungan_badminton";
$db->query($sql_masuk_db);


// 4. buat tabel peserta
$sql_buat_table_peserta = "CREATE TABLE peserta
(
id INT PRIMARY KEY AUTO_INCREMENT,
nama_peserta VARCHAR(100) NOT NULL,
nomor_hp VARCHAR(20) NOT NULL
)";
$db->query($sql_buat_table_peserta);

// 5. buat tabel pertandingan
$sql_buat_table_pertandingan = "CREATE TABLE pertandingan
(
id INT PRIMARY KEY AUTO_INCREMENT,
tujuan_patungan VARCHAR(100) NOT NULL,
tempat_bermain VARCHAR(100) NOT NULL,
tanggal_bermain DATETIME NOT NULL,
total_biaya INT NOT NULL
)";
$db->query($sql_buat_table_pertandingan);

// 6. buat tabel peserta_pertandingan
$sql_buat_table_peserta_pertandingan = "CREATE TABLE peserta_pertandingan
(
id INT PRIMARY KEY AUTO_INCREMENT,
peserta_id INT NOT NULL,
pertandingan_id INT NOT NULL,
FOREIGN KEY (peserta_id) REFERENCES peserta(id),
FOREIGN KEY (pertandingan_id) REFERENCES pertandingan(id)
)";
$db->query($sql_buat_table_peserta_pertandingan);

// $db->query("DROP DATABASE db_patungan_badminton");

$db->close();

