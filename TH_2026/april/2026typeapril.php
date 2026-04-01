<?php
    session_start();
    if(!isset($_SESSION["username"])){
      header("Location: ../TH_2026/index.php");
      exit;
    }
    include_once ("../koneksi2026.php");
    include_once ("2026hitungapril.php");
    include_once ("../hitung2026.php");
    include_once ("../2026hitung.php");
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
                <div class="judul2"><h2>DETAIL DATA APRIL 2026</h2></div>
                <div class="judul3"></div>           
            </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../../logout.php">LOGOUT</a>
                <a href="../2026.php">MENU</a>
                <a href="2026april.php">BACK</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../../waktu.js"></script>
            <script src="mundur2026april.js?v=<?php echo time(); ?>"></script>
            <script>
                function muncul() {
                    document.getElementById("hide").style.display = "block";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                <div class="side1">
                    Pendapatan april : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_april,2,",",".");?>"></td> <br>
                    Pengeluaran april : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_april,2,",",".");?>"></td> <br>
                    Saldo april : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_april,2,",",".");?>"></td> <br>
                </div>
                <div class="side2">
                    Pendapatan Umum april : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_umum_april,2,",",".");?>"></td> <br>
                    Pengeluaran Umum april : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_umum_april,2,",",".");?>"></td> <br>
                    Saldo Umum april : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_umum_april,2,",",".");?>"></td> <br>
                </div>
                <div class="side3">
                    Pendapatan Pribadi april : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_pribadi_april,2,",",".");?>"></td> <br>
                    Pengeluaran Pribadi april : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_pribadi_april,2,",",".");?>"></td> <br>
                    Saldo Pribadi april : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_pribadi_april,2,",",".");?>"></td> <br>
                </div>
            </div>

            <div class="main">
                <div class="main1">
                    <p>April 2026 :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_rumah_april,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_makan_april,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_kesehatan_april,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_pendapatan_april,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_gaji_april,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_lain_april,2,",",".");?>"></td> <br>
                </div>
                <div class="main2">
                    <p>Umum :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_rumah_april,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_makan_april,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_kesehatan_april,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_pendapatan_april,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_gaji_april,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_lain_april,2,",",".");?>"></td> <br>
                </div>
                <div class="main3">
                    <p>Pribadi :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_rumah_april,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_makan_april,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_kesehatan_april,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_pendapatan_april,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_gaji_april,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_lain_april,2,",",".");?>"></td> <br>
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