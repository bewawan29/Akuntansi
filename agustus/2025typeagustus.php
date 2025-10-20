<?php
    session_start();
    if(!isset($_SESSION["username"])){
      header("Location : ../index.php");
      exit;
    }
    include ("../koneksi.php");
include ("2025hitungagustus.php");
include ("../hitung.php");
include ("../2025hitung.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../tylemaster.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(245, 195, 155);
        }

        /* judul */
        .container .judul {
            background-color: aqua;
            display: grid;
            grid-template-columns: 0.5fr 1fr 0.5fr;
            /* width: 100vw; */
        }
        .container .judul .judul1 {
            font-size: 0.6rem;
        }
        .container .judul .judul2 {
            text-align: center;
        }

        /* navigasi */
        .container nav {
            background-color: rgb(0, 0, 0);
            display: grid;
            grid-template-columns: 1fr 0.8fr;
        }
        .container nav .menu,
        .container nav .sub-menu {
            /* background-color: blue; */
            padding: 10px;
            /* border: 2px solid green; */
        }
        /* .container nav .sub-menu{
            display: grid;
            grid-template-columns: 0.5fr 0.5fr 2fr;
        } */
       
        .container .menu-hide {
            color: white;
            position: relative;
            padding: 10px;
            display: none;
            top: 0px;
        }
        .container nav .menu a {
            color: white;
            margin: 15px;
        }
        .container nav .sub-menu {
            /* background-color: yellow; */
            color: white;
            display: grid;
            grid-template-columns: 1fr 0.5fr 0.8fr;
            text-align: center;
        }

        /* utama */
        .container .utama {
            display: grid;
            grid-template-columns: 1fr 4fr;
            height: 89vh;
        }
        .container .utama .side{
            background-color: rgb(181, 171, 216);
            /* justify-items: center; */
            font-size: 1rem;
            line-height: 1.7rem;
            /* text-align: center; */
        }
        .container .utama .side .side1,
            .container .utama .side .side2,
            .container .utama .side .side3{
                border: 1px solid green;
                padding: 10px;
                font-size: 1rem;
            }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            line-height: 1.5rem;
            display:grid;
            grid-template-columns:1fr 1fr 1fr 1fr
            /* justify-items:center; */
            /* overflow: scroll; */
        }
        .container .utama .main .main1,
        .container .utama .main .main2,
        .container .utama .main .main3,
        .container .utama .main .main4{
            padding: 5px;
        }

        /* responsive */
        @media (max-width: 450px){
            /* navigasi */
            .container nav {
                font-size: 0.5rem;
                grid-template-columns: 0.3fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                /* left: -170px; */
                display: none;
            }
            .container nav .menu-hide {
                display: block;
                position: relative;
                z-index: 5;
            }
            .container nav .menu-hide:hover .container nav .menu {
                display: block;
                background-color: brown;
            }

            /* utama */
			.container .utama{
                grid-template-columns: 1fr;
            }
            .container .utama .side{
                text-align: center;
                
            }
            .container .utama .side .side1,
            .container .utama .side .side2,
            .container .utama .side .side3{
                border: 1px solid green;
                padding: 10px;
                font-size: 1rem;
            }
            .container .utama .main{
                text-align: center;
                height: 400px;
                overflow: scroll;
            }
            .container .utama .main .main1,
            .container .utama .main .main2,
            .container .utama .main .main3,
            .container .utama .main .main4{
                border: 1px solid green;
                padding: 10px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
                <div class="judul1">ver_25_05</div>
                <div class="judul2"><h2>DETAIL DATA AGUSTUS 2025</h2></div>
                <div class="judul3"></div>           
            </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../logout.php">LOGOUT</a>
                <a href="../2025.php">MENU</a>
                <a href="2025agustus.php">BACK</a>
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
                    Pendapatan agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_agustus,2,",",".");?>"></td> <br>
                    Pengeluaran agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_agustus,2,",",".");?>"></td> <br>
                    Saldo agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_agustus,2,",",".");?>"></td> <br>
                </div>
                <div class="side2">
                    Pendapatan Umum agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_umum_agustus,2,",",".");?>"></td> <br>
                    Pengeluaran Umum agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_umum_agustus,2,",",".");?>"></td> <br>
                    Saldo Umum agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_umum_agustus,2,",",".");?>"></td> <br>
                </div>
                <div class="side3">
                    Pendapatan Pribadi agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($revenue_pribadi_agustus,2,",",".");?>"></td> <br>
                    Pengeluaran Pribadi agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($pengeluaran_pribadi_agustus,2,",",".");?>"></td> <br>
                    Saldo Pribadi agustus : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_pribadi_agustus,2,",",".");?>"></td> <br>
                </div>
            </div>

            <div class="main">
                <div class="main1">
                    <p>agustus 2025 :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_rumah_agustus,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_makan_agustus,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_kesehatan_agustus,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_pendapatan_agustus,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_gaji_agustus,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($saldo_lain_agustus,2,",",".");?>"></td> <br>
                </div>
                <div class="main2">
                    <p>Umum :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_rumah_agustus,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_makan_agustus,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_kesehatan_agustus,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_pendapatan_agustus,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_gaji_agustus,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($umum_lain_agustus,2,",",".");?>"></td> <br>
                </div>
                <div class="main3">
                    <p>Pribadi :</p> <br>
                        Rumah : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_rumah_agustus,2,",",".");?>"></td> <br>
                        Makan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_makan_agustus,2,",",".");?>"></td> <br>
                        Kesehatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_kesehatan_agustus,2,",",".");?>"></td> <br>
                        Pendapatan : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_pendapatan_agustus,2,",",".");?>"></td> <br>
                        Gaji : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_gaji_agustus,2,",",".");?>"></td> <br>
                        Lain-lain : <br>
                        <input type="text" value="<?php echo ""."".number_format($pribadi_lain_agustus,2,",",".");?>"></td> <br>
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