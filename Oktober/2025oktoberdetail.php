<?php
    session_start();
    if(!isset($_SESSION["username"])){
      header("Location : ../index.php");
      exit;
    }
    include ("../koneksi.php");
    include ("../hitung.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../tylemaster.css">
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
            list-style: none;
            justify-items: center;
            font-size: 1rem;
            line-height: 1.6rem;
            text-align: center;
        }
        .container .utama .side .side2{
            margin-top:50px;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            /* display: grid; */
            /* grid-template-columns: 1fr 1fr 1fr; */
            justify-items: center;
            line-height: 1.5rem;
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
            .container .utama .side .side1 form{
                justify-items: center;
                padding: 10px;
                font-size: 1rem;
            }
            .container .utama .side .side2{
                justify-items: center;
                padding: 10px;
                font-size: 1rem;
            }
            .container .utama .main{
                height: 400px;
                overflow: scroll;
            }
            .container .utama .main .main1{
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
                <div class="judul1">ver_25_05</div>
                <div class="judul2"><h2>DETAIL OKTOBER 2025</h2></div>
                <div class="judul3"></div>           
        </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <a href="../2025.php">MENU</a>
                <a href="2025oktober.php">BACK</a>
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
                    <form action="" method="post">      
                        Jenis : <br>
                        <!-- <input type="text" name="jenis" value=""> <br>  -->
                        <select type="text" name="jenis">
                            <!-- <option>Tanggal</option> -->
                            <option>Bulan</option>
                            <!-- <option>Transaki</option> -->
                            <option>Type</option>
                            <option>Bank</option>
                            <option>Bagian</option>
                            <option>Post</option>
                            
                        </select>   <br>
                        Pencarian : <br>
                        <input type="text" name="cari" value=""> <br>
                        <!-- <input type="submit" name="proses" value="Cari"> -->
                        <button name="proses">Cari</button>
                    </form>
                </div>
                
                <div class="side2">
                    <p>Rumah :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_rumah_oktober,2,",",".");?>"> <br>
                    <p>Makan :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_makan_oktober,2,",",".");?>"> <br>
                    <p>Kesehatan :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_kesehatan_oktober,2,",",".");?>"> <br>
                    <p>Pendapatan :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_pendapatan_oktober,2,",",".");?>"> <br>
                    <p>Gaji :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_gaji_oktober,2,",",".");?>"> <br>
                </div>
            </div>
            <div class="main">
                <div class="main1">
                    Debit :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($output_debit,2,",",".");?>">
                    Kredit :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($output_kredit,2,",",".");?>">
                    Saldo :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($saldo,2,",",".");?>">
                </div>
                
                <div class="main2">
                    <table>
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
                        <?php
                            // include ("../koneksi.php");
                            if(isset($_POST['proses'])){
                            $sql="select * from tabel_transaksi where bulan='10' and $_POST[jenis] = '$_POST[cari]' order by no DESC";
                            $query=mysqli_query($koneksi,$sql);
                            while($trans=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                                <td>$trans[no]</td>
                                <td>$trans[tanggal]</td>
                                <td>$trans[bulan]</td>
                                <td>$trans[debit]</td>
                                <td>$trans[kredit]</td>
                                <td>$trans[transaksi]</td>
                                <td>$trans[type]</td>
                                <td>$trans[bank]</td>
                                <td>$trans[bagian]</td>
                                <td>$trans[post]</td>
                                <td><a href='?kode=$trans[no]'> Hapus </a> </td>
                                <td><a href='../2025ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
                            </tr>";
                            }

                            $sql1="SELECT  SUM(debit) AS sum FROM tabel_transaksi where bulan='10' and $_POST[jenis] = '$_POST[cari]'";
                            $query_result=mysqli_query($koneksi, $sql1);
                            while($row=mysqli_fetch_assoc($query_result)){
                            $output_debit=$row['sum'];
                            }

                            $sql2="SELECT  SUM(kredit) AS sum FROM tabel_transaksi where bulan='10' and $_POST[jenis] = '$_POST[cari]'";
                            $query_result2=mysqli_query($koneksi, $sql2);
                            while($row2=mysqli_fetch_assoc($query_result2)){
                            $output_kredit=$row2['sum'];
                            }

                            $saldo = $output_debit - $output_kredit;
                            }
                        ?>
                    </table>
                    
                </div>

                
            </div>
        </div>
    </div>
</body>
</html>

