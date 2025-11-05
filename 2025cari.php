<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleversi.css">
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
        .main{
            display: grid;
        }
        .main2{
            order: -1;
        }
        
        /* responsive */
        @media (max-width: 450px){
            /* judul */
            .judul{
                background-color: blue;
                color: white;
                font-size:0.7rem;
            }

            /* utama */
            .utama{
                display: grid;
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
            .side{
                font-size: 1rem;
                line-height: 1.5rem;
            }
            .main{
                display: grid;
                overflow: scroll;
            }
            .main2{
                order: -1;
                font-size: 0.8rem;
            }
        }
       
    </style>
</head>
<body>
    <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>PENCARIAN 2025</h2></div>
            <div class="judul3"></div>           
    </div>
    
    <nav>
        <div class="menu">
            <a href="logout.php">LOGOUT</a>
            <a href="2025.php">BACK</a>
        </div>
        <div class="sub-menu">
            <?php echo date("l, d-M-Y"); ?>
            <div id="clock"></div>
        </div>
        <script src="waktu.js"></script>
    </nav>
    
    <div class="utama">
        <div class="side">
            <div class="side1">
                <form action="" method="post">
                <tr>
                    <td> Jenis </td><br>
                    <td>
                        <select type="text" name="jenis">
                                <option>tanggal</option>
                                <option>bulan</option>
                                <option>type</option>
                                <option>bank</option>
                                <option>bagian</option>
                                <option>post</option>
                                <option>transaksi</option>
                        </select>
                    </td>
                </tr> <br>
                <tr>
                    <td> Key </td><br>
                    <td> <input type="text" name="input"> </td> 
                </tr>
            </div>
            <div class="side2">
                <input type="submit" value="cari" name="proses">
            </div>
            
                <tr>
                    <td>  </td>
                </tr>
            </form>
        </div>
        <div class="main">
            <div class="main1">
                <?php
                    $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where $_POST[jenis] LIKE '%$_POST[input]%'";
                    $query_result=mysqli_query($koneksi, $query);
                    while($row=mysqli_fetch_assoc($query_result)){
                        $output_debit_cari=$row['sum'];
                    }
                    ?>
                    <?php
                    $query2="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where $_POST[jenis] LIKE '%$_POST[input]%'";
                    $query_result2=mysqli_query($koneksi, $query2);
                    while($row2=mysqli_fetch_assoc($query_result2)){
                        $output_kredit_cari=$row2['sum'];
                    }
                ?>
                <?php
                    $saldo = $output_debit_cari - $output_kredit_cari
                ?>
                    
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
                        <th>Transaksi</th>
                        <th colspan="2">Aksi </th>
                    </tr>
                

                    <?php
                        if(isset($_POST['proses'])){
                        $sql="select * from tabel_transaksi where $_POST[jenis] LIKE '%$_POST[input]%' order by no DESC";
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
                        <td><a href='2025ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
                        </tr>";
                        }
                        }
                    ?>
                    <?php
                        if(isset($_POST['caritrans'])){
                        $sql2="select * from tabel_transaksi where transaksi LIKE '%$_POST[transaksi]%' order by no DESC";
                        $query2=mysqli_query($koneksi,$sql2);

                        while($trans2=mysqli_fetch_array($query2)){
                        echo"
                            <tr>
                            <td>$trans2[no]</td>
                            <td>$trans2[tanggal]</td>
                            <td>$trans2[bulan]</td>
                            <td>$trans2[debit]</td>
                            <td>$trans2[kredit]</td>
                            <td>$trans2[transaksi]</td>
                            <td>$trans2[type]</td>
                            <td>$trans2[bank]</td>
                            <td>$trans2[bagian]</td>
                            <td>$trans2[post]</td>
                            <td><a href='?kode=$trans2[no]'> Hapus </a> </td>
                            <td><a href='ubahtransaksi.php?kode=$trans2[no]'> Ubah </a> </td> 
                            </tr>";
                        }
                        }
                    ?>
                </table>
            </div>
            
            <div class="main2">
                Debit :<input type="text" value="<?php echo ""."".number_format($output_debit_cari,2,",",".");?>">
                Kredit :<input type="text" value="<?php echo ""."".number_format($output_kredit_cari,2,",",".");?>">
                Saldo :<input type="text" value="<?php echo ""."".number_format($saldo,2,",",".");?>">
            </div>
        </div>
    </div>

    <div class="footer">FOOTER</div>
</body>
</html>