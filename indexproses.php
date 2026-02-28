<?php
session_start();
include "koneksi.php";

if(isset($_POST['proseslog'])){
    // 1. Amankan input dari SQL Injection
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // 2. Query yang lebih aman
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($sql);

    if($cek > 0){
        $_SESSION['username'] = $username;

        // 3. Logika Pengalihan (Routing)
        if($username == "admin"){
            echo "<meta http-equiv='refresh' content='1;URL=halaman-eko.php'>";
        }
        else if($username == "bsu"){
            echo "<meta http-equiv='refresh' content='1;URL=../assetbsu/asset.php'>";
        }
        else if($username == "eko"){
            // Pengalihan ke URL luar (External Link)
            echo "<meta http-equiv='refresh' content='1;URL=tahun.php'>";
        }
        else if($username == "cash"){
            // Pengalihan ke URL luar (External Link)
            echo "<meta http-equiv='refresh' content='1;URL=https://www.flowcash.rf.gd'>";
        }
        else {
            echo "<meta http-equiv='refresh' content='1;URL=halaman.php'>";
        }
        
    } else {
        echo "<script>alert('Username dan Password salah!');</script>";
        echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
    }
}
?>