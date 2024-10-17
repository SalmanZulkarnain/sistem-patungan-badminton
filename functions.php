<?php 

require 'config.php';

function addMatches() {
    global $db;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST['location'];
        $total_amount = $_POST['total_amount'];
    
        if (!empty($date) && !empty($time) && !empty($location) && !empty($total_amount)) {
            $sql = "INSERT INTO matches (date, time, location, total_amount) VALUES ('$date', '$time', '$location', $total_amount)";
            
            if ($db->query($sql) === TRUE) {
                echo "Pertandingan berhasil ditambahkan.";
                header('Location: index.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }
        } else {
            echo "Semua field harus diisi!";
        }
    }
}

function addParticipants() {
    global $db;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $amount_paid = $_POST['amount_paid'];
        $purpose = $_POST['purpose'];
        $match_id = $_POST['match_id'];
    
        if(!empty($name) && !empty($amount_paid) && !empty($purpose) && !empty($match_id)) {
            $sql = "INSERT INTO participants (name, amount_paid, purpose, match_id) VALUES ('$name', $amount_paid, '$purpose', '$match_id')";
            
            if($db->query($sql) === TRUE) {
                echo "Peserta Berhasil ditambahkan";
                header('Location: index.php');
                exit;
            } else {
                echo "Error: " . $sql . '<br>' . $db->error;
            }
        }
    }
}

function viewMatches() {
    global $db;
    
    $result = $db->query("SELECT * FROM matches");
    $data = [];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

function viewParticipants() {
    global $db;

    $result = $db->query("SELECT * FROM participants");
    $data = [];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

function deleteMatch() {
    global $db;

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
    
        $result = $db->query("DELETE FROM matches WHERE match_id = '$id'");
        $result = $db->query("DELETE FROM participants WHERE match_id = '$id'");
    
        if($result) {
            echo "Berhasil menghapus data";
            header('Location: index.php'); // Redirect setelah menghapus
            exit;
        } else {
            echo "Gagal menghapus data". $db->error;;
        }
    } 
}