<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_februari=$row['sum'];
    }
 ?>

<!-- rumah februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_februari=$row['sum'];
    }
 ?>

 <!-- makan februari-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_februari=$row['sum'];
    }
 ?>

<!-- kesehatan februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_februari=$row['sum'];
    }
 ?>

 <!-- pendapatan  februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_februari=$row['sum'];
    }
 ?>

 <!-- gaji februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_februari=$row['sum'];
    }
 ?>

<!-- lain-lain februari-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_februari=$row['sum'];
    }
 ?>


<!-- rumah umum februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_februari=$row['sum'];
    }
 ?>

 <!-- makan umum februari-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_februari=$row['sum'];
    }
 ?>

<!-- kesehatan umum februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_februari=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_februari=$row['sum'];
    }
 ?>

 <!-- gaji umum februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_februari=$row['sum'];
    }
 ?>

<!-- lain-lain umum februari-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_februari=$row['sum'];
    }
 ?>

<!-- rumah pribadi februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_februari=$row['sum'];
    }
 ?>

 <!-- makan pribadi februari-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_februari=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_februari=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_februari=$row['sum'];
    }
 ?>

 <!-- gaji pribadi februari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_februari=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi februari-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_februari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='02' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_februari=$row['sum'];
    }
 ?>

<?php
    $saldo_total_februari = $saldo_debit_februari - $saldo_kredit_februari;

    $saldo_rumah_februari = $output_debit_rumah_februari - $output_kredit_rumah_februari;
    $saldo_makan_februari = $output_debit_makan_februari - $output_kredit_makan_februari ;
    $saldo_kesehatan_februari = $output_debit_kesehatan_februari - $output_kredit_kesehatan_februari ;
    $saldo_pendapatan_februari = $output_debit_pendapatan_februari - $output_kredit_pendapatan_februari ;
    $saldo_gaji_februari = $output_debit_gaji_februari - $output_kredit_gaji_februari ;
    $saldo_lain_februari = $output_debit_lain_februari - $output_kredit_lain_februari ;

    $umum_rumah_februari = $umum_debit_rumah_februari - $umum_kredit_rumah_februari ;
    $umum_makan_februari = $umum_debit_makan_februari - $umum_kredit_makan_februari ;
    $umum_kesehatan_februari = $umum_debit_kesehatan_februari - $umum_kredit_kesehatan_februari ;
    $umum_pendapatan_februari = $umum_debit_pendapatan_februari - $umum_kredit_pendapatan_februari ;
    $umum_gaji_februari = $umum_debit_gaji_februari - $umum_kredit_gaji_februari ;
    $umum_lain_februari = $umum_debit_lain_februari - $umum_kredit_lain_februari ;

    $pribadi_rumah_februari = $pribadi_debit_rumah_februari - $pribadi_kredit_rumah_februari ;
    $pribadi_makan_februari = $pribadi_debit_makan_februari - $pribadi_kredit_makan_februari ;
    $pribadi_kesehatan_februari = $pribadi_debit_kesehatan_februari - $pribadi_kredit_kesehatan_februari ;
    $pribadi_pendapatan_februari = $pribadi_debit_pendapatan_februari - $pribadi_kredit_pendapatan_februari ;
    $pribadi_gaji_februari = $pribadi_debit_gaji_februari - $pribadi_kredit_gaji_februari ;
    $pribadi_lain_februari = $pribadi_debit_lain_februari - $pribadi_kredit_lain_februari ;

    $pengeluaran_februari = ((0-1)*($saldo_rumah_februari + $saldo_makan_februari+$saldo_kesehatan_februari+$saldo_lain_februari));
    $revenue_februari=$saldo_gaji_februari+$saldo_pendapatan_februari;
    $saldo_februari=$revenue_februari-$pengeluaran_februari;

    $pengeluaran_umum_februari = ((0-1)*($umum_rumah_februari + $umum_makan_februari+$umum_kesehatan_februari+$umum_lain_februari));
    $revenue_umum_februari=$umum_gaji_februari+$umum_pendapatan_februari;
    $saldo_umum_februari=$revenue_umum_februari-$pengeluaran_umum_februari;

    $pengeluaran_pribadi_februari = ((0-1)*($pribadi_rumah_februari + $pribadi_makan_februari+$pribadi_kesehatan_februari+$pribadi_lain_februari));
    $revenue_pribadi_februari=$pribadi_gaji_februari+$pribadi_pendapatan_februari;
    $saldo_pribadi_februari=$revenue_pribadi_februari-$pengeluaran_pribadi_februari;
?>