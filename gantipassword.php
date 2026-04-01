<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
    <style>
        .box { width: 300px; margin: 50px auto; padding: 20px; border: 1px solid red; background: lightblue; }
        input { display: block; margin-bottom: 10px; width: 100%; }
    </style>
</head>
<body>
    <div class="box">
        <h3>Ganti Password</h3>
        <form action="gantiproses.php" method="post">
            <input type="password" name="pass_lama" placeholder="Password Lama" required>
            <input type="password" name="pass_baru" placeholder="Password Baru" required>
            <input type="password" name="konfirmasi" placeholder="Ulangi Password Baru" required>
            <button type="submit" name="submit">Simpan Perubahan</button>
            <a href="halaman-eko.php">Batal</a>
        </form>
    </div>
</body>
</html>