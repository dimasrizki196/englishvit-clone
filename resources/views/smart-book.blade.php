<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Book - Englishvit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-white antialiased font-sans">

    <x-navbar />

    <x-attention />

    <main>
        <section class="bg-[#004BB4] relative overflow-hidden py-16 lg:py-24">
            <div class="absolute inset-0 opacity-20 pointer-events-none"
                style="background-image: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.05) 100%);">
            </div>

            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative z-10">

                <div class="order-2 lg:order-1 text-center lg:text-left text-white">
                    <h1 class="text-3xl md:text-[42px] font-extrabold leading-[1.15] mb-5">
                        Buku Praktis Belajar Bahasa Inggris
                    </h1>
                    <p class="text-[14px] md:text-[15px] text-blue-100 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                        Promo Spesial! Dapatkan diskon sampai 80% untuk pembelian smart book hari ini!
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-4">
                        <a href="#paket"
                            class="bg-[#FFB800] text-gray-900 font-bold py-3 px-8 rounded-lg hover:bg-[#e6a600] transition-colors text-[13px] md:text-sm shadow-md">
                            Pilih Paket
                        </a>
                        <a href="https://wa.me/yournumber" target="_blank"
                            class="bg-transparent border border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white/10 transition-colors text-[13px] md:text-sm">
                            Chat Admin
                        </a>
                    </div>

                    <p class="text-[11px] md:text-[12px] font-bold text-[#FFB800]">
                        *Terbatas untuk 17 pendaftar hari ini!
                    </p>
                </div>

                <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                    <img src="{{ asset('images/top5.png') }}" alt="Smart Book" class="w-full max-w-[500px]">
                </div>
            </div>
        </section>

        <x-testimonials :testimonials="$testimonials" />

        <section class="py-16 md:py-24 bg-[#F4F7FB]">
            <div class="max-w-4xl mx-auto px-6 text-center">

                <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] mb-3 leading-snug">
                    Tonton Cara Belajar Bahasa Inggris Praktis dengan Smart Book
                </h2>

                <div
                    class="relative w-full aspect-video rounded-2xl md:rounded-3xl overflow-hidden shadow-xl border border-gray-200 bg-gray-900 group">

                    <iframe src="https://www.youtube.com/embed/nbZKyLz3p1M?si=_D-UYOdPEUmKFvFv?rel=0"
                        title="Tonton Cara Belajar Bahasa Inggris Praktis dengan Smart Book"
                        class="absolute top-0 left-0 w-full h-full" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>

                </div>
                <p class="text-[14px] md:text-[16px] text-gray-600 mb-10 md:mb-12">
                    Mulai proses belajarmu dengan Smart Book sekarang dan dapatkan harga spesial sekarang!!
                </p>
                <div class="flex justify-center">
                    <a href="#paket"
                        class="inline-flex items-center gap-3 bg-[#1A6AFE] hover:bg-blue-700 text-white font-extrabold py-4 px-10 rounded-xl shadow-xl transition-all hover:-translate-y-1">
                        <i class="fas fa-thumbs-up"></i>
                        Pilih Paket Sekarang
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16 bg-[#1A6AFE]">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="text-2xl md:text-3xl font-extrabold text-white text-center mb-10">
                    Apakah Kamu Ingin Seperti Ini:
                </h2>

                <div class="space-y-5 max-w-2xl mx-auto">
                    @php
                        $points = [
                            '<strong>Meningkatkan</strong> kemampuan bahasa Inggris kamu untuk karir dan peluang baru?',
                            'Belajar bahasa Inggris dengan cara yang <strong>praktis dan interaktif</strong>?',
                            '<strong>Menguasai grammar dan vocabulary</strong> bahasa Inggris dengan mudah?',
                            'Berkomunikasi dengan <strong>percaya diri</strong> dalam bahasa Inggris?',
                            'Belajar bahasa Inggris <strong>terstruktur</strong> dengan media belajar yang mudah diakses?',
                        ];
                    @endphp

                    @foreach ($points as $point)
                        <div class="flex items-start gap-4 text-white">
                            <div
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-green-400 flex items-center justify-center text-[#1A6AFE]">
                                <i class="fas fa-check text-xs font-bold"></i>
                            </div>
                            <p class="text-[15px] md:text-[16px] leading-relaxed">
                                {!! $point !!}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center">

                <h2 class="text-3xl md:text-5xl font-extrabold text-[#212529] mb-4">
                    Jika Iya,
                </h2>
                <h3 class="text-xl md:text-3xl font-extrabold text-[#F43F5E] mb-12">
                    Smartbook Englishvit adalah Jawabannya!
                </h3>

                <div class="relative max-w-2xl mx-auto mb-16">
                    <img src="{{ asset('images/rctg5.png') }}" alt="Smart Book" class="w-full h-auto">
                </div>

                <div class="max-w-2xl mx-auto text-left space-y-8 mb-12">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-white mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-gray-700 text-[15px] md:text-[16px]">
                            Smartbook Englishvit adalah <strong>buku digital interaktif</strong> yang membantu kamu
                            belajar bahasa Inggris dengan mudah dan menyenangkan.
                        </p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-white mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-gray-700 text-[15px] md:text-[16px]">
                            Dengan materi pembelajaran yang <strong>lengkap dan interaktif</strong>, kamu dapat
                            mempelajari bahasa Inggris kapanpun dan dimanapun kamu berada.
                        </p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="#paket"
                        class="inline-flex items-center gap-3 bg-[#1A6AFE] hover:bg-blue-700 text-white font-extrabold py-4 px-10 rounded-xl shadow-xl transition-all hover:-translate-y-1">
                        <i class="fas fa-thumbs-up"></i>
                        Pilih Paket Sekarang
                    </a>
                </div>

            </div>
        </section>

        <section class="py-16 md:py-24 bg-[#F4F7FB]">
            <div class="max-w-6xl mx-auto px-6">

                <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] text-center mb-12">
                    3 Alasan Kenapa Harus Memilih Smart Book
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <div
                        class="bg-white rounded-2xl p-8 shadow-sm text-center flex flex-col items-center border border-gray-100">
                        <div
                            class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-3xl text-blue-500 shadow-inner">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[17px] mb-4 leading-tight">
                            Materi pembelajaran lengkap dan komprehensif
                        </h3>
                        <p class="text-[14px] text-gray-500 leading-relaxed">
                            Mencakup semua materi yang diperlukan untuk mempelajari bahasa Inggris, dari grammar,
                            vocabulary hingga IELTS dan TOEFL.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 shadow-sm text-center flex flex-col items-center border border-gray-100">
                        <div
                            class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-3xl text-blue-500 shadow-inner">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[17px] mb-4 leading-tight">
                            Praktis dan mudah digunakan dengan berbagai gadget
                        </h3>
                        <p class="text-[14px] text-gray-500 leading-relaxed">
                            Dapat diakses melalui smartphone, tablet, dan laptop, sehingga kamu dapat belajar bahasa
                            Inggris kapanpun dan dimanapun Anda berada.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 shadow-sm text-center flex flex-col items-center border border-gray-100">
                        <div
                            class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-3xl text-blue-500 shadow-inner">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[17px] mb-4 leading-tight">
                            Disusun untuk pembelajaran yang interaktif dan menarik
                        </h3>
                        <p class="text-[14px] text-gray-500 leading-relaxed">
                            Menggunakan media belajar yang interaktif dan menarik, seperti ilustrasi, video, audio, dan
                            quiz, sehingga belajar bahasa Inggris menjadi lebih menyenangkan.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">

                <h2 class="text-2xl md:text-[32px] font-extrabold text-[#212529] text-center mb-16">
                    Kenapa Smartbook Lebih Baik dari Buku Cetak Biasa?
                </h2>

                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                    <div class="w-full lg:w-1/2 flex justify-center">
                        <div class="relative w-full max-w-[450px]">
                            <img src="{{ asset('images/rctg6.png') }}" alt="Keunggulan Smartbook"
                                class="w-full h-auto drop-shadow-2xl">
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 space-y-6">

                        @php
                            $features = [
                                ['t' => 'Harga lebih murah', 'd' => 'Harga lebih murah dibandingkan buku cetak.'],
                                [
                                    't' => 'Tidak akan pernah usang dan rusak',
                                    'd' => 'Tidak membutuhkan perawatan dan tempat penyimpanan khusus.',
                                ],
                                [
                                    't' => 'Mudah diakses lewat gadget',
                                    'd' =>
                                        'Dapat dengan mudah dibaca pada berbagai perangkat elektronik, sehingga nyaman diakses kapan saja.',
                                ],
                                [
                                    't' => 'Mudah dibawa kemana saja',
                                    'd' =>
                                        'Membutuhkan sedikit ruang dan dapat disimpan dengan mudah di perangkat, praktis saat bepergian.',
                                ],
                                [
                                    't' => 'Materi belajar variatif',
                                    'd' =>
                                        'Belajar jadi seru karena disertai ilustrasi, audio dan video pembelajaran yang menyenangkan.',
                                ],
                                [
                                    't' => 'Ramah lingkungan',
                                    'd' =>
                                        'Tidak memerlukan kertas atau tinta, sehingga dianggap lebih ramah lingkungan dibanding buku cetak.',
                                ],
                            ];
                        @endphp

                        @foreach ($features as $f)
                            <div class="flex items-start gap-4 group">
                                <div
                                    class="flex-shrink-0 w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-white mt-1">
                                    <i class="fas fa-check text-[10px]"></i>
                                </div>
                                <div>
                                    <h4 class="font-extrabold text-[#212529] text-[16px] mb-1">{{ $f['t'] }}</h4>
                                    <p class="text-[14px] text-gray-500 leading-relaxed">{{ $f['d'] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <section id="paket" class="py-12 md:py-20 bg-[#F8FAFC]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-[36px] font-extrabold text-[#212529] mb-3 uppercase tracking-tight">
                        PROMO SPESIAL!!!
                    </h2>
                    <p class="text-[16px] md:text-[20px] font-bold text-[#F43F5E] mb-8">
                        Terbatas hanya untuk 17 pembeli pertama!
                    </p>

                    <x-countdown />
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    @php
                        $promos = [
                            [
                                'title' => 'Basic Complete Grammar',
                                'price' => '53.900',
                                'old' => '107.800',
                                'desc' => 'Panduan komplit belajar grammar dari dasar!',
                                'color' => 'bg-sky-600',
                            ],
                            [
                                'title' => 'Intermediate Complete Grammar',
                                'price' => '71.500',
                                'old' => '143.000',
                                'desc' => 'Cara mudah jadi jago GRAMMAR!!',
                                'color' => 'bg-amber-500',
                            ],
                            [
                                'title' => 'Combo Complete Grammar',
                                'price' => '108.900',
                                'old' => '217.800',
                                'desc' => 'Beli paket Basic dan Intermediate...',
                                'color' => 'bg-rose-600',
                            ],
                            [
                                'title' => 'Smart Vocabulary',
                                'price' => '53.900',
                                'old' => '107.800',
                                'desc' => 'Cara smart kuasai kosakata bahasa Inggris cepat!',
                                'color' => 'bg-purple-700',
                            ],
                        ];
                    @endphp

                    @foreach ($promos as $item)
                        <div
                            class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group">

                            <div class="h-36 {{ $item['color'] }} flex items-center justify-center overflow-hidden">
                                <span class="text-white font-black text-6xl opacity-20">PNG</span>
                            </div>

                            <div class="p-4 flex flex-col h-[260px]">
                                <div
                                    class="bg-[#F0E7FF] text-[#7C3AED] text-[9px] font-bold px-2 py-0.5 rounded w-max mb-3 flex items-center gap-1 uppercase">
                                    <i class="fas fa-book"></i> Smart Book
                                </div>

                                <h3
                                    class="font-extrabold text-[#212529] text-[14px] mb-1.5 leading-tight line-clamp-2 h-10">
                                    {{ $item['title'] }}
                                </h3>

                                <p class="text-[12px] text-gray-500 mb-4 line-clamp-2">
                                    {{ $item['desc'] }}
                                </p>

                                <div class="mt-auto mb-4">
                                    <div class="text-[17px] font-extrabold text-[#212529]">
                                        Rp{{ $item['price'] }}
                                    </div>
                                    <div class="flex items-center gap-1.5 mt-0.5">
                                        <span
                                            class="bg-[#FFEAEA] text-[#FF4D4F] text-[9px] font-bold px-1.2 py-0.5 rounded">50%</span>
                                        <span
                                            class="text-gray-400 text-[11px] line-through">Rp{{ $item['old'] }}</span>
                                    </div>
                                </div>

                                <a href="#"
                                    class="w-full bg-[#1A6AFE] hover:bg-blue-700 text-white font-bold text-center py-2 rounded-lg text-[12px] transition-colors">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section class="py-12 md:py-20 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="relative overflow-hidden bg-[#0064D2] rounded-3xl p-8 md:p-12 shadow-xl">

                    <!-- Aksen Dekoratif di Background -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/20 rounded-full -mr-20 -mt-20 blur-3xl">
                    </div>

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

        <x-footer />

    </main>
</body>

</html>
