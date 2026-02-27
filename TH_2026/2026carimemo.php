<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../index.php");
  exit;
}
include ("koneksi2026.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Memo - 2 Kolom</title>
    <link rel="stylesheet" href="../style2026carimemo.css">
    <style>
        
        table { border-collapse: collapse; width: 100%; border: 2px solid green; }
        th { background-color: steelblue; color: white; padding: 10px; border: 1px solid green; }
        td { border: 1px solid green; padding: 8px; }
        .search-box { background: #f4f4f4; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        input[type="text"] { width: 250px; padding: 5px; }
        .highlight { background-color: yellow; font-weight: bold; }

    </style>
</head>
<body>
    <div class="judul">
        <h2>PENCARIAN MEMO 2026</h2>
    </div>

    <nav>
        <a href="2026formmemo.php">Back</a>
    </nav>

    <div class="utama">
        <div class="search-box">
            <form action="" method="post">
                <label>Masukkan Kata Kunci (Cari di Memo atau Hari):</label><br><br>
                <input type="text" name="input" placeholder="Contoh: Senin atau Nama Barang..." value="<?php echo isset($_POST['input']) ? $_POST['input'] : ''; ?>">
                <input type="submit" value="Cari Sekarang" name="proses">
            </form>
        </div>

        <div class="main">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Isi Memo</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST['proses'])){
                    $input = mysqli_real_escape_string($koneksi, $_POST['input']);
                    
                    // QUERY 2 KOLOM (memo ATAU hari)
                    $sql = "SELECT * FROM tabel_memo 
                            WHERE memo LIKE '%$input%' 
                            OR hari LIKE '%$input%' 
                            ORDER BY tanggal DESC";
                            
                    $query = mysqli_query($koneksi, $sql);
                    $jumlah = mysqli_num_rows($query);

                    if($jumlah > 0){
                        echo "<p>Ditemukan <b>$jumlah</b> data untuk kata kunci: <i>'$input'</i></p>";
                        while($trans = mysqli_fetch_array($query)){
                            echo "
                            <tr>
                                <td>{$trans['tanggal']}</td>
                                <td>{$trans['hari']}</td>
                                <td>{$trans['memo']}</td>
                                <td><a href='2026formmemo.php?kode={$trans['tanggal']}' onclick='return confirm(\"Hapus?\")'> Hapus </a></td>
                                <td><a href='2026ubahmemo.php?kode={$trans['tanggal']}'> Ubah </a></td> 
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' align='center' style='color:red;'>Data tidak ditemukan di kolom Memo maupun Hari.</td></tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>