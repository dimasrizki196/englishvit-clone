<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Package - Englishvit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-white antialiased font-sans">

    <x-navbar />

    <x-attention />

    <main>
        <section class="relative bg-[#b5cde8] pt-12 md:pt-20 pb-0 overflow-hidden flex items-end min-h-[500px]">

            <div class="max-w-7xl w-full mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10">

                <div class="order-1 text-center lg:text-left self-center pb-10 lg:pb-20 pt-8">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                        Belajar Bahasa Inggris Mudah dan Murah dari Rumah
                    </h1>
                    <p class="text-base md:text-lg text-gray-700 mb-10 max-w-xl mx-auto lg:mx-0">
                        Paket belajar bahasa Inggris mandiri dengan beragam pilihan kelas sesuai kebutuhan.
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

                <div class="order-2 flex justify-center lg:justify-end self-end">
                    <img src="images/top4.png" alt="Englishvit Live Class"
                        class="w-full max-w-[550px] drop-shadow-2xl block align-bottom">
                </div>
            </div>

        </section>

        <section class="py-16 md:py-24 bg-[#F4F7FB]">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-2xl md:text-[36px] font-extrabold text-[#212529] mb-4">
                        Kamu punya 6 masalah belajar seperti ini?
                    </h2>
                    <p class="text-[15px] md:text-[16px] text-gray-700">
                        Apakah kamu mengalami masalah belajar bahasa Inggris seperti ini:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100/50 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EBF3FF] text-[#1A6AFE] flex items-center justify-center font-extrabold text-[18px] mb-6">
                            1
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Pusing Mikirin Grammar</h3>
                        <p class="text-[15px] text-gray-600 leading-relaxed flex-grow">
                            Setiap mau speaking, bingung mikirin grammar yang tepat dan takut salah.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100/50 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EBF3FF] text-[#1A6AFE] flex items-center justify-center font-extrabold text-[18px] mb-6">
                            2
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Kosakata Terbatas</h3>
                        <p class="text-[15px] text-gray-600 leading-relaxed flex-grow">
                            Suka macet saat speaking karena penguasaan kosakata yang terbatas.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100/50 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EBF3FF] text-[#1A6AFE] flex items-center justify-center font-extrabold text-[18px] mb-6">
                            3
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Tidak Punya Waktu</h3>
                        <p class="text-[15px] text-gray-600 leading-relaxed flex-grow">
                            Ingin ikut kursus bahasa Inggris, tapi tidak punya waktu luang yang cukup.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100/50 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EBF3FF] text-[#1A6AFE] flex items-center justify-center font-extrabold text-[18px] mb-6">
                            4
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Terbatas Biaya</h3>
                        <p class="text-[15px] text-gray-600 leading-relaxed flex-grow">
                            Ingin ikut kursus bahasa Inggris, tapi terkendala biaya mahal.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100/50 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EBF3FF] text-[#1A6AFE] flex items-center justify-center font-extrabold text-[18px] mb-6">
                            5
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Sulit Memahami Grammar</h3>
                        <p class="text-[15px] text-gray-600 leading-relaxed flex-grow">
                            Susah memahami penjelasan seputar grammar yang disampaikan teacher.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 border border-gray-100/50 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EBF3FF] text-[#1A6AFE] flex items-center justify-center font-extrabold text-[18px] mb-6">
                            6
                        </div>
                        <h3 class="font-extrabold text-[#212529] text-[18px] mb-3">Takut Salah Pengucapan</h3>
                        <p class="text-[15px] text-gray-600 leading-relaxed flex-grow">
                            Takut salah mengucapkan kata sehingga lawan bicara tidak paham maksud kita.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section id="daftar" class="py-12 md:py-20 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-[30px] font-extrabold text-[#212529] mb-3">
                        Pilihan Kelas Sesuai Kebutuhan
                    </h2>
                    <p class="text-[14px] text-gray-600 max-w-xl mx-auto">
                        Pilih kelas terbaik untuk meraih skor impianmu.
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6">
                    @foreach ($programs as $program)
                        @php
                            $title = data_get($program, 'title');
                            $category = data_get($program, 'category', 'General');
                            $icon = data_get($program, 'icon', 'fas fa-desktop');
                            $desc = data_get($program, 'desc', 'Deskripsi tidak tersedia');
                            $image = data_get($program, 'image');
                            $price = data_get($program, 'price');
                            $oldPrice = data_get($program, 'old_price');
                            $discount = data_get($program, 'discount');

                            $colorMap = [
                                'yellow' => 'bg-yellow-100 text-yellow-700',
                                'blue' => 'bg-blue-100 text-blue-700',
                                'green' => 'bg-green-100 text-green-700',
                                'pink' => 'bg-pink-100 text-pink-700',
                            ];
                            $badgeStyle = $colorMap[data_get($program, 'color')] ?? 'bg-gray-100 text-gray-700';
                        @endphp

                        <div
                            class="bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden transform hover:-translate-y-1">

                            <div class="h-40 w-full bg-gray-200 relative">
                                <img src="{{ $image }}" alt="{{ $title }}"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-2 flex flex-col flex-grow">

                                <div
                                    class="inline-flex items-center gap-1.5 {{ $badgeStyle }} px-2 py-1 rounded text-[10px] font-bold mb-3 w-max">
                                    <i class="{{ $icon }} text-[9px]"></i> {{ $category }}
                                </div>

                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-2 leading-snug line-clamp-2">
                                    {{ $title }}
                                </h3>

                                <p class="text-[13px] text-gray-500 leading-relaxed mb-4 flex-grow line-clamp-2">
                                    {{ $desc }}
                                </p>

                                <div class="mb-4 mt-auto">
                                    <div class="text-[18px] font-extrabold text-[#212529]">
                                        {{ $price }}
                                    </div>

                                    @if ($oldPrice || $discount)
                                        <div class="flex items-center gap-2 mt-0.5">
                                            @if ($discount)
                                                <span class="text-[#FF4D4F] text-[10px] font-bold">
                                                    {{ $discount }} OFF
                                                </span>
                                            @endif
                                            @if ($oldPrice)
                                                <span class="text-gray-400 text-[11px] line-through">
                                                    {{ $oldPrice }}
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <a href="#"
                                    class="w-full bg-[#1A6AFE] hover:bg-blue-700 text-white font-bold text-center py-2.5 rounded-lg text-[13px] transition-colors">
                                    Lihat Kelas
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-10 md:py-16 bg-white">
            <div class="max-w-2xl mx-auto px-6 text-center">

                <h2 class="text-xl md:text-2xl font-extrabold text-[#212529] mb-3 leading-tight">
                    Belajar Bahasa Inggris Mudah dan Murah!
                </h2>
                <p class="text-[13px] md:text-[14px] text-gray-500 mb-8 max-w-md mx-auto">
                    Tonton video ini untuk mempelajari bagaimana Englishvit membantu menyelesaikan masalah belajar
                    bahasa Inggrismu!
                </p>

                <div
                    class="relative w-full max-w-xl mx-auto aspect-video rounded-xl overflow-hidden shadow-lg border border-gray-100 bg-black">
                    <iframe src="https://www.youtube.com/embed/oTTqp0-eYrA?rel=0"
                        title="Belajar Bahasa Inggris Mudah dan Murah" class="absolute top-0 left-0 w-full h-full"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </section>

        <section class="py-8 md:py-12 bg-[#00347D] relative overflow-hidden">

            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <img src="{{ asset('images/bg-pattern-solusi.png') }}" class="w-full h-full object-cover">
            </div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

                <h2 class="text-2xl md:text-[36px] font-extrabold text-white mb-4">
                    Solusi Belajar Bahasa Inggris Mudah
                </h2>
                <p class="text-[14px] md:text-[16px] text-blue-100 mb-16">
                    Kamu hanya perlu mengikuti 3 langkah mudah berikut:
                </p>

                <div class="relative grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 mb-16">

                    <div class="hidden md:block absolute top-6 left-[15%] right-[15%] h-[2px] bg-white/30"></div>

                    <div class="relative flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-[#22C55E] text-white flex items-center justify-center font-bold text-xl mb-6 relative z-20 shadow-lg">
                            1
                        </div>
                        <h3 class="text-white font-bold text-[18px] mb-3">Pilih Kelas</h3>
                        <p class="text-blue-100 text-[14px] leading-relaxed max-w-[250px]">
                            Pilih kelas sesuai dengan kebutuhanmu.
                        </p>
                    </div>

                    <div class="relative flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-[#EF4444] text-white flex items-center justify-center font-bold text-xl mb-6 relative z-20 shadow-lg">
                            2
                        </div>
                        <h3 class="text-white font-bold text-[18px] mb-3">Mulai Belajar dan Berlatih</h3>
                        <p class="text-blue-100 text-[14px] leading-relaxed max-w-[250px]">
                            Mulai belajar dan mengerjakan latihan-latihan untuk melihat peningkatan kemampuanmu.
                        </p>
                    </div>

                    <div class="relative flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-[#F59E0B] text-white flex items-center justify-center font-bold text-xl mb-6 relative z-20 shadow-lg">
                            3
                        </div>
                        <h3 class="text-white font-bold text-[18px] mb-3">Raih Kesuksesan!</h3>
                        <p class="text-blue-100 text-[14px] leading-relaxed max-w-[250px]">
                            Selesaikan semua materi sampai ujian akhir untuk mendapatkan sertifikat hasil belajar!
                        </p>
                    </div>

                </div>

                <div class="pt-8 border-t border-white/10">
                    <p class="text-white font-bold text-[16px] md:text-[18px] mb-8">
                        Tertarik untuk belajar bahasa Inggris mudah dan murah bersama Englishvit?
                    </p>
                    <a href="#daftar"
                        class="inline-block bg-[#FFB800] hover:bg-[#e6a600] text-[#003B7E] font-extrabold py-4 px-12 rounded-xl shadow-xl transition-all hover:-translate-y-1">
                        Pilih Kelas
                    </a>
                </div>

            </div>
        </section>

        <x-testimonials :testimonials="$testimonials" />

        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">

                <div class="text-center mb-12 md:mb-20">
                    <h2 class="text-2xl md:text-[36px] font-extrabold text-[#212529] mb-4">
                        Keunggulan belajar dengan Learning Package
                    </h2>
                    <p class="text-[14px] md:text-[16px] text-gray-600 max-w-3xl mx-auto">
                        Kamu akan dibimbing secara bertahap untuk mencapai 6 poin penting dalam peningkatan skill bahasa
                        Inggrismu.
                    </p>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

                    <div class="w-full lg:w-1/2 order-2 lg:order-1 flex justify-center">
                        <div class="relative max-w-[450px] md:max-w-[550px]">
                            <img src="{{ asset('images/rctg3.png') }}" alt="Keunggulan Englishvit"
                                class="w-full h-auto drop-shadow-2xl transition-transform duration-500 hover:scale-105">
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 order-1 lg:order-2">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">

                            <div
                                class="bg-white border border-gray-100 rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-md transition-shadow">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 mb-4 text-xl">
                                    <i class="fas fa-mouse-pointer"></i>
                                </div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-3">Akses Mudah, Selamanya</h3>
                                <p class="text-[14px] text-gray-500 leading-relaxed">
                                    Semua kelas di Learning Package bisa kamu akses dengan mudah, selamanya setelah
                                    pembelian.
                                </p>
                            </div>

                            <div
                                class="bg-white border border-gray-100 rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-md transition-shadow">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 mb-4 text-xl">
                                    <i class="fas fa-photo-video"></i>
                                </div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-3">Media Belajar Komplit</h3>
                                <p class="text-[14px] text-gray-500 leading-relaxed">
                                    Kelas dilengkapi media belajar komplit berupa video tutorial, digital books, dan
                                    latihan + pembahasan.
                                </p>
                            </div>

                            <div
                                class="bg-white border border-gray-100 rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-md transition-shadow">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 mb-4 text-xl">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-3">Sertifikat Belajar</h3>
                                <p class="text-[14px] text-gray-500 leading-relaxed">
                                    Kamu bisa mendapat sertifikat belajar setelah menyelesaikan kelas di Learning
                                    Package.
                                </p>
                            </div>

                            <div
                                class="bg-white border border-gray-100 rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-md transition-shadow">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 mb-4 text-xl">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3 class="font-extrabold text-[#212529] text-[16px] mb-3">Group Belajar</h3>
                                <p class="text-[14px] text-gray-500 leading-relaxed">
                                    Setelah mendaftar kelas, kamu bisa mendapatkan group belajar langsung bersama
                                    teacher.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <x-bonus />

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
