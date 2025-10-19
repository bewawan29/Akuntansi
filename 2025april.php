<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
include ("hitung.php");
?>

<link rel="stylesheet" href="style2025april.css">

<!doctype html>
<html>
	<style>
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
	        height: 400px;
	        background-color: rgb(172, 190, 190);
	        float: left;
	        padding: 5px;
	        box-sizing: border-box;
	        line-height: 30px;
		}
		.main{
            /* padding:10px;
            width: 80%;
            height: 400px;
            background-color: rgb(144, 187, 175);
            box-sizing: border-box;
            border: 3px solid red;
            float: left; */
			height: 500px;
        	background-color:lightblue;
        	width:80%;
        	display: inline-block;
			box-sizing: border-box;
			float:right;
        }
		.overflow{
			border:1px solid red;
        	width: 80%;
        	height: 450px;
        	overflow: scroll;
        	box-sizing: border-box;
        	margin:auto;
			padding:20px;
		}
		table{
			margin:auto;
		}
        table, tr, td{
			font-size:12pt;
			border:1px solid green;
	  	}
		  th{
			background-color:steelblue;
			color:yellow;
			height:30px;
			border:1px solid green;
		  }
	</style>

<body>
	<header>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<h3>DATA APRIL 2025</h3>
	</header>

	<div class="topnav">
		<a href="logout.php">LOGOUT</a>
		<a href="2025.php">BACK</a>
		<a href="2025aprildetail.php">DETAIL</a>
	</div>

	<div class="container">
		<div class="side">
			Total Debit :
			 <input type="text" value="<?php echo ""."".number_format($output_debit_april,2,",",".");?>"><br>
			Total Kredit :
			<input type="text" value="<?php echo ""."".number_format($output_kredit_april,2,",",".");?>"><br>
			Total Saldo :
			<input type="text" value="<?php echo ""."".number_format($saldo_april,2,",",".");?>">
		  <div class="bank">
				Cash :
				<input type="text" value="<?php echo ""."".number_format($saldo_cash,2,",",".");?>"><br>
		  </div>
		</div>
		<div class="main">
			<div class="overflow">
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
$sql="select * from tabel_transaksi where bulan='04' order by no DESC";
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
	
if(isset($_POST['keindex'])){
	header("location:menu.php");
	echo "<meta http-enquiv=refresh content=2;URL:'menu.php'>";
}
}
?>
			</table>
			
			</div>
			
			
		</div>
	</div>

</body>
</html>


    

