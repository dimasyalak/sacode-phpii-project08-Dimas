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
                            
                            <!-- FORM START -->
                            <form action="insert.php" method="post">

                                <div class="input-group input-group-lg mb-3">
                                    <input type="text" name="nama_lengkap" class="form-control form-control-lg py-3" placeholder="Nama lengkap...">
                                </div>

                                <div class="input-group input-group-lg mb-3">
                                    <input type="email" name="alamat_email" class="form-control form-control-lg py-3" placeholder="Alamat email...">
                                </div>

                                <div class="input-group input-group-lg mb-3">
                                    <input type="password" name="kata_sandi" class="form-control form-control-lg py-3" placeholder="Kata sandi...">
                                </div>

                                <hr class="my-4">

                                <button type="submit" class="btn btn-lg btn-primary w-100 fw-bolder py-3">Register</button>

                            </form>
                            <!-- FORM END -->

                        </div>
                        <!-- .card-body end -->                    
                       
                        <!-- .card-footer start -->
                        <div class="card-footer text-center py-5">
                            Sudah punya akun? <a href="login.php" class="fw-bold text-decoration-none">Login</a>
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