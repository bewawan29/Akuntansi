<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: ../index.php"); // Perbaikan spasi
        exit;
    }
    include ("koneksi.php");
    include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi 2025</title>
    <link rel="stylesheet" href="stylemaster.css">
    <link rel="stylesheet" href="style2025formtransaksi.css?v=<?php echo time(); ?>">
    <style> 

    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>FORM TRANSAKSI 2025</h2></div>
            <div class="judul3"></div>           
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <div class="menu-hide" onclick="tutup()" >
                TUTUP [X]
                </div>
                <a href="../logout.php">LOGOUT</a>
                <a href="2025.php">MENU</a>
                <a href="2025formmemo.php">MEMO</a>
                <a href="2025gabung.php">GABUNG</a>
                <a href="2025cari.php">CARI</a>
                <button onclick="window.print()" style="background-color: steelblue; color: white; cursor: pointer; border: none; border-radius: 5px; width: 80px;">
                    Cetak
                </button>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div> </div>
            <script src="waktu.js"></script>
            <script src="mundur.js?v=<?php echo time(); ?>"></script>
            <script>
                function muncul() {
                    // Menggeser menu ke posisi 0 (muncul dari kiri)
                    document.getElementById("hide").style.left = "0px";
                }

                function tutup() {
                    // Mengembalikan menu ke kiri luar layar
                    document.getElementById("hide").style.left = "-100%";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                <form action="" method="post">
                    <!--<label>No</label>
                    <input type="number" name="no"><br> -->

                    <label>Tanggal</label>
                    <input type="date" name="tanggal"><br>

                    <label>Bulan</label>
                    <input type="number" name="bulan"><br>

                    <label>Debit</label>
                    <input type="number" name="debit"><br>

                    <label>Kredit</label>
                    <input type="number" name="kredit"><br>

                    <label>Transaksi</label>
                    <input type="text" name="transaksi"><br>

                    <label>Type</label><br>
                    <input type="radio" name="type" value="Bank"> Bank
                    <input type="radio" name="type" value="Cash"> Cash<br>

                    <label>Bank</label>
                    <select name="bank">
                        <option value="">- Pilih Bank -</option>
                        <option>BCA</option>
                        <option>BRI</option>
                        <option>Mandiri</option>
                        <option>Niaga</option>
                        <option>BSI</option>
                        </select><br>

                    <label>Bagian</label>
                    <select name="bagian">
                        <option value="">- Pilih Bagian -</option>
                        <option>Umum</option>
                        <option>Pribadi</option>
                        <option>Bank</option>
                    </select><br>

                    <label>Post</label>
                    <select name="post">
                        <option value="">- Pilih Post -</option>
                        <option>Rumah</option>
                        <option>Makan</option>
                        <option>Kesehatan</option>
                        <option>Transportasi</option>
                        <option>Internet</option>
                        <option>listrik</option>
                        <option>Hiburan</option>
                        <option>Pendapatan</option>
                        <option>Gaji</option>
                        <option>Bonus</option>
                        <option>Parkir</option>
                        <option>Lain-lain</option>
                        </select><br><br>
                      
                    <button type="submit" name="proses">Simpan</button>

                    <?php simpan_transaksi(); ?>
                </form>               
            </div>

            <div class="main">
                <?php 
                    $sql_cek = mysqli_query($koneksi, "SELECT no FROM tabel_transaksi");
                    $total_data = mysqli_num_rows($sql_cek);
                ?>

                <div style="background: white; padding: 5px 15px; margin-bottom: 10px; border-radius: 5px; border: 1px solid green; font-weight: bold;">
                    Total Data: <?php echo $total_data; ?>
                </div>
                
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
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php tabel_transaksi(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>