<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_mei=$row['sum'];
    }
 ?>

<!-- rumah mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_mei=$row['sum'];
    }
 ?>

 <!-- makan mei-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_mei=$row['sum'];
    }
 ?>

<!-- kesehatan mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_mei=$row['sum'];
    }
 ?>

 <!-- pendapatan  mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_mei=$row['sum'];
    }
 ?>

 <!-- gaji mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_mei=$row['sum'];
    }
 ?>

<!-- lain-lain mei-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_mei=$row['sum'];
    }
 ?>


<!-- rumah umum mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_mei=$row['sum'];
    }
 ?>

 <!-- makan umum mei-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_mei=$row['sum'];
    }
 ?>

<!-- kesehatan umum mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_mei=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_mei=$row['sum'];
    }
 ?>

 <!-- gaji umum mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_mei=$row['sum'];
    }
 ?>

<!-- lain-lain umum mei-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_mei=$row['sum'];
    }
 ?>

<!-- rumah pribadi mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_mei=$row['sum'];
    }
 ?>

 <!-- makan pribadi mei-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_mei=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_mei=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_mei=$row['sum'];
    }
 ?>

 <!-- gaji pribadi mei -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_mei=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi mei-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_mei=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='05' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_mei=$row['sum'];
    }
 ?>

<?php
    $saldo_total_mei = $saldo_debit_mei - $saldo_kredit_mei;

    $saldo_rumah_mei = $output_debit_rumah_mei - $output_kredit_rumah_mei;
    $saldo_makan_mei = $output_debit_makan_mei - $output_kredit_makan_mei ;
    $saldo_kesehatan_mei = $output_debit_kesehatan_mei - $output_kredit_kesehatan_mei ;
    $saldo_pendapatan_mei = $output_debit_pendapatan_mei - $output_kredit_pendapatan_mei ;
    $saldo_gaji_mei = $output_debit_gaji_mei - $output_kredit_gaji_mei ;
    $saldo_lain_mei = $output_debit_lain_mei - $output_kredit_lain_mei ;

    $umum_rumah_mei = $umum_debit_rumah_mei - $umum_kredit_rumah_mei ;
    $umum_makan_mei = $umum_debit_makan_mei - $umum_kredit_makan_mei ;
    $umum_kesehatan_mei = $umum_debit_kesehatan_mei - $umum_kredit_kesehatan_mei ;
    $umum_pendapatan_mei = $umum_debit_pendapatan_mei - $umum_kredit_pendapatan_mei ;
    $umum_gaji_mei = $umum_debit_gaji_mei - $umum_kredit_gaji_mei ;
    $umum_lain_mei = $umum_debit_lain_mei - $umum_kredit_lain_mei ;

    $pribadi_rumah_mei = $pribadi_debit_rumah_mei - $pribadi_kredit_rumah_mei ;
    $pribadi_makan_mei = $pribadi_debit_makan_mei - $pribadi_kredit_makan_mei ;
    $pribadi_kesehatan_mei = $pribadi_debit_kesehatan_mei - $pribadi_kredit_kesehatan_mei ;
    $pribadi_pendapatan_mei = $pribadi_debit_pendapatan_mei - $pribadi_kredit_pendapatan_mei ;
    $pribadi_gaji_mei = $pribadi_debit_gaji_mei - $pribadi_kredit_gaji_mei ;
    $pribadi_lain_mei = $pribadi_debit_lain_mei - $pribadi_kredit_lain_mei ;

    $pengeluaran_mei = ((0-1)*($saldo_rumah_mei + $saldo_makan_mei+$saldo_kesehatan_mei+$saldo_lain_mei));
    $revenue_mei=$saldo_gaji_mei+$saldo_pendapatan_mei;
    $saldo_mei=$revenue_mei-$pengeluaran_mei;

    $pengeluaran_umum_mei = ((0-1)*($umum_rumah_mei + $umum_makan_mei+$umum_kesehatan_mei+$umum_lain_mei));
    $revenue_umum_mei=$umum_gaji_mei+$umum_pendapatan_mei;
    $saldo_umum_mei=$revenue_umum_mei-$pengeluaran_umum_mei;

    $pengeluaran_pribadi_mei = ((0-1)*($pribadi_rumah_mei + $pribadi_makan_mei+$pribadi_kesehatan_mei+$pribadi_lain_mei));
    $revenue_pribadi_mei=$pribadi_gaji_mei+$pribadi_pendapatan_mei;
    $saldo_pribadi_mei=$revenue_pribadi_mei-$pengeluaran_pribadi_mei;
?>