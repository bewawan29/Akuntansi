<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Anda tidak memiliki akses!"); // Menolak akses langsung ke file proses
}
include("koneksi.php");
// ... lanjutkan dengan query update ...
?>

<?php
if(isset($_POST['submit'])){
    $user = $_SESSION['username'];
    $pass_lama = $_POST['pass_lama'];
    $pass_baru = $_POST['pass_baru'];
    $konf_baru = $_POST['konfirmasi'];

    // 1. Ambil data password lama dari database berdasarkan username yang sedang login
    $query = mysqli_query($koneksi, "SELECT password FROM user WHERE username='$user'");
    $data = mysqli_fetch_array($query);

    // 2. Verifikasi Password Lama
    if($data['password'] == $pass_lama){
        
        // 3. Cek apakah password baru sama dengan konfirmasi
        if($pass_baru == $konf_baru){
            
            // 4. Update Password
            $update = mysqli_query($koneksi, "UPDATE user SET password='$pass_baru' WHERE username='$user'");
            
            if($update){
                echo "<script>alert('Password berhasil diperbarui!'); window.location='halaman-eko.php';</script>";
            } else {
                echo "<script>alert('Gagal update database.'); history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Password baru dan konfirmasi tidak sama!'); history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Password lama Anda salah!'); history.go(-1);</script>";
    }
}
?>