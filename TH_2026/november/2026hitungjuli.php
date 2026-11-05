<?php
// Mengambil file koneksi yang ada satu folder di atas folder 'januari'
include_once __DIR__ . "/../koneksi2026.php"; 
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_november  = $row['total_debit'] ?? 0;
    $output_kredit_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_total_november = $output_debit_november - $output_kredit_november;
?>

<!-- rumah november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah_november  = $row['total_debit'] ?? 0;
    $output_kredit_rumah_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_rumah_november = $output_debit_rumah_november - $output_kredit_rumah_november;
?>

 <!-- makan november-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan_november  = $row['total_debit'] ?? 0;
    $output_kredit_makan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_makan_november = $output_debit_makan_november - $output_kredit_makan_november;
?>

<!-- kesehatan november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan_november  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_kesehatan_november = $output_debit_kesehatan_november - $output_kredit_kesehatan_november;
?>

 <!-- pendapatan  november -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan_november  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_pendapatan_november = $output_debit_pendapatan_november - $output_kredit_pendapatan_november;
?>

 <!-- gaji november -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11'" . " AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji_november  = $row['total_debit'] ?? 0;
    $output_kredit_gaji_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_gaji_november = $output_debit_gaji_november - $output_kredit_gaji_november;
?>

<!-- lain-lain november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain_november  = $row['total_debit'] ?? 0;
    $output_kredit_lain_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_lain_november = $output_debit_lain_november - $output_kredit_lain_november;
?>

<!-- rumah umum november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'umum' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_rumah_november  = $row['total_debit'] ?? 0;
    $umum_kredit_rumah_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_rumah_november = $umum_debit_rumah_november - $umum_kredit_rumah_november;
?>

 <!-- makan umum november-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'umum' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_makan_november  = $row['total_debit'] ?? 0;
    $umum_kredit_makan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_makan_november = $umum_debit_makan_november - $umum_kredit_makan_november;
?>

<!-- kesehatan umum november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'umum' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_kesehatan_november  = $row['total_debit'] ?? 0;
    $umum_kredit_kesehatan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_kesehatan_november = $umum_debit_kesehatan_november - $umum_kredit_kesehatan_november;
?>

 <!-- pendapatan umum  november -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'umum' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_pendapatan_november  = $row['total_debit'] ?? 0;
    $umum_kredit_pendapatan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_pendapatan_november = $umum_debit_pendapatan_november - $umum_kredit_pendapatan_november;
?>

 <!-- gaji umum november -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'umum' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_gaji_november  = $row['total_debit'] ?? 0;
    $umum_kredit_gaji_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_gaji_november = $umum_debit_gaji_november - $umum_kredit_gaji_november;
?>

<!-- lain-lain umum november-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'umum' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_lain_november  = $row['total_debit'] ?? 0;
    $umum_kredit_lain_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_lain_november = $umum_debit_lain_november - $umum_kredit_lain_november;
?>

<!-- rumah pribadi november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'pribadi' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_rumah_november  = $row['total_debit'] ?? 0;
    $pribadi_kredit_rumah_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_rumah_november = $pribadi_debit_rumah_november - $pribadi_kredit_rumah_november;
?>

 <!-- makan pribadi november-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'pribadi' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_makan_november  = $row['total_debit'] ?? 0;
    $pribadi_kredit_makan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_makan_november = $pribadi_debit_makan_november - $pribadi_kredit_makan_november;
?>

<!-- kesehatan pribadi november -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'pribadi' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_kesehatan_november  = $row['total_debit'] ?? 0;
    $pribadi_kredit_kesehatan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_kesehatan_november = $pribadi_debit_kesehatan_november - $pribadi_kredit_kesehatan_november;
?>

 <!-- pendapatan pribadi  november -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'pribadi' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_pendapatan_november  = $row['total_debit'] ?? 0;
    $pribadi_kredit_pendapatan_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_pendapatan_november = $pribadi_debit_pendapatan_november - $pribadi_kredit_pendapatan_november;
?>

 <!-- gaji pribadi november -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'pribadi' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_gaji_november  = $row['total_debit'] ?? 0;
    $pribadi_kredit_gaji_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_gaji_november = $pribadi_debit_gaji_november - $pribadi_kredit_gaji_november;
?>

<!-- lain-lain pribadi november-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '11' AND bagian = 'pribadi' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_lain_november  = $row['total_debit'] ?? 0;
    $pribadi_kredit_lain_november = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_lain_november = $pribadi_debit_lain_november - $pribadi_kredit_lain_november;
?>

<?php
    $revenue_november=$saldo_gaji_november+$saldo_pendapatan_november;
    $pengeluaran_november = ((0-1)*($saldo_rumah_november + $saldo_makan_november+$saldo_kesehatan_november+$saldo_lain_november));
    $saldo_november=$revenue_november-$pengeluaran_november;

    $pengeluaran_umum_november = ((0-1)*($umum_rumah_november + $umum_makan_november+$umum_kesehatan_november+$umum_lain_november));
    $revenue_umum_november=$umum_gaji_november+$umum_pendapatan_november;
    $saldo_umum_november=$revenue_umum_november-$pengeluaran_umum_november;

    $pengeluaran_pribadi_november = ((0-1)*($pribadi_rumah_november + $pribadi_makan_november+$pribadi_kesehatan_november+$pribadi_lain_november));
    $revenue_pribadi_november=$pribadi_gaji_november+$pribadi_pendapatan_november;
    $saldo_pribadi_november=$revenue_pribadi_november-$pengeluaran_pribadi_november;
    
?>