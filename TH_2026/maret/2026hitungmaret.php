<?php
// Mengambil file koneksi yang ada satu folder di atas folder 'januari'
include_once __DIR__ . "/../koneksi2026.php"; 
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_maret  = $row['total_debit'] ?? 0;
    $output_kredit_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_total_maret = $output_debit_maret - $output_kredit_maret;
?>

<!-- rumah maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah_maret  = $row['total_debit'] ?? 0;
    $output_kredit_rumah_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_rumah_maret = $output_debit_rumah_maret - $output_kredit_rumah_maret;
?>

 <!-- makan maret-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan_maret  = $row['total_debit'] ?? 0;
    $output_kredit_makan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_makan_maret = $output_debit_makan_maret - $output_kredit_makan_maret;
?>

<!-- kesehatan maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan_maret  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_kesehatan_maret = $output_debit_kesehatan_maret - $output_kredit_kesehatan_maret;
?>

 <!-- pendapatan  maret -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan_maret  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_pendapatan_maret = $output_debit_pendapatan_maret - $output_kredit_pendapatan_maret;
?>

 <!-- gaji maret -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03'" . " AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji_maret  = $row['total_debit'] ?? 0;
    $output_kredit_gaji_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_gaji_maret = $output_debit_gaji_maret - $output_kredit_gaji_maret;
?>

<!-- lain-lain maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain_maret  = $row['total_debit'] ?? 0;
    $output_kredit_lain_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_lain_maret = $output_debit_lain_maret - $output_kredit_lain_maret;
?>

<!-- rumah umum maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'umum' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_rumah_maret  = $row['total_debit'] ?? 0;
    $umum_kredit_rumah_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_rumah_maret = $umum_debit_rumah_maret - $umum_kredit_rumah_maret;
?>

 <!-- makan umum maret-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'umum' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_makan_maret  = $row['total_debit'] ?? 0;
    $umum_kredit_makan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_makan_maret = $umum_debit_makan_maret - $umum_kredit_makan_maret;
?>

<!-- kesehatan umum maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'umum' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_kesehatan_maret  = $row['total_debit'] ?? 0;
    $umum_kredit_kesehatan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_kesehatan_maret = $umum_debit_kesehatan_maret - $umum_kredit_kesehatan_maret;
?>

 <!-- pendapatan umum  maret -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'umum' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_pendapatan_maret  = $row['total_debit'] ?? 0;
    $umum_kredit_pendapatan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_pendapatan_maret = $umum_debit_pendapatan_maret - $umum_kredit_pendapatan_maret;
?>

 <!-- gaji umum maret -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'umum' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_gaji_maret  = $row['total_debit'] ?? 0;
    $umum_kredit_gaji_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_gaji_maret = $umum_debit_gaji_maret - $umum_kredit_gaji_maret;
?>

<!-- lain-lain umum maret-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'umum' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_lain_maret  = $row['total_debit'] ?? 0;
    $umum_kredit_lain_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_lain_maret = $umum_debit_lain_maret - $umum_kredit_lain_maret;
?>

<!-- rumah pribadi maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'pribadi' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_rumah_maret  = $row['total_debit'] ?? 0;
    $pribadi_kredit_rumah_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_rumah_maret = $pribadi_debit_rumah_maret - $pribadi_kredit_rumah_maret;
?>

 <!-- makan pribadi maret-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'pribadi' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_makan_maret  = $row['total_debit'] ?? 0;
    $pribadi_kredit_makan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_makan_maret = $pribadi_debit_makan_maret - $pribadi_kredit_makan_maret;
?>

<!-- kesehatan pribadi maret -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'pribadi' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_kesehatan_maret  = $row['total_debit'] ?? 0;
    $pribadi_kredit_kesehatan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_kesehatan_maret = $pribadi_debit_kesehatan_maret - $pribadi_kredit_kesehatan_maret;
?>

 <!-- pendapatan pribadi  maret -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'pribadi' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_pendapatan_maret  = $row['total_debit'] ?? 0;
    $pribadi_kredit_pendapatan_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_pendapatan_maret = $pribadi_debit_pendapatan_maret - $pribadi_kredit_pendapatan_maret;
?>

 <!-- gaji pribadi maret -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'pribadi' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_gaji_maret  = $row['total_debit'] ?? 0;
    $pribadi_kredit_gaji_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_gaji_maret = $pribadi_debit_gaji_maret - $pribadi_kredit_gaji_maret;
?>

<!-- lain-lain pribadi maret-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '03' AND bagian = 'pribadi' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_lain_maret  = $row['total_debit'] ?? 0;
    $pribadi_kredit_lain_maret = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_lain_maret = $pribadi_debit_lain_maret - $pribadi_kredit_lain_maret;
?>

<?php
    $revenue_maret=$saldo_gaji_maret+$saldo_pendapatan_maret;
    $pengeluaran_maret = ((0-1)*($saldo_rumah_maret + $saldo_makan_maret+$saldo_kesehatan_maret+$saldo_lain_maret));
    $saldo_maret=$revenue_maret-$pengeluaran_maret;

    $pengeluaran_umum_maret = ((0-1)*($umum_rumah_maret + $umum_makan_maret+$umum_kesehatan_maret+$umum_lain_maret));
    $revenue_umum_maret=$umum_gaji_maret+$umum_pendapatan_maret;
    $saldo_umum_maret=$revenue_umum_maret-$pengeluaran_umum_maret;

    $pengeluaran_pribadi_maret = ((0-1)*($pribadi_rumah_maret + $pribadi_makan_maret+$pribadi_kesehatan_maret+$pribadi_lain_maret));
    $revenue_pribadi_maret=$pribadi_gaji_maret+$pribadi_pendapatan_maret;
    $saldo_pribadi_maret=$revenue_pribadi_maret-$pengeluaran_pribadi_maret;
    
?>