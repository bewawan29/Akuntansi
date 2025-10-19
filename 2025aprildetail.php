<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include ("hitung.php");
?>

<link rel="stylesheet" href="tyle2025aprildetail.css">
<?php 
include ("koneksi.php");

?>

<!doctype html>
<html>
    <style type="text/css">
        html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, 
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
        header{
            font-family: Arial;
            background-color: rgb(100, 104, 189);
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            color: white;
        }
        .topnav{
            background-color: black;
            overflow: hidden;
        }
        .topnav a{
            color: white;
            display: block;
            float: left;
            padding: 10px;
            text-decoration: none;
        }
        .topnav a:hover{
            background-color: white;
            color: black;
        }
        .side{
          width: 20%;
          height: 500px;
          background-color: rgb(172, 190, 190);
          float: left;
          padding: 5px;
          box-sizing: border-box;
          line-height: 30px;
        }
        .main{
            padding:10px;
            width: 80%;
            height: 500px;
            background-color: rgb(144, 187, 175);
            box-sizing: border-box;
            border: 3px solid red;
            float: left;
        }
        .utama1{
          color: red;
          box-sizing: border-box;
          text-align: center;
          
        }
        table{
        border-collapse:collapse;
        font-size:12pt;
        border:2px solid green;
        margin: auto;
        margin-top: 15px;
        }
        th{
          background-color:steelblue;
          color:yellow;
          height:30px;
        }
    </style>
<header>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    DETAIL DATA APRIL 2025
</header>

<body>
  <div class="topnav">
    <a href="logout.php">LOGOUT</a>
    <a href="2025.php">MENU</a>
    <a href="2025april.php">BACK</a>
  </div>
  
  <div class="container">
      <div class="side">
          <form action="" method="post">      
            Jenis : <br>
            <input type="text" name="jenis" value=""> <br>    
            Pencarian : <br>
            <input type="text" name="cari" value=""> <br><br>
            <input type="submit" name="proses" value="Cari">
          </form>
          <div class="post">
            <p>Rumah :</p>
            <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_rumah,2,",",".");?>"> <br>
            <p>Makan :</p>
            <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_makan,2,",",".");?>"> <br>
            <p>Kesehatan :</p>
            <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_kesehatan,2,",",".");?>"> <br>
            <p>Pendapatan :</p>
            <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_pendapatan,2,",",".");?>"> <br>
            <p>Gaji :</p>
            <input type="text" id="p01" value="<?php echo ""."".number_format($saldo_gaji,2,",",".");?>"> <br>
          </div>
      </div>

      <div class="main">
          <div class="utama1">
              
          </div>
          <table border = "1">
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
      </div>
  </div>

</body>
</html>

<?php
include ("koneksi.php");
if(isset($_POST['proses'])){
$sql="select * from tabel_transaksi where bulan='04' and $_POST[jenis] = '$_POST[cari]' order by no DESC";
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
  }
$sql1="SELECT  SUM(debit) AS sum FROM tabel_transaksi where bulan='04' and $_POST[jenis] = '$_POST[cari]'";
$query_result=mysqli_query($koneksi, $sql1);
while($row=mysqli_fetch_assoc($query_result)){
	$output_debit=$row['sum'];
}

$sql2="SELECT  SUM(kredit) AS sum FROM tabel_transaksi where bulan='04' and $_POST[jenis] = '$_POST[cari]'";
$query_result2=mysqli_query($koneksi, $sql2);
while($row2=mysqli_fetch_assoc($query_result2)){
	$output_kredit=$row2['sum'];
}

$saldo = $output_debit - $output_kredit;
}
?>

<div class="utama1">         
Debit :
<input type="text" name="debit" value="<?php echo ""."".number_format($output_debit,2,",",".");?>">
Kredit :
<input type="text" name="debit" value="<?php echo ""."".number_format($output_kredit,2,",",".");?>">
Saldo :
<input type="text" name="debit" value="<?php echo ""."".number_format($saldo,2,",",".");?>">

</div>