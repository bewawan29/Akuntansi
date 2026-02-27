<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../index.php");
  exit;
}
include ("koneksi2026.php");

// Inisialisasi variabel awal
$output_debit_cari = 0;
$output_kredit_cari = 0;
$saldo = 0;

// Logika Filter 2 Kolom
if(isset($_POST['proses'])){
    $jenis1 = mysqli_real_escape_string($koneksi, $_POST['jenis1']);
    $key1   = mysqli_real_escape_string($koneksi, $_POST['key1']);
    $jenis2 = mysqli_real_escape_string($koneksi, $_POST['jenis2']);
    $key2   = mysqli_real_escape_string($koneksi, $_POST['key2']);
  	$jenis3 = mysqli_real_escape_string($koneksi, $_POST['jenis3']); // Filter 3
    $key3   = mysqli_real_escape_string($koneksi, $_POST['key3']); // Kata Kunci 3

    // Kondisi SQL: Mencari yang memenuhi KEDUA kriteria (AND)
    $where_clause = "$jenis1 LIKE '%$key1%' AND $jenis2 LIKE '%$key2%' AND $jenis3 LIKE '%$key3%'";

    // Hitung Total Debit
    $q_debit = mysqli_query($koneksi, "SELECT SUM(debit) AS total FROM tabel_transaksi WHERE $where_clause");
    $d_debit = mysqli_fetch_assoc($q_debit);
    $output_debit_cari = $d_debit['total'] ?? 0;

    // Hitung Total Kredit
    $q_kredit = mysqli_query($koneksi, "SELECT SUM(kredit) AS total FROM tabel_transaksi WHERE $where_clause");
    $d_kredit = mysqli_fetch_assoc($q_kredit);
    $output_kredit_cari = $d_kredit['total'] ?? 0;

    $saldo = $output_debit_cari - $output_kredit_cari;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Multi-Filter 2026</title>
    <link rel="stylesheet" href="../style2026cari.css">
    <style>
        table { border-collapse: collapse; width: 100%; border: 2px solid green; }
        th { background-color: steelblue; color: white; padding: 8px; border: 1px solid green; font-size: 0.75rem; }
        td { border: 1px solid green; padding: 5px; font-size: 0.75rem; }
        .filter-group { background: #eef2f3; padding: 10px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #ccc; }
        .summary-box { background: #f9f9f9; padding: 10px; margin-bottom: 10px; border-left: 5px solid steelblue; }
        .summary-box input { font-weight: bold; width: 150px; text-align: right; }
    </style>
</head>
<body>
    <div class="judul">
        <h2>DOUBLE FILTER TRANSAKSI 2026</h2>
    </div>
    
    <nav>
        <a href="2026formtransaksi.php">BACK</a> | <?php echo date("l, d-M-Y"); ?>
    </nav>
    
    <div class="utama">
        <div class="filter-group">
        <form action="" method="post">
            <strong>Filter 1:</strong><br>
            <select name="jenis1">
                <option value="bagian" <?= ($_POST['jenis1'] ?? '') == 'bagian' ? 'selected' : '' ?>>Bagian</option>
                <option value="post" <?= ($_POST['jenis1'] ?? '') == 'post' ? 'selected' : '' ?>>Post</option>
                <option value="bank" <?= ($_POST['jenis1'] ?? '') == 'bank' ? 'selected' : '' ?>>Bank</option>
                <option value="type" <?= ($_POST['jenis1'] ?? '') == 'type' ? 'selected' : '' ?>>Type</option>
                <option value="transaksi" <?= ($_POST['jenis1'] ?? '') == 'transaksi' ? 'selected' : '' ?>>Transaksi</option>
                <option value="bulan" <?= ($_POST['jenis1'] ?? '') == 'bulan' ? 'selected' : '' ?>>Bulan</option>
            </select>
            <input type="text" name="key1" placeholder="Kata kunci 1..." value="<?php echo $_POST['key1'] ?? ''; ?>"><br><br>

            <strong>Filter 2:</strong><br>
            <select name="jenis2">
                <option value="post" <?= ($_POST['jenis2'] ?? '') == 'post' ? 'selected' : '' ?>>Post</option>
                <option value="bagian" <?= ($_POST['jenis2'] ?? '') == 'bagian' ? 'selected' : '' ?>>Bagian</option>
                <option value="bank" <?= ($_POST['jenis2'] ?? '') == 'bank' ? 'selected' : '' ?>>Bank</option>
                <option value="type" <?= ($_POST['jenis2'] ?? '') == 'type' ? 'selected' : '' ?>>Type</option>
                <option value="transaksi" <?= ($_POST['jenis2'] ?? '') == 'transaksi' ? 'selected' : '' ?>>Transaksi</option>
                <option value="bulan" <?= ($_POST['jenis2'] ?? '') == 'bulan' ? 'selected' : '' ?>>Bulan</option>
            </select>
            <input type="text" name="key2" placeholder="Kata kunci 2..." value="<?php echo $_POST['key2'] ?? ''; ?>"><br><br>

            <strong>Filter 3:</strong><br>
            <select name="jenis3">
                <option value="bank" <?= ($_POST['jenis3'] ?? '') == 'bank' ? 'selected' : '' ?>>Bank</option>
                <option value="type" <?= ($_POST['jenis3'] ?? '') == 'type' ? 'selected' : '' ?>>Type</option>
                <option value="post" <?= ($_POST['jenis3'] ?? '') == 'post' ? 'selected' : '' ?>>Post</option>
                <option value="bagian" <?= ($_POST['jenis3'] ?? '') == 'bagian' ? 'selected' : '' ?>>Bagian</option>
                <option value="transaksi" <?= ($_POST['jenis3'] ?? '') == 'transaksi' ? 'selected' : '' ?>>Transaksi</option>
                <option value="bulan" <?= ($_POST['jenis3'] ?? '') == 'bulan' ? 'selected' : '' ?>>Bulan</option>
            </select>
            <input type="text" name="key3" placeholder="Kata kunci 3..." value="<?php echo $_POST['key3'] ?? ''; ?>"><br><br>

            <input type="submit" value="Terapkan Filter" name="proses" style="width: 100%; padding: 10px; background: green; color: white; border: none; cursor: pointer;">
        </form>
    </div>
        </div>

        <div class="main">
            <?php if(isset($_POST['proses'])): ?>
            <div class="summary-box">
                Debit: <input type="text" readonly value="<?php echo number_format($output_debit_cari, 0, ',', '.'); ?>"> 
                Kredit: <input type="text" readonly value="<?php echo number_format($output_kredit_cari, 0, ',', '.'); ?>"> 
                Saldo: <input type="text" readonly value="<?php echo number_format($saldo, 0, ',', '.'); ?>">
            </div>
          
          <button onclick="window.print()" style="padding: 5px 20px; background: steelblue; color: white; border: none; cursor: pointer; border-radius: 3px;">
                Cetak Laporan
            </button>
          
            <?php endif; ?>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Bulan</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                        <th>Transaksi</th>
                        <th>Type</th>
                        <th>Bank</th>
                        <th>Bagian</th>
                        <th>Post</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST['proses'])){
                    $sql = "SELECT * FROM tabel_transaksi WHERE $where_clause ORDER BY no DESC";
                    $query = mysqli_query($koneksi, $sql);

                    if(mysqli_num_rows($query) > 0){
                        while($trans = mysqli_fetch_array($query)){
                            echo "
                            <tr>
                                <td>{$trans['no']}</td>
                                <td>{$trans['tanggal']}</td>
                                <td>{$trans['bulan']}</td>
                                <td align='right'>".number_format($trans['debit'],0,',','.')."</td>
                                <td align='right'>".number_format($trans['kredit'],0,',','.')."</td>
                                <td>{$trans['transaksi']}</td>
                                <td>{$trans['type']}</td>
                                <td>{$trans['bank']}</td>
                                <td>{$trans['bagian']}</td>
                                <td>{$trans['post']}</td>
                                <td><a href='2026ubahtransaksi.php?kode={$trans['no']}'>Ubah</a></td> 
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11' align='center'>Data tidak ditemukan untuk kombinasi filter tersebut.</td></tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>