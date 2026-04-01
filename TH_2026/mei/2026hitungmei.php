<?php
// Mengambil file koneksi yang ada satu folder di atas folder 'januari'
include_once __DIR__ . "/../koneksi2026.php"; 
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_mei  = $row['total_debit'] ?? 0;
    $output_kredit_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_total_mei = $output_debit_mei - $output_kredit_mei;
?>

<!-- rumah mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah_mei  = $row['total_debit'] ?? 0;
    $output_kredit_rumah_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_rumah_mei = $output_debit_rumah_mei - $output_kredit_rumah_mei;
?>

 <!-- makan mei-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan_mei  = $row['total_debit'] ?? 0;
    $output_kredit_makan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_makan_mei = $output_debit_makan_mei - $output_kredit_makan_mei;
?>

<!-- kesehatan mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan_mei  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_kesehatan_mei = $output_debit_kesehatan_mei - $output_kredit_kesehatan_mei;
?>

 <!-- pendapatan  mei -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan_mei  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_pendapatan_mei = $output_debit_pendapatan_mei - $output_kredit_pendapatan_mei;
?>

 <!-- gaji mei -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05'" . " AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji_mei  = $row['total_debit'] ?? 0;
    $output_kredit_gaji_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_gaji_mei = $output_debit_gaji_mei - $output_kredit_gaji_mei;
?>

<!-- lain-lain mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain_mei  = $row['total_debit'] ?? 0;
    $output_kredit_lain_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_lain_mei = $output_debit_lain_mei - $output_kredit_lain_mei;
?>

<!-- rumah umum mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'umum' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_rumah_mei  = $row['total_debit'] ?? 0;
    $umum_kredit_rumah_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_rumah_mei = $umum_debit_rumah_mei - $umum_kredit_rumah_mei;
?>

 <!-- makan umum mei-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'umum' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_makan_mei  = $row['total_debit'] ?? 0;
    $umum_kredit_makan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_makan_mei = $umum_debit_makan_mei - $umum_kredit_makan_mei;
?>

<!-- kesehatan umum mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'umum' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_kesehatan_mei  = $row['total_debit'] ?? 0;
    $umum_kredit_kesehatan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_kesehatan_mei = $umum_debit_kesehatan_mei - $umum_kredit_kesehatan_mei;
?>

 <!-- pendapatan umum  mei -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'umum' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_pendapatan_mei  = $row['total_debit'] ?? 0;
    $umum_kredit_pendapatan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_pendapatan_mei = $umum_debit_pendapatan_mei - $umum_kredit_pendapatan_mei;
?>

 <!-- gaji umum mei -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'umum' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_gaji_mei  = $row['total_debit'] ?? 0;
    $umum_kredit_gaji_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_gaji_mei = $umum_debit_gaji_mei - $umum_kredit_gaji_mei;
?>

<!-- lain-lain umum mei-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'umum' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_lain_mei  = $row['total_debit'] ?? 0;
    $umum_kredit_lain_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_lain_mei = $umum_debit_lain_mei - $umum_kredit_lain_mei;
?>

<!-- rumah pribadi mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'pribadi' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_rumah_mei  = $row['total_debit'] ?? 0;
    $pribadi_kredit_rumah_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_rumah_mei = $pribadi_debit_rumah_mei - $pribadi_kredit_rumah_mei;
?>

 <!-- makan pribadi mei-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'pribadi' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_makan_mei  = $row['total_debit'] ?? 0;
    $pribadi_kredit_makan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_makan_mei = $pribadi_debit_makan_mei - $pribadi_kredit_makan_mei;
?>

<!-- kesehatan pribadi mei -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'pribadi' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_kesehatan_mei  = $row['total_debit'] ?? 0;
    $pribadi_kredit_kesehatan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_kesehatan_mei = $pribadi_debit_kesehatan_mei - $pribadi_kredit_kesehatan_mei;
?>

 <!-- pendapatan pribadi  mei -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'pribadi' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_pendapatan_mei  = $row['total_debit'] ?? 0;
    $pribadi_kredit_pendapatan_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_pendapatan_mei = $pribadi_debit_pendapatan_mei - $pribadi_kredit_pendapatan_mei;
?>

 <!-- gaji pribadi mei -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'pribadi' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_gaji_mei  = $row['total_debit'] ?? 0;
    $pribadi_kredit_gaji_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_gaji_mei = $pribadi_debit_gaji_mei - $pribadi_kredit_gaji_mei;
?>

<!-- lain-lain pribadi mei-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '05' AND bagian = 'pribadi' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_lain_mei  = $row['total_debit'] ?? 0;
    $pribadi_kredit_lain_mei = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_lain_mei = $pribadi_debit_lain_mei - $pribadi_kredit_lain_mei;
?>

<?php
    $revenue_mei=$saldo_gaji_mei+$saldo_pendapatan_mei;
    $pengeluaran_mei = ((0-1)*($saldo_rumah_mei + $saldo_makan_mei+$saldo_kesehatan_mei+$saldo_lain_mei));
    $saldo_mei=$revenue_mei-$pengeluaran_mei;

    $pengeluaran_umum_mei = ((0-1)*($umum_rumah_mei + $umum_makan_mei+$umum_kesehatan_mei+$umum_lain_mei));
    $revenue_umum_mei=$umum_gaji_mei+$umum_pendapatan_mei;
    $saldo_umum_mei=$revenue_umum_mei-$pengeluaran_umum_mei;

    $pengeluaran_pribadi_mei = ((0-1)*($pribadi_rumah_mei + $pribadi_makan_mei+$pribadi_kesehatan_mei+$pribadi_lain_mei));
    $revenue_pribadi_mei=$pribadi_gaji_mei+$pribadi_pendapatan_mei;
    $saldo_pribadi_mei=$revenue_pribadi_mei-$pengeluaran_pribadi_mei;
    
?>