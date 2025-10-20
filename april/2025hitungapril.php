<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_april=$row['sum'];
    }
 ?>

<!-- rumah april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_april=$row['sum'];
    }
 ?>

 <!-- makan april-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_april=$row['sum'];
    }
 ?>

<!-- kesehatan april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_april=$row['sum'];
    }
 ?>

 <!-- pendapatan  april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_april=$row['sum'];
    }
 ?>

 <!-- gaji april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_april=$row['sum'];
    }
 ?>

<!-- lain-lain april-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_april=$row['sum'];
    }
 ?>


<!-- rumah umum april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_april=$row['sum'];
    }
 ?>

 <!-- makan umum april-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_april=$row['sum'];
    }
 ?>

<!-- kesehatan umum april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_april=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_april=$row['sum'];
    }
 ?>

 <!-- gaji umum april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_april=$row['sum'];
    }
 ?>

<!-- lain-lain umum april-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_april=$row['sum'];
    }
 ?>

<!-- rumah pribadi april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_april=$row['sum'];
    }
 ?>

 <!-- makan pribadi april-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_april=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_april=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_april=$row['sum'];
    }
 ?>

 <!-- gaji pribadi april -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_april=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi april-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_april=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_april=$row['sum'];
    }
 ?>

<?php
    $saldo_total_april = $saldo_debit_april - $saldo_kredit_april;

    $saldo_rumah_april = $output_debit_rumah_april - $output_kredit_rumah_april;
    $saldo_makan_april = $output_debit_makan_april - $output_kredit_makan_april ;
    $saldo_kesehatan_april = $output_debit_kesehatan_april - $output_kredit_kesehatan_april ;
    $saldo_pendapatan_april = $output_debit_pendapatan_april - $output_kredit_pendapatan_april ;
    $saldo_gaji_april = $output_debit_gaji_april - $output_kredit_gaji_april ;
    $saldo_lain_april = $output_debit_lain_april - $output_kredit_lain_april ;

    $umum_rumah_april = $umum_debit_rumah_april - $umum_kredit_rumah_april ;
    $umum_makan_april = $umum_debit_makan_april - $umum_kredit_makan_april ;
    $umum_kesehatan_april = $umum_debit_kesehatan_april - $umum_kredit_kesehatan_april ;
    $umum_pendapatan_april = $umum_debit_pendapatan_april - $umum_kredit_pendapatan_april ;
    $umum_gaji_april = $umum_debit_gaji_april - $umum_kredit_gaji_april ;
    $umum_lain_april = $umum_debit_lain_april - $umum_kredit_lain_april ;

    $pribadi_rumah_april = $pribadi_debit_rumah_april - $pribadi_kredit_rumah_april ;
    $pribadi_makan_april = $pribadi_debit_makan_april - $pribadi_kredit_makan_april ;
    $pribadi_kesehatan_april = $pribadi_debit_kesehatan_april - $pribadi_kredit_kesehatan_april ;
    $pribadi_pendapatan_april = $pribadi_debit_pendapatan_april - $pribadi_kredit_pendapatan_april ;
    $pribadi_gaji_april = $pribadi_debit_gaji_april - $pribadi_kredit_gaji_april ;
    $pribadi_lain_april = $pribadi_debit_lain_april - $pribadi_kredit_lain_april ;

    $pengeluaran_april = ((0-1)*($saldo_rumah_april + $saldo_makan_april+$saldo_kesehatan_april+$saldo_lain_april));
    $revenue_april=$saldo_gaji_april+$saldo_pendapatan_april;
    $saldo_april=$revenue_april-$pengeluaran_april;

    $pengeluaran_umum_april = ((0-1)*($umum_rumah_april + $umum_makan_april+$umum_kesehatan_april+$umum_lain_april));
    $revenue_umum_april=$umum_gaji_april+$umum_pendapatan_april;
    $saldo_umum_april=$revenue_umum_april-$pengeluaran_umum_april;

    $pengeluaran_pribadi_april = ((0-1)*($pribadi_rumah_april + $pribadi_makan_april+$pribadi_kesehatan_april+$pribadi_lain_april));
    $revenue_pribadi_april=$pribadi_gaji_april+$pribadi_pendapatan_april;
    $saldo_pribadi_april=$revenue_pribadi_april-$pengeluaran_pribadi_april;
?>