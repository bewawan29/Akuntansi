<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : ../index.php");
  exit;
include ("function2026.php");
}

?>
<link rel="stylesheet" href="../stylemaster.css">

<?php
include "koneksi2026.php";
$sql=mysqli_query($koneksi, "select * from tabel_memo where tanggal='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        textarea{
          width: 400px;
          height: 300px;
        }
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
          textarea{
            width: 350px;
          }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- judul -->
        <div class="judul">
          <div class="judul1">ver_25_05</div>
          <div class="judul2"><h2>UBAH DATA MEMO 2026</h2></div>
          <div class="judul3"></div>
        </div>

        <!-- navigasi -->
         <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <!-- <a href="logout.php">LOGOUT</a> -->
                <!-- <a href="2025.php">MENU</a> -->
                <a href="2026formmemo.php">BACK</a>
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

        <!-- utama -->
        <div class="utama">
          <form action="" method="post">
          <table>
            <tr>
              <td width="70">Tanggal</td>
              <td><input type="text" name="tanggal" value="<?php echo $data['tanggal'];?>"></td>
            </tr>
            <tr>
              <td>Hari</td>
              <td><input type="text" name="hari" value="<?php echo $data['hari'];?>"></td>
            </tr>
            <tr>
              <td>Memo</td>
              <td> <textarea name="memo"> <?php echo $data['memo'];?></textarea> </td>
            </tr>
            <tr>
              <td></td>
              <!-- <td><input type="submit" value="Simpan" name="proses"></td> -->
              <!-- <td><a href="formmemo.php"> <input type="button" value="MEMO" name="memo"> </a></td> -->
            </tr>
            
          </table>
          <button name="proses">Simpan</button>
          
          </form>
          
        </div>
        
    </div>
</body>
</html>








<?php
include "koneksi2026.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update tabel_memo set
    tanggal = '$_POST[tanggal]',
    hari = '$_POST[hari]',
    memo = '$_POST[memo]'
    where tanggal='$_GET[kode]'");
    
    echo "Data telah terupdate";
    echo "<meta http-enquiv=refresh content:2;URL='2026formmemo.php'>";
    header ("location:2026formmemo.php");
}

?>
