<?php
    session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
    include ("infokesehatanhitung.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver</div>
            <div class="judul2">INFO KESEHATAN 2025</div>
            <div class="judul3"></div>
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <a href="2025.php">Back</a>
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
                Kesehatan
            </div>
            <div class="main">
                <div class="main1">
                    JANUARI <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_januari,2,",",".");?>"> <br>
                    FEBRUARI <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_februari,2,",",".");?>"> <br>
                    MARET <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_maret,2,",",".");?>"> <br>
                    APRIL <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_april,2,",",".");?>"> <br>
                    MEI <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_mei,2,",",".");?>"> <br>
                    JUNI <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_juni,2,",",".");?>"> <br>
                </div>
                
                <div class="main2">
                    JULI <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_juli,2,",",".");?>"> <br>
                    AGUSTUS <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_agustus,2,",",".");?>"> <br>
                    SEPTEMBER <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_september,2,",",".");?>"> <br>
                    OKTOBER <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_oktober,2,",",".");?>"> <br>
                    NOVEMBER <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_november,2,",",".");?>"> <br>
                    DESEMBER <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($output_kredit_desember,2,",",".");?>"> <br>
                </div>
                <div class="main3">
                    TOTAL <br>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($total_kesehatan,2,",",".");?>"> <br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>