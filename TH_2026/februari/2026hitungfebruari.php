<?php
// Mengambil file koneksi yang ada satu folder di atas folder 'januari'
include_once __DIR__ . "/../koneksi2026.php"; 
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_februari  = $row['total_debit'] ?? 0;
    $output_kredit_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_total_februari = $output_debit_februari - $output_kredit_februari;
?>

<!-- rumah februari -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah_februari  = $row['total_debit'] ?? 0;
    $output_kredit_rumah_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_rumah_februari = $output_debit_rumah_februari - $output_kredit_rumah_februari;
?>

 <!-- makan februari-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan_februari  = $row['total_debit'] ?? 0;
    $output_kredit_makan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_makan_februari = $output_debit_makan_februari - $output_kredit_makan_februari;
?>

<!-- kesehatan februari -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan_februari  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_kesehatan_februari = $output_debit_kesehatan_februari - $output_kredit_kesehatan_februari;
?>

 <!-- pendapatan  februari -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan_februari  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_pendapatan_februari = $output_debit_pendapatan_februari - $output_kredit_pendapatan_februari;
?>

 <!-- gaji februari -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02'" . " AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji_februari  = $row['total_debit'] ?? 0;
    $output_kredit_gaji_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_gaji_februari = $output_debit_gaji_februari - $output_kredit_gaji_februari;
?>

<!-- lain-lain februari-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain_februari  = $row['total_debit'] ?? 0;
    $output_kredit_lain_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_lain_februari = $output_debit_lain_februari - $output_kredit_lain_februari;
?>

<!-- rumah umum februari -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'umum' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_rumah_februari  = $row['total_debit'] ?? 0;
    $umum_kredit_rumah_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_rumah_februari = $umum_debit_rumah_februari - $umum_kredit_rumah_februari;
?>

 <!-- makan umum februari-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'umum' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_makan_februari  = $row['total_debit'] ?? 0;
    $umum_kredit_makan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_makan_februari = $umum_debit_makan_februari - $umum_kredit_makan_februari;
?>

<!-- kesehatan umum februari -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'umum' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_kesehatan_februari  = $row['total_debit'] ?? 0;
    $umum_kredit_kesehatan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_kesehatan_februari = $umum_debit_kesehatan_februari - $umum_kredit_kesehatan_februari;
?>

 <!-- pendapatan umum  februari -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'umum' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_pendapatan_februari  = $row['total_debit'] ?? 0;
    $umum_kredit_pendapatan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_pendapatan_februari = $umum_debit_pendapatan_februari - $umum_kredit_pendapatan_februari;
?>

 <!-- gaji umum februari -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'umum' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_gaji_februari  = $row['total_debit'] ?? 0;
    $umum_kredit_gaji_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_gaji_februari = $umum_debit_gaji_februari - $umum_kredit_gaji_februari;
?>

<!-- lain-lain umum februari-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'umum' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $umum_debit_lain_februari  = $row['total_debit'] ?? 0;
    $umum_kredit_lain_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $umum_lain_februari = $umum_debit_lain_februari - $umum_kredit_lain_februari;
?>

<!-- rumah pribadi februari -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'pribadi' AND post = 'rumah'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_rumah_februari  = $row['total_debit'] ?? 0;
    $pribadi_kredit_rumah_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_rumah_februari = $pribadi_debit_rumah_februari - $pribadi_kredit_rumah_februari;
?>

 <!-- makan pribadi februari-->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'pribadi' AND post = 'makan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_makan_februari  = $row['total_debit'] ?? 0;
    $pribadi_kredit_makan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_makan_februari = $pribadi_debit_makan_februari - $pribadi_kredit_makan_februari;
?>

<!-- kesehatan pribadi februari -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'pribadi' AND post = 'kesehatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_kesehatan_februari  = $row['total_debit'] ?? 0;
    $pribadi_kredit_kesehatan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_kesehatan_februari = $pribadi_debit_kesehatan_februari - $pribadi_kredit_kesehatan_februari;
?>

 <!-- pendapatan pribadi  februari -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'pribadi' AND post = 'pendapatan'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_pendapatan_februari  = $row['total_debit'] ?? 0;
    $pribadi_kredit_pendapatan_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_pendapatan_februari = $pribadi_debit_pendapatan_februari - $pribadi_kredit_pendapatan_februari;
?>

 <!-- gaji pribadi februari -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'pribadi' AND post = 'gaji'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_gaji_februari  = $row['total_debit'] ?? 0;
    $pribadi_kredit_gaji_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_gaji_februari = $pribadi_debit_gaji_februari - $pribadi_kredit_gaji_februari;
?>

<!-- lain-lain pribadi februari-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bulan = '02' AND bagian = 'pribadi' AND post = 'lain-lain'";
              
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $pribadi_debit_lain_februari  = $row['total_debit'] ?? 0;
    $pribadi_kredit_lain_februari = $row['total_kredit'] ?? 0;
    
    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_lain_februari = $pribadi_debit_lain_februari - $pribadi_kredit_lain_februari;
?>

<?php
    $revenue_februari=$saldo_gaji_februari+$saldo_pendapatan_februari;
    $pengeluaran_februari = ((0-1)*($saldo_rumah_februari + $saldo_makan_februari+$saldo_kesehatan_februari+$saldo_lain_februari));
    $saldo_februari=$revenue_februari-$pengeluaran_februari;

    $pengeluaran_umum_februari = ((0-1)*($umum_rumah_februari + $umum_makan_februari+$umum_kesehatan_februari+$umum_lain_februari));
    $revenue_umum_februari=$umum_gaji_februari+$umum_pendapatan_februari;
    $saldo_umum_februari=$revenue_umum_februari-$pengeluaran_umum_februari;

    $pengeluaran_pribadi_februari = ((0-1)*($pribadi_rumah_februari + $pribadi_makan_februari+$pribadi_kesehatan_februari+$pribadi_lain_februari));
    $revenue_pribadi_februari=$pribadi_gaji_februari+$pribadi_pendapatan_februari;
    $saldo_pribadi_februari=$revenue_pribadi_februari-$pengeluaran_pribadi_februari;
    
?>