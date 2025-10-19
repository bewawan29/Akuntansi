// const tanggaltujuan = new Date().getTime() + 6000;

// const hitungmundur = setInterval(function () {
//   const sekarang = new Date().getTime();

//   const selisih = tanggaltujuan - sekarang;

//   const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
//   const jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
//   const detik = Math.floor((selisih % (1000 * 60)) / 1000);
//   const detik2 = Math.floor((tanggaltujuan % (1000 * 60)) / 1000);

//   const teks = document.getElementById("waktu");
//   teks.innerHTML =
//     "waktu anda tinggal :" +
//     // hari +
//     // " hari, " +
//     // jam +
//     // " jam " +
//     menit +
//     " menit " +
//     detik +
//     " detik lagi ! ";

//   if (selisih < 0) {
//     clearInterval(hitungmundur);
//     teks.innerHTML = "waktu anda HABIS!";
//   }
// }, 1000);

// const tanggaltujuan = new Date("may 21, 2025 17:01:00").getTime();
const tanggaltujuan = new Date().getTime() + 1000 * 60 * 5;
// const sekarang = new Date().getTime();

const hitungmundur = setInterval(function () {
  const sekarang = new Date().getTime();

  const selisih = tanggaltujuan - sekarang;

  const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
  const jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
  const detik = Math.floor((selisih % (1000 * 60)) / 1000);
  const detik2 = Math.floor((tanggaltujuan % (1000 * 60)) / 1000);

  // console.log(sekarang);
  // console.log(tanggaltujuan);
  // console.log(selisih);
  // console.log(detik);

  const teks = document.getElementById("count");
  teks.innerHTML =
    menit;
    // "waktu anda tinggal :" +
    //   // hari +
    //   // " hari, " +
    //   // jam +
    //   // " jam " +
    //menit + detik ;

  if (selisih < 0) {
    clearInterval(hitungmundur);
    // teks.innerHTML = "waktu anda HABIS!";
    // header ("location:hitungmundur2.php");
    window.location.href = "logout.php";
  }
}, 1000);

// const detik = Math.floor((sekarang % (1000 * 60)) / 1000);
// const detik2 = Math.floor((tanggaltujuan % (1000 * 60)) / 1000);
// console.log(detik);
// teks.innerHTML = detik2;
