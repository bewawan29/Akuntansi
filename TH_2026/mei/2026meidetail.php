<?php
    session_start();
    if(!isset($_SESSION["username"])){
      header("Location: ../index.php");
      exit;
    }
    include ("../koneksi2026.php");
    //include ("../hitung.php");
    include ("2026hitungmei.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../stylemaster.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../styledetail.css?v=<?php echo time(); ?>">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
                <div class="judul1">ver_25_05</div>
                <div class="judul2"><h2>DETAIL MEI 2026</h2></div>
                <div class="judul3"></div>           
        </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../../logout.php">LOGOUT</a>
                <a href="../2026.php">MENU</a>
                <a href="2026mei.php">BACK</a>
            </div>
            <div class="sub-menu">
                <div>
                    <?php echo date("l, d-M-Y"); ?>
                </div>               
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../../waktu.js"></script>
            <script src="../mundur2026.js?v=<?php echo time(); ?>"></script>
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
                            <!--<option>Transaki</option> -->
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
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_rumah_mei,2,",",".");?>"> <br>
                    <p>Makan :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_makan_mei,2,",",".");?>"> <br>
                    <p>Kesehatan :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_kesehatan_mei,2,",",".");?>"> <br>
                    <p>Pendapatan :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_pendapatan_mei,2,",",".");?>"> <br>
                    <p>Gaji :</p>
                    <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_gaji_mei,2,",",".");?>"> <br>
                </div>
            </div>
            <div class="main">
                <!--
                <div class="main1">
                    Debit :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($output_debit,2,",",".");?>">
                    Kredit :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($output_kredit,2,",",".");?>">
                    Saldo :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($saldo,2,",",".");?>">
                </div> -->
            
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
                            $sql="select * from tabel_transaksi where bulan='05' and $_POST[jenis] = '$_POST[cari]' order by no DESC";
                            $query=mysqli_query($koneksi,$sql);
                            while($trans=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                                <td>$trans[no]</td>
                                <td>$trans[tanggal]</td>
                                <td>$trans[bulan]</td>
                                <td align='right'>" . number_format($trans['debit'], 0, ',', '.') . "</td>
                                <td align='right'>" . number_format($trans['kredit'], 0, ',', '.') . "</td>
                                <td>$trans[transaksi]</td>
                                <td>$trans[type]</td>
                                <td>$trans[bank]</td>
                                <td>$trans[bagian]</td>
                                <td>$trans[post]</td>
                                <td><a href='?kode=$trans[no]'> Hapus </a> </td>
                                <td><a href='../2025ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
                            </tr>";
                            }

                            $sql1="SELECT  SUM(debit) AS sum FROM tabel_transaksi where bulan='05' and $_POST[jenis] = '$_POST[cari]'";
                            $query_result=mysqli_query($koneksi, $sql1);
                            while($row=mysqli_fetch_assoc($query_result)){
                            $output_debit=$row['sum'];
                            }

                            $sql2="SELECT  SUM(kredit) AS sum FROM tabel_transaksi where bulan='05' and $_POST[jenis] = '$_POST[cari]'";
                            $query_result2=mysqli_query($koneksi, $sql2);
                            while($row2=mysqli_fetch_assoc($query_result2)){
                            $output_kredit=$row2['sum'];
                            }

                            $saldo = $output_debit - $output_kredit;
                            }
                        ?>
                    </table>
                    
                </div>

                <div class="main1">
                    Debit :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($output_debit,2,",",".");?>">
                    Kredit :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($output_kredit,2,",",".");?>">
                    Saldo :
                    <input type="text" name="debit" value="<?php echo ""."".number_format($saldo,2,",",".");?>">
                </div>

                
            </div>
        </div>
    </div>
</body>
</html>

