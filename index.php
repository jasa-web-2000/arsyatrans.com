<?php
$domain = 'http://192.168.1.4/arsyatrans.com/';
$domain = 'https://arsyatrans.com/';

$img = $domain . 'src/img/';
$css = $domain . 'src/css/';
$js = $domain . 'src/js/';

$brand = 'Arsya Trans';
$logo = $img . 'logo.jpeg';
$title = $brand . ' Menawarkan Travel ke Jabodetebak';
$desc = $brand . ' adalah travel antar kota dari Tasik Garut Bandung Sumedang ke Jabodetebak';

$alamat = 'Kab. Garut, Jawa Barat';
$phone = '+62 895-2679-3728';
$whatsapp = 'https://wa.me/' . preg_replace('/[^0-9]/', '', $phone) . '?text=Halo+admin+' . $brand . '%0A%0A' . $domain;

$menu = [
  ['Beranda', '#'],
  ['Tentang Kami', '#tentang-kami'],
  ['Rute Travel', '#rute-travel'],
  ['Armada', '#armada'],
  ['Testimoni', '#testimoni'],
  ['Whatsapp Kami', $whatsapp, 'bg-primary text-white! px-6 py-2.5 rounded-xl font-semibold hover:bg-primary/80 transition-all shadow-lg shadow-blue-100', true],
];

$kelebihan = [
  'Dijemput langsung dari rumah',
  'Armada Avanza & Innova terbaru',
  'Driver profesional & ramah',
  'Harga kompetitif & transparan'
];

$kekurangan = [
  [
    'fa-solid fa-bus-simple',
    'Harus ke terminal'
  ],
  [
    'fa-solid fa-boxes-packing',
    'Barang banyak ribet'
  ],
  [
    'fa-solid fa-face-frown',
    'Kendaraan tidak nyaman'
  ],
  [
    'fa-solid fa-clock-rotate-left',
    'Jadwal tidak pasti'
  ],
];

$rute = [
  ['Garut - Jabodetabek', 'garut.webp'],
  ['Bandung - Jabodetabek', 'bandung.jpg'],
  ['Sumedang - Jabodetabek', 'sumedang.webp'],
  ['Tasikmalaya - Jabodetabek', 'tasik.jpg'],
];

$solusi = [
  [
    'Penjemputan Door-to-Door',
    'Driver kami datang ke lokasi Anda sesuai jadwal.',
    'fa-solid fa-house-chimney'
  ],
  [
    'Pengantaran Sampai Tujuan',
    'Tidak perlu oper kendaraan lagi di kota tujuan.',
    'fa-solid fa-map-location-dot'
  ],
];

$armada = [
  [
    'armada-1.jpeg',
    'Armada 1',
    'Fasilitas AC Dingin,
    Reclining Seat.'
  ],
  [
    'armada-2.jpeg',
    'Armada 2',
    'Pilihan hemat untuk perjalanan tetap nyaman.'
  ],
  [
    'armada-3.jpeg',
    'Armada 3',
    'Dijamin nyaman dan aman.'
  ],
];

$testimoni = [
  [
    "Perjalanan Travel dari Garut ke Jakarta terasa nyaman dan aman. Supirnya sopan, nyetir halus, jadi tidak capek di jalan.",
    "Dedi - Karyawan Swasta"
  ],
  [
    "Sudah beberapa kali pakai travel dari $brand, selalu tepat waktu dan dijemput sampai depan rumah. Sangat membantu!",
    "Siti - Ibu Rumah Tangga"
  ],
  [
    "Harga terjangkau tapi fasilitasnya mantap. Cocok buat yang sering bolak-balik antar kota tanpa ribet.",
    "Rizky - Mahasiswa"
  ],
];

$faq = [
  [
    'Apakah layanan ini antar jemput langsung ke rumah?',
    'Ya, kami menyediakan layanan door to door. Driver akan menjemput dan mengantar Anda langsung ke alamat tujuan selama masih dalam area operasional kami.',
  ],
  [
    'Apakah bisa melakukan pemesanan mendadak?',
    'Bisa, selama kursi masih tersedia. Namun, kami menyarankan untuk booking minimal H-1 agar Anda mendapatkan jadwal yang diinginkan.',
  ],
  [
    'Berapa banyak barang yang boleh dibawa?',
    'Setiap penumpang diperbolehkan membawa 1 koper atau tas besar dan 1 tas kecil. Jika membawa barang lebih, silakan konfirmasi saat pemesanan.',
  ],
  [
    'Apakah jadwal keberangkatan tersedia setiap hari?',
    'Ya, kami melayani perjalanan setiap hari dengan beberapa pilihan jadwal. Silakan hubungi admin untuk informasi jadwal terbaru.',
  ],
  [
    'Bagaimana cara melakukan pemesanan?',
    'Pemesanan dapat dilakukan melalui WhatsApp atau telepon ke nomor ' . $phone . '. Tim kami akan membantu proses booking dengan cepat dan mudah.',
  ],
  [
    'Apakah tersedia layanan untuk rombongan atau charter?',
    'Ya, kami menyediakan layanan charter untuk kebutuhan pribadi, keluarga, maupun rombongan dengan harga yang kompetitif.',
  ],
];

?>


<!doctype html>
<html lang="id" class="scroll-smooth">

<head>

  <!--  -->
  <meta name="author" content="Dion Zebua" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

  <title>
    <?= $title ?> </title>
  <meta name="description"
    content="<?= $desc ?>" />

  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:description"
    content="<?= $desc ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= $domain ?>" />
  <meta property="og:image" content="<?= $logo ?>" />

  <link rel="apple-touch-icon" href="<?= $logo ?>" />
  <link rel="icon" size="16x16" href="<?= $logo ?>" />
  <link rel="icon" size="32x32" href="<?= $logo ?>" />
  <link rel="icon" size="180x180" href="<?= $logo ?>" />
  <link rel="shortcut icon" href="<?= $logo ?>" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:site_name" content="<?= $brand ?>" />
  <link rel="canonical" href="<?= $domain ?>" />
  <!--  -->

  <link rel="stylesheet" href="<?= $css ?>output.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


</head>

<body class="bg-slate-50 text-slate-900 font-inter">
  <nav class="bg-white border-b border-slate-100 sticky top-0 z-100">
    <div class="max-w-6xl mx-auto px-6">
      <div class="flex justify-between items-center h-20">
        <a href="<?= $domain ?>" class="flex items-center gap-2">
          <img src="<?= $logo ?>" class="w-16 rounded" loading="lazy" alt="Logo <?= $brand ?>">
        </a>

        <div class="hidden lg:flex items-center gap-8">
          <?php foreach ($menu as $key => $value) : ?>
            <a rel="<?= !empty($value[3]) ? 'nofollow noreferrer' : '' ?>" target="<?= !empty($value[3]) ? '_blank' : '' ?>" href="<?= $value[1] ?>" class=" text-slate-600 hover:text-primary font-medium transition-colors <?= $value[2] ?? '' ?>"><?= $value[0] ?></a>
          <?php endforeach ?>
        </div>

        <div class="lg:hidden flex items-center">
          <button id="mobile-menu-button" class="text-slate-600 hover:text-primary focus:outline-none">
            <i class="fa-solid fa-bars-staggered text-2xl"></i>
          </button>
        </div>
      </div>
    </div>

    <div id="mobile-menu"
      class="hidden lg:hidden bg-white border-b border-slate-100 absolute w-full left-0 transition-all duration-300 shadow-xl">
      <div class="px-6 py-6 flex flex-col gap-4">
        <?php foreach ($menu as $key => $value) : ?>
          <a rel="<?= !empty($value[3]) ? 'nofollow noreferrer' : '' ?>" target="<?= !empty($value[3]) ? '_blank' : '' ?>" href="<?= $value[1] ?>" class="border-t border-t-slate-100 pt-3 text-slate-600 hover:text-primary font-medium transition-colors <?= $value[2] ?? '' ?>"><?= $value[0] ?></a>
        <?php endforeach ?>
      </div>
    </div>
  </nav>

  <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <div>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
          Travel Antar Kota Nyaman Tanpa Ribet — <span class="text-primary">Dijemput di Rumah</span>
        </h1>

        <p class="text-slate-600 mb-6 text-lg">
          Nikmati perjalanan lebih praktis dengan layanan door-to-door <?= $brand ?>. <?= $desc ?>.
        </p>

        <ul class="space-y-3 mb-8 text-slate-700">
          <?php foreach ($kelebihan as $key => $value) : ?>
            <li><i class="fa-solid fa-circle-check text-primary mr-2"></i> <?= $value ?></li>
          <?php endforeach ?>
        </ul>

        <div class="flex gap-4 flex-wrap">
          <a href="<?= $whatsapp ?>" target="_blank" rel="nofollow noreferrer"
            class="bg-primary hover:bg-primary/80 text-white px-8 py-4 rounded-xl font-semibold shadow-lg transition-all flex items-center gap-2">
            <i class="fa-brands fa-whatsapp text-xl"></i> Pesan via WhatsApp
          </a>

          <a href="#rute-travel" class="border border-slate-300 hover:bg-slate-50 px-8 py-4 rounded-xl font-medium transition-all">
            <i class="fa-regular fa-calendar-days mr-2"></i>Cek Rute
          </a>
        </div>
      </div>

      <div class="relative">
        <img loading="lazy" src="<?= $img ?>hero.webp" alt="Jasa Travel Terbaik" class="rounded-2xl shadow-2xl" />
        <div class="absolute -bottom-5 -left-5 bg-white p-4 rounded-xl shadow-xl flex items-center gap-3">
          <div class="bg-orange-100 text-primary w-12 h-12 rounded-full flex items-center justify-center text-xl">
            <i class="fa-solid fa-star"></i>
          </div>
          <div>
            <p class="font-bold star">4.9/5 Rating</p>
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
        <?php foreach ($kekurangan as $key => $value) : ?>
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
            <i class="<?= $value[0] ?> text-primary text-3xl mb-4"></i>
            <p class="font-medium"><?= $value[1] ?></p>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </section>

  <section class="py-20 bg-slate-50 scroll-mt-10" id="tentang-kami">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
      <div>
        <div class="inline-block px-4 py-1.5 bg-primary text-white rounded-full text-sm font-bold mb-4 uppercase">
          ASLI <?= $alamat ?>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-800">Mengenal <?= $brand ?></h2>
        <p class="text-slate-600 mb-6 leading-relaxed">
          Berawal dari <?= $alamat ?>, <?= $brand ?> hadir dengan misi memberikan kemudahan transportasi bagi
          masyarakat lokal maupun pendatang. Kami memahami betul karakter perjalanan dari dan menuju <?= $brand ?>
          yang membutuhkan kenyamanan, keamanan, dan ketepatan waktu.
        </p>
        <p class="text-slate-600 mb-8 leading-relaxed">
          Kini, kami bangga menjadi salah satu jasa travel terpercaya yang menghubungkan <?= $brand ?> dengan berbagai
          kota besar lainnya, dengan tetap mengedepankan pelayanan ramah dan profesional khas daerah kami.
        </p>
        <div class="grid grid-cols-2 gap-6">
          <div>
            <h4 class="text-2xl font-bold text-primary">2018</h4>
            <p class="text-slate-500 text-sm">Beroperasi Sejak</p>
          </div>
          <div>
            <h4 class="text-2xl font-bold text-primary"><?= $brand ?></h4>
            <p class="text-slate-500 text-sm">Kantor Pusat</p>
          </div>
        </div>
      </div>
      <div class="rounded-3xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
        <img loading="lazy" src="<?= $img ?>tentang-kami.jpeg" alt="tentang <?= $brand ?>" />
      </div>
    </div>
  </section>

  <section class="py-20 bg-white scroll-mt-10" id="rute-travel">
    <div class=" max-w-6xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold mb-4">Rute Travel Terpopuler</h2>
        <p class="text-slate-600"><?= $brand ?> melayani pengantaran door-to-door ke berbagai kota besar setiap hari.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8">

        <?php foreach ($rute as $key => $value) : ?>
          <div class="group relative overflow-hidden rounded-2xl shadow-lg">
            <img loading="lazy" src="<?= $img . $value[1] ?>"
              class="brightness-50 group-hover:brightness-75 w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500" alt="Travel <?= $value[0] ?>" />
            <div
              class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
              <h3 class="text-white text-2xl font-bold">Travel <?= explode(' ', $value[0])[0] ?></h3>
              <p class="text-slate-300 text-sm mb-4"><?= $value[0] ?> (PP)</p>
              <div class="flex justify-between items-center">
                <span class="text-primary/80 font-bold">Mulai Rp ⚹⚹⚹ rb</span>
                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-md">Setiap Hari</span>
              </div>
            </div>
          </div>
        <?php endforeach ?>


      </div>
    </div>
  </section>

  <section class="py-20 bg-white scroll-mt-10" id="solusi-transport">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <img loading="lazy" src="<?= $img ?>solusi.webp"
        class="rounded-2xl shadow-xl" alt="Solusi Transport Travel" />

      <div>
        <h2 class="text-3xl font-bold mb-6 text-primary">Solusi Perjalanan Praktis</h2>
        <p class="text-slate-600 mb-8 text-lg">
          Lupakan keramaian terminal. Bersama <?= $brand ?>, perjalanan Anda dimulai tepat di depan pintu rumah Anda.
        </p>

        <div class="space-y-6">
          <?php foreach ($solusi as $key => $value) : ?>
            <div class="flex gap-4">
              <div class="text-primary text-2xl">
                <i class="<?= $value[2] ?>"></i>
              </div>
              <div>
                <h4 class="font-bold"><?= $value[0] ?></h4>
                <p class="text-slate-500 text-sm">
                  <?= $value[1] ?>
                </p>
              </div>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-slate-50 scroll-mt-10" id="armada">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4 text-slate-800">Pilihan Armada Terbaik</h2>
      <p class="text-slate-600 mb-12 max-w-2xl mx-auto">
        <?= $brand ?> menggunakan armada keluaran terbaru untuk menjamin keamanan dan kenyamanan Anda selama di perjalanan.
      </p>

      <div class="grid md:grid-cols-3 gap-8 text-left">
        <?php foreach ($armada as $key => $value) : ?>
          <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
            <img loading="lazy" src="<?= $img . $value[0] ?>" class="w-full aspect-4/4 object-cover" alt="Armada <?= $value[1] ?>" />
            <div class="p-6">
              <!-- <h3 class="font-bold text-xl mb-2"><?= $value[1] ?></h3> -->
              <p class="text-slate-600 text-sm mb-4"><?= $value[2] ?></p>
              <span class="text-primary font-semibold italic text-sm"><i class="fa-solid fa-box mr-3"></i>Free Bagasi</span>
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </section>

  <section class="py-20 bg-white scroll-mt-10" id="testimoni">
    <div class=" max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-12">Apa Kata Penumpang Kami</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <?php foreach ($testimoni as $key => $value) : ?>
          <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 text-left relative">
            <i class="fa-solid fa-quote-left text-blue-200 text-4xl absolute top-4 right-6"></i>
            <div class="flex text-primary/80 mb-4 gap-1">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p class="text-slate-600 mb-6 italic text-sm">
              "<?= $value[0] ?>"
            </p>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-secondary rounded-full flex items-center justify-center text-white font-bold uppercase">
                <?= $value[1][0] ?>
              </div>
              <b>
                "<?= $value[1] ?>"
              </b>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section class="py-24 bg-linear-to-br from-secondary to-secondary/60 text-white text-center">
    <h2 class="text-4xl font-bold mb-6">Siap Berangkat Hari Ini?</h2>
    <p class="text-xl mb-10 opacity-90">Amankan kursi Anda sekarang sebelum kehabisan!</p>

    <a href="<?= $whatsapp ?>" target="_blank" rel="nofollow noreferrer"
      class="bg-primary hover:bg-primary px-10 py-5 rounded-2xl font-bold shadow-2xl transition-all transform hover:scale-105 inline-block">
      <i class="fa-solid fa-ticket mr-2"></i> Pesan Tiket Sekarang
    </a>
  </section>

  <section class="py-20 bg-white scroll-mt-10" id="pertanyaan">
    <div class="max-w-3xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan Populer Seputar Travel (FAQ)</h2>

      <div class="space-y-8">
        <?php foreach ($faq as $key => $value) : ?>
          <div class="border-b border-slate-100 pb-4">
            <h3 class="font-bold text-lg mb-2 flex items-center gap-2">
              <i class="fa-solid fa-circle-question text-secondary"></i>
              <?= $value[0] ?>
            </h3>
            <p class="text-slate-600">
              <?= $value[1] ?>
            </p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <footer class="bg-slate-900 text-white py-12">
    <div class=" max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 items-center text-center md:text-left">
      <div>
        <img src="<?= $logo ?>" class="w-16 rounded" loading="lazy" alt="Logo <?= $brand ?>">
        <h3 class="text-2xl font-bold my-4"><?= $brand ?></h3>
        <p class="text-slate-400 text-sm">
          <?= $desc ?>
        </p>
      </div>
      <div class=""></div>
      <div class="flex flex-col gap-2">
        <h4 class="font-bold mb-2">Hubungi Kami</h4>
        <p class="text-slate-400 text-sm"><i class="fa-solid fa-phone mr-2"></i><?= $phone ?></p>
        <p class="text-slate-400 text-sm"><i class="fa-brands text-[17px] fa-whatsapp mr-2"></i><?= $phone ?></p>
        <a href="<?= $whatsapp ?>" target="_blank" rel="nofollow noreferrer"
          class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center text-3xl transition-all transform hover:scale-110 z-50">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div>
      <!-- <div class="flex justify-center md:justify-end gap-4 text-2xl">
        <a href="#" class="text-slate-400 hover:text-white"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="text-slate-400 hover:text-white"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" class="text-slate-400 hover:text-white"><i class="fa-brands fa-tiktok"></i></a>
      </div> -->
    </div>
    <div class="mt-12 pt-8 border-t border-slate-800 text-center text-slate-400">
      <p>© <?= $brand ?>. Dikembangkan oleh <a target="_blank" class="underline" href="https://dionzebua.com">Dion Zebua</a>.</p>
    </div>
  </footer>

  <script src="<?= $js ?>script.js"></script>
</body>

</html>