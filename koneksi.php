<?php
    $title_project = '21552011052_Rifky Abdul Hanan_TIF RM 21_UASWEB1';
    // konfigurasi db
    $host = 'localhost';
    $user = 'id20251125_keyy';
    $pass = '|65W%{9vrxJQawd5';
    $db   = 'id20251125_webuas';
    try {
        $koneksi = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        return 'Connection failed: ' . $e->getMessage();
    }

?>