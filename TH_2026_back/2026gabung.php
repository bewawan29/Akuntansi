<?php
	session_start();
	if(!isset($_SESSION["username"])){
	header("Location : index.php");
	exit;
	}
	include ("koneksi2026.php");
	include ("hitung.php");
    include ("function2026.php");
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
            font-size: 1rem;
        }
        .container .utama .side .side1,
        .container .utama .side .side2{
            padding: 10px;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            justify-items:center;
        }

        /* responsive */
        @media only screen and (max-width: 450px){
            /* judul */
            .container .judul {
                background-color: blue;
                color: white;
                font-size: 0.6rem;
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
                left: -320px;
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
                font-size: 0.8rem;
            }
            .container .utama .side{
                font-size: 0.8rem;
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
                left: -320px;
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
                <div class="judul2"><h2>TABEL MEMO DAN TRANSAKSI 2026</h2></div>
                <div class="judul3"></div>           
        </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../logout.php">LOGOUT</a>
                <a href="2026.php">MENU</a>
                <a href="2026formmemo.php">MEMO</a>
                <a href="2026formtransaksi.php">TRANSAKSI</a>
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
                    <form action="" method="post">
                        <input type="date" name="input" >
                        <!-- <input type="submit" value="cari" name="proses"> -->
                        <button name="proses">Cari</button>
                    </form>
                </div>
                
                <div class="side2">
                    <?php
                        $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where tanggal = '$_POST[input]' order by no DESC";
                        $query_result=mysqli_query($koneksi, $query);
                        while($row=mysqli_fetch_assoc($query_result)){
                            $output_debit=$row['sum'];
                        }

                        $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where tanggal = '$_POST[input]' order by no DESC";
                        $query_result=mysqli_query($koneksi, $query);
                        while($row=mysqli_fetch_assoc($query_result)){
                            $output_kredit=$row['sum'];

                        $saldo = $output_debit - $output_kredit;
                        }
                    ?>
                    Total Debit :
                        <input type="text" value="<?php echo ""."".number_format($output_debit,2,",",".");?>"><br>
                    Total Kredit :
                        <input type="text" value="<?php echo ""."".number_format($output_kredit,2,",",".");?>"><br>
                    Total Saldo :
                        <input type="text" value="<?php echo ""."".number_format($saldo,2,",",".");?>">
                </div>
            </div>
            <div class="main">
                <div class="main1">
                    <table>
                        <tr>
                        <th width="10%">Tanggal</th>
                        <th>Hari</th>
                        <th>Memo</th>
                        <th colspan="2">Aksi </th>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>	
                        
                        <?php
                            // include ("../koneksi.php");
                                if(isset($_POST['proses'])){
                                $sql="select * from tabel_memo where tanggal = '$_POST[input]' order by tanggal DESC";
                                $query=mysqli_query($koneksi,$sql);

                                while($trans=mysqli_fetch_array($query)){
                                    echo"
                                    <tr>
                                    <td>$trans[tanggal]</td>
                                    <td>$trans[hari]</td>
                                    <td>$trans[memo]</td>                   
                                    <td><a href='?kode=$trans[tanggal]'> Hapus </a> </td>
                                    <td><a href='2025ubahmemo.php?kode=$trans[tanggal]'> Ubah </a> </td> 
                                </tr>";
                                }
                                }
                        ?>			
                    </table>
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
                        $sql1="select * from tabel_transaksi where tanggal = '$_POST[input]' order by no DESC";
                        $query1=mysqli_query($koneksi,$sql1);

                        while($trans1=mysqli_fetch_array($query1)){
                        echo"
                        <tr>
                        <td>$trans1[no]</td>
                        <td>$trans1[tanggal]</td>
                        <td>$trans1[bulan]</td>
                        <td>$trans1[debit]</td>
                        <td>$trans1[kredit]</td>
                        <td>$trans1[transaksi]</td>
                        <td>$trans1[type]</td>
                        <td>$trans1[bank]</td>
                        <td>$trans1[bagian]</td>
                        <td>$trans1[post]</td>
                        <td><a href='?kode=$trans1[no]'> Hapus </a> </td>
                        <td><a href='2025ubahtransaksi.php?kode=$trans1[no]'> Ubah </a> </td> 
                        </tr>";
                        }
                        }

                        
                        
                    ?>
                    
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
	// $sql="select * from tabel_transaksi order by no DESC";
	// $query=mysqli_query($koneksi,$sql);
	// while($trans=mysqli_fetch_array($query)){
					
	// 	echo"
	// 	<tr>
	// 	<td>$trans[no]</td>
	// 	<td>$trans[tanggal]</td>
	// 	<td>$trans[bulan]</td>
	// 	<td>$trans[debit]</td>
	// 	<td>$trans[kredit]</td>
	// 	<td>$trans[transaksi]</td>
	// 	<td>$trans[type]</td>
	// 	<td>$trans[bank]</td>
	// 	<td>$trans[bagian]</td>
	// 	<td>$trans[post]</td>
	// 	<td><a href='?kode=$trans[no]'> Hapus </a> </td>
	// 	<td><a href='2025ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
	// 	</tr>";
	// }
?>