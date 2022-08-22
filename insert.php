<?php
    //menyatakan file config.php
    require_once('config.php');

    // chek data yang kirimkan dari form
        if(isset($_POST['nama_lengkap']) && $_POST['nama_lengkap'] != ''){

         // bust vsrisble dsts
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat_email = $_POST['alamat_email'];
        $kata_sandi =  $_POST['kata_sandi'];

        // bust permintaan ke database untuk tambah data
        $sql = "INSERT INTO `anggota` (`nama_lengkap`,`alamat_email`,`kata_sandi`) VALUE ('$nama_lengkap', '$alamat_email', '$kata_sandi')";
            
        // periksa apakah permintaan berhasil atau gagal 
        if($koneksi->query($sql) === TRUE){

            // membuat sesion 
            session_start();
            
            // membuat session untuk simpan data daftar
            $_SESSION['nama_lengkap'] =$nama_lengkap;
            $_SESSION['alamat_email'] =$alamat_email;

            //jika proses berhasil tampilkan halam dasbor.phpp
            header('location: dasbor.php');


        }else {
            echo "GAGAL! Maaf, silahkan coba lagi...";
        }

    }else{
        echo "silahkan lengkapi data!";
    }

       

    

        
        // jika proses gagal tampilakn halaman gagal .php 


?>