<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../index.php");
  exit;
}

include_once ("koneksi2026.php");
include_once ("2026hitung.php");
include_once ("januari/2026hitungjanuari.php");
include_once ("februari/2026hitungfebruari.php");
include_once ("maret/2026hitungmaret.php");
include_once ("april/2026hitungapril.php");
//include ("mei/2025hitungmei.php");
//include ("juni/2025hitungjuni.php");
//include ("juli/2025hitungjuli.php");
//include ("agustus/2025hitungagustus.php");
//include ("september/2025hitungseptember.php");
//include ("Oktober/2025hitungoktober.php");
//include ("november/2025hitungnovember.php");
//include ("desember/2025hitungdesember.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2026</title>
    <link rel="stylesheet" href="../stylemaster.css">
    <link rel="stylesheet" href="../style2025.css?v=<?php echo time(); ?>">
    <style>
        
    </style>
</head>
<body>
    <div class="versi"></div>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>Tahun 2026</h2></div>
            <div class="judul3"></div>           
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            
            <div class="menu" id="hide">
                <div class="menu-hide" onclick="tutup()" >
                TUTUP [X]
                </div>
                <a href="../logout.php">LOGOUT</a>
                <a href="../tahun.php">TAHUN</a>
                <a href="2026type.php">Umum/Pribadi</a>
                <button onclick="window.print()" style="background-color: steelblue; color: white; cursor: pointer; border: none; border-radius: 5px; width: 80px;">
                    Cetak
                </button>
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
                function muncul() {
                    // Menggeser menu ke posisi 0 (muncul dari kiri)
                    document.getElementById("hide").style.left = "0px";
                }

                function tutup() {
                    // Mengembalikan menu ke kiri luar layar
                    document.getElementById("hide").style.left = "-100%";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                <div class="side1">
                    <a href="2026formmemo.php">FORM MEMO</a><br>
                    <a href="2026formtransaksi.php">FORM TRANSAKSI</a><br>
                    <a href="2026gabung.php">TABEL GABUNG</a>
                </div>
                <hr>
                <div class="side2">
                    <!--Data dari 2026hitung.php-->
                    Rumah : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_rumah,2,",",".");?>"></td> <br>
                    Makan : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_makan,2,",",".");?>"></td> <br>
                    <!--Kesehatan : <br> -->
                    <a href="infokesehatan.php" id="p02">Kesehatan </a> <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_kesehatan,2,",",".");?>"></td> <br>
                    Lain-lain : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_lain,2,",",".");?>"></td> <br>
                    <br>
                    <br>
                    Umum : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_umum,2,",",".");?>"></td> <br>
                    <br>
                    Pribadi : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_pribadi,2,",",".");?>"></td> <br>
                </div>
            </div>
            <div class="main">
                <div class="main1">
                    <a href="januari/2026januari.php" id="p02">JANUARI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_januari,2,",",".");?>"> <br>                        
                    <a href="februari/2026februari.php" id="p02">FEBRUARI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_februari,2,",",".");?>"> <br>
                    <a href="maret/2026maret.php" id="p02">MARET </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_maret,2,",",".");?>"> <br>                           
                    <a href="april/2026april.php" id="p02">APRIL </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_april,2,",",".");?>"> <br>
                    <a href="mei/2026mei.php" id="p02">MEI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_mei,2,",",".");?>"> <br>
                    <a href="juni/2026juni.php" id="p02">JUNI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_juni,2,",",".");?>"><br>
                </div>
                <div class="main2">
                    <a href="juli/2026juli.php" id="p02">JULI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_juli,2,",",".");?>"> <br>
                    <a href="agustus/2026agustus.php" id="p02">AGUSTUS </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_agustus,2,",",".");?>"> <br>
                    <a href="september/2026september.php" id="p02">SEPTEMBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_september,2,",S",".");?>"> <br>                   
                    <a href="Oktober/2026oktober.php" id="p02">OKTOBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_oktober,2,",",".");?>"> <br>
                    <a href="november/2026november.php" id="p02">NOVEMBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_november,2,",",".");?>"> <br>
                    <a href="desember/2026desember.php" id="p02">DESEMBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_desember,2,",",".");?>">
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

        <!-- <div class="footer">FOOTER</div> -->
    </div>


</body>
</html>
