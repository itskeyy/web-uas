<?php 
    require 'koneksi.php';

    // proses login
    if(!empty($_GET['aksi'] == 'login'))
    {
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);

        $row = $koneksi->prepare('SELECT * FROM tbl_user WHERE username = ? AND password = md5(?)');
        $row->execute(array($user,$pass));
        $count = $row->rowCount();
        if($count > 0)
        {
            // buat sesi 
            session_start();

            $result = $row->fetch();
            $_SESSION['ADMIN'] = $result;
            // status yang diberikan 
            echo "<script>window.location='index.php';</script>";
        }else{
            echo "<script>window.location='login.php?get=failed';</script>";
        }
    }

    // proses register
    if(!empty($_GET['aksi'] == 'register'))
    {
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $nohp = strip_tags($_POST['phone']);
        $alamat = strip_tags($_POST['address']);

        $row = $koneksi->prepare('SELECT * FROM tbl_user WHERE username = ?');
        $row->execute(array($user));
        $count = $row->rowCount();
        if($count > 0)
        {
            echo "<script>window.location='register.php?get=username-exist';</script>";
        }else{
            
        $row = $koneksi->prepare('INSERT INTO tbl_user (username, password, nama_pengguna, telepon, email, alamat) VALUES (?,md5(?),?,?,?,?)');
        $row->execute(array($user,$pass,$name,$nohp, $email, $alamat));
            echo "<script>window.location='login.php?register=success';</script>";
        }
    }

    if(!empty($_GET['aksi'] == 'logout'))
    {
        session_start();
        session_destroy();
        echo "<script>window.location='login.php?signout=success';</script>";
    }