<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_november=$row['sum'];
    }
 ?>

<!-- rumah november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_november=$row['sum'];
    }
 ?>

 <!-- makan november-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_november=$row['sum'];
    }
 ?>

<!-- kesehatan november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_november=$row['sum'];
    }
 ?>

 <!-- pendapatan  november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_november=$row['sum'];
    }
 ?>

 <!-- gaji november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_november=$row['sum'];
    }
 ?>

<!-- lain-lain november-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_november=$row['sum'];
    }
 ?>


<!-- rumah umum november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_november=$row['sum'];
    }
 ?>

 <!-- makan umum november-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_november=$row['sum'];
    }
 ?>

<!-- kesehatan umum november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_november=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_november=$row['sum'];
    }
 ?>

 <!-- gaji umum november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_november=$row['sum'];
    }
 ?>

<!-- lain-lain umum november-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_november=$row['sum'];
    }
 ?>

<!-- rumah pribadi november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_november=$row['sum'];
    }
 ?>

 <!-- makan pribadi november-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_november=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_november=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_november=$row['sum'];
    }
 ?>

 <!-- gaji pribadi november -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_november=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi november-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_november=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='11' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_november=$row['sum'];
    }
 ?>

<?php
    $saldo_total_november = $saldo_debit_november - $saldo_kredit_november;

    $saldo_rumah_november = $output_debit_rumah_november - $output_kredit_rumah_november;
    $saldo_makan_november = $output_debit_makan_november - $output_kredit_makan_november ;
    $saldo_kesehatan_november = $output_debit_kesehatan_november - $output_kredit_kesehatan_november ;
    $saldo_pendapatan_november = $output_debit_pendapatan_november - $output_kredit_pendapatan_november ;
    $saldo_gaji_november = $output_debit_gaji_november - $output_kredit_gaji_november ;
    $saldo_lain_november = $output_debit_lain_november - $output_kredit_lain_november ;

    $umum_rumah_november = $umum_debit_rumah_november - $umum_kredit_rumah_november ;
    $umum_makan_november = $umum_debit_makan_november - $umum_kredit_makan_november ;
    $umum_kesehatan_november = $umum_debit_kesehatan_november - $umum_kredit_kesehatan_november ;
    $umum_pendapatan_november = $umum_debit_pendapatan_november - $umum_kredit_pendapatan_november ;
    $umum_gaji_november = $umum_debit_gaji_november - $umum_kredit_gaji_november ;
    $umum_lain_november = $umum_debit_lain_november - $umum_kredit_lain_november ;

    $pribadi_rumah_november = $pribadi_debit_rumah_november - $pribadi_kredit_rumah_november ;
    $pribadi_makan_november = $pribadi_debit_makan_november - $pribadi_kredit_makan_november ;
    $pribadi_kesehatan_november = $pribadi_debit_kesehatan_november - $pribadi_kredit_kesehatan_november ;
    $pribadi_pendapatan_november = $pribadi_debit_pendapatan_november - $pribadi_kredit_pendapatan_november ;
    $pribadi_gaji_november = $pribadi_debit_gaji_november - $pribadi_kredit_gaji_november ;
    $pribadi_lain_november = $pribadi_debit_lain_november - $pribadi_kredit_lain_november ;

    $pengeluaran_november = ((0-1)*($saldo_rumah_november + $saldo_makan_november+$saldo_kesehatan_november+$saldo_lain_november));
    $revenue_november=$saldo_gaji_november+$saldo_pendapatan_november;
    $saldo_november=$revenue_november-$pengeluaran_november;

    $pengeluaran_umum_november = ((0-1)*($umum_rumah_november + $umum_makan_november+$umum_kesehatan_november+$umum_lain_november));
    $revenue_umum_november=$umum_gaji_november+$umum_pendapatan_november;
    $saldo_umum_november=$revenue_umum_november-$pengeluaran_umum_november;

    $pengeluaran_pribadi_november = ((0-1)*($pribadi_rumah_november + $pribadi_makan_november+$pribadi_kesehatan_november+$pribadi_lain_november));
    $revenue_pribadi_november=$pribadi_gaji_november+$pribadi_pendapatan_november;
    $saldo_pribadi_november=$revenue_pribadi_november-$pengeluaran_pribadi_november;
?>