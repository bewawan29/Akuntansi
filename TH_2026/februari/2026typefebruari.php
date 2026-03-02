<?php
    session_start();
    if(!isset($_SESSION["username"])){
      header("Location: ../TH_2026/index.php");
      exit;
    }
    include ("../koneksi2026.php");
    include ("2026hitungfebruari.php");
    include ("../hitung2026.php");
    include ("../2026hitung.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../stylemaster.css">
    <link rel="stylesheet" href="../../style2026type.css?v=<?php echo time(); ?>">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
                <div class="judul1">ver_25_05</div>
                <div class="judul2"><h2>DETAIL DATA FEBRUARI 2025</h2></div>
                <div class="judul3"></div>           
            </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../TH_2026/logout.php">LOGOUT</a>
                <a href="../2026.php">MENU</a>
                <a href="2026februari.php">BACK</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../waktu.js"></script>
            <script src="../mundur.js"></script>
            <script>
                function muncul() {
                    document.getElementById("hide").style.display = "block";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                <div class="side1">
                    Pendapatan februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_februari,2,",",".");?>"></td> <br>
                    Pengeluaran februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_februari,2,",",".");?>"></td> <br>
                    Saldo februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_februari,2,",",".");?>"></td> <br>
                </div>
                <div class="side2">
                    Pendapatan Umum februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_umum_februari,2,",",".");?>"></td> <br>
                    Pengeluaran Umum februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_umum_februari,2,",",".");?>"></td> <br>
                    Saldo Umum februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_umum_februari,2,",",".");?>"></td> <br>
                </div>
                <div class="side3">
                    Pendapatan Pribadi februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_pribadi_februari,2,",",".");?>"></td> <br>
                    Pengeluaran Pribadi februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_pribadi_februari,2,",",".");?>"></td> <br>
                    Saldo Pribadi februari : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_pribadi_februari,2,",",".");?>"></td> <br>
                </div>
            </div>

            <div class="main">
                <div class="main1">
                    <p>Februari 2026 :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_rumah_februari,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_makan_februari,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_kesehatan_februari,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_pendapatan_februari,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_gaji_februari,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_lain_februari,2,",",".");?>"></td> <br>
                </div>
                <div class="main2">
                    <p>Umum :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_rumah_februari,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_makan_februari,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_kesehatan_februari,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_pendapatan_februari,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_gaji_februari,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_lain_februari,2,",",".");?>"></td> <br>
                </div>
                <div class="main3">
                    <p>Pribadi :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_rumah_februari,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_makan_februari,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_kesehatan_februari,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_pendapatan_februari,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_gaji_februari,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_lain_februari,2,",",".");?>"></td> <br>
                </div>
                <div class="main4">
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