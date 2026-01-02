<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include ("koneksi2026.php");
include ("../function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylemaster.css">
    <link rel="stylesheet" href="../style2025formmemo.css">
    
<!--    <style>
        table{
            border-collapse:collapse;
            border:2px solid green;
            
        }
        th{
            background-color:steelblue;
            color:black;
            height:30px;
            border:1px solid green;
        }
        td{
            border:1px solid green;
        }
        button{
            width: 100px;
            height: 30px;
            color:red;
        }

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
            /* list-style: none; */
            /* justify-items: center; */
            font-size: 0.9rem;
            line-height: 1.8rem;
            /* text-align: center; */
        }
        .container .utama .side textarea{
            width: 250px;
            height: 300px;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            font-size: 0.9rem;
            overflow: scroll;
        }
        

        /* responsive */
        @media only screen and (max-width: 450px){
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
                left: -370px;
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
            .container .utama .side textarea{
                width: 300px;
                height: 200px;
            }
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
                left: -370px;
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
    <div class="container">
        <div class="judul">
                <div class="judul1">ver_25_05</div>
                <div class="judul2"><h2>FORM MEMO 2026</h2></div>
                <div class="judul3"></div>           
        </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../logout.php">LOGOUT</a>
                <a href="2026.php">MENU</a>
                <a href="2026formtransaksi.php">TRANSAKSI</a>
                <a href="2026gabung.php">GABUNG</a>
                <a href="2025carimemo.php">CARI</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../waktu.js"></script>
            <script src="../mundur.js"></script>
            <script>
                function muncul(){
                    // document.getElementById("hide").style.display = "block";
                    document.getElementById("hide").style.left = "0px";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">           
                <form action="" method="POST">
                    <tr>
                        <td width="120">Tanggal</tdd>
                        <td> <input type="date" name="tanggal"> </td>
                    </tr><br>
                    <tr>
                        <td>Hari</tdd>
                        <td> <input type="text" size="10" name="hari"> </td>
                        <td> 
                            <select type="text" name="hari">
                                <option></option>
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>
                            </select>
                            </td>
                    </tr><br>
                    
                    <tr>
                        <td>Memo</td><br>
                        <td> <textarea name="memo"> </textarea> </td>
                    </tr>

                    <button name="proses">Simpan</button>
                    
                    <?php
                        simpan_memo();
                    ?>
                </form>          
            </div>

            <!-- bagian utama -->
            <div class="main">
                <table>
                <form action="" method="post">
                    <tr>
                        <th width="10%">Tanggal</th>
                        <th>Hari</th>
                        <th>Memo</th>
                        <th colspan="2">Aksi </th>
                    </tr>
                <?php
                    tabel_memo();
                ?>
                </form>
                </table>
            </div>
        </div>

        <!-- <div class="footer">Footer</div> -->
    </div>
</body>
</html>

