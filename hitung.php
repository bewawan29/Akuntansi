<?php
include ("koneksi.php")
?>

<!-- januari -->
<?php
    $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_januari=$row['sum'];
    }
?>
<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_januari=$row['sum'];
    }
?>
<!-- februari -->
<?php
    $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_februari=$row['sum'];
    }
?>
<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_februari=$row['sum'];
    }
?>
<!-- maret -->
<?php
    $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='03'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_maret=$row['sum'];
    }
?>
<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='03'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_maret=$row['sum'];
    }
?>
				<!-- april -->
<?php
    $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_april=$row['sum'];
    }
?>

<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_april=$row['sum'];
    }
?>

<!-- rumah -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah=$row['sum'];
    }
 ?>

 <!-- makan -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan=$row['sum'];
    }
 ?>

 <!-- kesehatan -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan=$row['sum'];
    }
 ?>

<!-- pendapatan -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan=$row['sum'];
    }
 ?>

<!-- gaji -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan = '04' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji=$row['sum'];
    }
 ?>
 <?php
	$saldo_rumah = $output_debit_rumah - $output_kredit_rumah;
	$saldo_makan = $output_debit_makan - $output_kredit_makan;
	$saldo_kesehatan = $output_debit_kesehatan - $output_kredit_kesehatan;
	$saldo_pendapatan = $output_debit_pendapatan - $output_kredit_pendapatan;
	$saldo_gaji = $output_debit_gaji - $output_kredit_gaji;

?>

				<!-- mei -->
<?php
    $query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_mei=$row['sum'];
    }
?>

<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_mei=$row['sum'];
    }
?>

<!-- BCA -->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'bca'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_bca=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'bca'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_bca=$row['sum'];
    }
 ?>

<!-- BSI -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'bsi'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_bsi=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'bsi'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_bsi=$row['sum'];
    }
 ?>

<!-- BRI -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'bri'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_bri=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'bri'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_bri=$row['sum'];
    }
 ?>

 <!-- niaga -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bank = 'niaga'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_niaga=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bank = 'niaga'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_niaga=$row['sum'];
    }
 ?>

 <!-- cash -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where type = 'cash'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_cash=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where type = 'cash'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_cash=$row['sum'];
    }
 ?>

 
<!-- total -->
<?php
    
    $saldo_januari=$output_debit_januari-$output_kredit_januari;
    $saldo_februari=$output_debit_februari-$output_kredit_februari;
    $saldo_maret=$output_debit_maret-$output_kredit_maret;
    $saldo_april=$output_debit_april-$output_kredit_april;
    $saldo_mei=$output_debit_mei-$output_kredit_mei;

	$saldo_bca = $output_debit_bca - $output_kredit_bca;
	$saldo_bsi = $output_debit_bsi - $output_kredit_bsi;
	$saldo_bri = $output_debit_bri - $output_kredit_bri;
	$saldo_niaga = $output_debit_niaga - $output_kredit_niaga;
	$saldo_cash = $output_debit_cash - $output_kredit_cash;

	
?>