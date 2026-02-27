<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : ../index.php");
  exit;
    
    include "function2026.php";
}

?>
<link rel="stylesheet" href="../stylemaster.css">
<link rel="stylesheet" href="../style2026ubahtransaksi.css">

<?php
ob_start();
include "koneksi2026.php";
$sql=mysqli_query($koneksi, "select * from tabel_transaksi where no='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle> </tittle>
    </head>
    <!--<style>
        button{
            width: 100px;
            height: 30px;
            color:red;
           margin: 10px 10px;
        }

        @media only screen and (max-width: 450px){
          .container .judul{
            font-size: 0.7rem;
          }
          
        }
    </style> -->
<body>
    <div class="container">
        <!-- judul -->
        <div class="judul">
          <div class="judul1">ver_25_05</div>
          <div class="judul2"><h2>UBAH DATA TRANSAKSI 2026</h2></div>
          <div class="judul3"></div>
        </div>     
        
        <!-- navigasi -->
         <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <!-- <a href="logout.php">LOGOUT</a> -->
                <!-- <a href="2025.php">MENU</a> -->
                <a href="2026formtransaksi.php">BACK</a>
                <!-- <a href="2025gabung.php">GABUNG</a> -->
                <!-- <a href="2025carimemo.php">CARI</a> -->
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../waktu.js"></script>
            <script src="mundur2026.js?v=<?php echo time(); ?>"></script>
            <script>
                function muncul() {
                    document.getElementById("hide").style.display = "block";
                }
            </script>
        </nav>
    </div>

    
    <form action="" method="post">
    <table>
        <tr>
            <td width="120">No</td>
            <td> <input type="number" name="no" value="<?php echo $data['no'];?>"> </td>
        </tr>

        <tr>
            <td>Tanggal</td>
            <td> <input type="date" name="tanggal" value="<?php echo $data['tanggal'];?>"> </td>
        </tr>

        <tr>
            <td>Bulan</td>
            <td> <input type="number" name="bulan" value="<?php echo $data['bulan'];?>"> </td>
        </tr>

        <tr>
            <td>Debit</td>
            <td> <input type="number" name="debit" value="<?php echo $data['debit'];?>"> </td>
        </tr>

        <tr>
            <td>Kredit</td>
            <td> <input type="number" name="kredit" value="<?php echo $data['kredit'];?>"> </td>
        </tr>

        <tr>
            <td>Transaksi</td>
            <td> <input type="text" name="transaksi" value="<?php echo $data['transaksi'];?>"> </td>
        </tr>

        <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="<?php echo $data['type'];?>"> </td>
            <td> <input type="radio" name="type" value="Bank">Bank
                <input type="radio" name="type" value="Cash">Cash
            </td>
        </tr>

        <tr>
            <td>Bank</td>
            <td><input type="text" name="bank" value="<?php echo $data['bank'];?>"> </td>
            <td> 
            <select type="text" name="bank">
                <option></option>
                <option>BCA</option>
                <option>BRI</option>
                <option>BSI</option>
                <option>Niaga</option>
                <option>BNI</option>
<<<<<<< HEAD
                <option>MANDIRI</option>
=======
>>>>>>> f7f64dc15ed43d05079503e8ac9875376b513dfb
            </select>
            </td>
        </tr>

        <tr>
            <td>Bagian</td>
            <td><input type="text" name="bagian" value="<?php echo $data['bagian'];?>"> </td>
            <td>
                <select type="text" name="bagian">
                        <option>Umum</option>
                        <option>Pribadi</option>
                        <option>Bank</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Post</td>
            <td><input type="text" name="post" value="<?php echo $data['post'];?>"> </td>
            <td>
                <select type="text" name="post">
                <option></option>
                    <option>Rumah</option>
                    <option>Makan</option>
                    <option>Kesehatan</option>
                    <option>Internet</option>
                    <option>Kendaraan</option>
                    <option>Transport</option>
                    <option>Pendapatan</option>
                    <option>Gaji</option>
                    <option>Pinjaman</option>
                    <option>Lain-lain</option>
                </select>
            </td>
        </tr>

        <tr>
		    <td></td>
            <td>
                <!-- <input type="submit" value="simpan" name="proses"> -->
            </td>
            <td>
                <!-- <a href="formtransaksi.php"> <input type="button" value="TRANSAKSI" name="transaksi"> </a> -->
		    </td>
            
	    </tr>
    </table>
    <button name="proses">Simpan</button>
    </form>
    
    
</body>
</html>

<?php
include "koneksi2026.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi,"update tabel_transaksi set
	
	tanggal = '$_POST[tanggal]',
	bulan = '$_POST[bulan]',
	debit = '$_POST[debit]',
	kredit = '$_POST[kredit]',
	transaksi = '$_POST[transaksi]',
	type = '$_POST[type]',
	bank = '$_POST[bank]',
	bagian = '$_POST[bagian]',
	post = '$_POST[post]'
    where no='$_GET[kode]'
    ");
	
	echo "Data telah tersimpan";
    echo "<meta http-enquiv=refresh content=2;URL='2026formtransaksi.php'>";
	header ("location:2026formtransaksi.php");
}
?>
