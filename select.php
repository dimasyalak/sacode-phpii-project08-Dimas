<?php

// menyertakan file config dan session start
require_once('config.php');

// periksa jika session 'tidak' digunakan
if(!isset($_SESSION["alamat_email"])){
        
    // mematikan session
    session_destroy();

    // pergi ke file logout.php
    header('location: logout.php');

} else {

    // buat variabel dengan nilai session
    $alamat_email = $_SESSION["alamat_email"];

    // perintah sql
    $sql = "SELECT * FROM anggota WHERE alamat_email  ='$alamat_email'";

    // membuat permintaan
    $hasil  = $koneksi->query($sql);

    // periksa apakah data lebih dari 0
    if ($hasil->num_rows > 0) {
        $anggota = $hasil->fetch_assoc();
    } else {
        header('location: logout.php');
    }
}

?>