<!-- total -->
<?php
include ("koneksi2026.php")
?>

<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_total  = $row['total_debit'] ?? 0;
    $output_kredit_total = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_total = $output_debit_total - $output_kredit_total;
?>
<?php
$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi";
$query_result=mysqli_query($koneksi, $query);
while($row=mysqli_fetch_assoc($query_result)){
	$output=$row['sum'];
}
?>

<?php
    $query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$output2=$row['sum'];
    }
?>

        <!-- rumah total-->
<?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE post = 'rumah'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah  = $row['total_debit'] ?? 0;
    $output_kredit_rumah = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_rumah = $output_debit_rumah - $output_kredit_rumah;
?>

 <!-- makan total-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE post = 'makan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan  = $row['total_debit'] ?? 0;
    $output_kredit_makan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_makan = $output_debit_makan - $output_kredit_makan;
?> 

<!-- kesehatan -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE post = 'kesehatan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_kesehatan = $output_debit_kesehatan - $output_kredit_kesehatan;
?>

<!-- lain-lain -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE post = 'lain-lain'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain  = $row['total_debit'] ?? 0;
    $output_kredit_lain = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_lain = $output_debit_lain - $output_kredit_lain;
?>

<!-- total pribadi -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bagian = 'pribadi'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pribadi  = $row['total_debit'] ?? 0;
    $output_kredit_pribadi = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_pribadi = $output_debit_pribadi - $output_kredit_pribadi;
?>

 <!-- total umum -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bagian = 'umum'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_umum  = $row['total_debit'] ?? 0;
    $output_kredit_umum = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_umum = $output_debit_umum - $output_kredit_umum;
?>

<!-- rumah umum-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'umum' AND post = 'rumah'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah  = $row['total_debit'] ?? 0;
    $output_kredit_rumah = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $umum_rumah = $output_debit_rumah - $output_kredit_rumah;
?>

<!-- makan umum -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'umum' AND post = 'makan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan  = $row['total_debit'] ?? 0;
    $output_kredit_makan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $umum_makan = $output_debit_makan - $output_kredit_makan;
?>

<!-- kesehatan umum -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'umum' AND post = 'kesehatan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $umum_kesehatan = $output_debit_kesehatan - $output_kredit_kesehatan;
?>

<!-- pendapatan umum -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'umum' AND post = 'pendapatan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $umum_pendapatan = $output_debit_pendapatan - $output_kredit_pendapatan;
?>

<!-- gaji umum -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'umum' AND post = 'gaji'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji  = $row['total_debit'] ?? 0;
    $output_kredit_gaji = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $umum_gaji = $output_debit_gaji - $output_kredit_gaji;
?>

<!-- lain-lain umum -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'umum' AND post = 'lain-lain'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain  = $row['total_debit'] ?? 0;
    $output_kredit_lain = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $umum_lain = $output_debit_lain - $output_kredit_lain;
?>

<!-- rumah pribadi-->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'pribadi' AND post = 'rumah'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_rumah  = $row['total_debit'] ?? 0;
    $output_kredit_rumah = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_rumah = $output_debit_rumah - $output_kredit_rumah;
?>

<!-- makan pribadi -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'pribadi' AND post = 'makan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_makan  = $row['total_debit'] ?? 0;
    $output_kredit_makan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_makan = $output_debit_makan - $output_kredit_makan;
?>

<!-- kesehatan pribadi -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'pribadi' AND post = 'kesehatan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_kesehatan  = $row['total_debit'] ?? 0;
    $output_kredit_kesehatan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_kesehatan = $output_debit_kesehatan - $output_kredit_kesehatan;
?>

<!-- pendapatan pribadi -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'pribadi' AND post = 'pendapatan'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_pendapatan  = $row['total_debit'] ?? 0;
    $output_kredit_pendapatan = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_pendapatan = $output_debit_pendapatan - $output_kredit_pendapatan;
?>

<!-- gaji pribadi -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'pribadi' AND post = 'gaji'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_gaji  = $row['total_debit'] ?? 0;
    $output_kredit_gaji = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_gaji = $output_debit_gaji - $output_kredit_gaji;
?>
<?php
	$query="SELECT  SUM(debit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_debit_gaji=$row['sum'];
    }
 ?>
<?php
	$query="SELECT  SUM(kredit) AS sum FROM tabel_transaksi Where bagian = 'pribadi' AND post = 'gaji'";
    $query_result=mysqli_query($koneksi, $query);
    while($row=mysqli_fetch_assoc($query_result)){
    	$pribadi_kredit_gaji=$row['sum'];
    }
 ?>

<!-- lain-lain pribadi -->
 <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi
              WHERE bagian = 'pribadi' AND post = 'lain-lain'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_lain  = $row['total_debit'] ?? 0;
    $output_kredit_lain = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $pribadi_lain = $output_debit_lain - $output_kredit_lain;
?>

 <!-- total BCA -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bank = 'BCA'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_bca  = $row['total_debit'] ?? 0;
    $output_kredit_bca = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_bca = $output_debit_bca - $output_kredit_bca;
?>

 <!-- total BSI -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bank = 'BSI'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_bsi  = $row['total_debit'] ?? 0;
    $output_kredit_bsi = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_bsi = $output_debit_bsi - $output_kredit_bsi;
?>

 <!-- total BRI -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bank = 'BRI'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_bri  = $row['total_debit'] ?? 0;
    $output_kredit_bri = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_bri = $output_debit_bri - $output_kredit_bri;
?>

 <!-- total Niaga -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE bank = 'Niaga'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_niaga  = $row['total_debit'] ?? 0;
    $output_kredit_niaga = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_niaga = $output_debit_niaga - $output_kredit_niaga;
?>

 <!-- total cash -->
  <?php
    // Ambil Debit dan Kredit sekaligus dalam satu query
    $query = "SELECT SUM(debit) AS total_debit, SUM(kredit) AS total_kredit 
              FROM tabel_transaksi 
              WHERE type = 'cash'";
    $query_result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($query_result);

    // Gunakan operator ?? 0 agar jika data kosong, variabel berisi angka 0 (bukan error)
    $output_debit_cash  = $row['total_debit'] ?? 0;
    $output_kredit_cash = $row['total_kredit'] ?? 0;

    // Anda juga bisa langsung hitung saldonya di sini
    $saldo_cash = $output_debit_cash - $output_kredit_cash;
?>