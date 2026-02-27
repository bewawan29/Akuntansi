// Mengatur waktu tujuan: 5 menit dari sekarang
const tanggaltujuan = new Date().getTime() + 1000 * 60 * 5;

const hitungmundur = setInterval(function () {
  const sekarang = new Date().getTime();
  const selisih = tanggaltujuan - sekarang;

  // Kalkulasi waktu
  const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
  const detik = Math.floor((selisih % (1000 * 60)) / 1000);

  const teks = document.getElementById("count");

  if (teks) {
    // Menambahkan angka 0 di depan jika detik di bawah 10 agar format tetap 00:00
    const formatDetik = detik < 10 ? "0" + detik : detik;
    teks.innerHTML = "Sisa Waktu: " + menit + ":" + formatDetik;
  }

  // Jika waktu habis
  if (selisih < 0) {
    // 4 menit (240000 ms)
    clearInterval(hitungmundur);
    if (teks) teks.innerHTML = "WAKTU HABIS!";

    // Redirect ke logout
    window.location.href = "logout.php";
  }
}, 1000);
