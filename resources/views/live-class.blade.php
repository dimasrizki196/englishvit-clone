<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Class - Englishvit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-white antialiased">

    <x-navbar />

    <main>
        <section class="bg-[#D1E4FA] py-12 md:py-20 relative overflow-hidden">

            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="order-2 lg:order-1 text-center lg:text-left">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                        Kursus Bahasa Inggris Online Bergaransi Uang Kembali
                    </h1>
                    <p class="text-base md:text-lg text-gray-700 mb-10 max-w-xl mx-auto lg:mx-0">
                        Platform belajar bahasa Inggris full praktik dengan berbagai pilihan kelas sesuai kebutuhan.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-6">
                        <a href="#daftar"
                            class="bg-[#FFB800] text-[#003B7E] font-bold py-3.5 px-10 rounded-lg shadow-md hover:bg-[#e6a600] transition-all">
                            Pilih Kelas
                        </a>
                        <a href="#"
                            class="bg-[#22C55E] text-white font-bold py-3.5 px-10 rounded-lg shadow-md hover:bg-[#1da850] transition-all flex items-center justify-center gap-2">
                            Chat Admin
                        </a>
                    </div>

                    <p class="text-sm font-bold text-gray-600">
                        *Tersisa 10 Kuota Lagi
                    </p>
                </div>

                <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                    <img src="images/top1.webp" alt="Englishvit Live Class"
                        class="w-full max-w-[550px] drop-shadow-2xl">
                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-3">Apa Kata Alumni Englishvit?</h2>
                    <p class="text-[13px] md:text-[14px] text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        +10.528 Orang telah berhasil belajar bahasa Inggris bersama Englishvit, ini kata mereka tentang
                        kursus di Englishvit.
                    </p>
                </div>

                <div class="relative group">
                    <div id="alumni-slider"
                        class="flex overflow-x-auto gap-5 pb-8 snap-x snap-mandatory hide-scrollbar scroll-smooth">
                        @foreach ($testimonials as $testi)
                            <div
                                class="snap-center shrink-0 w-[300px] md:w-[360px] bg-white rounded-xl border border-gray-200 p-6 flex flex-col justify-between transition-all duration-300">

                                <div>
                                    <div class="flex justify-between items-center mb-5">
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <div
                                                    class="bg-[#1D60D6] text-white w-5 h-5 flex items-center justify-center rounded-[3px]">
                                                    <i class="fas fa-star text-[10px]"></i>
                                                </div>
                                            @endfor
                                        </div>
                                        <a href="#"
                                            class="text-[#1D60D6] text-[11px] font-bold hover:underline flex items-center gap-1">
                                            <i class="fas fa-play-circle text-[13px]"></i> Lihat video
                                        </a>
                                    </div>

                                    <h3 class="font-bold text-gray-900 text-[15px] mb-2">
                                        {{ $testi['title'] ?? 'Review Englishvit' }}</h3>
                                    <p class="text-[13px] text-gray-600 leading-relaxed mb-6">
                                        "{{ $testi['text'] }}"
                                    </p>
                                </div>

                                <div class="flex items-center gap-3 mt-auto">
                                    <img src="{{ $testi['img'] }}" alt="{{ $testi['name'] }}"
                                        class="w-10 h-10 rounded-full object-cover">
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-[13px]">{{ $testi['name'] }}</h4>
                                        <p class="text-[11px] text-gray-500">{{ $testi['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        <section id="daftar" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-6">

                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Pilihan Kelas Sesuai Kebutuhan</h2>
                    <p class="text-[12px] md:text-sm text-gray-600 max-w-2xl mx-auto">
                        Pilih program sesuai kebutuhan dan daftarkan dirimu sekarang untuk mendapatkan promo spesial
                        hari ini!!
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-3 md:gap-6">

                    @foreach ($recommendedPrograms as $program)
                        <div
                            class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col overflow-hidden w-[calc(50%-0.75rem)] sm:w-[calc(50%-1.5rem)] lg:w-[calc(25%-1.5rem)] max-w-[300px]">

                            <div class="relative h-32 md:h-44">
                                <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-3 md:p-5 flex flex-col flex-grow">
                                <div class="flex items-center gap-1 mb-2 md:mb-3">
                                    <div
                                        class="bg-[#FFB800] text-white p-0.5 md:p-1 rounded flex items-center justify-center w-4 h-4 md:w-5 md:h-5">
                                        <i class="fas fa-video text-[8px] md:text-[10px]"></i>
                                    </div>
                                    <span class="text-[8px] md:text-[10px] font-bold text-[#FFB800] uppercase">Live
                                        Class</span>
                                </div>

                                <h3
                                    class="font-bold text-gray-900 text-[13px] md:text-[15px] mb-2 leading-tight min-h-[32px] md:min-h-[40px] line-clamp-2">
                                    {{ $program['title'] }}
                                </h3>

                                <p class="text-[10px] md:text-[12px] text-gray-500 mb-4 line-clamp-2 leading-relaxed">
                                    {{ $program['desc'] }}
                                </p>

                                <div class="mt-auto">
                                    <div class="text-[14px] md:text-[16px] font-bold text-gray-900">
                                        {{ $program['price'] }}
                                    </div>

                                    @if ($program['discount'])
                                        <div class="flex items-center gap-1 md:gap-2 mt-0.5 mb-4">
                                            <span
                                                class="text-[#FF5C8A] font-bold text-[9px] md:text-[10px]">{{ $program['discount'] }}</span>
                                            <span
                                                class="text-gray-300 line-through text-[9px] md:text-[10px]">{{ $program['old_price'] }}</span>
                                        </div>
                                    @else
                                        <div class="mb-4"></div>
                                    @endif

                                    <a href="#"
                                        class="block w-full bg-[#007DFE] hover:bg-blue-600 text-white text-center py-2 md:py-2.5 rounded-lg font-bold text-[12px] md:text-sm transition-all shadow-sm">
                                        Lihat Kelas
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const slider = document.getElementById('alumni-slider');
                    if (!slider) return;

                    let isPaused = false;
                    const scrollStep = 300 + 20; // Lebar kartu (300px) + Gap (20px)
                    const slideInterval = 3000; // Jeda 3 detik per geseran

                    const autoSlide = setInterval(() => {
                        if (!isPaused) {
                            // Jika sudah sampai ujung kanan, balik ke nol
                            if (slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth) {
                                slider.scrollTo({
                                    left: 0,
                                    behavior: 'smooth'
                                });
                            } else {
                                // Geser ke kiri sejauh satu kartu
                                slider.scrollBy({
                                    left: scrollStep,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    }, slideInterval);

                    // Berhenti geser otomatis saat user menyentuh/menggeser manual (opsional)
                    slider.addEventListener('mouseenter', () => isPaused = true);
                    slider.addEventListener('mouseleave', () => isPaused = false);
                    slider.addEventListener('touchstart', () => isPaused = true);
                    slider.addEventListener('touchend', () => isPaused = false);
                });
            </script>
        </section>

        <section class="bg-[#FCF9F2] py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-3">
                        Bagaimana Metode Pembelajaran di Englishvit?
                    </h2>
                    <p class="text-[13px] md:text-sm text-gray-700 max-w-2xl mx-auto">
                        Tonton video penjelasan untuk melihat bagaimana proses pembelajaran di Englishvit
                    </p>
                </div>

                <div
                    class="relative w-full rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl border border-gray-200 bg-black aspect-video max-w-4xl mx-auto group">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/QK0manCBtws?rel=0" title="Metode Pembelajaran Englishvit"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-5xl mx-auto px-6">

                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">4 Alasan Untuk Belajar di Englishvit
                    </h2>
                    <p class="text-[13px] md:text-sm text-gray-600 max-w-2xl mx-auto">
                        Bersama para teacher berpengalaman, Englishvit membantu kamu meningkatkan skill 10X lebih cepat.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="bg-white border border-gray-200 rounded-xl p-5 flex gap-4 items-start shadow-sm">
                        <div class="w-14 h-14 shrink-0 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135810.png" alt="Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-[15px] mb-1">Metode Langsung Praktik</h3>
                            <p class="text-[12px] text-gray-500 leading-relaxed">Fokus meningkatkan skill komunikasi
                                aktif dengan metode praktikal dan aplikatif.</p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-5 flex gap-4 items-start shadow-sm">
                        <div class="w-14 h-14 shrink-0 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048927.png" alt="Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-[15px] mb-1">Kurikulum Terstandarisasi</h3>
                            <p class="text-[12px] text-gray-500 leading-relaxed">Semua kelas dikembangkan dengan
                                kurikulum aplikatif yang sesuai untuk kebutuhan.</p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-5 flex gap-4 items-start shadow-sm">
                        <div class="w-14 h-14 shrink-0 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1945/1945124.png" alt="Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-[15px] mb-1">Teacher Tersertifikasi</h3>
                            <p class="text-[12px] text-gray-500 leading-relaxed">Semua Teacher di Englishvit telah
                                melewati proses seleksi dengan standar dan sertifikasi yang ketat.</p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-5 flex gap-4 items-start shadow-sm">
                        <div class="w-14 h-14 shrink-0 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3067/3067252.png" alt="Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-[15px] mb-1">Full Media Support</h3>
                            <p class="text-[12px] text-gray-500 leading-relaxed">Live class di Englishvit didukung
                                media belajar komplit dan bisa diakses selamanya melalui Englishvit Apps dan Web.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">

                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Fasilitas Belajar Super Komplit</h2>
                    <p class="text-[13px] md:text-sm text-gray-600 max-w-2xl mx-auto">
                        Setiap mendaftar belajar di Englishvit, kamu akan mendapatkan fasilitas belajar yang super
                        komplit, seperti:
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="bg-[#F8FAFC] rounded-xl p-6 flex flex-col items-start border border-gray-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/1903/1903172.png" alt="Icon"
                            class="w-10 h-10 mb-4 object-contain">
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Teacher Profesional</h3>
                        <p class="text-[12px] text-gray-500 leading-relaxed">Kelas Online fokus praktik bersama teacher
                            profesional untuk membantu kamu improve skill 10X lebih cepat.</p>
                    </div>

                    <div class="bg-[#F8FAFC] rounded-xl p-6 flex flex-col items-start border border-gray-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/3389/3389081.png" alt="Icon"
                            class="w-10 h-10 mb-4 object-contain">
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Media Belajar Super Komplit</h3>
                        <p class="text-[12px] text-gray-500 leading-relaxed">Kelas dilengkapi dengan media belajar
                            berupa video pembelajaran, eBook, dan soal latihan plus pembahasannya.</p>
                    </div>

                    <div class="bg-[#F8FAFC] rounded-xl p-6 flex flex-col items-start border border-gray-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/2874/2874808.png" alt="Icon"
                            class="w-10 h-10 mb-4 object-contain">
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Sertifikat Hasil Belajar</h3>
                        <p class="text-[12px] text-gray-500 leading-relaxed">Untuk melihat perkembangan hasil
                            belajarmu, Englishvit memberikan sertifikat hasil belajar sebagai bukti pencapaian selama
                            mengikuti program.</p>
                    </div>

                    <div class="bg-[#F8FAFC] rounded-xl p-6 flex flex-col items-start border border-gray-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/2997/2997608.png" alt="Icon"
                            class="w-10 h-10 mb-4 object-contain">
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Group Belajar Bersama Teacher</h3>
                        <p class="text-[12px] text-gray-500 leading-relaxed">Selain media belajar, kamu juga akan
                            fasilitasi Group Belajar bersama dengan teacher untuk mendukung proses belajarmu.</p>
                    </div>

                    <div class="bg-[#F8FAFC] rounded-xl p-6 flex flex-col items-start border border-gray-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/2821/2821637.png" alt="Icon"
                            class="w-10 h-10 mb-4 object-contain">
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Rekaman Penjalanan Kelas</h3>
                        <p class="text-[12px] text-gray-500 leading-relaxed">Semua penjalanan kelas akan direkam dan
                            diberikan aksesnya kepada setiap students untuk mengulang pelajaran dan poin-poin penting
                            selama kelas.</p>
                    </div>

                    <div class="bg-[#F8FAFC] rounded-xl p-6 flex flex-col items-start border border-gray-100">
                        <img src="https://cdn-icons-png.flaticon.com/512/1055/1055644.png" alt="Icon"
                            class="w-10 h-10 mb-4 object-contain">
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">One on One Feedback</h3>
                        <p class="text-[12px] text-gray-500 leading-relaxed">Masing-masing siswa akan mendapatkan
                            feedback, evaluasi dan saran untuk meningkatkan kemampuan belajar.</p>
                    </div>
                </div>

                <div class="mt-16 text-center">
                    <h3 class="font-bold text-gray-900 text-[14px] md:text-[15px] mb-6">
                        Dengan semua fasilitas di atas, kamu akan dibimbing untuk meningkatkan skill bahasa Inggrismu
                        10X lebih cepat!
                    </h3>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#daftar"
                            class="bg-[#007DFE] text-white font-bold py-2.5 px-8 rounded-md hover:bg-blue-600 transition-colors text-sm shadow-sm">
                            Pilih Kelas
                        </a>
                        <a href="#"
                            class="border border-[#22C55E] text-[#22C55E] bg-white font-bold py-2.5 px-8 rounded-md hover:bg-green-50 transition-colors text-sm flex items-center justify-center gap-2 shadow-sm">
                            <i class="fab fa-whatsapp text-lg"></i> Chat Admin
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-[#F4F8FA] py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="flex justify-center lg:justify-end order-2 lg:order-1">
                    <img src="images/btm1.webp" alt="6 Poin Penting Englishvit"
                        class="w-full max-w-[450px] lg:max-w-[500px]">
                </div>

                <div class="order-1 lg:order-2">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-4 leading-tight">
                        6 Poin Penting Pembelajaran di Englishvit
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-700 mb-10 max-w-lg">
                        Kamu akan dibimbing secara bertahap untuk mencapai 6 poin penting dalam peningkatan skill bahasa
                        Inggrismu.
                    </p>

                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <div
                                class="bg-[#E6F0FF] text-[#0064D2] rounded-full w-8 h-8 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fas fa-bullhorn text-[12px]"></i>
                            </div>
                            <p class="text-[13px] md:text-[14px] text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Praktik speaking</strong> dengan topik percakapan
                                sehari-hari.
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <div
                                class="bg-[#E6F0FF] text-[#0064D2] rounded-full w-8 h-8 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fas fa-spell-check text-[12px]"></i>
                            </div>
                            <p class="text-[13px] md:text-[14px] text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Memperbaiki grammar</strong> untuk keperluan speaking.
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <div
                                class="bg-[#E6F0FF] text-[#0064D2] rounded-full w-8 h-8 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fas fa-wrench text-[12px]"></i>
                            </div>
                            <p class="text-[13px] md:text-[14px] text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Memperbaiki pronunciation</strong> untuk pengucapan
                                kosakata.
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <div
                                class="bg-[#E6F0FF] text-[#0064D2] rounded-full w-8 h-8 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fas fa-book text-[12px]"></i>
                            </div>
                            <p class="text-[13px] md:text-[14px] text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Meningkatkan perbendaharaan</strong> kosakata untuk
                                speaking.
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <div
                                class="bg-[#E6F0FF] text-[#0064D2] rounded-full w-8 h-8 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fas fa-users text-[12px]"></i>
                            </div>
                            <p class="text-[13px] md:text-[14px] text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Melatih spontanitas</strong> agar speaking lancar tanpa
                                macet.
                            </p>
                        </li>

                        <li class="flex items-start gap-4">
                            <div
                                class="bg-[#E6F0FF] text-[#0064D2] rounded-full w-8 h-8 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="fas fa-bolt text-[12px]"></i>
                            </div>
                            <p class="text-[13px] md:text-[14px] text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Melatih keberanian</strong> untuk berbicara bahasa
                                Inggris.
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <x-bonus />

        <x-testimonials-instansi :clients="$clients" />

        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">

                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Kelas Ini Cocok Untuk Siapa?</h2>
                    <p class="text-[13px] md:text-[14px] text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        Kelas ini direkomendasikan untuk kamu yang mengalami masalah dalam belajar bahasa Inggris
                        seperti di bawah ini:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div
                        class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 md:p-8 hover:shadow-md transition-shadow">
                        <div
                            class="bg-[#EBF3FF] text-[#0064D2] font-extrabold w-10 h-10 rounded-full flex items-center justify-center mb-5 text-lg">
                            1
                        </div>
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Pusing Mikirin Grammar</h3>
                        <p class="text-[13px] text-gray-500 leading-relaxed">Setiap mau speaking, bingung mikirin
                            grammar yang tepat dan takut salah.</p>
                    </div>

                    <div
                        class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 md:p-8 hover:shadow-md transition-shadow">
                        <div
                            class="bg-[#EBF3FF] text-[#0064D2] font-extrabold w-10 h-10 rounded-full flex items-center justify-center mb-5 text-lg">
                            2
                        </div>
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Salah Pengucapan Kata</h3>
                        <p class="text-[13px] text-gray-500 leading-relaxed">Takut salah mengucapkan kata sehingga
                            lawan bicara tidak paham maksud kita.</p>
                    </div>

                    <div
                        class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 md:p-8 hover:shadow-md transition-shadow">
                        <div
                            class="bg-[#EBF3FF] text-[#0064D2] font-extrabold w-10 h-10 rounded-full flex items-center justify-center mb-5 text-lg">
                            3
                        </div>
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Nggak Ada Pembimbing</h3>
                        <p class="text-[13px] text-gray-500 leading-relaxed">Tidak punya pembimbing untuk belajar
                            bersama dan memperbaiki kesalahan kita.</p>
                    </div>

                    <div
                        class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 md:p-8 hover:shadow-md transition-shadow">
                        <div
                            class="bg-[#EBF3FF] text-[#0064D2] font-extrabold w-10 h-10 rounded-full flex items-center justify-center mb-5 text-lg">
                            4
                        </div>
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Kosakata Terbatas</h3>
                        <p class="text-[13px] text-gray-500 leading-relaxed">Suka macet saat speaking karena penguasaan
                            kosakata yang terbatas.</p>
                    </div>

                    <div
                        class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 md:p-8 hover:shadow-md transition-shadow">
                        <div
                            class="bg-[#EBF3FF] text-[#0064D2] font-extrabold w-10 h-10 rounded-full flex items-center justify-center mb-5 text-lg">
                            5
                        </div>
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Terlalu Banyak Teori</h3>
                        <p class="text-[13px] text-gray-500 leading-relaxed">Malas kursus bahasa Inggris karena terlalu
                            banyak teori dan kurang praktik speaking.</p>
                    </div>

                    <div
                        class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 md:p-8 hover:shadow-md transition-shadow">
                        <div
                            class="bg-[#EBF3FF] text-[#0064D2] font-extrabold w-10 h-10 rounded-full flex items-center justify-center mb-5 text-lg">
                            6
                        </div>
                        <h3 class="font-bold text-gray-900 text-[15px] mb-2">Kurang Praktik & Evaluasi</h3>
                        <p class="text-[13px] text-gray-500 leading-relaxed">Masih kurang praktik speaking dan evaluasi
                            dari kesalahan yang dibuat.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-8 md:py-12 bg-[#0A1D47] text-white">
            <div class="max-w-4xl mx-auto px-6 text-center">

                <h2 class="text-2xl md:text-3xl font-extrabold mb-3">Diskon Spesial Pembelian Hari Ini</h2>
                <p class="text-[14px] text-gray-300 mb-6">Segera daftarkan dirimu hari ini untuk mendapatkan diskon
                    spesial.</p>

                <x-countdown />

                <div class="mt-2">
                    <h2 class="text-2xl md:text-3xl font-extrabold mb-3">Your Last Opportunity</h2>
                    <p class="text-[13px] text-gray-300 mb-10 max-w-2xl mx-auto">
                        Kesempatan terakhir kamu mendapatkan PROMO harga spesial + BONUS Exclusive untuk pendaftaran
                        hari ini.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#daftar"
                            class="bg-[#FFB800] text-gray-900 font-bold py-3 px-10 rounded-lg text-sm">Pilih Kelas</a>
                        <a href="#"
                            class="border border-gray-500 text-white font-bold py-3 px-10 rounded-lg text-sm flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i> Chat Admin
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <x-footer />

</body>

</html>
