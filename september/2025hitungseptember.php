<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_september=$row['sum'];
    }
 ?>

<!-- rumah september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_september=$row['sum'];
    }
 ?>

 <!-- makan september-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_september=$row['sum'];
    }
 ?>

<!-- kesehatan september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_september=$row['sum'];
    }
 ?>

 <!-- pendapatan  september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_september=$row['sum'];
    }
 ?>

 <!-- gaji september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_september=$row['sum'];
    }
 ?>

<!-- lain-lain september-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_september=$row['sum'];
    }
 ?>


<!-- rumah umum september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_september=$row['sum'];
    }
 ?>

 <!-- makan umum september-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_september=$row['sum'];
    }
 ?>

<!-- kesehatan umum september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_september=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_september=$row['sum'];
    }
 ?>

 <!-- gaji umum september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_september=$row['sum'];
    }
 ?>

<!-- lain-lain umum september-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_september=$row['sum'];
    }
 ?>

<!-- rumah pribadi september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_september=$row['sum'];
    }
 ?>

 <!-- makan pribadi september-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_september=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_september=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_september=$row['sum'];
    }
 ?>

 <!-- gaji pribadi september -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_september=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi september-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_september=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='09' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_september=$row['sum'];
    }
 ?>

<?php
    $saldo_total_september = $saldo_debit_september - $saldo_kredit_september;

    $saldo_rumah_september = $output_debit_rumah_september - $output_kredit_rumah_september;
    $saldo_makan_september = $output_debit_makan_september - $output_kredit_makan_september ;
    $saldo_kesehatan_september = $output_debit_kesehatan_september - $output_kredit_kesehatan_september ;
    $saldo_pendapatan_september = $output_debit_pendapatan_september - $output_kredit_pendapatan_september ;
    $saldo_gaji_september = $output_debit_gaji_september - $output_kredit_gaji_september ;
    $saldo_lain_september = $output_debit_lain_september - $output_kredit_lain_september ;

    $umum_rumah_september = $umum_debit_rumah_september - $umum_kredit_rumah_september ;
    $umum_makan_september = $umum_debit_makan_september - $umum_kredit_makan_september ;
    $umum_kesehatan_september = $umum_debit_kesehatan_september - $umum_kredit_kesehatan_september ;
    $umum_pendapatan_september = $umum_debit_pendapatan_september - $umum_kredit_pendapatan_september ;
    $umum_gaji_september = $umum_debit_gaji_september - $umum_kredit_gaji_september ;
    $umum_lain_september = $umum_debit_lain_september - $umum_kredit_lain_september ;

    $pribadi_rumah_september = $pribadi_debit_rumah_september - $pribadi_kredit_rumah_september ;
    $pribadi_makan_september = $pribadi_debit_makan_september - $pribadi_kredit_makan_september ;
    $pribadi_kesehatan_september = $pribadi_debit_kesehatan_september - $pribadi_kredit_kesehatan_september ;
    $pribadi_pendapatan_september = $pribadi_debit_pendapatan_september - $pribadi_kredit_pendapatan_september ;
    $pribadi_gaji_september = $pribadi_debit_gaji_september - $pribadi_kredit_gaji_september ;
    $pribadi_lain_september = $pribadi_debit_lain_september - $pribadi_kredit_lain_september ;

    $pengeluaran_september = ((0-1)*($saldo_rumah_september + $saldo_makan_september+$saldo_kesehatan_september+$saldo_lain_september));
    $revenue_september=$saldo_gaji_september+$saldo_pendapatan_september;
    $saldo_september=$revenue_september-$pengeluaran_september;

    $pengeluaran_umum_september = ((0-1)*($umum_rumah_september + $umum_makan_september+$umum_kesehatan_september+$umum_lain_september));
    $revenue_umum_september=$umum_gaji_september+$umum_pendapatan_september;
    $saldo_umum_september=$revenue_umum_september-$pengeluaran_umum_september;

    $pengeluaran_pribadi_september = ((0-1)*($pribadi_rumah_september + $pribadi_makan_september+$pribadi_kesehatan_september+$pribadi_lain_september));
    $revenue_pribadi_september=$pribadi_gaji_september+$pribadi_pendapatan_september;
    $saldo_pribadi_september=$revenue_pribadi_september-$pengeluaran_pribadi_september;
?>