<?php 
    
    // memulai session
    session_start();

    // mengakhiri session
    session_destroy();

    /*
    setelah menghapus session
    menampilkan halaman index.php
    */
    header('location: index.php');

?>