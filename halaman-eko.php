<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include("2025hitung.php");
include ("koneksi.php");

?>
<link rel="stylesheet" href="stylemaster.css">
<link rel="stylesheet" href="styletahun.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="judul">
            <div class="judul1">
                ver_25_05               
            </div>
            <div class="judul2"><h2>MENU EKO</h2></div>
            <div class="judul3"></div>
            
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <!-- <a href="coba.php">Kembali</a> -->
                <!-- <button onclick="window.print()">Print</button> -->
            </div>
            <div class="sub-menu">
                <div>
                    <?php echo date("l, d-M-Y"); ?>
                </div>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="waktu.js"></script>
            <script src="mundur.js"></script>
            <script>
                function muncul() {
                    // document.getElementById("hide").style.display = "block";
                    document.getElementById("hide").style.left = "0px";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                
                
                
            </div>
            <div class="main">
                
                <div class="main1">
                    <li><a href="tahun.php">TAHUN DATA</a></li>
                <li><a href="https://www.google.com">GOOGLE</a></li>
                <li><a href="https://echof17.com">cashflow</a></li>
                <li><a href="https://192.168.0.90:8006">Proxmox</a></li>
                <li><a href="http://192.168.0.31">OMV</a></li>
                </div>
                
                <div class="main2">
                    <li><a href="https://192.168.0.118:8443">Cloudpanel</a></li>
                <li><a href="http://192.168.0.51:8123">Home Asistant</a></li>
                <li><a href="http://hpanel.hostinger.com">Hostinger</a></li>
                <li><a href="http://login.tailscale.com">Tailscale</a></li>
                </div>
                <!--
                <div class="main3">
                    Pribadi : <br>
                    <input type="text"  value="<?php echo ""."".number_format($pribadi_output,2,",",".");?>"><br>
                    Umum : <br>
                    <input type="text"  value="<?php echo ""."".number_format($umum_output,2,",",".");?>">
                </div>
                <div class="main4"></div>
                -->
            </div>
        </div>

        <!-- <div class="footer">FOOTER</div> -->
    </div>
    <!-- <script src="waktu.js"></script> -->
       
</body>
</html>