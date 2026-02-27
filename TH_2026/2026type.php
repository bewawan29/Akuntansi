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
    <link rel="stylesheet" href="tyleversi.css">
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
            list-style: none;
            justify-items: center;
            font-size: 1.3rem;
            line-height: 4rem;
            text-align: center;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            justify-items: center;
            line-height: 1.5rem;
        }

        

        /* responsive */
        @media (max-width: 450px){
            /* judul */
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
            .container .utama {
                display: grid;
                grid-template-columns: 1fr;
            }
            .container .utama .main{
                display: grid;
                grid-template-columns: 1fr;
            }
            .container .utama .main .main1,
            .container .utama .main .main2,
            .container .utama .main .main3{
                border: 1px solid green;
                padding: 5px;
                font-size: 1rem;
            }

            /* footer */
            /* .footer, input{
                font-size: 0.8rem;
            }
            input{
                width: 100px;
            } */
        }
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
        <div class="side"></div>
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