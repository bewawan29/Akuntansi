<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include_once ("koneksi2026.php");
include_once ("hitung2026.php");
include_once ("2026hitung.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylemaster.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style2026type.css?v=<?php echo time(); ?>">
    <style>
        
    </style>
</head>
<body>
<div class="container">
    <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>DETAIL 2026</h2></div>
            <div class="judul3"></div>           
        </div>

    <nav>
        <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
            <a href="../logout.php">LOGOUT</a>
            <a href="../tahun.php">TAHUN</a>
            <a href="2026.php">BACK</a>
        </div>
        <div class="sub-menu">
                <div>
                    <?php echo date("l, d-M-Y"); ?>
                </div>               
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../waktu.js"></script>
            <script src="mundur2026.js?v=<?php echo time(); ?>"></script>
            <script>
                function muncul(){
                    document.getElementById("hide").style.display = "block";
                }
            </script>
    </nav>

    <div class="utama">
        <div class="side">
            Total Debit :
                <input type="text" value="<?php echo ""."".number_format($output_debit_total,2,",",".");?>"><br>
                Total Kredit :
                <input type="text" value="<?php echo ""."".number_format($output_kredit_total,2,",",".");?>"><br>
                Total Saldo :
                <input type="text" value="<?php echo ""."".number_format($saldo_total,2,",",".");?>">
        </div>
        <div class="main">
            <div class="main1">
                <p>Umum :</p> <br>
                Rumah : <br>
                <input type="text" value="<?php echo ""."".number_format($umum_rumah,2,",",".");?>"></td> <br>
                Makan : <br>
                <input type="text" value="<?php echo ""."".number_format($umum_makan,2,",",".");?>"></td> <br>
                Kesehatan : <br>
                <input type="text" value="<?php echo ""."".number_format($umum_kesehatan,2,",",".");?>"></td> <br>
                Pendapatan : <br>
                <input type="text" value="<?php echo ""."".number_format($umum_pendapatan,2,",",".");?>"></td> <br>
                Gaji : <br>
                <input type="text" value="<?php echo ""."".number_format($umum_gaji,2,",",".");?>"></td> <br>
                Lain-lain : <br>
                <input type="text" value="<?php echo ""."".number_format($umum_lain,2,",",".");?>"></td> <br>
            </div>
            <div class="main2">
                <p>Pribadi :</p> <br>
                    Rumah : <br>
                    <input type="text" value="<?php echo ""."".number_format($pribadi_rumah,2,",",".");?>"></td> <br>
                    Makan : <br>
                    <input type="text" value="<?php echo ""."".number_format($pribadi_makan,2,",",".");?>"></td> <br>
                    Kesehatan : <br>
                    <input type="text" value="<?php echo ""."".number_format($pribadi_kesehatan,2,",",".");?>"></td> <br>
                    Pendapatan : <br>
                    <input type="text" value="<?php echo ""."".number_format($pribadi_pendapatan,2,",",".");?>"></td> <br>
                    Gaji : <br>
                    <input type="text" value="<?php echo ""."".number_format($pribadi_gaji,2,",",".");?>"></td> <br>
                    Lain-lain : <br>
                    <input type="text" value="<?php echo ""."".number_format($pribadi_lain,2,",",".");?>"></td> <br>
            </div>
            <div class="main3">
                <p>BCA :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_bca,2,",",".");?>"> <br>
                    <p>BSI :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_bsi,2,",",".");?>"> <br>
                    <p>BRI :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_bri,2,",",".");?>"> <br>
                    <p>Niaga :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_niaga,2,",",".");?>"> <br>
                    <p>Cash :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_cash,2,",",".");?>"> <br>
            </div>
        </div>
    </div>

    <!-- <div class="footer">
        Total Debit :
        <input type="text" value="<?php echo ""."".number_format($output,2,",",".");?>"></td>
        Total Kredit :
        <input type="text" value="<?php echo ""."".number_format($output2,2,",",".");?>"></td>
        <br>Total Saldo :
        <input type="text" value="<?php echo ""."".number_format($saldo,2,",",".");?>"></td>
    </div> -->
</div>
</body>
</html>