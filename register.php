<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html>
    <head>
        <title>Register </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body style="background:#f1f1f1;">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 pt-5 mx-auto">
                    <div id="notifikasi">
                        <div class="alert alert-danger">
                            <strong>Register Anda Gagal, Periksa Kembali Username Telah Terdaftar</strong>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="fa fa-sign-in pt-2"></i> Sign Up
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- form berfungsi mengirimkan data input 
                            dengan method post ke proses login dengan paramater get aksi login -->
                            <form method="post" action="proses.php?aksi=register" id="formlogin">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="user" 
                                        class="form-control" autofocus 
                                        placeholder="Input Username Anda" type="text" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group -->
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="pass" 
                                        class="form-control" 
                                        placeholder="Input Password Anda" 
                                        type="password" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input name="name" 
                                        class="form-control" autofocus 
                                        placeholder="Input Nama Anda" type="text" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" 
                                        class="form-control" autofocus 
                                        placeholder="Input Email Anda" type="email" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group -->
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input name="phone" 
                                        class="form-control" autofocus 
                                        placeholder="Input No HP Anda" type="text" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group -->
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="address" 
                                        class="form-control" autofocus 
                                        placeholder="Input Alamat Anda" type="text" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group --> 
                                <div class="form-group">
                                    <button type="submit" name="proses_login" 
                                        class="btn btn-primary btn-block"> Register  
                                    </button>
                                </div> 
                                <!-- form-group -->                                                           
                            </form>
                            <div class="form-group">
                                <a href="login.php"> Kembali ke Login  </a>
                            </div> <!-- form-group-->
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <script>
        // notifikasi gagal di hide
        <?php if(empty($_GET['get'])){?>
            $("#notifikasi").hide();
        <?php }?>
            var logingagal = function(){
                $("#logout").fadeOut('slow');
                $("#notifikasi").fadeOut('slow');
            };
            setTimeout(logingagal, 4000);
        </script> 
    </body>
</html>