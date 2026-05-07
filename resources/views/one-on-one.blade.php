<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One on One - Englishvit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-white antialiased font-sans">

    <x-navbar />

    <main>
        <section class="bg-[#004BB4] relative overflow-hidden py-16 lg:py-24">
            <div class="absolute inset-0 opacity-20 pointer-events-none"
                style="background-image: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.05) 100%);">
            </div>

            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative z-10">

                <div class="order-2 lg:order-1 text-center lg:text-left text-white">
                    <h1 class="text-3xl md:text-[42px] font-extrabold leading-[1.15] mb-5">
                        Susah Cari Waktu<br>Belajar? One on One<br>Solusinya
                    </h1>
                    <p class="text-[14px] md:text-[15px] text-blue-100 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                        Kursus privat online dengan materi sesuai kebutuhan dan jadwal fleksibel. Upgrade Bahasa Inggris
                        lebih cepat!
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-4">
                        <a href="#pilihan-program"
                            class="bg-[#FFB800] text-gray-900 font-bold py-3 px-8 rounded-lg hover:bg-[#e6a600] transition-colors text-[13px] md:text-sm shadow-md">
                            Pilih Program Private
                        </a>
                        <a href="https://wa.me/yournumber" target="_blank"
                            class="bg-transparent border border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white/10 transition-colors text-[13px] md:text-sm">
                            Konsultasi Gratis
                        </a>
                    </div>

                    <p class="text-[11px] md:text-[12px] font-bold text-[#FFB800]">
                        *Dapatkan diskon spesial hari ini
                    </p>
                </div>

                <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                    <img src="{{ asset('images/top2.webp') }}" alt="One on One Program" class="w-full max-w-[500px]">
                </div>
            </div>
        </section>

        <section class="bg-[#F8F9FA] border-b border-gray-200 py-6 md:py-8">
            <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-12">

                <div class="text-center lg:text-left flex items-center gap-8">
                    <h3 class="font-bold text-[#2D2D2D] text-[16px] md:text-[18px] leading-snug">
                        Resmi terdaftar sebagai Lembaga<br class="hidden md:block"> Pendidikan Non-Formal oleh:
                    </h3>
                    <div class="hidden lg:block w-px h-14 bg-gray-300"></div>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-10">

                    <div class="flex items-center gap-2.5">
                        <img src="{{ asset('images/logos/komdigi_white.webp') }}" alt="Logo Komdigi"
                            class="h-10 md:h-12 object-contain"
                            style="filter: brightness(0) saturate(100%) invert(21%) sepia(91%) saturate(2331%) hue-rotate(205deg) brightness(92%) contrast(101%);">
                        <div class="flex flex-col justify-center text-left">
                            <span
                                class="text-[17px] md:text-[20px] font-bold text-[#555555] tracking-widest leading-none mb-1">KOMDIGI</span>
                            <span class="text-[7px] md:text-[8px] text-gray-500 leading-tight tracking-wide">
                                Kementerian Komunikasi dan Digital<br>Republik Indonesia
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logos/kemendikbud.webp') }}" alt="Logo Kemendikbud"
                            class="h-10 md:h-12 object-contain">
                        <div class="flex flex-col justify-center text-left">
                            <span
                                class="text-[10px] md:text-[12px] font-semibold text-[#3B4C68] leading-tight tracking-wide">
                                KEMENTERIAN<br>PENDIDIKAN DAN KEBUDAYAAN
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logos/dpmptsp.webp') }}" alt="Logo DPMPTSP"
                            class="h-10 md:h-12 object-contain">
                        <span
                            class="text-[12px] md:text-[14px] font-extrabold text-[#2D2D2D] tracking-wide leading-none">
                            DINAS DPMPTSP
                        </span>
                    </div>

                </div>

            </div>
        </section>

        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="flex justify-center lg:justify-start">
                    <img src="{{ asset('images/rectangle.webp') }}" alt="Bingung belajar bahasa Inggris"
                        class="w-full max-w-[500px] rounded-[32px] object-cover">
                </div>

                <div>
                    <h2 class="text-3xl md:text-[38px] font-extrabold text-gray-900 leading-[1.2] mb-5">
                        Udah coba semua cara, tapi progress belum kelihatan?
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-600 mb-8 leading-relaxed">
                        Progress belajar Bahasa Inggrismu lebih lambat bisa jadi karena kamu:
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="text-lg">🕒</span>
                            <p class="text-[14px] text-gray-700 mt-0.5">Jarang punya waktu buat belajar</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-lg">📄</span>
                            <p class="text-[14px] text-gray-700 mt-0.5">Nggak punya panduan yang jelas</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-lg">📑</span>
                            <p class="text-[14px] text-gray-700 mt-0.5">Belajar topik yang gak relevan dengan kebutuhan
                                kamu</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-lg">😰</span>
                            <p class="text-[14px] text-gray-700 mt-0.5">Belajarnya rame, jadi kamu gak dapat fokus penuh
                                dari tutor</p>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="py-16 md:py-24 bg-[#FAFBFC] border-t border-gray-100 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-2">

                <div class="text-center mb-16">
                    <h2 class="text-2xl md:text-[32px] font-extrabold text-gray-900 mb-4">
                        Alasan program One on One Englishvit Jadi Favorit
                    </h2>
                    <p class="text-[14px] text-gray-600 max-w-2xl mx-auto">
                        Belajar bahasa inggris lebih fokus, fleksibel, dan relevan dengan tujuan kamu.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-16 xl:gap-20 items-center">

                    <div class="flex flex-col gap-4 lg:gap-20 order-2 lg:order-1">

                        <div
                            class="bg-white lg:bg-transparent p-5 lg:p-0 rounded-2xl lg:rounded-none shadow-sm lg:shadow-none flex flex-col lg:items-end text-left lg:text-right w-full lg:max-w-[280px] mx-auto lg:mx-auto">

                            <div
                                class="flex flex-row lg:flex-col items-center lg:items-end gap-4 lg:gap-0 mb-1 lg:mb-0">
                                <img src="images/icons/icn1.webp" alt="Materi Icon"
                                    class="w-10 h-10 lg:w-12 lg:h-12 lg:mb-4 object-contain shrink-0">
                                <h3 class="font-extrabold text-gray-900 text-[15px] lg:text-[16px] lg:mb-2">Materi
                                    Sesuai Kebutuhan</h3>
                            </div>

                            <p class="text-[13px] lg:text-[12px] text-gray-500 leading-relaxed mt-1 lg:mt-0">
                                Pilih dan request materi belajar yang paling relevan dengan kebutuhan dan tujuan
                                belajarmu.
                            </p>
                        </div>

                        <div
                            class="bg-white lg:bg-transparent p-5 lg:p-0 rounded-2xl lg:rounded-none shadow-sm lg:shadow-none flex flex-col lg:items-end text-left lg:text-right w-full lg:max-w-[280px] mx-auto lg:mx-auto">
                            <div
                                class="flex flex-row lg:flex-col items-center lg:items-end gap-4 lg:gap-0 mb-1 lg:mb-0">
                                <img src="images/icons/icn2.webp" alt="Tutor Icon"
                                    class="w-10 h-10 lg:w-12 lg:h-12 lg:mb-4 object-contain shrink-0">
                                <h3 class="font-extrabold text-gray-900 text-[15px] lg:text-[16px] lg:mb-2">Tutor
                                    Bersertifikat</h3>
                            </div>
                            <p class="text-[13px] lg:text-[12px] text-gray-500 leading-relaxed mt-1 lg:mt-0">
                                Dibimbing tutor bersertifikat dengan standar pengajaran premium agar kualitas belajar
                                tetap terjaga.
                            </p>
                        </div>

                    </div>

                    <div
                        class="order-1 lg:order-2 flex justify-center items-center relative w-full min-h-[250px] lg:min-h-[400px]">

                        <img src="{{ asset('images/skills-info-vectors-left.webp') }}" alt="Vektor Kiri"
                            class="hidden lg:block absolute right-[85%] top-1/2 -translate-y-1/2 w-[800px] xl:w-[120px] z-0 pointer-events-none object-contain">

                        <img src="{{ asset('images/rectangle-74.webp') }}" alt="Ilustrasi Belajar"
                            class="w-full max-w-[280px] lg:max-w-[280px] relative z-10 object-contain">

                        <img src="{{ asset('images/skills-info-vectors-right.webp') }}" alt="Vektor Kanan"
                            class="hidden lg:block absolute left-[85%] top-1/2 -translate-y-1/2 w-[800px] xl:w-[120px] z-0 pointer-events-none object-contain">
                    </div>

                    <div class="flex flex-col gap-4 lg:gap-20 order-3">

                        <div
                            class="bg-white lg:bg-transparent p-5 lg:p-0 rounded-2xl lg:rounded-none shadow-sm lg:shadow-none flex flex-col lg:items-start text-left w-full lg:max-w-[280px] mx-auto lg:mx-auto">
                            <div
                                class="flex flex-row lg:flex-col items-center lg:items-start gap-4 lg:gap-0 mb-1 lg:mb-0">
                                <img src="images/icons/icn0.webp" alt="Waktu Icon"
                                    class="w-10 h-10 lg:w-12 lg:h-12 lg:mb-4 object-contain shrink-0">
                                <h3 class="font-extrabold text-gray-900 text-[15px] lg:text-[16px] lg:mb-2">Jadwal
                                    Fleksibel</h3>
                            </div>
                            <p class="text-[13px] lg:text-[12px] text-gray-500 leading-relaxed mt-1 lg:mt-0">
                                Atur jadwal belajar lebih mudah dan pilih mentor yang sesuai dengan waktu serta gaya
                                belajar kamu.
                            </p>
                        </div>

                        <div
                            class="bg-white lg:bg-transparent p-5 lg:p-0 rounded-2xl lg:rounded-none shadow-sm lg:shadow-none flex flex-col lg:items-start text-left w-full lg:max-w-[280px] mx-auto lg:mx-auto">
                            <div
                                class="flex flex-row lg:flex-col items-center lg:items-start gap-4 lg:gap-0 mb-1 lg:mb-0">
                                <img src="images/icons/icn3.webp" alt="Progress Icon"
                                    class="w-10 h-10 lg:w-12 lg:h-12 lg:mb-4 object-contain shrink-0">
                                <h3 class="font-extrabold text-gray-900 text-[15px] lg:text-[16px] lg:mb-2">Progress
                                    Lebih Cepat</h3>
                            </div>
                            <p class="text-[13px] lg:text-[12px] text-gray-500 leading-relaxed mt-1 lg:mt-0">
                                Dengan fokus penuh dan materi yang tepat sasaran, hasil belajarmu terasa lebih cepat.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">

                <div class="relative">
                    <div id="alumni-scroll"
                        class="flex overflow-x-auto gap-12 md:gap-8 pb-6 snap-x snap-mandatory hide-scrollbar scroll-smooth">
                        @foreach ($alumniShorts as $index => $alumni)
                            <div
                                class="snap-center shrink-0 w-[240px] md:w-[280px] h-[420px] md:h-[480px] rounded-[24px] overflow-hidden relative shadow-sm hover:shadow-lg transition-shadow bg-gray-900 group">

                                <div id="alumni-thumb-{{ $index }}"
                                    onclick="playInlineVideo('{{ $alumni['video_id'] }}', {{ $index }})"
                                    class="absolute inset-0 cursor-pointer z-10">
                                    <img src="https://img.youtube.com/vi/{{ $alumni['video_id'] }}/hqdefault.jpg"
                                        alt="Video Alumni"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                                    <div
                                        class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors">
                                    </div>

                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="bg-[#FF3B30] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                            <i class="fas fa-play text-xl ml-1"></i>
                                        </div>
                                    </div>

                                    <div class="absolute bottom-4 right-4 w-14 h-14 md:w-16 md:h-16 opacity-90">
                                        <img src="{{ asset('images/logo-bulat.png') }}" alt="Watermark"
                                            class="w-full h-full object-contain" onerror="this.style.display='none'">
                                    </div>
                                </div>

                                <div id="alumni-video-{{ $index }}" class="absolute inset-0 z-0 hidden"></div>

                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-center gap-2 mt-6" id="alumni-dots">
                        @for ($i = 0; $i < 4; $i++)
                            <button onclick="scrollToAlumni({{ $i }})"
                                class="alumni-dot h-2 rounded-full transition-all duration-300 {{ $i === 0 ? 'w-6 bg-[#007DFE]' : 'w-2 bg-gray-300 hover:bg-gray-400' }}"
                                aria-label="Go to slide {{ $i + 1 }}">
                            </button>
                        @endfor
                    </div>
                </div>
            </div>
            <script>
                function scrollToAlumni(index) {
                    const container = document.getElementById('alumni-scroll');
                    const cards = container.children;

                    if (cards.length > 0 && cards[index]) {
                        const targetCard = cards[index];
                        const scrollPosition = targetCard.offsetLeft - container.offsetLeft;

                        container.scrollTo({
                            left: scrollPosition,
                            behavior: 'smooth'
                        });
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    const container = document.getElementById('alumni-scroll');
                    const dots = document.querySelectorAll('.alumni-dot');

                    if (container && dots.length > 0) {
                        container.addEventListener('scroll', () => {
                            const scrollLeft = container.scrollLeft;
                            const cardWidth = container.children[0].offsetWidth;
                            let activeIndex = Math.round(scrollLeft / cardWidth);
                            if (activeIndex >= dots.length) activeIndex = dots.length - 1;

                            dots.forEach((dot, index) => {
                                if (index === activeIndex) {
                                    dot.className =
                                        'alumni-dot h-2 rounded-full transition-all duration-300 w-6 bg-[#007DFE]';
                                } else {
                                    dot.className =
                                        'alumni-dot h-2 rounded-full transition-all duration-300 w-2 bg-gray-300 hover:bg-gray-400';
                                }
                            });
                        });
                    }
                });

                let currentPlayingIndex = null;

                function playInlineVideo(videoId, index) {
                    if (currentPlayingIndex !== null && currentPlayingIndex !== index) {
                        const prevThumb = document.getElementById('alumni-thumb-' + currentPlayingIndex);
                        const prevVideo = document.getElementById('alumni-video-' + currentPlayingIndex);

                        if (prevThumb) prevThumb.style.display = 'block';
                        if (prevVideo) {
                            prevVideo.classList.add('hidden');
                            prevVideo.innerHTML = '';
                        }
                    }

                    currentPlayingIndex = index;

                    const thumbElement = document.getElementById('alumni-thumb-' + index);
                    if (thumbElement) thumbElement.style.display = 'none';

                    const videoElement = document.getElementById('alumni-video-' + index);
                    if (videoElement) {
                        videoElement.classList.remove('hidden');
                        videoElement.innerHTML = `
                        <iframe 
                            class="w-full h-full" 
                            src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    `;
                    }
                }
            </script>
        </section>

        <section class="py-16 md:py-24 bg-[#FAFBFC] overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-[1fr_1.5fr] gap-12 items-center">

                <div class="text-center lg:text-left z-20">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#212529] mb-5 leading-tight">
                        Temukan Mentor yang Tepat untuk Kamu
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-600 mb-8 leading-relaxed">
                        Lihat profil lengkap mentor, pengalaman, dan gaya mengajar mereka sebelum kamu memilih siapa
                        yang paling pas.
                    </p>
                    <a href="#"
                        class="text-[#1176F5] font-bold text-[14px] hover:underline flex items-center justify-center lg:justify-start gap-2">
                        Lihat Semua Tutor &rarr;
                    </a>
                </div>

                <div class="relative w-full h-[500px] flex items-center justify-center">
                    <button onclick="moveMentor(-1)"
                        class="absolute left-0 lg:-left-10 z-50 bg-white shadow-lg border border-gray-100 w-12 h-12 rounded-full flex items-center justify-center text-[#1176F5] hover:scale-110 transition-transform">
                        <i class="fas fa-chevron-left text-lg"></i>
                    </button>

                    <div class="relative w-full max-w-[320px] h-full" id="mentor-3d-carousel">
                        @foreach ($mentors as $index => $mentor)
                            <div class="mentor-card absolute top-1/2 left-1/2 -translate-y-1/2 transition-all duration-500 ease-in-out w-[280px] md:w-[320px] h-[450px] rounded-2xl overflow-hidden shadow-2xl flex flex-col bg-[#1176F5]"
                                data-index="{{ $index }}">

                                <div class="relative w-full h-full">
                                    <div class="absolute top-4 left-4 right-4 z-30 flex flex-wrap gap-2">
                                        <span
                                            class="bg-white text-[#00B67A] text-[10px] font-bold px-2.5 py-1.5 rounded flex items-center gap-1.5 shadow-sm">
                                            <div class="w-2 h-2 bg-[#00B67A] rounded-full"></div> Best Teacher
                                        </span>
                                        <span
                                            class="bg-white text-[#1176F5] text-[10px] font-bold px-2.5 py-1.5 rounded shadow-sm">Grammar
                                            for Speaking</span>
                                        <span
                                            class="bg-white text-[#1176F5] text-[10px] font-bold px-2.5 py-1.5 rounded shadow-sm">+2
                                            Others</span>
                                    </div>

                                    <img src="{{ $mentor['image'] }}" alt="{{ $mentor['name'] }}"
                                        class="absolute inset-0 w-full h-full object-cover">

                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#1b1d22] via-[#1b1d22]/40 to-transparent">
                                    </div>

                                    <div class="absolute bottom-0 left-0 right-0 p-6 flex flex-col justify-end z-20">
                                        <h3 class="text-white font-extrabold text-[20px] mb-1">{{ $mentor['name'] }}
                                        </h3>
                                        <p class="text-gray-200 text-[13px] leading-snug mb-3 line-clamp-2">
                                            {{ $mentor['desc'] }}</p>
                                        <p class="text-white font-semibold text-[13px] mb-5 flex items-center gap-1.5">
                                            <i class="fas fa-star text-[#FFC107]"></i> {{ $mentor['rating'] }}
                                        </p>

                                        <div class="flex gap-3">
                                            <a href="#"
                                                class="flex-1 bg-[#1176F5] hover:bg-blue-600 text-white font-bold text-center py-2.5 rounded-xl text-[14px] transition-colors">
                                                Lihat Detail
                                            </a>
                                            <button onclick="openVideoModal('{{ $mentor['video_id'] }}')"
                                                class="bg-[#DF121D] hover:bg-red-700 text-white w-12 h-12 shrink-0 rounded-xl flex items-center justify-center transition-colors">
                                                <i class="fas fa-play text-[16px] ml-0.5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                    <button onclick="moveMentor(1)"
                        class="absolute right-0 lg:-right-10 z-50 bg-white shadow-lg border border-gray-100 w-12 h-12 rounded-full flex items-center justify-center text-[#1176F5] hover:scale-110 transition-transform">
                        <i class="fas fa-chevron-right text-lg"></i>
                    </button>
                </div>
            </div>

            <div id="video-modal"
                class="fixed inset-0 z-[999] bg-black/90 hidden flex-col items-center justify-center p-4 md:p-10 opacity-0 transition-opacity duration-300 backdrop-blur-sm">
                <div class="relative w-full max-w-4xl bg-black rounded-2xl overflow-hidden shadow-2xl scale-95 transition-transform duration-300 flex flex-col"
                    id="video-modal-content">

                    <button onclick="closeVideoModal()"
                        class="absolute top-3 right-3 md:-top-12 md:-right-12 z-50 text-white hover:text-gray-300 transition-colors w-10 h-10 flex items-center justify-center bg-black/50 md:bg-transparent rounded-full">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <div class="relative w-full aspect-video bg-gray-900">
                        <iframe id="modal-iframe"
                            class="absolute top-0 left-0 w-full h-full rounded-xl md:rounded-2xl" src=""
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
            <script>
                // --- SCRIPT 3D COVERFLOW MENTOR SLIDER ---
                let currentMentorIdx = 0;

                function initMentor3DSlider() {
                    const cards = document.querySelectorAll('.mentor-card');
                    const totalCards = cards.length;

                    if (totalCards === 0) return;

                    cards.forEach((card, i) => {
                        card.classList.remove('z-30', 'z-20', 'z-10', 'scale-100', 'scale-[0.85]', 'scale-75',
                            '-translate-x-1/2', '-translate-x-[115%]', 'translate-x-[15%]', 'opacity-100', 'opacity-0',
                            'pointer-events-none');

                        let diff = i - currentMentorIdx;

                        if (diff < -1) diff += totalCards;
                        if (diff > 1) diff -= totalCards;

                        if (diff === 0) {
                            card.classList.add('z-30', 'scale-100', '-translate-x-1/2', 'opacity-100');
                        } else if (diff === -1 || (diff === totalCards - 1 && totalCards > 2)) {
                            card.classList.add('z-20', 'scale-[0.85]', '-translate-x-[115%]', 'opacity-100');
                        } else if (diff === 1 || (diff === -(totalCards - 1) && totalCards > 2)) {
                            card.classList.add('z-20', 'scale-[0.85]', 'translate-x-[15%]', 'opacity-100');
                        } else {
                            card.classList.add('z-10', 'scale-75', '-translate-x-1/2', 'opacity-0', 'pointer-events-none');
                        }
                    });
                }

                function moveMentor(direction) {
                    const cards = document.querySelectorAll('.mentor-card');
                    currentMentorIdx = (currentMentorIdx + direction + cards.length) % cards.length;
                    initMentor3DSlider();
                }
                document.addEventListener('DOMContentLoaded', () => {
                    initMentor3DSlider();
                });

                // --- SCRIPT MODAL VIDEO MENTOR ---

                // Fungsi Membuka Modal
                function openVideoModal(videoId) {
                    const modal = document.getElementById('video-modal');
                    const content = document.getElementById('video-modal-content');
                    const iframe = document.getElementById('modal-iframe');

                    if (modal && iframe) {
                        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1`;

                        modal.classList.remove('hidden');
                        modal.classList.add('flex');

                        setTimeout(() => {
                            modal.classList.remove('opacity-0');
                            if (content) content.classList.remove('scale-95');
                        }, 10);
                    }
                }

                // Fungsi Menutup Modal
                function closeVideoModal() {
                    const modal = document.getElementById('video-modal');
                    const content = document.getElementById('video-modal-content');
                    const iframe = document.getElementById('modal-iframe');

                    modal.classList.add('opacity-0');
                    if (content) content.classList.add('scale-95');

                    setTimeout(() => {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');

                        if (iframe) iframe.src = '';
                    }, 300);
                }

                document.addEventListener('DOMContentLoaded', () => {
                    const modal = document.getElementById('video-modal');
                    if (modal) {
                        modal.addEventListener('click', function(e) {
                            if (e.target === this) {
                                closeVideoModal();
                            }
                        });
                    }
                });
            </script>
        </section>

        <section class="py-16 md:py-24 bg-[#faf5eb] relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 relative z-10">

                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-[36px] font-extrabold text-[#212529] mb-4">
                        Dengar Kisah Sukses Mereka
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-600 max-w-2xl mx-auto">
                        Ini adalah cerita nyata mereka yang berhasil menguasai bahasa Inggris dengan program One on One
                        Englishvit
                    </p>
                </div>

                <div class="relative w-full max-w-5xl mx-auto flex items-center">

                    <button onclick="scrollTesti(-1)"
                        class="absolute -left-4 md:-left-12 z-20 bg-white border border-[#007DFE] w-10 h-10 rounded-full flex items-center justify-center text-[#007DFE] hover:bg-blue-50 transition-colors">
                        <i class="fas fa-chevron-left text-sm"></i>
                    </button>

                    <div id="testi-scroll"
                        class="flex overflow-x-auto gap-6 snap-x snap-mandatory hide-scrollbar scroll-smooth w-full py-4 px-2">
                        @foreach ($testimonials as $testi)
                            <div
                                class="snap-center shrink-0 w-full md:w-[calc(50%-12px)] bg-white rounded-3xl p-8 shadow-sm border border-gray-100 relative flex flex-col justify-between min-h-[300px]">

                                <div
                                    class="absolute bottom-0 right-0 w-full h-32 bg-gradient-to-tl from-[#EBF4FF] to-transparent rounded-br-3xl pointer-events-none opacity-50">
                                </div>

                                <div>
                                    <div class="flex justify-between items-start mb-4 relative z-10">
                                        <i class="fas fa-quote-left text-3xl text-[#007DFE]"></i>
                                        <div class="flex text-[#FFC107] text-[13px] gap-0.5">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="text-[#333333] text-[13.5px] leading-relaxed mb-8 relative z-10">
                                        {{ $testi['text'] }}
                                    </p>
                                </div>

                                <div class="flex items-center gap-4 relative z-10 mt-auto">
                                    <img src="{{ $testi['img'] }}" alt="{{ $testi['name'] }}"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <h4 class="font-extrabold text-[#212529] text-[14px]">{{ $testi['name'] }}
                                        </h4>
                                        <p class="text-gray-500 text-[12px]">{{ $testi['sub'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button onclick="scrollTesti(1)"
                        class="absolute -right-4 md:-right-12 z-20 bg-white border border-[#007DFE] w-10 h-10 rounded-full flex items-center justify-center text-[#007DFE] hover:bg-blue-50 transition-colors">
                        <i class="fas fa-chevron-right text-sm"></i>
                    </button>

                </div>

                <div class="flex justify-center gap-1.5 mt-8" id="testi-dots">
                    @foreach ($testimonials as $index => $t)
                        <button onclick="scrollToTestiDot({{ $index }})"
                            class="testi-dot rounded-full transition-all duration-300 {{ $index === 0 ? 'w-5 h-1.5 bg-[#007DFE]' : 'w-1.5 h-1.5 bg-gray-300' }}"></button>
                    @endforeach
                </div>

            </div>
            <script>
                function scrollTesti(direction) {
                    const container = document.getElementById('testi-scroll');
                    const scrollAmount = container.offsetWidth / (window.innerWidth >= 768 ? 2 : 1);
                    container.scrollBy({
                        left: direction * scrollAmount,
                        behavior: 'smooth'
                    });
                }

                function scrollToTestiDot(index) {
                    const container = document.getElementById('testi-scroll');
                    const cards = container.children;
                    if (cards[index]) {
                        container.scrollTo({
                            left: cards[index].offsetLeft - container.offsetLeft,
                            behavior: 'smooth'
                        });
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    const container = document.getElementById('testi-scroll');
                    const dots = document.querySelectorAll('.testi-dot');

                    if (container && dots.length > 0) {
                        container.addEventListener('scroll', () => {
                            const cardWidth = container.children[0].offsetWidth;
                            let activeIndex = Math.round(container.scrollLeft / cardWidth);
                            if (activeIndex >= dots.length) activeIndex = dots.length - 1;

                            dots.forEach((dot, index) => {
                                dot.className = index === activeIndex ?
                                    'testi-dot rounded-full transition-all duration-300 w-5 h-1.5 bg-[#007DFE]' :
                                    'testi-dot rounded-full transition-all duration-300 w-1.5 h-1.5 bg-gray-300';
                            });
                        });
                    }
                });
            </script>
        </section>

        <section id="pilihan-program" class="py-16 md:py-24 bg-[#FAFAFA]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-3">Apa tujuan kamu belajar bahasa
                        inggris</h2>
                    <p class="text-[14px] text-gray-500 max-w-2xl mx-auto">
                        Pilih program yang paling tepat dan sesuai dengan kebutuhan belajar kamu.
                    </p>
                </div>

                <div
                    class="flex overflow-x-auto md:grid md:grid-cols-2 lg:grid-cols-4 gap-6 pb-6 md:pb-0 snap-x snap-mandatory hide-scrollbar">
                    @foreach ($programs as $program)
                        <div
                            class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 flex flex-col hover:shadow-md transition-shadow shrink-0 w-[280px] md:w-auto snap-center">

                            <div class="relative h-48 mb-5 overflow-hidden rounded-xl bg-gray-100">
                                <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}"
                                    class="w-full h-full object-cover">
                            </div>

                            @php
                                $badgeBg = 'bg-gray-100';
                                $badgeText = 'text-gray-600';

                                if (isset($program['color'])) {
                                    if ($program['color'] === 'blue') {
                                        $badgeBg = 'bg-blue-50';
                                        $badgeText = 'text-[#007DFE]';
                                    } elseif ($program['color'] === 'green') {
                                        $badgeBg = 'bg-green-50';
                                        $badgeText = 'text-[#22C55E]';
                                    } elseif ($program['color'] === 'pink') {
                                        $badgeBg = 'bg-pink-50';
                                        $badgeText = 'text-[#FF4D4D]';
                                    } elseif ($program['color'] === 'yellow') {
                                        $badgeBg = 'bg-[#FFF8E6]';
                                        $badgeText = 'text-[#FFB800]';
                                    }
                                }
                            @endphp

                            <div class="mb-4 flex">
                                <span
                                    class="inline-block {{ $badgeBg }} {{ $badgeText }} font-bold text-[10px] px-3 py-1 rounded-full uppercase tracking-wide">
                                    {{ $program['category'] }}
                                </span>
                            </div>

                            <h3 class="font-extrabold text-gray-900 text-[16px] mb-3 leading-snug">
                                {{ $program['title'] }}
                            </h3>

                            <p class="text-[12px] text-gray-600 mb-8 flex-grow leading-relaxed line-clamp-4">
                                {{ $program['desc'] }}
                            </p>

                            <div class="grid grid-cols-2 gap-3 mt-auto">
                                <a href="#"
                                    class="bg-[#0064D2] hover:bg-blue-700 text-white font-bold text-center py-2.5 rounded-lg text-[13px] transition-colors shadow-sm">
                                    Lihat Detail
                                </a>
                                <a href="https://wa.me/yournumber" target="_blank"
                                    class="bg-white border border-[#0064D2] text-[#0064D2] hover:bg-blue-50 font-bold text-center py-2.5 rounded-lg text-[13px] transition-colors shadow-sm">
                                    Konsultasi
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-5xl mx-auto px-6">

                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-[36px] font-extrabold text-[#212529] mb-4 leading-tight">
                        Rahasia Lancar Speaking dalam<br class="hidden md:block"> Waktu Singkat
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-600">
                        Lihat cara Englishvit bikin siswa yang minder jadi PD speaking English!
                    </p>
                </div>

                <div class="relative w-full max-w-xl mx-auto aspect-video rounded-2xl overflow-hidden shadow-2xl cursor-pointer group"
                    onclick="openVideoModal('EEaOgCgxB8I')">

                    <img src="https://img.youtube.com/vi/EEaOgCgxB8I/maxresdefault.jpg" alt="Rahasia Lancar Speaking"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors"></div>

                    <div
                        class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-[#212529]/80 to-transparent pointer-events-none">
                    </div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <div
                            class="bg-[#DF121D] text-white w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fas fa-play text-2xl md:text-3xl ml-1.5 md:ml-2"></i>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="py-16 md:py-24 bg-[#FAFAFA]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-3xl md:text-[36px] font-extrabold text-[#212529] mb-4 leading-tight">
                        6 Fokus Utama Pembelajaran di<br class="hidden md:block"> Englishvit
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        Kamu bakal dibimbing step-by-step sampai makin lancar, makin pede, dan makin natural dalam
                        menggunakan Bahasa Inggris.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="w-14 h-14 bg-[#EBF4FF] rounded-xl flex items-center justify-center mb-6">
                            <img src="{{ asset('images/icons/daily-conv.png') }}" class="w-8 h-8 object-contain"
                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/2462/2462719.png'">
                        </div>
                        <h3 class="text-[18px] font-extrabold text-[#212529] mb-3">Daily Conversation</h3>
                        <p class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed">
                            Topik percakapan sehari-hari agar bahasa Inggris langsung terpakai di situasi nyata.
                        </p>
                    </div>

                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-[#FFF4E5] rounded-xl flex items-center justify-center mb-6">
                            <img src="{{ asset('images/icons/spontanitas.png') }}" class="w-8 h-8 object-contain"
                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/3612/3612643.png'">
                        </div>
                        <h3 class="text-[18px] font-extrabold text-[#212529] mb-3">Spontanitas Bicara</h3>
                        <p class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed">
                            Berbicara tanpa perlu berpikir terlalu lama, sehingga percakapan lebih lancar.
                        </p>
                    </div>

                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-[#E6F9F0] rounded-xl flex items-center justify-center mb-6">
                            <img src="{{ asset('images/icons/grammar.png') }}" class="w-8 h-8 object-contain"
                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/2991/2991108.png'">
                        </div>
                        <h3 class="text-[18px] font-extrabold text-[#212529] mb-3">Grammar Tepat</h3>
                        <p class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed">
                            Menguatkan struktur bahasa agar penyampaianmu lebih presisi dan elegan.
                        </p>
                    </div>

                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-[#F2F0FF] rounded-xl flex items-center justify-center mb-6">
                            <img src="{{ asset('images/icons/pronun.png') }}" class="w-8 h-8 object-contain"
                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/2643/2643506.png'">
                        </div>
                        <h3 class="text-[18px] font-extrabold text-[#212529] mb-3">Pronunciation Jelas</h3>
                        <p class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed">
                            Melatih cara pengucapan agar terdengar jelas, natural, dan mudah dipahami lawan bicara.
                        </p>
                    </div>

                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-[#FFF0F0] rounded-xl flex items-center justify-center mb-6">
                            <img src="{{ asset('images/icons/vocab.png') }}" class="w-8 h-8 object-contain"
                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/3898/3898150.png'">
                        </div>
                        <h3 class="text-[18px] font-extrabold text-[#212529] mb-3">Penguasaan Kosakata</h3>
                        <p class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed">
                            Penggunaan kosakata yang tepat dan sesuai di setiap konteks.
                        </p>
                    </div>

                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-[#E0F7FA] rounded-xl flex items-center justify-center mb-6">
                            <img src="{{ asset('images/icons/confidence.png') }}" class="w-8 h-8 object-contain"
                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/1533/1533913.png'">
                        </div>
                        <h3 class="text-[18px] font-extrabold text-[#212529] mb-3">Kepercayaan Diri</h3>
                        <p class="text-[13px] md:text-[14px] text-gray-500 leading-relaxed">
                            Meningkatkan kepercayaan diri berbahasa Inggris di forum, meeting, atau percakapan
                            sehari-hari.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative overflow-hidden py-20 md:py-28 bg-cover bg-bottom bg-no-repeat"
            style="background-image: url('{{ asset('images/bg.jpeg') }}');">

            <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">

                <h2 class="text-3xl md:text-[36px] font-extrabold text-white mb-4 leading-tight">
                    Siap Bahasa Inggris Kamu Naik Level?
                </h2>

                <p class="text-white/90 text-[14px] md:text-[15px] mb-10 leading-relaxed max-w-xl mx-auto">
                    Tingkatkan kemampuan Inggris kamu dengan program premium yang disesuaikan sepenuhnya untukmu.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                    <a href="#pilihan-program"
                        class="w-full sm:w-auto bg-[#FFC107] hover:bg-yellow-500 text-white font-bold text-[15px] py-4 px-10 rounded-xl shadow-lg transition-all hover:scale-105 text-center">
                        Pilih Program
                    </a>

                    <a href="https://wa.me/yournumber"
                        class="w-full sm:w-auto bg-white hover:bg-gray-100 text-[#212529] font-bold text-[15px] py-4 px-10 rounded-xl shadow-lg transition-all hover:scale-105 text-center">
                        Konsultasi
                    </a>
                </div>

            </div>
        </section>
        <x-faq />
        <x-liput class="my-0 py-20 bg-[#F0F6FF]" />
    </main>

    <x-footer />

</body>

</html>
