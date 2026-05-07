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