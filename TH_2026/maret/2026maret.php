<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../TH_2026/index.php");
  exit;
}
    include_once ("../koneksi2026.php");
    //include ("../hitung2026.php");
	include_once ("2026hitungmaret.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2026 maret</title>
    <link rel="stylesheet" href="../../stylemaster.css">
    <link rel="stylesheet" href="../../style2026januari.css?v=<?php echo time(); ?>">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
                <div class="judul1">ver_25_05</div>
                <div class="judul2"><h2>MARET 2026</h2></div>
                <div class="judul3"></div>           
        </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../TH_2026/logout.php">LOGOUT</a>
                <a href="../2026.php">BACK</a>
                <a href="2026maretdetail.php">DETAIL</a>
                <a href="2026typemaret.php">Umum/Pribadi</a>
            </div>

            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
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
                Total Debit :
                <input type="text" value="<?php echo ""."".number_format($output_debit_maret,2,",",".");?>"><br>
                Total Kredit :
                <input type="text" value="<?php echo ""."".number_format($output_kredit_maret,2,",",".");?>"><br>
                Total Saldo :
                <input type="text" value="<?php echo ""."".number_format($saldo_maret,2,",",".");?>">
            </div>
            <div class="main">
                <table>

                    <!-- <form id="p01" action="" method="post"> -->
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
                    <!-- </form> -->
                        <?php
                            $no=1;
                            $sql="select * from tabel_transaksi where bulan='03' order by no DESC";
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
                                <td><a href='ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
                                </tr>";
                            $no++;

                            }
                        ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
