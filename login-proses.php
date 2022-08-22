<?php 

    // menyertakan file config dan session strat
    


    require_once('config.php');

    // cek data
    if(isset($_POST['alamat_email']) && $_POST['alamat_email'] != '' && $_POST['kata_sandi'] != ''){

        // buat variabel
        $alamat_email = $_POST['alamat_email'];
        $kata_sandi = $_POST['kata_sandi'];

        // perintah sql /query
        $sql = "SELECT * FROM anggota WHERE alamat_email ='$alamat_email' AND kata_sandi = '$kata_sandi'";

        // membuat permintaan
        $hasil = $koneksi->query($sql);

        // periksa apakah data lebih dari 0
        if ($hasil->num_rows > 0) {

            $anggota = $hasil->fetch_assoc();

            session_start();

            // membuat session
            $_SESSION["id"] = $anggota['id'];
            $_SESSION["alamat_email"] = $anggota['alamat_email'];
            $_SESSION["kata_sandi"] = $anggota['kata_sandi'];


            /* 
                proses berhasil 
                menampilkan halaman dasbor.php
            */
            header('location: dasbor.php');
        }else{
            session_start();

            // membuat session dengan isi pesan gagal
            $_SESSION["pesan_gagal"] = "<b>Gagal</b> Alamat email atau kata sandi yang anda masukan tidak cocok";

            // menampilkan login file-gagal.php
            header('location: login-gagal.php');
        }

        $koneksi->close();

    }else {
        header('location: error.php');
    }
?>