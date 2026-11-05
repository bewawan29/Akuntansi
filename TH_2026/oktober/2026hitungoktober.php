<?php
// Mengambil file koneksi yang ada satu folder di atas folder 'januari'
include_once __DIR__ . "/../koneksi2026.php"; 
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_total_oktober = $output_debit_oktober - $output_kredit_oktober;
?>

<!-- rumah oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_rumah_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_rumah_oktober = $output_debit_rumah_oktober - $output_kredit_rumah_oktober;
?>

 <!-- makan oktober-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_makan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_makan_oktober = $output_debit_makan_oktober - $output_kredit_makan_oktober;
?>

<!-- kesehatan oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_kesehatan_oktober = $output_debit_kesehatan_oktober - $output_kredit_kesehatan_oktober;
?>

 <!-- pendapatan  oktober -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_pendapatan_oktober = $output_debit_pendapatan_oktober - $output_kredit_pendapatan_oktober;
?>

 <!-- gaji oktober -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10'" . " AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_gaji_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_gaji_oktober = $output_debit_gaji_oktober - $output_kredit_gaji_oktober;
?>

<!-- lain-lain oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain_oktober  = $row['total_debit'] ?? 0;
    $output_kredit_lain_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_lain_oktober = $output_debit_lain_oktober - $output_kredit_lain_oktober;
?>

<!-- rumah umum oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'umum' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_rumah_oktober  = $row['total_debit'] ?? 0;
    $umum_kredit_rumah_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_rumah_oktober = $umum_debit_rumah_oktober - $umum_kredit_rumah_oktober;
?>

 <!-- makan umum oktober-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'umum' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_makan_oktober  = $row['total_debit'] ?? 0;
    $umum_kredit_makan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_makan_oktober = $umum_debit_makan_oktober - $umum_kredit_makan_oktober;
?>

<!-- kesehatan umum oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'umum' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_kesehatan_oktober  = $row['total_debit'] ?? 0;
    $umum_kredit_kesehatan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_kesehatan_oktober = $umum_debit_kesehatan_oktober - $umum_kredit_kesehatan_oktober;
?>

 <!-- pendapatan umum  oktober -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'umum' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_pendapatan_oktober  = $row['total_debit'] ?? 0;
    $umum_kredit_pendapatan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_pendapatan_oktober = $umum_debit_pendapatan_oktober - $umum_kredit_pendapatan_oktober;
?>

 <!-- gaji umum oktober -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'umum' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_gaji_oktober  = $row['total_debit'] ?? 0;
    $umum_kredit_gaji_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_gaji_oktober = $umum_debit_gaji_oktober - $umum_kredit_gaji_oktober;
?>

<!-- lain-lain umum oktober-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'umum' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_lain_oktober  = $row['total_debit'] ?? 0;
    $umum_kredit_lain_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_lain_oktober = $umum_debit_lain_oktober - $umum_kredit_lain_oktober;
?>

<!-- rumah pribadi oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'pribadi' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_rumah_oktober  = $row['total_debit'] ?? 0;
    $pribadi_kredit_rumah_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_rumah_oktober = $pribadi_debit_rumah_oktober - $pribadi_kredit_rumah_oktober;
?>

 <!-- makan pribadi oktober-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'pribadi' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_makan_oktober  = $row['total_debit'] ?? 0;
    $pribadi_kredit_makan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_makan_oktober = $pribadi_debit_makan_oktober - $pribadi_kredit_makan_oktober;
?>

<!-- kesehatan pribadi oktober -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'pribadi' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_kesehatan_oktober  = $row['total_debit'] ?? 0;
    $pribadi_kredit_kesehatan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_kesehatan_oktober = $pribadi_debit_kesehatan_oktober - $pribadi_kredit_kesehatan_oktober;
?>

 <!-- pendapatan pribadi  oktober -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'pribadi' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_pendapatan_oktober  = $row['total_debit'] ?? 0;
    $pribadi_kredit_pendapatan_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_pendapatan_oktober = $pribadi_debit_pendapatan_oktober - $pribadi_kredit_pendapatan_oktober;
?>

 <!-- gaji pribadi oktober -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'pribadi' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_gaji_oktober  = $row['total_debit'] ?? 0;
    $pribadi_kredit_gaji_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_gaji_oktober = $pribadi_debit_gaji_oktober - $pribadi_kredit_gaji_oktober;
?>

<!-- lain-lain pribadi oktober-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '10' AND bagian = 'pribadi' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_lain_oktober  = $row['total_debit'] ?? 0;
    $pribadi_kredit_lain_oktober = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_lain_oktober = $pribadi_debit_lain_oktober - $pribadi_kredit_lain_oktober;
?>

<?php
    $revenue_oktober=$saldo_gaji_oktober+$saldo_pendapatan_oktober;
    $pengeluaran_oktober = ((0-1)*($saldo_rumah_oktober + $saldo_makan_oktober+$saldo_kesehatan_oktober+$saldo_lain_oktober));
    $saldo_oktober=$revenue_oktober-$pengeluaran_oktober;

    $pengeluaran_umum_oktober = ((0-1)*($umum_rumah_oktober + $umum_makan_oktober+$umum_kesehatan_oktober+$umum_lain_oktober));
    $revenue_umum_oktober=$umum_gaji_oktober+$umum_pendapatan_oktober;
    $saldo_umum_oktober=$revenue_umum_oktober-$pengeluaran_umum_oktober;

    $pengeluaran_pribadi_oktober = ((0-1)*($pribadi_rumah_oktober + $pribadi_makan_oktober+$pribadi_kesehatan_oktober+$pribadi_lain_oktober));
    $revenue_pribadi_oktober=$pribadi_gaji_oktober+$pribadi_pendapatan_oktober;
    $saldo_pribadi_oktober=$revenue_pribadi_oktober-$pengeluaran_pribadi_oktober;
    
?>