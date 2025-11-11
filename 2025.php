<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include ("hitung.php");
include ("koneksi.php");
include ("2025hitung.php");
include ("januari/2025hitungjanuari.php");
include ("februari/2025hitungfebruari.php");
include ("maret/2025hitungmaret.php");
include ("april/2025hitungapril.php");
include ("mei/2025hitungmei.php");
include ("juni/2025hitungjuni.php");
include ("juli/2025hitungjuli.php");
include ("agustus/2025hitungagustus.php");
include ("september/2025hitungseptember.php");
include ("Oktober/2025hitungoktober.php");
include ("november/2025hitungnovember.php");
include ("desember/2025hitungdesember.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025</title>
    <link rel="stylesheet" href="stylemaster.css">
    <link rel="stylesheet" href="style2025.css">
    <!-- <style>
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
            list-style: none;
            justify-items: center;
            font-size: 1.3rem;
            line-height: 4rem;
            text-align: center;
        }
        .container .utama .side .side1{
            font-size: 1rem;
            text-align: center;
            line-height: 2rem;
            padding: 10px 0;
        }.container .utama .side .side1 a{
            color: black;
            font-weight: bold;          
        }
        .container .utama .side .side2{
            font-size: 1rem;
            line-height: 1.5rem;
            padding: 10px 0;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            justify-items: center;
            line-height: 1.5rem;
        }
        .container .utama .main .main1,
        .container .utama .main .main2,
        .container .utama .main .main3{
            margin-top: 20px;
            font-size: 1rem;
        }
        .container .utama .main .main1 a,
        .container .utama .main .main2 a,
        .container .utama .main .main3 a{
            color: black;
        }

        /* responsive */
        @media only screen and (max-width: 450px) {
            .container .judul {
                background-color: blue;
                color: white;
                font-size: 0.8rem;
                padding: 5px;
            }

            /* navigasi */
            .container nav {
                font-size: 0.6rem;
                grid-template-columns: 0.2fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                left: -290px;
                /* display: none; */
                transition: 0.5s;
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
            .container .utama .main{
                grid-template-columns: 1fr;
            }
            .container .utama .main .main1,
            .container .utama .main .main2,
            .container .utama .main .main3{
                border: 1px solid blue;
            }

            /* footer */
            /* .container .footer{
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                
            } */
        }

        @media only screen and (min-width: 460px) and (max-width:800px){
            .container .judul {
                background-color: salmon;
                color: white;
                font-size: 0.7rem;
                padding: 5px;
            }
            /* navigasi */
            .container nav {
                font-size: 0.6rem;
                grid-template-columns: 0.2fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                left: -290px;
                /* display: none; */
                transition: 0.5s;
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
        }

    </style> -->
</head>
<body>
    <div class="versi"></div>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>Tahun 2025</h2></div>
            <div class="judul3"></div>           
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">

                <a href="logout.php">LOGOUT</a>
                <a href="tahun.php">TAHUN</a>
                <a href="2025type.php">Umum/Pribadi</a>
                <button onclick="window.print()">Print</button>
            </div>

            <div class="sub-menu">
                <div>
                    <?php echo date("l, d-M-Y"); ?>
                </div>               
                <div id="clock"></div>
                <div id="count" style="color: red;"></div>
            </div>
            <script src="waktu.js"></script>
            <script src="mundur.js"></script>
            <script>
                function muncul(){
                    // document.getElementById("hide").style.display = "block";
                    document.getElementById("hide").style.left = "0px";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                <div class="side1">
                    <a href="2025formmemo.php">FORM MEMO</a><br>
                    <a href="2025formtransaksi.php">FORM TRANSAKSI</a><br>
                    <a href="2025gabung.php">TABEL GABUNG</a>
                </div>
                <hr>
                <div class="side2">
                    Rumah : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_rumah,2,",",".");?>"></td> <br>
                    Makan : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_makan,2,",",".");?>"></td> <br>
                    <!--Kesehatan : <br> -->
                    <a href="infokesehatan.php" id="p02">Kesehatan </a> <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_kesehatan,2,",",".");?>"></td> <br>
                    Lain-lain : <br>
                    <input type="text" value="<?php echo ""."".number_format($saldo_lain,2,",",".");?>"></td> <br>
                </div>
            </div>
            <div class="main">
                <div class="main1">
                    <a href="januari/2025januari.php" id="p02">JANUARI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_januari,2,",",".");?>"> <br>                        
                    <a href="februari/2025februari.php" id="p02">FEBRUARI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_februari,2,",",".");?>"> <br>
                    <a href="maret/2025maret.php" id="p02">MARET </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_maret,2,",",".");?>"> <br>                           
                    <a href="april/2025april.php" id="p02">APRIL </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_april,2,",",".");?>"> <br>
                    <a href="mei/2025mei.php" id="p02">MEI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_mei,2,",",".");?>"> <br>
                    <a href="juni/2025juni.php" id="p02">JUNI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_juni,2,",",".");?>"><br>
                </div>
                <div class="main2">
                    <a href="juli/2025juli.php" id="p02">JULI </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_juli,2,",",".");?>"> <br>
                    <a href="agustus/2025agustus.php" id="p02">AGUSTUS </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_agustus,2,",",".");?>"> <br>
                    <a href="september/2025september.php" id="p02">SEPTEMBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_september,2,",S",".");?>"> <br>                   
                    <a href="Oktober/2025oktober.php" id="p02">OKTOBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_oktober,2,",",".");?>"> <br>
                    <a href="november/2025november.php" id="p02">NOVEMBER </a> <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_total_november,2,",",".");?>"> <br>
                    <a href="desember/2025desember.php" id="p02">DESEMBER </a> <br>
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
