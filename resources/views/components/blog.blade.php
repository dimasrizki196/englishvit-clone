<!-- ========================================== -->
<!-- SECTION: TELAH DILIPUT OLEH (MARQUEE KIRI) -->
<!-- ========================================== -->
<section class="pt-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 text-center mb-8">
        <h3 class="text-sm md:text-base font-bold text-gray-800 uppercase tracking-wider">Telah diliput oleh:</h3>
    </div>

    <!-- Area Marquee Berjalan ke Kiri -->
    <div class="marquee-media-wrapper relative flex overflow-hidden w-full group py-4">
        <!-- Container logo yang akan diduplikasi oleh JS -->
        <div id="media-content-left" class="marquee-left flex gap-12 md:gap-24 items-center px-6 min-w-max">

            <img src="{{ asset('images/logos/inews.webp') }}" alt="iNews"
                class="h-7 md:h-9 object-contain transition-all duration-300">

            <img src="{{ asset('images/logos/liputan6.webp') }}" alt="Liputan 6"
                class="h-8 md:h-10 object-contain transition-all duration-300">

            <img src="{{ asset('images/logos/media-indonesia.webp') }}" alt="Media Indonesia"
                class="h-8 md:h-10 object-contain transition-all duration-300">

            <img src="{{ asset('images/logos/sindonews.webp') }}" alt="Sindonews"
                class="h-7 md:h-9 object-contain transition-all duration-300">

            <img src="{{ asset('images/logos/suaracom.webp') }}" alt="Suara.com"
                class="h-7 md:h-9 object-contain transition-all duration-300">

            <img src="{{ asset('images/logos/warta-jatim.webp') }}" alt="Warta Jatim"
                class="h-7 md:h-9 object-contain transition-all duration-300">

        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- SECTION: KONSULTASI ADMIN (BANNER BIRU)    -->
<!-- ========================================== -->
<section class="py-12 md:py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="relative overflow-hidden bg-[#0064D2] rounded-3xl p-8 md:p-12 shadow-xl">

            <!-- Aksen Dekoratif di Background -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/20 rounded-full -mr-20 -mt-20 blur-3xl"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <!-- Sisi Kiri: Gambar/Ilustrasi -->
                <div class="w-full md:w-1/3 flex justify-center">
                    <div class="relative">
                        <!-- Gambar Dummy Orang/Admin -->
                        <img src="images/admin2.webp" alt="Admin Englishvit"
                            class="w-48 h-48 md:w-64 md:h-64 object-cover rounded-2xl">
                    </div>
                </div>

                <!-- Sisi Kanan: Teks & Button -->
                <div class="w-full md:w-2/3 text-center md:text-left">
                    <p class="text-blue-100 font-medium mb-2 text-sm md:text-base">Masih bingung menentukan program?</p>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-white mb-4 leading-tight">
                        Yuk, konsultasi dengan friendly admin Englishvit!
                    </h2>
                    <p class="text-white/80 text-xs md:text-sm mb-8">
                        Live Chat & Helpdesk via WhatsApp tersedia setiap hari Senin-Minggu, 09:00 - 22:00 WIB
                    </p>

                    <a href="https://wa.me/yournumber" target="_blank"
                        class="inline-flex items-center gap-3 bg-[#25D366] hover:bg-[#1ebd5b] text-white font-bold py-3 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg">
                        <i class="fab fa-whatsapp text-xl"></i>
                        Chat Admin Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- SECTION: BLOG TERBARU                      -->
<!-- ========================================== -->
<section class="py-12 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header Blog -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Blog</h2>
            <p class="text-gray-500 text-sm md:text-base">Baca artikel seputar bahasa Inggris secara gratis di sini!</p>
        </div>

        <!-- Grid Artikel -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Artikel 1 -->
            <article class="group">
                <div class="overflow-hidden rounded-2xl mb-5 shadow-sm border border-gray-100">
                    <img src="images/g1.webp" alt="Tips TOEFL"
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <time class="text-xs text-gray-400 mb-2 block">Aug 30, 2023</time>
                <h3
                    class="text-lg font-bold text-gray-900 mb-3 group-hover:text-[#0064D2] transition-colors line-clamp-2">
                    10 Tips Mengerjakan Test TOEFL
                </h3>
                <p class="text-sm text-gray-500 mb-4 line-clamp-3">
                    TOEFL (Test of English as a Foreign Language) merupakan ujian standar yang mengukur kemampuan bahasa
                    Inggris Anda...
                </p>
                <a href="#"
                    class="text-[#0064D2] font-bold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                    Selengkapnya <i class="fas fa-chevron-right text-[10px]"></i>
                </a>
            </article>

            <!-- Artikel 2 -->
            <article class="group">
                <div class="overflow-hidden rounded-2xl mb-5 shadow-sm border border-gray-100">
                    <img src="images/g0.webp" alt="Used To vs Be Used To"
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <time class="text-xs text-gray-400 mb-2 block">Jun 06, 2023</time>
                <h3
                    class="text-lg font-bold text-gray-900 mb-3 group-hover:text-[#0064D2] transition-colors line-clamp-2">
                    Perbedaan Used To dan Be Used To dan Contohnya dalam Bahasa Inggris
                </h3>
                <p class="text-sm text-gray-500 mb-4 line-clamp-3">
                    Berikut perbedaan used to and be used to beserta contohnya! Sangat membantu untuk percakapan
                    sehari-hari.
                </p>
                <a href="#"
                    class="text-[#0064D2] font-bold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                    Selengkapnya <i class="fas fa-chevron-right text-[10px]"></i>
                </a>
            </article>

            <!-- Artikel 3 -->
            <article class="group">
                <div class="overflow-hidden rounded-2xl mb-5 shadow-sm border border-gray-100">
                    <img src="images/g2.webp" alt="Soal TOEFL Structure"
                        class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <time class="text-xs text-gray-400 mb-2 block">Jun 01, 2023</time>
                <h3
                    class="text-lg font-bold text-gray-900 mb-3 group-hover:text-[#0064D2] transition-colors line-clamp-2">
                    Contoh Soal TOEFL Structure Lengkap Beserta Pembahasannya
                </h3>
                <p class="text-sm text-gray-500 mb-4 line-clamp-3">
                    Cari tahu contoh soal TOEFL structure lengkap beserta pembahasannya DISINI! Persiapkan dirimu
                    sekarang.
                </p>
                <a href="#"
                    class="text-[#0064D2] font-bold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                    Selengkapnya <i class="fas fa-chevron-right text-[10px]"></i>
                </a>
            </article>

        </div>
    </div>
</section>

<style>
    .marquee-left {
        animation: scroll-left-media 30s linear infinite;
    }

    .marquee-media-wrapper:hover .marquee-left {
        animation-play-state: paused;
    }

    @keyframes scroll-left-media {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Script Kloning Logo Media (Arah Kiri)
        const mediaContentLeft = document.getElementById('media-content-left');
        if (mediaContentLeft) {
            const mediaLogos = Array.from(mediaContentLeft.children);
            mediaLogos.forEach(logo => {
                const clone = logo.cloneNode(true);
                clone.setAttribute('aria-hidden', true);
                mediaContentLeft.appendChild(clone);
            });
        }
    });
</script>
