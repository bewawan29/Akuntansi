<?php
// 1. Fungsi sesi (Gunakan include_once agar tidak error jika dipanggil berkali-kali)
function sesi(){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once "koneksi2026.php";
}

// 2. Tabel Transaksi
function tabel_transaksi(){
    include("koneksi2026.php");

    // 1. JALANKAN PROSES HAPUS TERLEBIH DAHULU
    // Pastikan fungsi hapus_transaksi() sudah melakukan redirect (window.location)
    hapus_transaksi();

    // 2. AMBIL DATA SETELAH PROSES HAPUS SELESAI
    $sql = "SELECT * FROM tabel_transaksi ORDER BY no DESC";
    $query = mysqli_query($koneksi, $sql);
    
    // 3. TAMPILKAN DATA KE TABEL
    while($trans = mysqli_fetch_array($query)){
        // Pesan konfirmasi yang lebih detail agar tidak salah hapus
        $detail = "No: " . $trans['no'] . " - " . $trans['transaksi'];
        
        echo "
        <tr>
            <td>$trans[no]</td>
            <td>$trans[tanggal]</td>
            <td>$trans[bulan]</td>
            <td>" . number_format($trans['debit'], 0, ',', '.') . "</td>
            <td>" . number_format($trans['kredit'], 0, ',', '.') . "</td>
            <td>$trans[transaksi]</td>
            <td>$trans[type]</td>
            <td>$trans[bank]</td>
            <td>$trans[bagian]</td>
            <td>$trans[post]</td>
            <td>
                <a href='?kode=$trans[no]' 
                   onclick='return confirm(\"Yakin ingin menghapus data ini?\\n$detail\")' 
                   style='color: red;'> 
                   Hapus 
                </a> 
            </td>
            <td><a href='2026ubahtransaksi.php?kode=$trans[no]'> Ubah </a> </td> 
        </tr>";
    }

    //echo "<tr><td colspan='12' style='text-align:center;'>Total Data: " . mysqli_num_rows($query) . "</td></tr>";
}

// 3. Hapus Transaksi
function hapus_transaksi(){
    include("koneksi2026.php");
    if (isset($_GET['kode'])){
        $kode = mysqli_real_escape_string($koneksi, $_GET['kode']);
        mysqli_query($koneksi, "DELETE FROM tabel_transaksi WHERE no ='$kode'");
        echo "<script>window.location.href='2026formtransaksi.php';</script>";
    }
}

// 4. Simpan Transaksi (Sudah digabung & diperbaiki)
function simpan_transaksi(){
    include("koneksi2026.php");
    if(isset($_POST['proses'])){
        // Ambil data dan amankan dari simbol aneh
        $debit = ($_POST['debit'] == "") ? 0 : $_POST['debit'];
        $kredit = ($_POST['kredit'] == "") ? 0 : $_POST['kredit'];
        $transaksi = mysqli_real_escape_string($koneksi, $_POST['transaksi']);

        $sql = "INSERT INTO tabel_transaksi SET
                tanggal = '$_POST[tanggal]',
                bulan = '$_POST[bulan]',
                debit = '$debit',
                kredit = '$kredit',
                transaksi = '$transaksi',
                type = '$_POST[type]',
                bank = '$_POST[bank]',
                bagian = '$_POST[bagian]',
                post = '$_POST[post]'";
        
        if(mysqli_query($koneksi, $sql)){
            echo "<script>alert('Data Tersimpan'); window.location.href='2026formtransaksi.php';</script>";
        }
    }
}

// 5. Tabel Memo
function tabel_memo(){
    include("koneksi2026.php");

    // 1. LOGIKA HAPUS (Dijalankan sebelum SELECT agar tampilan langsung update)
    if (isset($_GET['kode'])){
        $kode = mysqli_real_escape_string($koneksi, $_GET['kode']);
        
        // Eksekusi Hapus
        $query_hapus = mysqli_query($koneksi, "DELETE FROM tabel_memo WHERE tanggal='$kode'");
        
        if($query_hapus){
            // Alert sukses dan redirect agar parameter ?kode hilang dari URL
            echo "<script>
                alert('Data Berhasil Dihapus!');
                window.location.href='2026formmemo.php';
            </script>";
            exit; 
        }
    }

    // 2. LOGIKA TAMPIL DATA
    $sql = "SELECT * FROM tabel_memo ORDER BY tanggal DESC";
    $query = mysqli_query($koneksi, $sql);

    while($trans = mysqli_fetch_array($query)){
        // Menyiapkan variabel untuk pesan konfirmasi agar lebih informatif
        $pesan_konfirmasi = "Apakah Anda yakin ingin menghapus memo tanggal " . $trans['tanggal'] . "?";
        
        echo "
        <tr>
            <td>$trans[tanggal]</td>
            <td>$trans[hari]</td>
            <td>$trans[memo]</td>
            <td>
                <a href='?kode=$trans[tanggal]' 
                   onclick='return confirm(\"$pesan_konfirmasi\")' 
                   style='color:red;'>
                   Hapus
                </a> 
            </td>
            <td><a href='2026ubahmemo.php?kode=$trans[tanggal]'>Ubah</a></td>
        </tr>";
    }

    //echo "<tr><td colspan='5' style='text-align:center; padding:10px;'>Total Data: " . mysqli_num_rows($query) . "</td></tr>";
}

// 6. Simpan Memo
function simpan_memo(){
    include("koneksi2026.php");
    if(isset($_POST['proses'])){
        $memo = mysqli_real_escape_string($koneksi, $_POST['memo']);
        mysqli_query($koneksi, "INSERT INTO tabel_memo SET
                tanggal = '$_POST[tanggal]',
                hari = '$_POST[hari]',
                memo = '$memo'");
        
        echo "<script>alert('Memo Tersimpan'); window.location.href='2026formmemo.php';</script>";
    }
}

// 7. Tabel Transaksi Gabung
function tabel_transaksi_gabung(){
    include("koneksi2026.php");
    if(isset($_POST['proses2'])){
        $input = mysqli_real_escape_string($koneksi, $_POST['input']);
        $sql1 = "SELECT * FROM tabel_transaksi WHERE tanggal = '$input' ORDER BY no DESC";
        $query1 = mysqli_query($koneksi, $sql1);

        while($trans1 = mysqli_fetch_array($query1)){
            echo "
            <tr>
                <td>$trans1[no]</td>
                <td>$trans1[tanggal]</td>
                <td>$trans1[bulan]</td>
                <td>$trans1[debit]</td>
                <td>$trans1[kredit]</td>
                <td>$trans1[transaksi]</td>
                <td>$trans1[type]</td>
                <td>$trans1[bank]</td>
                <td>$trans1[bagian]</td>
                <td>$trans1[post]</td>
                <td><a href='?kode=$trans1[no]'> Hapus </a> </td>
                <td><a href='2026ubahtransaksi.php?kode=$trans1[no]'> Ubah </a> </td> 
            </tr>";
        }
    }
}
?>