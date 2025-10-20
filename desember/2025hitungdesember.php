<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_desember=$row['sum'];
    }
 ?>

<!-- rumah desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_desember=$row['sum'];
    }
 ?>

 <!-- makan desember-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_desember=$row['sum'];
    }
 ?>

<!-- kesehatan desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_desember=$row['sum'];
    }
 ?>

 <!-- pendapatan  desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_desember=$row['sum'];
    }
 ?>

 <!-- gaji desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_desember=$row['sum'];
    }
 ?>

<!-- lain-lain desember-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_desember=$row['sum'];
    }
 ?>


<!-- rumah umum desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_desember=$row['sum'];
    }
 ?>

 <!-- makan umum desember-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_desember=$row['sum'];
    }
 ?>

<!-- kesehatan umum desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_desember=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_desember=$row['sum'];
    }
 ?>

 <!-- gaji umum desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_desember=$row['sum'];
    }
 ?>

<!-- lain-lain umum desember-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_desember=$row['sum'];
    }
 ?>

<!-- rumah pribadi desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_desember=$row['sum'];
    }
 ?>

 <!-- makan pribadi desember-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_desember=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_desember=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_desember=$row['sum'];
    }
 ?>

 <!-- gaji pribadi desember -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_desember=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi desember-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_desember=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='12' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_desember=$row['sum'];
    }
 ?>

<?php
    $saldo_total_desember = $saldo_debit_desember - $saldo_kredit_desember;

    $saldo_rumah_desember = $output_debit_rumah_desember - $output_kredit_rumah_desember;
    $saldo_makan_desember = $output_debit_makan_desember - $output_kredit_makan_desember ;
    $saldo_kesehatan_desember = $output_debit_kesehatan_desember - $output_kredit_kesehatan_desember ;
    $saldo_pendapatan_desember = $output_debit_pendapatan_desember - $output_kredit_pendapatan_desember ;
    $saldo_gaji_desember = $output_debit_gaji_desember - $output_kredit_gaji_desember ;
    $saldo_lain_desember = $output_debit_lain_desember - $output_kredit_lain_desember ;

    $umum_rumah_desember = $umum_debit_rumah_desember - $umum_kredit_rumah_desember ;
    $umum_makan_desember = $umum_debit_makan_desember - $umum_kredit_makan_desember ;
    $umum_kesehatan_desember = $umum_debit_kesehatan_desember - $umum_kredit_kesehatan_desember ;
    $umum_pendapatan_desember = $umum_debit_pendapatan_desember - $umum_kredit_pendapatan_desember ;
    $umum_gaji_desember = $umum_debit_gaji_desember - $umum_kredit_gaji_desember ;
    $umum_lain_desember = $umum_debit_lain_desember - $umum_kredit_lain_desember ;

    $pribadi_rumah_desember = $pribadi_debit_rumah_desember - $pribadi_kredit_rumah_desember ;
    $pribadi_makan_desember = $pribadi_debit_makan_desember - $pribadi_kredit_makan_desember ;
    $pribadi_kesehatan_desember = $pribadi_debit_kesehatan_desember - $pribadi_kredit_kesehatan_desember ;
    $pribadi_pendapatan_desember = $pribadi_debit_pendapatan_desember - $pribadi_kredit_pendapatan_desember ;
    $pribadi_gaji_desember = $pribadi_debit_gaji_desember - $pribadi_kredit_gaji_desember ;
    $pribadi_lain_desember = $pribadi_debit_lain_desember - $pribadi_kredit_lain_desember ;

    $pengeluaran_desember = ((0-1)*($saldo_rumah_desember + $saldo_makan_desember+$saldo_kesehatan_desember+$saldo_lain_desember));
    $revenue_desember=$saldo_gaji_desember+$saldo_pendapatan_desember;
    $saldo_desember=$revenue_desember-$pengeluaran_desember;

    $pengeluaran_umum_desember = ((0-1)*($umum_rumah_desember + $umum_makan_desember+$umum_kesehatan_desember+$umum_lain_desember));
    $revenue_umum_desember=$umum_gaji_desember+$umum_pendapatan_desember;
    $saldo_umum_desember=$revenue_umum_desember-$pengeluaran_umum_desember;

    $pengeluaran_pribadi_desember = ((0-1)*($pribadi_rumah_desember + $pribadi_makan_desember+$pribadi_kesehatan_desember+$pribadi_lain_desember));
    $revenue_pribadi_desember=$pribadi_gaji_desember+$pribadi_pendapatan_desember;
    $saldo_pribadi_desember=$revenue_pribadi_desember-$pengeluaran_pribadi_desember;
?>