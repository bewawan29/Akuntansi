<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_juni=$row['sum'];
    }
 ?>

<!-- rumah juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_juni=$row['sum'];
    }
 ?>

 <!-- makan juni-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_juni=$row['sum'];
    }
 ?>

<!-- kesehatan juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_juni=$row['sum'];
    }
 ?>

 <!-- pendapatan  juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_juni=$row['sum'];
    }
 ?>

 <!-- gaji juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_juni=$row['sum'];
    }
 ?>

<!-- lain-lain juni-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_juni=$row['sum'];
    }
 ?>


<!-- rumah umum juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_juni=$row['sum'];
    }
 ?>

 <!-- makan umum juni-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_juni=$row['sum'];
    }
 ?>

<!-- kesehatan umum juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_juni=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_juni=$row['sum'];
    }
 ?>

 <!-- gaji umum juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_juni=$row['sum'];
    }
 ?>

<!-- lain-lain umum juni-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_juni=$row['sum'];
    }
 ?>

<!-- rumah pribadi juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_juni=$row['sum'];
    }
 ?>

 <!-- makan pribadi juni-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_juni=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_juni=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_juni=$row['sum'];
    }
 ?>

 <!-- gaji pribadi juni -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_juni=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi juni-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_juni=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='06' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_juni=$row['sum'];
    }
 ?>

<?php
    $saldo_total_juni = $saldo_debit_juni - $saldo_kredit_juni;

    $saldo_rumah_juni = $output_debit_rumah_juni - $output_kredit_rumah_juni;
    $saldo_makan_juni = $output_debit_makan_juni - $output_kredit_makan_juni ;
    $saldo_kesehatan_juni = $output_debit_kesehatan_juni - $output_kredit_kesehatan_juni ;
    $saldo_pendapatan_juni = $output_debit_pendapatan_juni - $output_kredit_pendapatan_juni ;
    $saldo_gaji_juni = $output_debit_gaji_juni - $output_kredit_gaji_juni ;
    $saldo_lain_juni = $output_debit_lain_juni - $output_kredit_lain_juni ;

    $umum_rumah_juni = $umum_debit_rumah_juni - $umum_kredit_rumah_juni ;
    $umum_makan_juni = $umum_debit_makan_juni - $umum_kredit_makan_juni ;
    $umum_kesehatan_juni = $umum_debit_kesehatan_juni - $umum_kredit_kesehatan_juni ;
    $umum_pendapatan_juni = $umum_debit_pendapatan_juni - $umum_kredit_pendapatan_juni ;
    $umum_gaji_juni = $umum_debit_gaji_juni - $umum_kredit_gaji_juni ;
    $umum_lain_juni = $umum_debit_lain_juni - $umum_kredit_lain_juni ;

    $pribadi_rumah_juni = $pribadi_debit_rumah_juni - $pribadi_kredit_rumah_juni ;
    $pribadi_makan_juni = $pribadi_debit_makan_juni - $pribadi_kredit_makan_juni ;
    $pribadi_kesehatan_juni = $pribadi_debit_kesehatan_juni - $pribadi_kredit_kesehatan_juni ;
    $pribadi_pendapatan_juni = $pribadi_debit_pendapatan_juni - $pribadi_kredit_pendapatan_juni ;
    $pribadi_gaji_juni = $pribadi_debit_gaji_juni - $pribadi_kredit_gaji_juni ;
    $pribadi_lain_juni = $pribadi_debit_lain_juni - $pribadi_kredit_lain_juni ;

    $pengeluaran_juni = ((0-1)*($saldo_rumah_juni + $saldo_makan_juni+$saldo_kesehatan_juni+$saldo_lain_juni));
    $revenue_juni=$saldo_gaji_juni+$saldo_pendapatan_juni;
    $saldo_juni=$revenue_juni-$pengeluaran_juni;

    $pengeluaran_umum_juni = ((0-1)*($umum_rumah_juni + $umum_makan_juni+$umum_kesehatan_juni+$umum_lain_juni));
    $revenue_umum_juni=$umum_gaji_juni+$umum_pendapatan_juni;
    $saldo_umum_juni=$revenue_umum_juni-$pengeluaran_umum_juni;

    $pengeluaran_pribadi_juni = ((0-1)*($pribadi_rumah_juni + $pribadi_makan_juni+$pribadi_kesehatan_juni+$pribadi_lain_juni));
    $revenue_pribadi_juni=$pribadi_gaji_juni+$pribadi_pendapatan_juni;
    $saldo_pribadi_juni=$revenue_pribadi_juni-$pengeluaran_pribadi_juni;
?>