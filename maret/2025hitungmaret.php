<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_debit_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' ";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$saldo_kredit_maret=$row['sum'];
    }
 ?>

<!-- rumah maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_maret=$row['sum'];
    }
 ?>

 <!-- makan maret-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_maret=$row['sum'];
    }
 ?>

<!-- kesehatan maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_maret=$row['sum'];
    }
 ?>

 <!-- pendapatan  maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_maret=$row['sum'];
    }
 ?>

 <!-- gaji maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_maret=$row['sum'];
    }
 ?>

<!-- lain-lain maret-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_maret=$row['sum'];
    }
 ?>


<!-- rumah umum maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_maret=$row['sum'];
    }
 ?>

 <!-- makan umum maret-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_maret=$row['sum'];
    }
 ?>

<!-- kesehatan umum maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_maret=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_maret=$row['sum'];
    }
 ?>

 <!-- gaji umum maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_maret=$row['sum'];
    }
 ?>

<!-- lain-lain umum maret-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_maret=$row['sum'];
    }
 ?>

<!-- rumah pribadi maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_maret=$row['sum'];
    }
 ?>

 <!-- makan pribadi maret-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_maret=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_maret=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_maret=$row['sum'];
    }
 ?>

 <!-- gaji pribadi maret -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_maret=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi maret-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_maret=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='04' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_maret=$row['sum'];
    }
 ?>

<?php
    $saldo_total_maret = $saldo_debit_maret - $saldo_kredit_maret;

    $saldo_rumah_maret = $output_debit_rumah_maret - $output_kredit_rumah_maret;
    $saldo_makan_maret = $output_debit_makan_maret - $output_kredit_makan_maret ;
    $saldo_kesehatan_maret = $output_debit_kesehatan_maret - $output_kredit_kesehatan_maret ;
    $saldo_pendapatan_maret = $output_debit_pendapatan_maret - $output_kredit_pendapatan_maret ;
    $saldo_gaji_maret = $output_debit_gaji_maret - $output_kredit_gaji_maret ;
    $saldo_lain_maret = $output_debit_lain_maret - $output_kredit_lain_maret ;

    $umum_rumah_maret = $umum_debit_rumah_maret - $umum_kredit_rumah_maret ;
    $umum_makan_maret = $umum_debit_makan_maret - $umum_kredit_makan_maret ;
    $umum_kesehatan_maret = $umum_debit_kesehatan_maret - $umum_kredit_kesehatan_maret ;
    $umum_pendapatan_maret = $umum_debit_pendapatan_maret - $umum_kredit_pendapatan_maret ;
    $umum_gaji_maret = $umum_debit_gaji_maret - $umum_kredit_gaji_maret ;
    $umum_lain_maret = $umum_debit_lain_maret - $umum_kredit_lain_maret ;

    $pribadi_rumah_maret = $pribadi_debit_rumah_maret - $pribadi_kredit_rumah_maret ;
    $pribadi_makan_maret = $pribadi_debit_makan_maret - $pribadi_kredit_makan_maret ;
    $pribadi_kesehatan_maret = $pribadi_debit_kesehatan_maret - $pribadi_kredit_kesehatan_maret ;
    $pribadi_pendapatan_maret = $pribadi_debit_pendapatan_maret - $pribadi_kredit_pendapatan_maret ;
    $pribadi_gaji_maret = $pribadi_debit_gaji_maret - $pribadi_kredit_gaji_maret ;
    $pribadi_lain_maret = $pribadi_debit_lain_maret - $pribadi_kredit_lain_maret ;

    $pengeluaran_maret = ((0-1)*($saldo_rumah_maret + $saldo_makan_maret+$saldo_kesehatan_maret+$saldo_lain_maret));
    $revenue_maret=$saldo_gaji_maret+$saldo_pendapatan_maret;
    $saldo_maret=$revenue_maret-$pengeluaran_maret;

    $pengeluaran_umum_maret = ((0-1)*($umum_rumah_maret + $umum_makan_maret+$umum_kesehatan_maret+$umum_lain_maret));
    $revenue_umum_maret=$umum_gaji_maret+$umum_pendapatan_maret;
    $saldo_umum_maret=$revenue_umum_maret-$pengeluaran_umum_maret;

    $pengeluaran_pribadi_maret = ((0-1)*($pribadi_rumah_maret + $pribadi_makan_maret+$pribadi_kesehatan_maret+$pribadi_lain_maret));
    $revenue_pribadi_maret=$pribadi_gaji_maret+$pribadi_pendapatan_maret;
    $saldo_pribadi_maret=$revenue_pribadi_maret-$pengeluaran_pribadi_maret;
?>