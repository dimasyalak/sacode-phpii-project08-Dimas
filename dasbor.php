<?php
// membuat sesion 
session_start();

// menyertakan file select.php
require_once('select.php');
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>

         <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>
    <body class="bg-primary">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row mt-5">

                <!-- .col start -->
                <div class="col-6 mx-auto">

                    <!-- .card start -->
                    <div class="card shadow bg-dark text-secondary rounded-5">

                        <!-- .card-header start -->
                        <div class="card-header text-center p-5">
                            <h1 class="display-1 fw-bolder text-primary">Register</h1>
                            <p class="text-muted my-3">Silahkan masukan email dan kata sandi Anda...</p>
                        </div>
                        <!-- .card-header end -->

                        <!-- .card-body start -->
                        <div class="card-body p-5">
                            
                            <p>
                                Nama Lengkap : 
                                <span class="fs-1 fw-bold  text-primary d-grid">
                                    <?php echo $anggota['nama_lengkap']; ?>
                                </span>
                            </p>

                            <p>
                                Alamat Email : 
                                <span class="fs-1 fw-bold  text-primary d-grid">
                                    <?php echo $anggota['alamat_email']; ?>
                                </span>
                            </p>

                        </div>
                        <!-- .card-body end -->                    
                       
                        <!-- .card-footer start -->
                        <div class="card-footer text-center py-5">
                            <a href="logout.php" class="fw-bold text-decoration-none">Logout</a>
                        </div>
                        <!-- .card-footer end -->                        

                    </div>
                    <!-- .card end -->

                    <!-- copyright start -->
                    <div class="my-5 text-center text-dark">
                        Copyright &copy; 2022. Powered by <a href="https://sacode.web.id" class="link-dark fw-bold text-decoration-none">SaCode</a>
                    </div>
                    <!-- copyright end -->                    

                </div>
                <!-- .col end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </body>
</html>