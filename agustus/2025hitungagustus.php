<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_agustus=$row['sum'];
    }
 ?>

<!-- rumah agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_agustus=$row['sum'];
    }
 ?>

 <!-- makan agustus-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_agustus=$row['sum'];
    }
 ?>

<!-- kesehatan agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_agustus=$row['sum'];
    }
 ?>

 <!-- pendapatan  agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_agustus=$row['sum'];
    }
 ?>

 <!-- gaji agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_agustus=$row['sum'];
    }
 ?>

<!-- lain-lain agustus-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_agustus=$row['sum'];
    }
 ?>


<!-- rumah umum agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_agustus=$row['sum'];
    }
 ?>

 <!-- makan umum agustus-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_agustus=$row['sum'];
    }
 ?>

<!-- kesehatan umum agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_agustus=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_agustus=$row['sum'];
    }
 ?>

 <!-- gaji umum agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_agustus=$row['sum'];
    }
 ?>

<!-- lain-lain umum agustus-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_agustus=$row['sum'];
    }
 ?>

<!-- rumah pribadi agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_agustus=$row['sum'];
    }
 ?>

 <!-- makan pribadi agustus-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_agustus=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_agustus=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_agustus=$row['sum'];
    }
 ?>

 <!-- gaji pribadi agustus -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_agustus=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi agustus-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_agustus=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='08' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_agustus=$row['sum'];
    }
 ?>

<?php
    $saldo_total_agustus = $saldo_debit_agustus - $saldo_kredit_agustus;

    $saldo_rumah_agustus = $output_debit_rumah_agustus - $output_kredit_rumah_agustus;
    $saldo_makan_agustus = $output_debit_makan_agustus - $output_kredit_makan_agustus ;
    $saldo_kesehatan_agustus = $output_debit_kesehatan_agustus - $output_kredit_kesehatan_agustus ;
    $saldo_pendapatan_agustus = $output_debit_pendapatan_agustus - $output_kredit_pendapatan_agustus ;
    $saldo_gaji_agustus = $output_debit_gaji_agustus - $output_kredit_gaji_agustus ;
    $saldo_lain_agustus = $output_debit_lain_agustus - $output_kredit_lain_agustus ;

    $umum_rumah_agustus = $umum_debit_rumah_agustus - $umum_kredit_rumah_agustus ;
    $umum_makan_agustus = $umum_debit_makan_agustus - $umum_kredit_makan_agustus ;
    $umum_kesehatan_agustus = $umum_debit_kesehatan_agustus - $umum_kredit_kesehatan_agustus ;
    $umum_pendapatan_agustus = $umum_debit_pendapatan_agustus - $umum_kredit_pendapatan_agustus ;
    $umum_gaji_agustus = $umum_debit_gaji_agustus - $umum_kredit_gaji_agustus ;
    $umum_lain_agustus = $umum_debit_lain_agustus - $umum_kredit_lain_agustus ;

    $pribadi_rumah_agustus = $pribadi_debit_rumah_agustus - $pribadi_kredit_rumah_agustus ;
    $pribadi_makan_agustus = $pribadi_debit_makan_agustus - $pribadi_kredit_makan_agustus ;
    $pribadi_kesehatan_agustus = $pribadi_debit_kesehatan_agustus - $pribadi_kredit_kesehatan_agustus ;
    $pribadi_pendapatan_agustus = $pribadi_debit_pendapatan_agustus - $pribadi_kredit_pendapatan_agustus ;
    $pribadi_gaji_agustus = $pribadi_debit_gaji_agustus - $pribadi_kredit_gaji_agustus ;
    $pribadi_lain_agustus = $pribadi_debit_lain_agustus - $pribadi_kredit_lain_agustus ;

    $pengeluaran_agustus = ((0-1)*($saldo_rumah_agustus + $saldo_makan_agustus+$saldo_kesehatan_agustus+$saldo_lain_agustus));
    $revenue_agustus=$saldo_gaji_agustus+$saldo_pendapatan_agustus;
    $saldo_agustus=$revenue_agustus-$pengeluaran_agustus;

    $pengeluaran_umum_agustus = ((0-1)*($umum_rumah_agustus + $umum_makan_agustus+$umum_kesehatan_agustus+$umum_lain_agustus));
    $revenue_umum_agustus=$umum_gaji_agustus+$umum_pendapatan_agustus;
    $saldo_umum_agustus=$revenue_umum_agustus-$pengeluaran_umum_agustus;

    $pengeluaran_pribadi_agustus = ((0-1)*($pribadi_rumah_agustus + $pribadi_makan_agustus+$pribadi_kesehatan_agustus+$pribadi_lain_agustus));
    $revenue_pribadi_agustus=$pribadi_gaji_agustus+$pribadi_pendapatan_agustus;
    $saldo_pribadi_agustus=$revenue_pribadi_agustus-$pengeluaran_pribadi_agustus;
?>