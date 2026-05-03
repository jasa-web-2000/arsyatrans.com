<?php
$domain = 'http://192.168.1.4/arsyatrans.com/';
// $domain = 'https://arsyatrans.com/';

$img = $domain . 'src/img/';
$css = $domain . 'src/css/';
$js = $domain . 'src/js/';

?>


<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JM Travel - Travel Antar Kota Door to Door</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="src/css/output.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <style>
    body {
      font-family: "Inter", sans-serif;
    }

    h1,
    h2,
    h3 {
      font-family: "Poppins", sans-serif;
    }

    .gradient-bg {
      background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
    }
  </style>
</head>

<body class="bg-slate-50 text-slate-900">
  <nav class="bg-white border-b border-slate-100 sticky top-0 z-[100]">
    <div class="max-w-6xl mx-auto px-6">
      <div class="flex justify-between items-center h-20">
        <div class="flex items-center gap-2">
          <span class="text-2xl font-bold tracking-tight text-slate-800">JM <span
              class="text-orange-600">Travel</span></span>
        </div>

        <div class="hidden md:flex items-center gap-8">
          <a href="#" class="text-slate-600 hover:text-orange-600 font-medium transition-colors">Beranda</a>
          <a href="#" class="text-slate-600 hover:text-orange-600 font-medium transition-colors">Jadwal</a>
          <a href="#" class="text-slate-600 hover:text-orange-600 font-medium transition-colors">Armada</a>
          <a href="#" class="text-slate-600 hover:text-orange-600 font-medium transition-colors">Testimoni</a>
          <a href="#"
            class="bg-orange-600 text-white px-6 py-2.5 rounded-xl font-semibold hover:bg-blue-700 transition-all shadow-md shadow-blue-100">
            Pesan Sekarang
          </a>
        </div>

        <div class="md:hidden flex items-center">
          <button id="mobile-menu-button" class="text-slate-600 hover:text-orange-600 focus:outline-none">
            <i class="fa-solid fa-bars-staggered text-2xl"></i>
          </button>
        </div>
      </div>
    </div>

    <div id="mobile-menu"
      class="hidden md:hidden bg-white border-b border-slate-100 absolute w-full left-0 transition-all duration-300 shadow-xl">
      <div class="px-6 py-6 flex flex-col gap-4">
        <a href="#" class="text-slate-700 hover:text-orange-600 font-medium py-2 border-b border-slate-50">Beranda</a>
        <a href="#" class="text-slate-700 hover:text-orange-600 font-medium py-2 border-b border-slate-50">Jadwal</a>
        <a href="#" class="text-slate-700 hover:text-orange-600 font-medium py-2 border-b border-slate-50">Armada</a>
        <a href="#" class="text-slate-700 hover:text-orange-600 font-medium py-2 border-b border-slate-50">Testimoni</a>
        <a href="#" class="bg-green-500 text-white text-center px-6 py-3 rounded-xl font-semibold mt-2">
          <i class="fa-brands fa-whatsapp mr-2"></i> WhatsApp Kami
        </a>
      </div>
    </div>
  </nav>

  <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <div>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
          Travel Antar Kota Nyaman Tanpa Ribet — <span class="text-orange-600">Dijemput di Rumah</span>
        </h1>

        <p class="text-slate-600 mb-6 text-lg">
          Nikmati perjalanan lebih praktis dengan layanan door-to-door JM Travel. Berangkat setiap hari dengan armada
          terbaru dan driver profesional.
        </p>

        <ul class="space-y-3 mb-8 text-slate-700">
          <li><i class="fa-solid fa-circle-check text-orange-500 mr-2"></i> Dijemput langsung dari rumah</li>
          <li><i class="fa-solid fa-circle-check text-orange-500 mr-2"></i> Armada Avanza & Innova terbaru</li>
          <li><i class="fa-solid fa-circle-check text-orange-500 mr-2"></i> Driver profesional & ramah</li>
          <li><i class="fa-solid fa-circle-check text-orange-500 mr-2"></i> Harga kompetitif & transparan</li>
        </ul>

        <div class="flex gap-4 flex-wrap">
          <a href="#"
            class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-xl font-semibold shadow-lg transition-all flex items-center gap-2">
            <i class="fa-brands fa-whatsapp text-xl"></i> Pesan via WhatsApp
          </a>

          <a href="#" class="border border-slate-300 hover:bg-slate-50 px-8 py-4 rounded-xl font-medium transition-all">
            <i class="fa-regular fa-calendar-days mr-2"></i> Lihat Jadwal
          </a>
        </div>
      </div>

      <div class="relative">
        <img src="<?= $img ?>hero.jpg" alt="Travel Car" class="rounded-2xl shadow-2xl" />
        <div class="absolute -bottom-5 -left-5 bg-white p-4 rounded-xl shadow-xl flex items-center gap-3">
          <div class="bg-orange-100 text-orange-600 w-12 h-12 rounded-full flex items-center justify-center text-xl">
            <i class="fa-solid fa-star"></i>
          </div>
          <div>
            <p class="font-bold">4.9/5 Rating</p>
            <p class="text-xs text-slate-500">Dari 1000+ Penumpang</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-slate-50">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-6 italic text-slate-500">Capek Karena Hal Ini?</h2>
      <h2 class="text-4xl font-bold mb-12">Sering Ribet Kalau Mau Pulang Kampung?</h2>

      <div class="grid md:grid-cols-4 gap-6">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
          <i class="fa-solid fa-bus-simple text-orange-500 text-3xl mb-4"></i>
          <p class="font-medium">Harus ke terminal</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
          <i class="fa-solid fa-boxes-packing text-orange-500 text-3xl mb-4"></i>
          <p class="font-medium">Barang banyak ribet</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
          <i class="fa-solid fa-face-frown text-orange-500 text-3xl mb-4"></i>
          <p class="font-medium">Kendaraan tidak nyaman</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
          <i class="fa-solid fa-clock-rotate-left text-orange-500 text-3xl mb-4"></i>
          <p class="font-medium">Jadwal tidak pasti</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
      <div>
        <div class="inline-block px-4 py-1.5 bg-orange-600 text-white rounded-full text-sm font-bold mb-4">
          ASLI WONG MAJALENGKA
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-800">Mengenal JM Travel</h2>
        <p class="text-slate-600 mb-6 leading-relaxed">
          Berawal dari kota Angin, JM Travel lahir di Majalengka dengan misi memberikan kemudahan transportasi bagi
          warga lokal maupun pendatang. Kami memahami betul karakter perjalanan dari dan menuju Majalengka yang
          membutuhkan kenyamanan ekstra.
        </p>
        <p class="text-slate-600 mb-8 leading-relaxed">
          Kini, kami bangga menjadi salah satu jasa travel terpercaya yang menghubungkan Majalengka dengan kota-kota
          besar lainnya, dengan tetap membawa keramah-tamahan khas kota asal kami.
        </p>
        <div class="grid grid-cols-2 gap-6">
          <div>
            <h4 class="text-2xl font-bold text-orange-600">2018</h4>
            <p class="text-slate-500 text-sm">Beroperasi Sejak</p>
          </div>
          <div>
            <h4 class="text-2xl font-bold text-orange-600">Majalengka</h4>
            <p class="text-slate-500 text-sm">Kantor Pusat</p>
          </div>
        </div>
      </div>
      <div class="rounded-3xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
        <img src="<?= $img ?>majalengka-view.jpg" alt="Majalengka View" />
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold mb-4">Rute Tujuan Terpopuler</h2>
        <p class="text-slate-600">Melayani pengantaran door-to-door ke berbagai kota besar setiap hari.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="group relative overflow-hidden rounded-2xl shadow-lg">
          <img src="<?= $img ?>jakarta.jpg"
            class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500" alt="Jakarta" />
          <div
            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
            <h3 class="text-white text-2xl font-bold">Jakarta</h3>
            <p class="text-slate-300 text-sm mb-4">Majalengka — Jakarta (PP)</p>
            <div class="flex justify-between items-center">
              <span class="text-orange-400 font-bold">Mulai Rp 150rb</span>
              <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-md">Setiap Jam</span>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-2xl shadow-lg">
          <img src="<?= $img ?>bandung.png"
            class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500" alt="Bandung" />
          <div
            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
            <h3 class="text-white text-2xl font-bold">Bandung</h3>
            <p class="text-slate-300 text-sm mb-4">Majalengka — Bandung (PP)</p>
            <div class="flex justify-between items-center">
              <span class="text-orange-400 font-bold">Mulai Rp 100rb</span>
              <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-md">Setiap Jam</span>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-2xl shadow-lg">
          <img src="<?= $img ?>bekasi.jpg"
            class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500" alt="Bekasi" />
          <div
            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
            <h3 class="text-white text-2xl font-bold">Bekasi</h3>
            <p class="text-slate-300 text-sm mb-4">Majalengka — Bekasi (PP)</p>
            <div class="flex justify-between items-center">
              <span class="text-orange-400 font-bold">Mulai Rp 140rb</span>
              <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-md">Setiap Jam</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=800"
        class="rounded-2xl shadow-xl" alt="Comfortable Travel" />

      <div>
        <h2 class="text-3xl font-bold mb-6 text-orange-600">Solusi Perjalanan Praktis</h2>
        <p class="text-slate-600 mb-8 text-lg">
          Lupakan keramaian terminal. Dengan JM Travel, perjalanan Anda dimulai tepat di depan pintu rumah Anda.
        </p>

        <div class="space-y-6">
          <div class="flex gap-4">
            <div class="text-orange-600 text-2xl"><i class="fa-solid fa-house-chimney"></i></div>
            <div>
              <h4 class="font-bold">Penjemputan Door-to-Door</h4>
              <p class="text-slate-500 text-sm">Driver kami datang ke lokasi Anda sesuai jadwal.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="text-orange-600 text-2xl"><i class="fa-solid fa-map-location-dot"></i></div>
            <div>
              <h4 class="font-bold">Pengantaran Sampai Tujuan</h4>
              <p class="text-slate-500 text-sm">Tidak perlu oper kendaraan lagi di kota tujuan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4 text-slate-800">Pilihan Armada Terbaik</h2>
      <p class="text-slate-600 mb-12 max-w-2xl mx-auto">
        Kami menggunakan armada keluaran terbaru untuk menjamin keamanan dan kenyamanan Anda selama di perjalanan.
      </p>

      <div class="grid md:grid-cols-3 gap-8 text-left">
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
          <img src="<?= $img ?>innova.png" class="w-full h-48 object-cover" alt="Innova" />
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2">Toyota Innova</h3>
            <p class="text-slate-600 text-sm mb-4">Fasilitas AC Dingin, Reclining Seat.</p>
            <span class="text-orange-600 font-semibold italic text-sm"><i class="fa-solid fa-users mr-1"></i> Max 6
              Penumpang</span>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
          <img src="<?= $img ?>avanza.png" class="w-full h-48 object-cover" alt="Avanza" />
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2">Toyota Avanza</h3>
            <p class="text-slate-600 text-sm mb-4">Pilihan hemat untuk perjalanan tetap nyaman.</p>
            <span class="text-orange-600 font-semibold italic text-sm"><i class="fa-solid fa-users mr-1"></i> Max 6
              Penumpang</span>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
          <img src="<?= $img ?>luxio.jpg" class="w-full h-48 object-cover" alt="Service" />
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2">Daihatsu Luxio</h3>
            <p class="text-slate-600 text-sm mb-4">Pilihan hemat untuk perjalanan tetap nyaman.</p>
            <span class="text-orange-600 font-semibold italic text-sm"><i class="fa-solid fa-users mr-1"></i> Max 8
              Penumpang</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-12">Apa Kata Penumpang Kami</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 text-left relative">
          <i class="fa-solid fa-quote-left text-blue-200 text-4xl absolute top-4 right-6"></i>
          <div class="flex text-orange-400 mb-4 gap-1">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="text-slate-600 mb-6 italic text-sm">
            "Perjalanannya nyaman banget, AC dingin, dan drivernya ramah tidak ugal-ugalan. Sangat direkomendasikan!"
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
              R
            </div>
            <b>Rina - Mahasiswa</b>
          </div>
        </div>

        <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 text-left relative">
          <i class="fa-solid fa-quote-left text-blue-200 text-4xl absolute top-4 right-6"></i>
          <div class="flex text-orange-400 mb-4 gap-1">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="text-slate-600 mb-6 italic text-sm">
            "Sering pakai JM Travel untuk pulang kampung. Jemputnya on-time dan langsung sampai depan rumah."
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
              A
            </div>
            <b>Andi - Karyawan</b>
          </div>
        </div>

        <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 text-left relative">
          <i class="fa-solid fa-quote-left text-blue-200 text-4xl absolute top-4 right-6"></i>
          <div class="flex text-orange-400 mb-4 gap-1">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="text-slate-600 mb-6 italic text-sm">
            "Harga murah tapi pelayanannya eksekutif. Gak perlu repot ke terminal bawa kardus banyak."
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
              B
            </div>
            <b>Budi - Freelancer</b>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 gradient-bg text-white text-center">
    <h2 class="text-4xl font-bold mb-6">Siap Berangkat Hari Ini?</h2>
    <p class="text-xl mb-10 opacity-90">Amankan kursi Anda sekarang sebelum kehabisan!</p>

    <a href="#"
      class="bg-orange-500 hover:bg-orange-600 px-10 py-5 rounded-2xl font-bold shadow-2xl transition-all transform hover:scale-105 inline-block">
      <i class="fa-solid fa-ticket mr-2"></i> Pesan Kursi Sekarang
    </a>
  </section>

  <section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan Populer (FAQ)</h2>

      <div class="space-y-8">
        <div class="border-b border-slate-100 pb-4">
          <h3 class="font-bold text-lg mb-2 flex items-center gap-2">
            <i class="fa-solid fa-circle-question text-blue-500"></i> Apakah benar dijemput dari rumah?
          </h3>
          <p class="text-slate-600">
            Ya, driver akan menjemput langsung di alamat yang Anda berikan selama masih dalam area jangkauan kami.
          </p>
        </div>

        <div class="border-b border-slate-100 pb-4">
          <h3 class="font-bold text-lg mb-2 flex items-center gap-2">
            <i class="fa-solid fa-circle-question text-blue-500"></i> Apakah bisa pesan untuk hari ini?
          </h3>
          <p class="text-slate-600">
            Tentu bisa, asalkan kursi masih tersedia. Kami sarankan memesan minimal H-1 untuk menjamin ketersediaan
            kursi.
          </p>
        </div>

        <div class="border-b border-slate-100 pb-4">
          <h3 class="font-bold text-lg mb-2 flex items-center gap-2">
            <i class="fa-solid fa-circle-question text-blue-500"></i> Bagaimana dengan kapasitas barang?
          </h3>
          <p class="text-slate-600">
            Setiap penumpang diperbolehkan membawa 1 tas besar/koper dan 1 tas jinjing secara gratis. Barang berlebih
            bisa dikoordinasikan saat pemesanan.
          </p>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-slate-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 items-center text-center md:text-left">
      <div>
        <h3 class="text-2xl font-bold mb-4">JM Travel</h3>
        <p class="text-slate-400 text-sm">
          Penyedia layanan transportasi antar kota door-to-door terpercaya sejak 2018.
        </p>
      </div>
      <div class="flex flex-col gap-2">
        <h4 class="font-bold mb-2">Hubungi Kami</h4>
        <p class="text-slate-400 text-sm"><i class="fa-solid fa-phone mr-2"></i> +62 812 3456 7890</p>
        <p class="text-slate-400 text-sm"><i class="fa-solid fa-envelope mr-2"></i> hello@jmtravel.id</p>
      </div>
      <div class="flex justify-center md:justify-end gap-4 text-2xl">
        <a href="#" class="text-slate-400 hover:text-white"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="text-slate-400 hover:text-white"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" class="text-slate-400 hover:text-white"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>
    <div class="mt-12 pt-8 border-t border-slate-800 text-center text-slate-500 text-xs">
      <p>© 2026 JM Travel. All Rights Reserved.</p>
    </div>
  </footer>

  <a href="#"
    class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center text-3xl transition-all transform hover:scale-110 z-50">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <script src="<?= $js ?>script.js"></script>
</body>

</html>