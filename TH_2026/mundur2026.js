// Mengatur waktu tujuan: 5 menit dari sekarang
const targetWaktu = new Date().getTime() + 1000 * 60 * 5;
let peringatanMuncul = false; // Flag agar alert hanya muncul sekali

const hitungmundur = setInterval(function () {
  const sekarang = new Date().getTime();
  const selisih = targetWaktu - sekarang;

  // Kalkulasi menit dan detik
  const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
  const detik = Math.floor((selisih % (1000 * 60)) / 1000);

  const teks = document.getElementById("count");

  if (teks) {
    const formatDetik = detik < 10 ? "0" + detik : detik;
    teks.innerHTML = "Sisa: " + menit + ":" + formatDetik;

    // LOGIKA PERINGATAN 1 MENIT
    if (menit === 1 && detik === 0 && !peringatanMuncul) {
      peringatanMuncul = true; // Tandai agar tidak muncul terus-menerus
      alert(
        "Perhatian! Waktu sesi Anda sisa 1 menit lagi. Segera simpan pekerjaan Anda.",
      );
    }

    // PERUBAHAN WARNA SAAT KRITIS (DI BAWAH 1 MENIT)
    if (menit < 1) {
      teks.style.color = "yellow"; // Warna kuning agar waspada
      teks.style.fontWeight = "bold";

      // Berkedip saat 10 detik terakhir
      if (detik <= 10) {
        teks.style.color = detik % 2 === 0 ? "red" : "white";
      }
    }
  }

  // Jika waktu habis
  if (selisih < 0) {
    // 4 menit (240000 ms) untuk memastikan alert muncul tepat di 1 menit
    clearInterval(hitungmundur);
    if (teks) teks.innerHTML = "LOGOUT...";
    window.location.href = "../logout.php";
  }
}, 1000);
