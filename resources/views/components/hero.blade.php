<!-- Hero Section -->
<section class="relative bg-[#003B7E] pt-6 md:pt-10 pb-0 overflow-hidden min-h-[500px] flex items-center">

    <!-- Efek Dekorasi & Cahaya (Background Layer) -->
    <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-[-25%] left-[-5%] md:left-[8%] w-[2px] h-[150%] rotate-[25deg] blur-[0.5px]"
            style="background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.4) 50%, transparent); 
                box-shadow: 0 0 15px rgba(255,255,255,0.3);">
        </div>

        <div class="absolute top-[-25%] right-[-5%] md:right-[8%] w-[2px] h-[150%] rotate-[25deg] blur-[0.5px]"
            style="background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.4) 50%, transparent); 
                box-shadow: 0 0 15px rgba(255,255,255,0.3);">
        </div>

        <div
            class="absolute -bottom-28 -left-6 md:left-[2%] opacity-10 w-24 md:w-40 mix-blend-screen grayscale brightness-200 blur-[0.5px] rounded-[30px] overflow-hidden -rotate-12">
            <img src="{{ asset('images/logo-icon.jpeg') }}" alt="Logo Decor Left" class="w-full h-auto scale-110">
        </div>

        <div
            class="absolute bottom-2 right-2 md:right-[5%] opacity-10 w-14 md:w-24 mix-blend-screen grayscale brightness-200 blur-[0.5px] rounded-[25px] overflow-hidden rotate-12">
            <img src="{{ asset('images/logo-icon.jpeg') }}" alt="Logo Decor Right" class="w-full h-auto scale-110">
        </div>
    </div>˝

    <!-- Container Utama -->
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center relative z-10 w-full">

        <!-- Sisi Kiri: Konten Teks -->
        <div class="w-full md:w-3/5 text-center md:text-left space-y-4 md:space-y-8 pb-10 md:pb-20 md:pr-24">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
                Tempat Terbaik Belajar Bahasa Inggris Langsung Praktik
            </h2>

            <p class="text-blue-100 text-xs md:text-xl max-w-lg mx-auto md:mx-0 leading-relaxed px-6 md:px-0">
                Konsultasikan rencana belajarmu dan dapatkan penawaran spesial langsung dari admin!
            </p>

            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-3 sm:gap-4 pt-2">
                <!-- Daftar Sekarang -->
                <a href="#daftar"
                    class="w-[80%] sm:w-auto bg-[#FFB800] text-[#003B7E] font-bold py-2 px-6 sm:py-3.5 sm:px-8 rounded-lg text-xs sm:text-base flex items-center justify-center gap-2 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl active:scale-95">
                    <i class="fas fa-thumbs-up text-[10px] sm:text-base"></i>
                    Daftar Sekarang
                </a>

                <!-- Chat Admin Sekarang -->
                <a href="https://wa.me/yournumber"
                    class="w-[80%] sm:w-auto border-2 border-white text-white font-bold py-2 px-6 sm:py-3.5 sm:px-8 rounded-lg text-xs sm:text-base flex items-center justify-center gap-2 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl active:scale-95">
                    <i class="fab fa-whatsapp text-sm sm:text-lg"></i>
                    Chat Admin Sekarang
                </a>
            </div>
        </div>

        <!-- Sisi Kanan: Gambar top.webp (Mentok Bawah) -->
        <div class="w-full md:w-2/5 flex justify-center md:justify-end items-end self-end mt-6 md:mt-0">
            <div class="relative">
                <!-- Ornamen Lingkaran Kuning -->
                <div
                    class="absolute bottom-20 -right-4 w-20 h-20 bg-[#FFB800] rounded-full z-10 hidden md:block opacity-90">
                </div>

                <!-- Foto top.webp mentok bawah -->
                <img src="{{ asset('images/top.webp') }}" alt="Hero Image"
                    class="w-full max-w-[300px] md:max-w-none block relative z-20 drop-shadow-2xl translate-y-[1px]">
            </div>
        </div>

    </div>
</section>
