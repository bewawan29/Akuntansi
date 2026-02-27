<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../index.php"); // Perbaikan: hapus spasi
  exit;
}
include_once ("koneksi2026.php"); // Gunakan include_once agar tidak redeclare
include_once ("function2026.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM MEMO 2026</title>
    <link rel="stylesheet" href="../stylemaster.css">
    <link rel="stylesheet" href="../style2025formmemo.css">
</head>
<body>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>FORM MEMO 2026</h2></div>
            <div class="judul3"></div>            
        </div>

        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../logout.php">LOGOUT</a>
                <a href="2026.php">MENU</a>
                <a href="2026formtransaksi.php">TRANSAKSI</a>
                <a href="2026gabung.php">GABUNG</a>
                <a href="2026carimemo.php">CARI</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="../waktu.js"></script>
            <script src="mundur2026.js?v=<?php echo time(); ?>"></script>
            <script>
                function muncul(){
                    document.getElementById("hide").style.left = "0px";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">            
                <form action="" method="POST">
                    <table> <tr>
                            <td width="120">Tanggal</td>
                            <td><input type="date" name="tanggal"></td>
                        </tr>
                        <tr>
                            <td>Hari</td>
                            <td> 
                                <select name="hari">
                                    <option value="">- Pilih Hari -</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jumat</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memo</td>
                            <td><textarea name="memo"></textarea></td>
                        </tr>
                    </table>
                    <button type="submit" name="proses">Simpan</button>
                    
                    <?php simpan_memo(); ?>
                </form>          
            </div>

            <div class="main">
                <?php 
        $cek_memo = mysqli_query($koneksi, "SELECT tanggal FROM tabel_memo");
        $total_memo = mysqli_num_rows($cek_memo);
    ?>

    <div style="background-color: white; 
                padding: 10px; 
                margin-bottom: 10px; 
                border-left: 5px solid steelblue; 
                font-weight: bold; 
                display: inline-block; 
                border-radius: 4px;
                box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
        📊 Total Memo: <?php echo $total_memo; ?> Data
    </div>

    <table>
        <thead>
            <tr>
                <th width="15%">Tanggal</th>
                <th width="10%">Hari</th>
                <th>Memo</th>
                <th colspan="2" width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php tabel_memo(); ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>