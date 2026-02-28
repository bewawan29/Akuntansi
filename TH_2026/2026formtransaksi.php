<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: ../index.php"); // Perbaikan spasi
        exit;
    }
    include ("koneksi2026.php");
    include ("function2026.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi 2026</title>
    <link rel="stylesheet" href="../stylemaster.css">
    <style>
        /* ... (Style Anda sudah bagus, pertahankan yang ada) ... */
        table{
            border-collapse:collapse;
            border:2px solid green;
            
        }
        th{
            background-color:steelblue;
            color:black;
            height:30px;
            border:1px solid green;
        }
        td{
            border:1px solid green;
        }
        button{
            width: 100px;
            height: 30px;
            color:red;
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(245, 195, 155);
        }

        /* judul */
        .container .judul {
            background-color: aqua;
            display: grid;
            grid-template-columns: 0.5fr 1fr 0.5fr;
            /* width: 100vw; */
        }
        .container .judul .judul1 {
            font-size: 0.6rem;
        }
        .container .judul .judul2 {
            text-align: center;
        }

        /* navigasi */
        .container nav {
            background-color: rgb(0, 0, 0);
            display: grid;
            grid-template-columns: 1fr 0.8fr;
        }
        .container nav .menu,
        .container nav .sub-menu {
            /* background-color: blue; */
            padding: 10px;
            /* border: 2px solid green; */
        }
        /* .container nav .sub-menu{
            display: grid;
            grid-template-columns: 0.5fr 0.5fr 2fr;
        } */
       
        .container .menu-hide {
            color: white;
            position: relative;
            padding: 10px;
            display: none;
            top: 0px;
        }
        .container nav .menu a {
            color: white;
            margin: 15px;
        }
        .container nav .sub-menu {
            /* background-color: yellow; */
            color: white;
            display: grid;
            grid-template-columns: 1fr 0.5fr 0.8fr;
            text-align: center;
        }

        /* utama */
        .container .utama {
            display: grid;
            grid-template-columns: 1fr 4fr;
            height: 89vh;
        }
        .container .utama .side{
            background-color: rgb(181, 171, 216);
            /* justify-items: center; */
            font-size: 1rem;
            line-height: 1.7rem;
            /* text-align: center; */
        }
        .container .utama .side form{
            padding: 10px;
        }
        .container .utama .side form input{
            width: 100px;
        }
        .container .utama .main{
            background-color: rgb(124, 175, 137);
            line-height: 1.5rem;
            justify-items:center;
            overflow: scroll;
        }

        /* responsive */
        @media only screen and (max-width: 450px){
           /* judul */
            .container .judul {
                background-color: blue;
                color: white;
                font-size: 0.7rem;
                padding: 5px;
            }

            /* navigasi */
            .container nav {
                font-size: 0.6rem;
                grid-template-columns: 0.2fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                left: -370px;
                /* display: none; */
                transition: 0.5s;
            }
            .container nav .menu-hide {
                display: block;
                position: relative;
                z-index: 5;
            }
            .container nav .menu-hide:hover .container nav .menu {
                display: block;
                background-color: brown;
            }

            /* utama */
            .container .utama{
                grid-template-columns: 1fr;
            }
            .container .utama .side{
                font-size: 0.8rem;
                line-height: 1.5rem;
            }
            .container .utama .main{
                font-size: 0.8rem;
                justify-items: left;
            }
            
        }

        @media only screen and (min-width: 460px) and (max-width:800px){
            .container .judul {
                background-color: salmon;
                color: white;
                font-size: 0.7rem;
                padding: 5px;
            }
            /* navigasi */
            .container nav {
                font-size: 0.6rem;
                grid-template-columns: 0.2fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                left: -370px;
                /* display: none; */
                transition: 0.5s;
            }
            .container nav .menu-hide {
                display: block;
                position: relative;
                z-index: 5;
            }
            .container nav .menu-hide:hover .container nav .menu {
                display: block;
                background-color: brown;
            }
        }
      
      /* CSS Khusus Cetak (Hanya aktif saat menekan tombol Print) */
@media print {
    /* 1. Sembunyikan elemen yang mengganggu */
    nav, 
    .container .nav,
    .container .utama .side, /* Menghilangkan Form Input */
    .judul1, 
    .judul3, 
    .button, 
    .menu-hide, 
    #count, 
    #clock {
        display: none !important;
        width: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    /* 2. Atur Layout Utama agar Tabel Mengisi Layar */
    .container .utama {
        display: block !important;
        border: none !important;
    }

    .container .utama .main {
        width: 100% !important;
        left: 0 !important;
        position: relative !important;
        background-color: white !important;
        overflow: visible !important; /* Agar semua baris tabel tercetak */
    }

    /* 3. Rapikan Tabel untuk Kertas */
    table {
        width: 100% !important;
        border-collapse: collapse !important;
        color: black !important;
    }

    th, td {
        border: 1px solid #000 !important; /* Garis hitam tegas */
        padding: 5px !important;
        font-size: 9pt !important; /* Ukuran font standar laporan */
    }

    /* Sembunyikan kolom aksi (Hapus/Ubah) saat diprint agar lebih rapi */
    th:last-child, td:last-child, 
    th:nth-last-child(2), td:nth-last-child(2) {
        display: none !important;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="judul">
            <div class="judul1">ver_25_05</div>
            <div class="judul2"><h2>FORM TRANSAKSI 2026</h2></div>
            <div class="judul3"></div>           
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="../logout.php">LOGOUT</a>
                <a href="2026.php">MENU</a>
                <a href="2026formmemo.php">MEMO</a>
                <a href="2026gabung.php">GABUNG</a>
                <a href="2026cari.php">CARI</a>
            </div>
            <div class="sub-menu">
                <?php echo date("l, d-M-Y"); ?>
                <div id="clock"></div>
                <div id="count"></div> </div>
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
                <form action="" method="post">
                    <label>No</label><br>
                    <input type="number" name="no"><br>

                    <label>Tanggal</label><br>
                    <input type="date" name="tanggal"><br>

                    <label>Bulan</label><br>
                    <input type="number" name="bulan"><br>

                    <label>Debit</label><br>
                    <input type="number" name="debit"><br>

                    <label>Kredit</label><br>
                    <input type="number" name="kredit"><br>

                    <label>Transaksi</label><br>
                    <input type="text" name="transaksi"><br>

                    <label>Type</label><br>
                    <input type="radio" name="type" value="Bank"> Bank
                    <input type="radio" name="type" value="Cash"> Cash<br><br>

                    <label>Bank</label><br>
                    <select name="bank">
                        <option value="">- Pilih Bank -</option>
                        <option>BCA</option>
                        <option>BRI</option>
                        <option>Mandiri</option>
                        <option>Niaga</option>
                        <option>BSI</option>
                        </select><br>

                    <label>Bagian</label><br>
                    <select name="bagian">
                        <option>Umum</option>
                        <option>Pribadi</option>
                        <option>Bank</option>
                    </select><br>

                    <label>Post</label><br>
                    <select name="post">
                        <option value="">- Pilih Post -</option>
                        <option>Rumah</option>
                        <option>Makan</option>
                        <option>Kesehatan</option>
                        <option>Transportasi</option>
                        <option>Internet</option>
                        <option>listrik</option>
                        <option>Hiburan</option>
                        <option>Gaji</option>
                        <option>Bonus</option>
                        <option>Parkir</option>
                        <option>Lain-lain</option>
                        </select><br>
                      
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
		<button onclick="window.print()" style="background-color: steelblue; color: white; cursor: pointer; border: none; border-radius: 5px; width: 80px;">
            Cetak
        </button>
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