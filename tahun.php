<?php
session_start();
// Perbaikan spasi pada Location dan penambahan exit
if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit;
}

// Gunakan include_once untuk menghindari error "Cannot redeclare function"
include_once("2025hitung.php");
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tahun Data - Ver 25.05</title>
    <link rel="stylesheet" href="stylemaster.css">
    <link rel="stylesheet" href="styletahun.css">
</head>
<body>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>TAHUN DATA</h2></div>
            <div class="judul3"></div>
        </div>
        
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <a href="halaman-eko.php">Back</a>
                <button onclick="window.print()">Print</button>
            </div>
            <div class="sub-menu">
                <div><?php echo date("l, d-M-Y"); ?></div>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="waktu.js"></script>
            <script src="mundur.js"></script>
            <script>
                function muncul() {
                    // Pastikan id "hide" ada di CSS untuk transisi left
                    document.getElementById("hide").style.left = "0px";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                <li><a href="../2023/2023.php">2023</a></li>
                <li><a href="2025menu.php">2024</a></li>
                <li><a href="2025.php">2025</a></li>
                <li><a href="TH_2026/2026.php">2026</a></li>
            </div>
            
            <div class="main">
                <div class="main1">
                    <form>
                    <table>
                        Total Debit 2025 : <br>
                        <input type="text" readonly value="<?= number_format($output,2,",","."); ?>">
                        <br>
                        Total Kredit 2025 : <br>
                        <input type="text" readonly value="<?= number_format($output2,2,",","."); ?>"> <br>
                        Total Saldo 2025 : <br>              
                        <input type="text" readonly value="<?= number_format($saldo,2,",","."); ?>"> 
                    </table>
                    </form>
                </div>
                
                <div class="main2">
                    BCA : <br>
                    <input type="text" readonly value="<?= number_format($bca_output,2,",","."); ?>"><br>
                    BSI : <br>
                    <input type="text" readonly value="<?= number_format($bsi_output,2,",","."); ?>"><br>
                    Niaga : <br>
                    <input type="text" readonly value="<?= number_format($niaga_output,2,",","."); ?>"><br>
                    BRI : <br>
                    <input type="text" readonly value="<?= number_format($bri_output,2,",","."); ?>"><br>
                    CASH : <br>
                    <input type="text" readonly value="<?= number_format($cash_output,2,",","."); ?>">
                </div>
                
                <div class="main3">
                    Pribadi : <br>
                    <input type="text" readonly value="<?= number_format($pribadi_output,2,",","."); ?>"><br>
                    Umum : <br>
                    <input type="text" readonly value="<?= number_format($umum_output,2,",","."); ?>">
                </div>
                <div class="main4"></div>
            </div>
        </div>
    </div>
</body>
</html>