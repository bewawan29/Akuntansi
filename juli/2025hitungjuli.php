<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_juli=$row['sum'];
    }
 ?>

<!-- rumah juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_juli=$row['sum'];
    }
 ?>

 <!-- makan juli-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_juli=$row['sum'];
    }
 ?>

<!-- kesehatan juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_juli=$row['sum'];
    }
 ?>

 <!-- pendapatan  juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_juli=$row['sum'];
    }
 ?>

 <!-- gaji juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_juli=$row['sum'];
    }
 ?>

<!-- lain-lain juli-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_juli=$row['sum'];
    }
 ?>


<!-- rumah umum juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_juli=$row['sum'];
    }
 ?>

 <!-- makan umum juli-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_juli=$row['sum'];
    }
 ?>

<!-- kesehatan umum juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_juli=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_juli=$row['sum'];
    }
 ?>

 <!-- gaji umum juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_juli=$row['sum'];
    }
 ?>

<!-- lain-lain umum juli-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_juli=$row['sum'];
    }
 ?>

<!-- rumah pribadi juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_juli=$row['sum'];
    }
 ?>

 <!-- makan pribadi juli-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_juli=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_juli=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_juli=$row['sum'];
    }
 ?>

 <!-- gaji pribadi juli -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_juli=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi juli-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_juli=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='07' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_juli=$row['sum'];
    }
 ?>

<?php
    $saldo_total_juli = $saldo_debit_juli - $saldo_kredit_juli;

    $saldo_rumah_juli = $output_debit_rumah_juli - $output_kredit_rumah_juli;
    $saldo_makan_juli = $output_debit_makan_juli - $output_kredit_makan_juli ;
    $saldo_kesehatan_juli = $output_debit_kesehatan_juli - $output_kredit_kesehatan_juli ;
    $saldo_pendapatan_juli = $output_debit_pendapatan_juli - $output_kredit_pendapatan_juli ;
    $saldo_gaji_juli = $output_debit_gaji_juli - $output_kredit_gaji_juli ;
    $saldo_lain_juli = $output_debit_lain_juli - $output_kredit_lain_juli ;

    $umum_rumah_juli = $umum_debit_rumah_juli - $umum_kredit_rumah_juli ;
    $umum_makan_juli = $umum_debit_makan_juli - $umum_kredit_makan_juli ;
    $umum_kesehatan_juli = $umum_debit_kesehatan_juli - $umum_kredit_kesehatan_juli ;
    $umum_pendapatan_juli = $umum_debit_pendapatan_juli - $umum_kredit_pendapatan_juli ;
    $umum_gaji_juli = $umum_debit_gaji_juli - $umum_kredit_gaji_juli ;
    $umum_lain_juli = $umum_debit_lain_juli - $umum_kredit_lain_juli ;

    $pribadi_rumah_juli = $pribadi_debit_rumah_juli - $pribadi_kredit_rumah_juli ;
    $pribadi_makan_juli = $pribadi_debit_makan_juli - $pribadi_kredit_makan_juli ;
    $pribadi_kesehatan_juli = $pribadi_debit_kesehatan_juli - $pribadi_kredit_kesehatan_juli ;
    $pribadi_pendapatan_juli = $pribadi_debit_pendapatan_juli - $pribadi_kredit_pendapatan_juli ;
    $pribadi_gaji_juli = $pribadi_debit_gaji_juli - $pribadi_kredit_gaji_juli ;
    $pribadi_lain_juli = $pribadi_debit_lain_juli - $pribadi_kredit_lain_juli ;

    $pengeluaran_juli = ((0-1)*($saldo_rumah_juli + $saldo_makan_juli+$saldo_kesehatan_juli+$saldo_lain_juli));
    $revenue_juli=$saldo_gaji_juli+$saldo_pendapatan_juli;
    $saldo_juli=$revenue_juli-$pengeluaran_juli;

    $pengeluaran_umum_juli = ((0-1)*($umum_rumah_juli + $umum_makan_juli+$umum_kesehatan_juli+$umum_lain_juli));
    $revenue_umum_juli=$umum_gaji_juli+$umum_pendapatan_juli;
    $saldo_umum_juli=$revenue_umum_juli-$pengeluaran_umum_juli;

    $pengeluaran_pribadi_juli = ((0-1)*($pribadi_rumah_juli + $pribadi_makan_juli+$pribadi_kesehatan_juli+$pribadi_lain_juli));
    $revenue_pribadi_juli=$pribadi_gaji_juli+$pribadi_pendapatan_juli;
    $saldo_pribadi_juli=$revenue_pribadi_juli-$pengeluaran_pribadi_juli;
?>