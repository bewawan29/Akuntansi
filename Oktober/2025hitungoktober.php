<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_oktober=$row['sum'];
    }
 ?>

<!-- rumah oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_oktober=$row['sum'];
    }
 ?>

 <!-- makan oktober-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_oktober=$row['sum'];
    }
 ?>

<!-- kesehatan oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_oktober=$row['sum'];
    }
 ?>

 <!-- pendapatan  oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_oktober=$row['sum'];
    }
 ?>

 <!-- gaji oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_oktober=$row['sum'];
    }
 ?>

<!-- lain-lain oktober-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_oktober=$row['sum'];
    }
 ?>


<!-- rumah umum oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_oktober=$row['sum'];
    }
 ?>

 <!-- makan umum oktober-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_oktober=$row['sum'];
    }
 ?>

<!-- kesehatan umum oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_oktober=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_oktober=$row['sum'];
    }
 ?>

 <!-- gaji umum oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_oktober=$row['sum'];
    }
 ?>

<!-- lain-lain umum oktober-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_oktober=$row['sum'];
    }
 ?>

<!-- rumah pribadi oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_oktober=$row['sum'];
    }
 ?>

 <!-- makan pribadi oktober-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_oktober=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_oktober=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_oktober=$row['sum'];
    }
 ?>

 <!-- gaji pribadi oktober -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_oktober=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi oktober-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_oktober=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='10' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_oktober=$row['sum'];
    }
 ?>

<?php
    $saldo_total_oktober = $saldo_debit_oktober - $saldo_kredit_oktober;

    $saldo_rumah_oktober = $output_debit_rumah_oktober - $output_kredit_rumah_oktober;
    $saldo_makan_oktober = $output_debit_makan_oktober - $output_kredit_makan_oktober ;
    $saldo_kesehatan_oktober = $output_debit_kesehatan_oktober - $output_kredit_kesehatan_oktober ;
    $saldo_pendapatan_oktober = $output_debit_pendapatan_oktober - $output_kredit_pendapatan_oktober ;
    $saldo_gaji_oktober = $output_debit_gaji_oktober - $output_kredit_gaji_oktober ;
    $saldo_lain_oktober = $output_debit_lain_oktober - $output_kredit_lain_oktober ;

    $umum_rumah_oktober = $umum_debit_rumah_oktober - $umum_kredit_rumah_oktober ;
    $umum_makan_oktober = $umum_debit_makan_oktober - $umum_kredit_makan_oktober ;
    $umum_kesehatan_oktober = $umum_debit_kesehatan_oktober - $umum_kredit_kesehatan_oktober ;
    $umum_pendapatan_oktober = $umum_debit_pendapatan_oktober - $umum_kredit_pendapatan_oktober ;
    $umum_gaji_oktober = $umum_debit_gaji_oktober - $umum_kredit_gaji_oktober ;
    $umum_lain_oktober = $umum_debit_lain_oktober - $umum_kredit_lain_oktober ;

    $pribadi_rumah_oktober = $pribadi_debit_rumah_oktober - $pribadi_kredit_rumah_oktober ;
    $pribadi_makan_oktober = $pribadi_debit_makan_oktober - $pribadi_kredit_makan_oktober ;
    $pribadi_kesehatan_oktober = $pribadi_debit_kesehatan_oktober - $pribadi_kredit_kesehatan_oktober ;
    $pribadi_pendapatan_oktober = $pribadi_debit_pendapatan_oktober - $pribadi_kredit_pendapatan_oktober ;
    $pribadi_gaji_oktober = $pribadi_debit_gaji_oktober - $pribadi_kredit_gaji_oktober ;
    $pribadi_lain_oktober = $pribadi_debit_lain_oktober - $pribadi_kredit_lain_oktober ;

    $pengeluaran_oktober = ((0-1)*($saldo_rumah_oktober + $saldo_makan_oktober+$saldo_kesehatan_oktober+$saldo_lain_oktober));
    $revenue_oktober=$saldo_gaji_oktober+$saldo_pendapatan_oktober;
    $saldo_oktober=$revenue_oktober-$pengeluaran_oktober;

    $pengeluaran_umum_oktober = ((0-1)*($umum_rumah_oktober + $umum_makan_oktober+$umum_kesehatan_oktober+$umum_lain_oktober));
    $revenue_umum_oktober=$umum_gaji_oktober+$umum_pendapatan_oktober;
    $saldo_umum_oktober=$revenue_umum_oktober-$pengeluaran_umum_oktober;

    $pengeluaran_pribadi_oktober = ((0-1)*($pribadi_rumah_oktober + $pribadi_makan_oktober+$pribadi_kesehatan_oktober+$pribadi_lain_oktober));
    $revenue_pribadi_oktober=$pribadi_gaji_oktober+$pribadi_pendapatan_oktober;
    $saldo_pribadi_oktober=$revenue_pribadi_oktober-$pengeluaran_pribadi_oktober;
?>