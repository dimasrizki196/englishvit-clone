<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification Test - Englishvit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-white antialiased font-sans">

    <x-navbar />

    <main>
        <section class="relative pt-24 pb-12 md:pt-28 md:pb-12 overflow-hidden"
            style="background: radial-gradient(circle at center top, #1A6AFE 0%, #0A4BD5 100%);">

            <div class="absolute top-20 left-10 opacity-60 pointer-events-none transform -rotate-12">
                <svg width="120" height="90" viewBox="0 0 120 90" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.05" d="M10 10H110V70H40L10 90V10Z" stroke="white" stroke-width="2" />
                </svg>
            </div>

            <div class="absolute top-[30%] left-[60%] opacity-40 pointer-events-none transform rotate-12">
                <svg width="60" height="45" viewBox="0 0 60 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.05" d="M5 5H55V35H20L5 45V5Z" stroke="white" stroke-width="1.5" />
                </svg>
            </div>

            <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[70%] pointer-events-none z-0">
                <svg width="100%" height="100%" viewBox="0 0 400 400" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <linearGradient id="gradientGreen" x1="400" y1="400" x2="200" y2="200"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#22D3EE" stop-opacity="0" />
                            <stop offset="1" stop-color="#22D3EE" stop-opacity="0.2" />
                        </linearGradient>
                    </defs>
                    <rect width="400" height="400" fill="url(#gradientGreen)" />
                    <pattern id="pixelPattern" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                        <rect width="1" height="16" fill="white" fill-opacity="0.02" />
                        <rect width="16" height="1" fill="white" fill-opacity="0.02" />
                    </pattern>
                    <rect width="100%" height="100%" fill="url(#pixelPattern)" />
                </svg>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl md:text-5xl lg:text-[48px] font-extrabold text-white leading-[1.2] mb-6">
                            Tes Bahasa Inggris <br class="hidden md:block">
                            Resmi dan Akurat <br class="hidden md:block">
                            berstandar Internasional
                        </h1>

                        <p
                            class="text-[15px] md:text-[16px] text-white/90 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                            Dipercaya 100.000+ jobseeker seluruh indonesia dan terbukti bisa untuk daftar CPNS/CASN,
                            BUMN, Beasiswa, Multinasional Company, dan Wisuda.
                        </p>

                        <div class="flex flex-col items-center lg:items-start">
                            <a href="#"
                                class="inline-block bg-[#FFB800] hover:bg-yellow-500 text-white font-bold text-[15px] py-4 px-10 rounded-xl shadow-lg transition-transform hover:scale-105 mb-4">
                                Mulai Tes Sekarang
                            </a>
                            <p class="text-white font-bold text-[14px]">
                                Nikmati potongan harga hingga 65%
                            </p>
                        </div>
                    </div>

                    <div class="relative w-full flex justify-center lg:justify-end">
                        <img src="{{ asset('images/top3.webp') }}" alt="Ilustrasi Tes Sertifikasi"
                            class="w-full max-w-[500px] lg:max-w-[600px] object-contain drop-shadow-2xl relative z-10"
                            onerror="this.src='https://placehold.co/600x500/175CDB/FFFFFF?text=Export+Gambar+Figma+Ke+Sini'">
                    </div>

                </div>
            </div>
        </section>

        <x-sertifikasi />
        <x-testimonials-instansi :clients="$clients" />

        <section class="py-16 md:py-24 bg-[#F4F7FB]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-[#212529] mb-4 leading-tight">
                        Mereka Udah Buktiin!!<br class="hidden md:block">
                        Yuk, jadi bagian dari cerita sukses berikutnya!
                    </h2>
                    <p class="text-[14px] md:text-[16px] text-gray-500 max-w-3xl mx-auto">
                        Banyak yang udah berhasil. Dari wisuda lancar sampai lolos seleksi kerja, BUMN atau CPNS.
                    </p>
                </div>

                <div class="relative w-full max-w-6xl mx-auto">

                    <div class="relative w-full max-w-6xl mx-auto">

                        <div id="bukti-scroll"
                            class="flex overflow-x-auto gap-6 snap-x snap-mandatory hide-scrollbar scroll-smooth pb-8 px-2">
                            @php $buktiImages = ['t1.webp', 't2.webp', 't3.webp', 't5.webp']; @endphp

                            @foreach ($buktiImages as $index => $img)
                                <div
                                    class="snap-center shrink-0 w-[85%] md:w-[calc(33.333%-16px)] rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                    <img src="{{ asset('images/testimoni/' . $img) }}"
                                        alt="Cerita Sukses {{ $index + 1 }}" class="w-full h-auto object-cover">
                                </div>
                            @endforeach
                        </div>

                        <div class="flex justify-center gap-2 mt-2" id="bukti-dots"></div>

                    </div>

                </div>

            </div>
            <script>
                function initBuktiSlider() {
                    const container = document.getElementById('bukti-scroll');
                    const dotsContainer = document.getElementById('bukti-dots');

                    if (!container || !dotsContainer || container.children.length === 0) return;

                    function updateDots() {
                        const cardWidth = container.children[0].offsetWidth + 24;
                        const maxScroll = container.scrollWidth - container.clientWidth;
                        let dotCount = 1;
                        if (maxScroll > 0) {
                            dotCount = Math.ceil(maxScroll / cardWidth) + 1;
                        }

                        if (dotsContainer.children.length !== dotCount) {
                            dotsContainer.innerHTML = '';
                            for (let i = 0; i < dotCount; i++) {
                                const btn = document.createElement('button');
                                btn.onclick = () => {
                                    const scrollTarget = i === dotCount - 1 ? maxScroll : i * cardWidth;
                                    container.scrollTo({
                                        left: scrollTarget,
                                        behavior: 'smooth'
                                    });
                                };
                                dotsContainer.appendChild(btn);
                            }
                        }

                        let activeIndex = Math.round(container.scrollLeft / cardWidth);
                        if (container.scrollLeft >= maxScroll - 10) activeIndex = dotCount - 1;

                        Array.from(dotsContainer.children).forEach((dot, index) => {
                            dot.className = index === activeIndex ?
                                'bukti-dot transition-all duration-300 w-6 h-2 bg-[#007DFE] rounded-full' :
                                'bukti-dot transition-all duration-300 w-2 h-2 bg-[#D1E4FA] rounded-full';
                        });
                    }

                    container.addEventListener('scroll', updateDots);
                    window.addEventListener('resize', updateDots);

                    setTimeout(updateDots, 100);
                }

                document.addEventListener('DOMContentLoaded', initBuktiSlider);
            </script>
        </section>

        <section class="py-16 md:py-24 bg-[#F8F9FA]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                    <div class="relative w-full flex justify-center lg:justify-start order-2 lg:order-1">
                        <img src="{{ asset('images/rctg1.png') }}" alt="Keunggulan FLOW Test Englishvit"
                            class="w-full max-w-[450px] lg:max-w-full object-contain relative z-10"
                            onerror="this.src='https://placehold.co/500x500/E2E8F0/A0AEC0?text=Export+Gambar+Mbak+Dari+Figma'">
                    </div>

                    <div class="order-1 lg:order-2">
                        <h2
                            class="text-2xl md:text-3xl lg:text-[32px] font-extrabold text-[#212529] mb-8 leading-snug">
                            Kenapa harus memilih FLOW Test dari Englishvit?
                        </h2>

                        <ul class="space-y-5">

                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm4.707-12.707a1 1 0 00-1.414-1.414L10 13.172 7.707 10.879a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l4.293-4.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-[15px] md:text-[16px] text-[#333333] leading-relaxed">
                                    Tes full online dengan <span class="font-bold text-[#212529]">standar internasional
                                        setara TOEFL ITP</span>.
                                </p>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm4.707-12.707a1 1 0 00-1.414-1.414L10 13.172 7.707 10.879a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l4.293-4.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-[15px] md:text-[16px] text-[#333333] leading-relaxed">
                                    Bisa dikerjakan <span class="font-bold text-[#212529]">dimana saja</span> dan kapan
                                    saja.
                                </p>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm4.707-12.707a1 1 0 00-1.414-1.414L10 13.172 7.707 10.879a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l4.293-4.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-[15px] md:text-[16px] text-[#333333] leading-relaxed">
                                    Bisa digunakan untuk berbagai keperluan <span
                                        class="font-bold text-[#212529]">(Wisuda, CPNS, BUMN dan Beasiswa)</span>.
                                </p>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm4.707-12.707a1 1 0 00-1.414-1.414L10 13.172 7.707 10.879a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l4.293-4.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-[15px] md:text-[16px] text-[#333333] leading-relaxed">
                                    <span class="font-bold text-[#212529]">Sertifikat langsung jadi</span> setelah test
                                    selesai.
                                </p>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm4.707-12.707a1 1 0 00-1.414-1.414L10 13.172 7.707 10.879a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l4.293-4.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-[15px] md:text-[16px] text-[#333333] leading-relaxed">
                                    Bisa request <span class="font-bold text-[#212529]">sertifikat dikirim sampai ke
                                        rumah</span>.
                                </p>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm4.707-12.707a1 1 0 00-1.414-1.414L10 13.172 7.707 10.879a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l4.293-4.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-[15px] md:text-[16px] text-[#333333] leading-relaxed">
                                    Sertifikat resmi dan berizin <span class="font-bold text-[#212529]">Kemendikbud,
                                        Komdigi, dan tersertifikasi NPSN</span>
                                </p>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative py-8 md:py-16 overflow-hidden bg-gradient-to-r from-[#0C58CA] to-[#3B9B9A]">

            <div class="absolute top-10 left-10 opacity-30 pointer-events-none">
                <svg width="100" height="80" viewBox="0 0 120 90" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 10H110V70H40L10 90V10Z" stroke="white" stroke-width="2" stroke-dasharray="4 4"
                        opacity="0.5" />
                </svg>
            </div>

            <div class="absolute top-10 right-10 opacity-30 pointer-events-none transform scale-x-[-1]">
                <svg width="100" height="80" viewBox="0 0 120 90" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 10H110V70H40L10 90V10Z" stroke="white" stroke-width="2" stroke-dasharray="4 4"
                        opacity="0.5" />
                </svg>
            </div>

            <div class="max-w-5xl mx-auto px-6 relative z-10">

                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-3 leading-snug">
                        3-Step Mudah FLOW Test
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-white/90">
                        Dari pendaftaran hingga sertifikat, semuanya otomatis dan mudah.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl relative">

                    <div class="hidden md:block absolute top-[40%] left-[20%] right-[20%] h-[2px] bg-gray-200 z-0">
                        <div class="absolute top-[-5px] left-1/2 transform -translate-x-1/2">
                            <i class="fas fa-chevron-right text-gray-300 text-xs bg-white px-2"></i>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-6 relative z-10">

                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 bg-[#22C55E] rounded-2xl flex items-center justify-center text-white mb-5 shadow-sm transform rotate-3">
                                <i class="fas fa-mouse-pointer text-xl transform -rotate-3"></i>
                            </div>
                            <h3 class="font-extrabold text-[#212529] text-[16px] mb-2">Pilih Paket Test</h3>
                            <p class="text-[13px] text-gray-500 leading-relaxed px-4">
                                Pilih paket test sesuai dengan kebutuhanmu.
                            </p>
                        </div>

                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 bg-[#FF4D4F] rounded-2xl flex items-center justify-center text-white mb-5 shadow-sm transform -rotate-3">
                                <i class="fas fa-laptop-code text-xl transform rotate-3"></i>
                            </div>
                            <h3 class="font-extrabold text-[#212529] text-[16px] mb-2">Kerjakan Test</h3>
                            <p class="text-[13px] text-gray-500 leading-relaxed px-4">
                                Kerjakan semua sesi test sampai selesai.
                            </p>
                        </div>

                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 bg-[#FFC107] rounded-2xl flex items-center justify-center text-white mb-5 shadow-sm transform rotate-3">
                                <i class="fas fa-file-download text-xl transform -rotate-3"></i>
                            </div>
                            <h3 class="font-extrabold text-[#212529] text-[16px] mb-2">Unduh Sertifikat</h3>
                            <p class="text-[13px] text-gray-500 leading-relaxed px-2">
                                Unduh sertifikat/request dikirim ke rumah.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section id="pilih-flow" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-4 leading-snug">
                        3 Pilihan Paket FLOW Test Terbaik
                    </h2>
                    <p class="text-[14px] md:text-[15px] text-gray-500">
                        Pilih paket sesuai dengan kebutuhan kamu dan selesaikan proses pendaftaran sebelum kehabisan
                        kuota!
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <div
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-shadow flex flex-col overflow-hidden">
                        <div class="relative h-48 bg-gray-100 w-full">
                            <img src="{{ asset('images/flow/f1.png') }}" alt="FLOW Go"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div
                                class="inline-flex items-center gap-1.5 bg-[#E6F9F0] text-[#00B67A] px-2.5 py-1 rounded text-[11px] font-bold mb-4 w-max">
                                <i class="fas fa-check-circle"></i> Certification Test
                            </div>
                            <h3 class="text-[18px] font-extrabold text-[#212529] mb-4">FLOW Go</h3>

                            <ul class="space-y-3 mb-8 flex-grow">
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> 1x FLOW Test Online
                                    Bersertifikat
                                </li>
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> Sertifikat instan
                                    terverifikasi
                                </li>
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> Cocok untuk daftar wisuda
                                    & lamar kerja
                                </li>
                            </ul>

                            <div class="mb-4">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="bg-[#FF4D4F] text-white text-[10px] font-bold px-1.5 py-0.5 rounded">55%</span>
                                    <span class="text-gray-400 text-[12px] line-through decoration-1">Rp 217.800</span>
                                </div>
                                <div class="text-[24px] font-extrabold text-[#212529]">
                                    Rp98.010
                                </div>
                            </div>

                            <a href="#"
                                class="w-full bg-[#1A6AFE] hover:bg-blue-700 text-white font-bold text-center py-3 rounded-xl text-[14px] transition-colors mt-auto">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl border border-gray-100 shadow-md hover:shadow-xl transition-shadow flex flex-col overflow-hidden relative transform md:-translate-y-2">
                        <div class="relative h-48 bg-gray-100 w-full">
                            <img src="{{ asset('images/flow/f2.png') }}" alt="FLOW Boost"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div
                                class="inline-flex items-center gap-1.5 bg-[#E6F9F0] text-[#00B67A] px-2.5 py-1 rounded text-[11px] font-bold mb-4 w-max ml-16 md:ml-20">
                                <i class="fas fa-check-circle"></i> Certification Test
                            </div>
                            <h3 class="text-[18px] font-extrabold text-[#212529] mb-4">FLOW Boost</h3>

                            <ul class="space-y-3 mb-8 flex-grow">
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> 2x FLOW Test Online
                                    Bersertifikat
                                </li>
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> Sertifikat instan
                                    terverifikasi
                                </li>
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> Cocok untuk daftar wisuda
                                    & lamar kerja
                                </li>
                            </ul>

                            <div class="mb-4">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="bg-[#FF4D4F] text-white text-[10px] font-bold px-1.5 py-0.5 rounded">60%</span>
                                    <span class="text-gray-400 text-[12px] line-through decoration-1">Rp 396.000</span>
                                </div>
                                <div class="text-[24px] font-extrabold text-[#212529]">
                                    Rp158.400
                                </div>
                            </div>

                            <a href="#"
                                class="w-full bg-[#1A6AFE] hover:bg-blue-700 text-white font-bold text-center py-3 rounded-xl text-[14px] transition-colors mt-auto">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-shadow flex flex-col overflow-hidden">
                        <div class="relative h-48 bg-gray-100 w-full">
                            <img src="{{ asset('images/flow/f3.png') }}" alt="FLOW Prime"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div
                                class="inline-flex items-center gap-1.5 bg-[#E6F9F0] text-[#00B67A] px-2.5 py-1 rounded text-[11px] font-bold mb-4 w-max">
                                <i class="fas fa-check-circle"></i> Certification Test
                            </div>
                            <h3 class="text-[18px] font-extrabold text-[#212529] mb-4">FLOW Prime</h3>

                            <ul class="space-y-3 mb-8 flex-grow">
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> 3x FLOW Test Online
                                    Bersertifikat
                                </li>
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> Sertifikat instan
                                    terverifikasi
                                </li>
                                <li class="flex items-start gap-2 text-[13px] text-gray-600">
                                    <i class="fas fa-check-circle text-[#22C55E] mt-0.5"></i> Cocok untuk daftar wisuda
                                    & lamar kerja
                                </li>
                            </ul>

                            <div class="mb-4">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="bg-[#FF4D4F] text-white text-[10px] font-bold px-1.5 py-0.5 rounded">65%</span>
                                    <span class="text-gray-400 text-[12px] line-through decoration-1">Rp 726.000</span>
                                </div>
                                <div class="text-[24px] font-extrabold text-[#212529]">
                                    Rp254.100
                                </div>
                            </div>

                            <a href="#"
                                class="w-full bg-[#1A6AFE] hover:bg-blue-700 text-white font-bold text-center py-3 rounded-xl text-[14px] transition-colors mt-auto">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 md:py-20 bg-[#F4F6F8]">
            <div class="max-w-5xl mx-auto px-6">

                <div class="flex flex-col md:flex-row items-center justify-center gap-10 md:gap-16">

                    <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                        <img src="{{ asset('images/rctg2.png') }}" alt="Ilustrasi Butuh Bantuan"
                            class="w-[220px] md:w-[280px] object-contain drop-shadow-sm transition-transform hover:scale-105 duration-300"
                            onerror="this.src='https://placehold.co/300x300/E2E8F0/A0AEC0?text=Export+Ilustrasi+HP+Figma'">
                    </div>

                    <div class="w-full md:w-1/2 text-center md:text-left">
                        <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-4">
                            Butuh Bantuan?
                        </h2>

                        <p
                            class="text-[14px] md:text-[16px] text-gray-600 leading-relaxed mb-8 max-w-md mx-auto md:mx-0">
                            Chat admin Englishvit yang siap menjawab semua pertanyaanmu seputar FLOW Test di Englishvit.
                        </p>

                        <a href="https://wa.me/yournumber" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 bg-[#22C55E] hover:bg-green-600 text-white font-bold text-[15px] py-3.5 px-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            <i class="fab fa-whatsapp text-[20px]"></i>
                            Chat Admin
                        </a>
                    </div>

                </div>

            </div>
        </section>
        <section class="py-16 md:py-24 bg-[#F8FAFC]">
            <div class="mt-20 pt-16 border-t border-gray-100">
                <x-testimonials :testimonials="$testimonials" />
            </div>

            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                    <div class="order-2 lg:order-1 flex flex-col gap-4">

                        <div
                            class="bg-white border border-gray-200/80 rounded-2xl p-5 md:p-6 flex items-start gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 flex-shrink-0">
                                <img src="{{ asset('images/icons/icn4.png') }}" alt="Standar Internasional"
                                    class="w-full h-full object-contain"
                                    onerror="this.innerHTML='<i class=\'fas fa-file-contract text-blue-500 text-3xl\'></i>'; this.removeAttribute('src');">
                            </div>
                            <div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-1.5">Tes Bahasa Inggris
                                    Berstandar Internasional</h3>
                                <p class="text-[13px] md:text-[14px] text-gray-600 leading-relaxed">
                                    Setiap bagian disusun agar selaras dengan standar penilaian global, sehingga hasil
                                    tesmu benar-benar mencerminkan kemampuan Bahasa Inggrismu di dunia nyata.
                                </p>
                            </div>
                        </div>

                        <div
                            class="bg-white border border-gray-200/80 rounded-2xl p-5 md:p-6 flex items-start gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 flex-shrink-0">
                                <img src="{{ asset('images/icons/icn5.png') }}" alt="Anti Cheat"
                                    class="w-full h-full object-contain"
                                    onerror="this.innerHTML='<i class=\'fas fa-robot text-blue-500 text-3xl\'></i>'; this.removeAttribute('src');">
                            </div>
                            <div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-1.5">Hasil Valid dengan
                                    Teknologi Modern Anti Cheat</h3>
                                <p class="text-[13px] md:text-[14px] text-gray-600 leading-relaxed">
                                    Dengan sistem anti-cheat modern, FLOW Test by Englishvit menjamin hasil tes yang
                                    akurat dan terpercaya, meskipun dilakukan secara online dari mana saja.
                                </p>
                            </div>
                        </div>

                        <div
                            class="bg-white border border-gray-200/80 rounded-2xl p-5 md:p-6 flex items-start gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 flex-shrink-0">
                                <img src="{{ asset('images/icons/icn6.png') }}" alt="Skill Komprehensif"
                                    class="w-full h-full object-contain"
                                    onerror="this.innerHTML='<i class=\'fas fa-comments text-blue-500 text-3xl\'></i>'; this.removeAttribute('src');">
                            </div>
                            <div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-1.5">Hasil Akurat dengan Uji
                                    Skill Komprehensif</h3>
                                <p class="text-[13px] md:text-[14px] text-gray-600 leading-relaxed">
                                    Tes ini dirancang untuk menilai kemampuan Bahasa Inggrismu secara menyeluruh, mulai
                                    dari pemahaman percakapan, tata bahasa, hingga bacaan.
                                </p>
                            </div>
                        </div>

                        <div
                            class="bg-white border border-gray-200/80 rounded-2xl p-5 md:p-6 flex items-start gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 flex-shrink-0">
                                <img src="{{ asset('images/icons/icn7.png') }}" alt="Sertifikat Instan"
                                    class="w-full h-full object-contain"
                                    onerror="this.innerHTML='<i class=\'fas fa-award text-blue-500 text-3xl\'></i>'; this.removeAttribute('src');">
                            </div>
                            <div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-1.5">Sertifikat Instan dan
                                    resmi Kemendikbud</h3>
                                <p class="text-[13px] md:text-[14px] text-gray-600 leading-relaxed">
                                    Sertifikat dapat diunduh langsung setelah tes selesai, atau dikirim dalam bentuk
                                    fisik sesuai permintaan. Setiap sertifikat dilengkapi barcode verifikasi untuk
                                    menjamin keaslian.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="order-1 lg:order-2 lg:pl-10">
                        <h2 class="text-3xl md:text-[36px] font-extrabold text-[#212529] mb-6 leading-[1.3]">
                            FLOW Test Ada Buat Bantu Kamu Lulus & Dapat Kerja!
                        </h2>
                        <p class="text-[15px] md:text-[16px] text-gray-700 leading-relaxed">
                            FLOW (Fluency Level of English Workability) adalah tes kemampuan bahasa Inggris online yang
                            dirancang khusus untuk mahasiswa tingkat akhir dan pencari kerja di Indonesia.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-[#F4F7FB]">
            <div class="max-w-4xl mx-auto px-6 text-center">

                <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-3 leading-snug">
                    Kenapa Harus Ikut FLOW Test Sekarang?
                </h2>
                <p class="text-[14px] md:text-[16px] text-gray-600 mb-10 md:mb-12">
                    Tonton sampai akhir dan lihat sendiri kenapa FLOW Test jadi pilihan terbaik untuk tes Bahasa
                    Inggrismu!
                </p>

                <div
                    class="relative w-full aspect-video rounded-2xl md:rounded-3xl overflow-hidden shadow-xl border border-gray-200 bg-gray-900 group">

                    <iframe src="https://www.youtube.com/embed/80hy0um-OSE?rel=0"
                        title="Kenapa Harus Ikut FLOW Test Sekarang?" class="absolute top-0 left-0 w-full h-full"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>

                </div>

            </div>
        </section>

        <section class="py-16 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-4">
                        Tes Bahasa Inggris Berstandar Internasional
                    </h2>
                    <p class="text-[14px] md:text-[16px] text-gray-600 max-w-3xl mx-auto">
                        FLOW Test di Englishvit dirancang sesuai standar internasional untuk mengukur kemampuan Bahasa
                        Inggris secara akurat.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col">
                        <div class="w-20 h-20 mb-6">
                            <img src="{{ asset('images/icons/icn8.png') }}" alt="Listening Section"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Listening Section</h3>
                        <p class="text-[14px] text-gray-600 leading-relaxed mb-8 flex-grow">
                            Mengukur kemampuanmu memahami percakapan dalam bahasa Inggris.
                        </p>
                        <div
                            class="flex items-center justify-between border-t border-gray-100 pt-4 text-[13px] font-medium text-gray-500">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-clock text-gray-400"></i> 30-35 menit
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-list-ul text-gray-400"></i> 50 Soal
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col">
                        <div class="w-20 h-20 mb-6">
                            <img src="{{ asset('images/icons/icn9.png') }}" alt="Structure & Writing"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3 leading-snug">Structure &
                            Writing<br>Expression</h3>
                        <p class="text-[14px] text-gray-600 leading-relaxed mb-8 flex-grow">
                            Mengukur kemampuanmu memahami tata bahasa Inggris.
                        </p>
                        <div
                            class="flex items-center justify-between border-t border-gray-100 pt-4 text-[13px] font-medium text-gray-500">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-clock text-gray-400"></i> 25 menit
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-list-ul text-gray-400"></i> 40 Soal
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col">
                        <div class="w-20 h-20 mb-6">
                            <img src="{{ asset('images/icons/icn10.png') }}" alt="Reading Comprehension"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Reading Comprehension</h3>
                        <p class="text-[14px] text-gray-600 leading-relaxed mb-8 flex-grow">
                            Mengukur kemampuanmu memahami teks atau artikel bahasa Inggris.
                        </p>
                        <div
                            class="flex items-center justify-between border-t border-gray-100 pt-4 text-[13px] font-medium text-gray-500">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-clock text-gray-400"></i> 55 menit
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-list-ul text-gray-400"></i> 50 Soal
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-[#FAFBFC]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-4">
                        FLOW Test dari Englishvit Bisa Digunakan Untuk Apa?
                    </h2>
                    <p class="text-[14px] md:text-[16px] text-gray-600">
                        Gunakan sertifikat FLOW Test untuk kerja, kuliah atau syarat administratif lainnya.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 md:h-56 w-full">
                            <img src="{{ asset('images/st0.png') }}"
                                alt="Melamar Kerja" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Melamar Kerja</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">
                                Buktikan skill Bahasa Inggris kamu ketika melamar pekerjaan impian
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 md:h-56 w-full">
                            <img src="{{ asset('images/st1.png') }}"
                                alt="Daftar CPNS & BUMN" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Daftar CPNS & BUMN</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">
                                Lengkapi syarat bahasa Inggrismu dengan sertifikat FLOW Test.
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 md:h-56 w-full">
                            <img src="{{ asset('images/st2.png') }}"
                                alt="Daftar Wisuda" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Daftar Wisuda</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">
                                Penuhi dokumen persyaratan wisuda lebih mudah dan cepat.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-3xl mx-auto px-6">

                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-4">
                        Frequently Asked Question
                    </h2>
                    <p class="text-[14px] md:text-[16px] text-gray-600">
                        Punya pertanyaan seputar FLOW Test? Temukan jawabannya di sini.
                    </p>
                </div>

                <div class="space-y-4">

                    <div
                        class="border border-gray-200 rounded-2xl overflow-hidden bg-white hover:border-blue-300 transition-colors duration-300">
                        <button
                            class="faq-button w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none"
                            onclick="toggleFaq(this)">
                            <span class="font-extrabold text-[#212529] text-[15px] md:text-[16px] pr-4">Apa itu
                                FLOW?</span>
                            <i
                                class="fas fa-chevron-down text-gray-400 transition-transform duration-300 faq-icon"></i>
                        </button>
                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                            <p
                                class="px-6 pb-5 text-[14px] md:text-[15px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4 mt-1">
                                FLOW (Fluency Level of English Workability) adalah tes kemampuan bahasa Inggris online
                                yang dirancang khusus untuk mahasiswa tingkat akhir dan pencari kerja di Indonesia,
                                dengan standar yang setara dengan TOEFL ITP.
                            </p>
                        </div>
                    </div>

                    <div
                        class="border border-gray-200 rounded-2xl overflow-hidden bg-white hover:border-blue-300 transition-colors duration-300">
                        <button
                            class="faq-button w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none"
                            onclick="toggleFaq(this)">
                            <span class="font-extrabold text-[#212529] text-[15px] md:text-[16px] pr-4">Apakah FLOW
                                bisa digunakan untuk melamar kerja?</span>
                            <i
                                class="fas fa-chevron-down text-gray-400 transition-transform duration-300 faq-icon"></i>
                        </button>
                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                            <p
                                class="px-6 pb-5 text-[14px] md:text-[15px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4 mt-1">
                                Tentu saja! Sertifikat FLOW Test dapat digunakan untuk membuktikan kemampuan bahasa
                                Inggrismu saat melamar pekerjaan impian, termasuk untuk pendaftaran CPNS, BUMN, dan
                                perusahaan swasta multinasional.
                            </p>
                        </div>
                    </div>

                    <div
                        class="border border-gray-200 rounded-2xl overflow-hidden bg-white hover:border-blue-300 transition-colors duration-300">
                        <button
                            class="faq-button w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none"
                            onclick="toggleFaq(this)">
                            <span class="font-extrabold text-[#212529] text-[15px] md:text-[16px] pr-4">Apakah FLOW
                                bisa digunakan sebagai syarat kelulusan kuliah?</span>
                            <i
                                class="fas fa-chevron-down text-gray-400 transition-transform duration-300 faq-icon"></i>
                        </button>
                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                            <p
                                class="px-6 pb-5 text-[14px] md:text-[15px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4 mt-1">
                                Ya, sertifikat FLOW Test bisa digunakan sebagai salah satu dokumen persyaratan
                                administratif pendaftaran wisuda di berbagai universitas.
                            </p>
                        </div>
                    </div>

                    <div
                        class="border border-gray-200 rounded-2xl overflow-hidden bg-white hover:border-blue-300 transition-colors duration-300">
                        <button
                            class="faq-button w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none"
                            onclick="toggleFaq(this)">
                            <span class="font-extrabold text-[#212529] text-[15px] md:text-[16px] pr-4">Apakah setelah
                                mengikuti FLOW mendapatkan sertifikat resmi?</span>
                            <i
                                class="fas fa-chevron-down text-gray-400 transition-transform duration-300 faq-icon"></i>
                        </button>
                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                            <p
                                class="px-6 pb-5 text-[14px] md:text-[15px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4 mt-1">
                                Betul. Setelah menyelesaikan tes, kamu akan langsung mendapatkan sertifikat resmi
                                berizin Kemendikbud, Komdigi, dan tersertifikasi NPSN. Sertifikat ini juga dilengkapi
                                barcode verifikasi untuk menjamin keasliannya.
                            </p>
                        </div>
                    </div>

                    <div
                        class="border border-gray-200 rounded-2xl overflow-hidden bg-white hover:border-blue-300 transition-colors duration-300">
                        <button
                            class="faq-button w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none"
                            onclick="toggleFaq(this)">
                            <span class="font-extrabold text-[#212529] text-[15px] md:text-[16px] pr-4">Dimana ujian
                                FLOW akan dilakukan?</span>
                            <i
                                class="fas fa-chevron-down text-gray-400 transition-transform duration-300 faq-icon"></i>
                        </button>
                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                            <p
                                class="px-6 pb-5 text-[14px] md:text-[15px] text-gray-600 leading-relaxed border-t border-gray-100 pt-4 mt-1">
                                Ujian FLOW Test dilakukan 100% secara online. Kamu bisa mengerjakannya dari mana saja
                                dan kapan saja, cukup menggunakan laptop atau komputermu yang terhubung dengan internet
                                stabil.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <script>
                function toggleFaq(button) {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('.faq-icon');
                    const textSpan = button.querySelector('span');

                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                        icon.classList.remove('rotate-180', 'text-blue-600');
                        textSpan.classList.remove('text-blue-600');
                    } else {
                        document.querySelectorAll('.faq-content').forEach((el) => {
                            el.style.maxHeight = null;
                        });
                        document.querySelectorAll('.faq-icon').forEach((el) => {
                            el.classList.remove('rotate-180', 'text-blue-600');
                        });
                        document.querySelectorAll('.faq-button span').forEach((el) => {
                            el.classList.remove('text-blue-600');
                        });

                        content.style.maxHeight = content.scrollHeight + "px";
                        icon.classList.add('rotate-180', 'text-blue-600');
                        textSpan.classList.add('text-blue-600');
                    }
                }
            </script>
        </section>

        <section class="py-8 md:py-12 bg-[#0F172A]">
            <div class="max-w-5xl mx-auto px-2">

                <div class="text-center mb-12 md:mb-14">
                    <h2 class="text-2xl md:text-[32px] font-extrabold text-white mb-3">
                        Exclusive Bonus!!!
                    </h2>
                    <p class="text-[14px] md:text-[16px] text-gray-300">
                        Daftarkan dirimu sekarang dan dapatkan exclusive bonus spesial:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-2xl flex flex-col transform transition-transform duration-300 hover:-translate-y-1">
                        <div class="relative h-38 md:h-46 w-full bg-gray-100">
                            <img src="{{ asset('images/bns6.png') }}" alt="TOEFL Learning Club"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="p-6 md:p-8 flex flex-col flex-grow">
                            <h3 class="font-extrabold text-[#212529] text-[18px] md:text-[20px] mb-3">
                                TOEFL Learning Club
                            </h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed mb-8 flex-grow">
                                Group exclusive belajar TOEFL bersama Tutor Englishvit. Konsultasi 24 Jam dan Akses
                                selamanya!!
                            </p>

                            <div class="mt-auto border-t border-gray-100 pt-2">
                                <p class="text-[13px] text-gray-500 font-medium">
                                    Produk Senilai: <span class="line-through decoration-gray-400">Rp 270.000</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-2xl flex flex-col transform transition-transform duration-300 hover:-translate-y-1">
                        <div class="relative h-38 md:h-46 w-full bg-gray-100">
                            <img src="{{ asset('images/bns5.png') }}" alt="Scholarship Calendar"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="p-6 md:p-8 flex flex-col flex-grow">
                            <h3 class="font-extrabold text-[#212529] text-[18px] md:text-[20px] mb-3">
                                Scholarship Calendar
                            </h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed mb-8 flex-grow">
                                Kalendar lengkap berbagai beasiswa untuk pendidikan S1, S2 dan S3 dalam dan luar negeri!
                            </p>

                            <div class="mt-auto border-t border-gray-100 pt-2">
                                <p class="text-[13px] text-gray-500 font-medium">
                                    Produk Senilai: <span class="line-through decoration-gray-400">Rp 75.000</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative py-16 md:py-24 bg-[#0A306E] overflow-hidden"
            style="background-image: url('{{ asset('images/bg-pattern-dark.webp') }}'); background-size: cover; background-position: center;">

            <div class="absolute inset-0 bg-[#0A306E]/80"></div>

            <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">

                <h2 class="text-2xl md:text-[32px] font-extrabold text-white mb-3">
                    Diskon Spesial Pembelian Hari Ini
                </h2>
                <p class="text-[14px] md:text-[15px] text-gray-200 mb-10">
                    Segera daftarkan dirimu hari ini untuk mendapatkan diskon spesial.
                </p>

                <div class="mb-12">
                    <p class="text-[14px] font-bold text-white mb-4">Berakhir dalam</p>

                    <div class="flex justify-center">
                        <x-countdown />
                    </div>
                </div>

                <h3 class="text-2xl md:text-[28px] font-extrabold text-white mb-3">
                    Your Last Opportunity
                </h3>
                <p class="text-[14px] md:text-[15px] text-gray-200 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Kesempatan terakhir kamu mendapatkan <span class="font-bold">PROMO</span> harga spesial + <span
                        class="font-bold">BONUS</span> Exclusive untuk pendaftaran hari ini.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

                    <a href="#pilih-flow"
                        class="w-full sm:w-auto bg-[#FFC107] hover:bg-yellow-500 text-white font-bold text-[15px] py-3.5 px-10 rounded-xl transition-all shadow-lg hover:-translate-y-1">
                        Pilih Paket
                    </a>

                    <a href="https://wa.me/yournumber" target="_blank" rel="noopener noreferrer"
                        class="w-full sm:w-auto bg-transparent border border-white hover:bg-white hover:text-[#0A306E] text-white font-bold text-[15px] py-3.5 px-8 rounded-xl transition-all flex items-center justify-center gap-2 group">
                        <i class="fab fa-whatsapp text-lg group-hover:text-[#22C55E]"></i> Chat Admin
                    </a>

                </div>

            </div>
        </section>

    </main>

    <x-footer />
</body>

</html>
