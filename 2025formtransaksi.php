<?php
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location : index.php");
    exit;
    }
    include ("koneksi.php");
    include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tylemaster.css">
    <style>   
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
            /* justify-items: center; */
            font-size: 1rem;
            line-height: 1.7rem;
            /* text-align: center; */
        }
        .container .utama .side form{
            padding: 10px;
        }
        .container .utama .side form input{
            width: 100px;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            line-height: 1.5rem;
            justify-items:center;
            overflow: scroll;
        }

        /* responsive */
        @media only screen and (max-width: 450px){
           /* judul */
            .container .judul {
                background-color: blue;
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

            /* utama */
            .container .utama{
                grid-template-columns: 1fr;
            }
            .container .utama .side{
                font-size: 0.8rem;
                line-height: 1.5rem;
            }
            .container .utama .main{
                font-size: 0.8rem;
                justify-items: left;
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
    </style>
</head>
<body>
    
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>FORM TRANSAKSI</h2></div>
            <div class="judul3"></div>           
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <a href="2025.php">MENU</a>
                <a href="2025formmemo.php">MEMO</a>
                <a href="2025gabung.php">GABUNG</a>
                <a href="2025cari.php">CARI</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div>
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

        <!-- utama -->
        <div class="utama">
            <!-- side -->
            <div class="side">
                <form action="" method="post">
                    <tr>
                        <td width="120">No</td>
                        <td> <input type="number" name="no"> </td>
                    </tr><br>

                    <tr>
                        <td>Tanggal</td>
                        <td> <input type="date" name="tanggal"> </td>
                    </tr><br>

                    <tr>
                        <td>Bulan</td>
                        <td> <input type="number" name="bulan"> </td>
                    </tr><br>

                    <tr>
                        <td>Debit</td>
                        <td> <input type="number" name="debit"> </td>
                    </tr><br>

                    <tr>
                        <td>Kredit</td>
                        <td> <input type="number" name="kredit"> </td>
                    </tr><br>

                    <tr>
                        <td>Transaksi</td><br>
                        <td> <input type="text" name="transaksi" style="width: 200px;"> </td>
                    </tr><br>

                    <tr>
                        <td>Type</td>
                        <td><input type="text" name="type"> </td>
                            <input type="radio" name="type" value="Bank">Bank
                            <input type="radio" name="type" value="Cash">Cash
                    </tr><br>

                    <tr>
                        <td>Bank</td>
                        <td><input type="text" name="bank"> </td><br>
                        <td>
                        <select type="text" name="bank">
                            <option></option>
                            <option>BCA</option>
                            <option>BRI</option>
                            <option>BSI</option>
                            <option>Niaga</option>
                            <option>BNI</option>
                            <option>MANDIRI</option>
                        </select>
                        </td>
                    </tr><br>

                    <tr>
                        <td>Bagian</td>
                        <td><input type="text" name="bagian"> </td><br>
                        <td>
                            <select type="text" name="bagian">
                                <option>Umum</option>
                                <option>Pribadi</option>
                                <option>Bank</option>
                            </select>
                        </td>
                    </tr><br>

                    <tr>
                        <td>Post</td>
                        <td><input type="text" name="post"> </td><br>
                        <td>
                            <select type="text" name="post">
                                <option></option>
                                <option>Rumah</option>
                                <option>Makan</option>
                                <option>Kesehatan</option>
                                <option>Internet</option>
                                <option>Listrik</option>
                                <option>BBM</option>
                                <option>Kendaraan</option>
                                <option>Transport</option>
                                <option>Pendapatan</option>
                                <option>Gaji</option>
                                <option>Pinjaman</option>
                                <option>Parkir</option>
                                <option>Lain-lain</option>
                            </select>
                        </td> 
                    </tr> <br>
                      
                    <button name="proses">Simpan</button>

                    <?php
                        simpan_transaksi();
                    ?>
                </form>               
            </div>

            <!-- main -->
            <div class="main">
                <table>
                    <form action="" method="post">
                    <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                            <th>Transaksi</th>
                            <th>Type</th>
                            <th>Bank</th>
                            <th>Bagian</th>
                            <th>Post</th>
                            <th colspan="2">Aksi </th>
                        </tr> 
                    </form>   
                    <?php
                        tabel_transaksi();
                    ?>   
                </table>
            </div>
        </div>

        <!-- <div class="footer">Footer</div> -->
    </div>
</body>
</html>
<?php
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location : index.php");
    exit;
    }
    include ("koneksi.php");
    include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tylemaster.css">
    <style>   
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
            /* justify-items: center; */
            font-size: 1rem;
            line-height: 1.7rem;
            /* text-align: center; */
        }
        .container .utama .side form{
            padding: 10px;
        }
        .container .utama .side form input{
            width: 100px;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            line-height: 1.5rem;
            justify-items:center;
            overflow: scroll;
        }

        /* responsive */
        @media only screen and (max-width: 450px){
           /* judul */
            .container .judul {
                background-color: blue;
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

            /* utama */
            .container .utama{
                grid-template-columns: 1fr;
            }
            .container .utama .side{
                font-size: 0.8rem;
                line-height: 1.5rem;
            }
            .container .utama .main{
                font-size: 0.8rem;
                justify-items: left;
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
    </style>
</head>
<body>
    
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>FORM TRANSAKSI</h2></div>
            <div class="judul3"></div>           
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <a href="2025.php">MENU</a>
                <a href="2025formmemo.php">MEMO</a>
                <a href="2025gabung.php">GABUNG</a>
                <a href="2025cari.php">CARI</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="teksa"></div>
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

        <!-- utama -->
        <div class="utama">
            <!-- side -->
            <div class="side">
                <form action="" method="post">
                    <tr>
                        <td width="120">No</td>
                        <td> <input type="number" name="no"> </td>
                    </tr><br>

                    <tr>
                        <td>Tanggal</td>
                        <td> <input type="date" name="tanggal"> </td>
                    </tr><br>

                    <tr>
                        <td>Bulan</td>
                        <td> <input type="number" name="bulan"> </td>
                    </tr><br>

                    <tr>
                        <td>Debit</td>
                        <td> <input type="number" name="debit"> </td>
                    </tr><br>

                    <tr>
                        <td>Kredit</td>
                        <td> <input type="number" name="kredit"> </td>
                    </tr><br>

                    <tr>
                        <td>Transaksi</td><br>
                        <td> <input type="text" name="transaksi" style="width: 200px;"> </td>
                    </tr><br>

                    <tr>
                        <td>Type</td>
                        <td><input type="text" name="type"> </td>
                            <input type="radio" name="type" value="Bank">Bank
                            <input type="radio" name="type" value="Cash">Cash
                    </tr><br>

                    <tr>
                        <td>Bank</td>
                        <td><input type="text" name="bank"> </td><br>
                        <td>
                        <select type="text" name="bank">
                            <option></option>
                            <option>BCA</option>
                            <option>BRI</option>
                            <option>BSI</option>
                            <option>Niaga</option>
                            <option>BNI</option>
                            <option>MANDIRI</option>
                        </select>
                        </td>
                    </tr><br>

                    <tr>
                        <td>Bagian</td>
                        <td><input type="text" name="bagian"> </td><br>
                        <td>
                            <select type="text" name="bagian">
                                <option>Umum</option>
                                <option>Pribadi</option>
                                <option>Bank</option>
                            </select>
                        </td>
                    </tr><br>

                    <tr>
                        <td>Post</td>
                        <td><input type="text" name="post"> </td><br>
                        <td>
                            <select type="text" name="post">
                                <option></option>
                                <option>Rumah</option>
                                <option>Makan</option>
                                <option>Kesehatan</option>
                                <option>Internet</option>
                                <option>Listrik</option>
                                <option>BBM</option>
                                <option>Kendaraan</option>
                                <option>Transport</option>
                                <option>Pendapatan</option>
                                <option>Gaji</option>
                                <option>Pinjaman</option>
                                <option>Parkir</option>
                                <option>Lain-lain</option>
                            </select>
                        </td> 
                    </tr> <br>
                      
                    <button name="proses">Simpan</button>

                    <?php
                        simpan_transaksi();
                    ?>
                </form>               
            </div>

            <!-- main -->
            <div class="main">
                <table>
                    <form action="" method="post">
                    <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                            <th>Transaksi</th>
                            <th>Type</th>
                            <th>Bank</th>
                            <th>Bagian</th>
                            <th>Post</th>
                            <th colspan="2">Aksi </th>
                        </tr> 
                    </form>   
                    <?php
                        tabel_transaksi();
                    ?>   
                </table>
            </div>
        </div>

        <!-- <div class="footer">Footer</div> -->
    </div>
</body>
</html>
