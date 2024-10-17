<?php
// 1. connect
$db = new mysqli('localhost', 'root', '');

// cek koneksi
if ($db->connect_error) {
    echo "Gagal konek";
}

// 2. buat database
$sql_buat_db = "CREATE DATABASE IF NOT EXISTS db_patungan_badminton";
$eksekusi_buat_db = $db->query($sql_buat_db);

if(!$eksekusi_buat_db) {
    echo "Buat db patungan_badminton gagal" . '<br>';
}

// 3. masuk db patungan_badminton
$sql_masuk_db = "USE db_patungan_badminton";
$db->query($sql_masuk_db);

// 5. buat tabel Matches
$sql_buat_table_matches = "CREATE TABLE IF NOT EXISTS matches
(
match_id INT PRIMARY KEY AUTO_INCREMENT,
date DATE,
time_awal VARCHAR(50),
time_akhir VARCHAR(50),
location VARCHAR(255),
total_amount INT
)";
$db->query($sql_buat_table_matches);

// 4. buat tabel Participants
$sql_buat_table_participants = "CREATE TABLE IF NOT EXISTS participants
(
participant_id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255),
amount_paid INT,
purpose TEXT,
match_id INT,
FOREIGN KEY (match_id) REFERENCES matches(match_id)
)";
$db->query($sql_buat_table_participants);

$db->close();