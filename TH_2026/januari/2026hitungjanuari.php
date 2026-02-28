<?php
// Mengambil file koneksi yang ada satu folder di atas folder 'januari'
include_once __DIR__ . "/../koneksi2026.php"; 
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '01'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_januari  = $row['total_debit'] ?? 0;
    $output_kredit_januari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_januari = $output_debit_januari - $output_kredit_januari;
?>

<!-- rumah januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_rumah_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_rumah_januari=$row['sum'];
    }
 ?>

 <!-- makan januari-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_makan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_makan_januari=$row['sum'];
    }
 ?>

<!-- kesehatan januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_kesehatan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_kesehatan_januari=$row['sum'];
    }
 ?>

 <!-- pendapatan  januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_pendapatan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_pendapatan_januari=$row['sum'];
    }
 ?>

 <!-- gaji januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_gaji_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_gaji_januari=$row['sum'];
    }
 ?>

<!-- lain-lain januari-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_debit_lain_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output_kredit_lain_januari=$row['sum'];
    }
 ?>


<!-- rumah umum januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_rumah_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_rumah_januari=$row['sum'];
    }
 ?>

 <!-- makan umum januari-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_makan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_makan_januari=$row['sum'];
    }
 ?>

<!-- kesehatan umum januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_kesehatan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_kesehatan_januari=$row['sum'];
    }
 ?>

 <!-- pendapatan umum  januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_pendapatan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_pendapatan_januari=$row['sum'];
    }
 ?>

 <!-- gaji umum januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_gaji_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_gaji_januari=$row['sum'];
    }
 ?>

<!-- lain-lain umum januari-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_debit_lain_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='umum' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$umum_kredit_lain_januari=$row['sum'];
    }
 ?>

<!-- rumah pribadi januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_rumah_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'rumah'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_rumah_januari=$row['sum'];
    }
 ?>

 <!-- makan pribadi januari-->
 <?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_makan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'makan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_makan_januari=$row['sum'];
    }
 ?>

<!-- kesehatan pribadi januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_kesehatan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'kesehatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_kesehatan_januari=$row['sum'];
    }
 ?>

 <!-- pendapatan pribadi  januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_pendapatan_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'pendapatan'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_pendapatan_januari=$row['sum'];
    }
 ?>

 <!-- gaji pribadi januari -->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji_januari=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi januari-->
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_lain_januari=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bulan='01' AND bagian='pribadi' AND post = 'lain-lain'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_lain_januari=$row['sum'];
    }
 ?>

<?php
    //$saldo_total_januari = $saldo_debit_januari - $saldo_kredit_januari;

    $saldo_rumah_januari = $output_debit_rumah_januari - $output_kredit_rumah_januari;
    $saldo_makan_januari = $output_debit_makan_januari - $output_kredit_makan_januari ;
    $saldo_kesehatan_januari = $output_debit_kesehatan_januari - $output_kredit_kesehatan_januari ;
    $saldo_pendapatan_januari = $output_debit_pendapatan_januari - $output_kredit_pendapatan_januari ;
    $saldo_gaji_januari = $output_debit_gaji_januari - $output_kredit_gaji_januari ;
    $saldo_lain_januari = $output_debit_lain_januari - $output_kredit_lain_januari ;

    $umum_rumah_januari = $umum_debit_rumah_januari - $umum_kredit_rumah_januari ;
    $umum_makan_januari = $umum_debit_makan_januari - $umum_kredit_makan_januari ;
    $umum_kesehatan_januari = $umum_debit_kesehatan_januari - $umum_kredit_kesehatan_januari ;
    $umum_pendapatan_januari = $umum_debit_pendapatan_januari - $umum_kredit_pendapatan_januari ;
    $umum_gaji_januari = $umum_debit_gaji_januari - $umum_kredit_gaji_januari ;
    $umum_lain_januari = $umum_debit_lain_januari - $umum_kredit_lain_januari ;

    $pribadi_rumah_januari = $pribadi_debit_rumah_januari - $pribadi_kredit_rumah_januari ;
    $pribadi_makan_januari = $pribadi_debit_makan_januari - $pribadi_kredit_makan_januari ;
    $pribadi_kesehatan_januari = $pribadi_debit_kesehatan_januari - $pribadi_kredit_kesehatan_januari ;
    $pribadi_pendapatan_januari = $pribadi_debit_pendapatan_januari - $pribadi_kredit_pendapatan_januari ;
    $pribadi_gaji_januari = $pribadi_debit_gaji_januari - $pribadi_kredit_gaji_januari ;
    $pribadi_lain_januari = $pribadi_debit_lain_januari - $pribadi_kredit_lain_januari ;

    $pengeluaran_januari = ((0-1)*($saldo_rumah_januari + $saldo_makan_januari+$saldo_kesehatan_januari+$saldo_lain_januari));
    $revenue_januari=$saldo_gaji_januari+$saldo_pendapatan_januari;
    $saldo_januari=$revenue_januari-$pengeluaran_januari;

    $pengeluaran_umum_januari = ((0-1)*($umum_rumah_januari + $umum_makan_januari+$umum_kesehatan_januari+$umum_lain_januari));
    $revenue_umum_januari=$umum_gaji_januari+$umum_pendapatan_januari;
    $saldo_umum_januari=$revenue_umum_januari-$pengeluaran_umum_januari;

    $pengeluaran_pribadi_januari = ((0-1)*($pribadi_rumah_januari + $pribadi_makan_januari+$pribadi_kesehatan_januari+$pribadi_lain_januari));
    $revenue_pribadi_januari=$pribadi_gaji_januari+$pribadi_pendapatan_januari;
    $saldo_pribadi_januari=$revenue_pribadi_januari-$pengeluaran_pribadi_januari;
?>