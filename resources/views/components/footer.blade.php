<footer class="bg-[#004899] text-white py-12 px-6 md:px-16">
    <!-- Container Utama: Gunakan Flex untuk kontrol posisi yang lebih presisi di Desktop -->
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:justify-between gap-12 md:gap-4">

        <!-- Kolom 1: Profil & Alamat (Lebar lebih besar di desktop) -->
        <div class="md:w-1/3 space-y-6">
            <h2 class="text-xl font-bold">PT. Sinergi Insan Andalan</h2>
            <p class="text-sm leading-relaxed text-blue-50 max-w-sm">
                Jl. Jogokaryan No.28B, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143
            </p>
            <div class="space-y-2 text-sm">
                <p>Email: hello@englishvit.com</p>
                <p>Whatsapp: +62 819 3600 0877</p>
                <p>Phone: +62 852 3813 0000</p>
            </div>
            <!-- Sosmed Icons -->
            <div class="flex items-center space-x-5 pt-2">
                <a href="#" class="text-white hover:text-green-400 transition-colors" title="WhatsApp">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </a>
                <a href="#" class="text-white hover:text-pink-400 transition-colors" title="Instagram">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-white hover:text-blue-400 transition-colors" title="LinkedIn">
                    <i class="fab fa-linkedin-in text-2xl"></i>
                </a>
                <a href="#" class="text-white hover:text-red-500 transition-colors" title="YouTube">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors" title="TikTok">
                    <i class="fab fa-tiktok text-2xl"></i>
                </a>
            </div>
        </div>

        <!-- Kolom 2: Link Menu (Tentang & Mulai Belajar) -->
        <div class="md:w-1/4 space-y-8">
            <div class="space-y-4">
                <h3 class="text-lg font-bold">Tentang</h3>
                <ul class="space-y-2 text-sm text-blue-50">
                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Karir</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-lg font-bold">Mulai Belajar</h3>
                <ul class="space-y-2 text-sm text-blue-50">
                    <li><a href="#" class="hover:underline">Blog</a></li>
                    <li><a href="#" class="hover:underline">Cek Level Bahasa Inggrismu</a></li>
                    <li><a href="#" class="hover:underline">Program Bimbingan</a></li>
                    <li><a href="#" class="hover:underline">Cek Sertifikat</a></li>
                </ul>
            </div>
        </div>

        <!-- Kolom 3: Download & Terdaftar (Vertikal Stack) -->
        <div class="md:w-1/3 space-y-12">
            <!-- Download App (Berjajar Samping) -->
            <div class="space-y-6">
                <h3 class="text-lg font-bold">Download Englishvit App</h3>
                <div class="flex flex-row space-x-3">
                    <a href="#" class="block">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                            alt="Google Play" class="h-10">
                    </a>
                    <a href="#" class="block">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                            alt="App Store" class="h-10">
                    </a>
                </div>
            </div>

            <!-- Terdaftar di (Berjajar Rapi) -->
            <div class="space-y-6">
                <h3 class="text-lg font-bold">Terdaftar di:</h3>
                <div class="flex flex-row items-end space-x-6">
                    <!-- KOMDIGI -->
                    <div class="flex flex-col items-center space-y-2">
                        <img src="{{ asset('images/logos/komdigi_white.webp') }}" alt="KOMDIGI"
                            class="h-12 w-auto object-contain">
                        <span class="text-[10px] font-semibold uppercase tracking-tighter text-center">Komdigi</span>
                    </div>

                    <!-- KEMENDIKBUD -->
                    <div class="flex flex-col items-center space-y-2">
                        <img src="{{ asset('images/logos/kemendikbud.webp') }}" alt="KEMENDIKBUD"
                            class="h-12 w-auto object-contain">
                        <span
                            class="text-[10px] font-semibold uppercase tracking-tighter text-center">Kemendikbud</span>
                    </div>

                    <!-- DPMPTSP -->
                    <div class="flex flex-col items-center space-y-2">
                        <img src="{{ asset('images/logos/dpmptsp.webp') }}" alt="DPMPTSP"
                            class="h-12 w-auto object-contain">
                        <span class="text-[10px] font-semibold uppercase tracking-tighter text-center">DPMPTSP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Area -->
    <div class="max-w-7xl mx-auto mt-16 pt-8 border-t border-blue-800 text-xs text-blue-200">
        <p>&copy; 2018 - 2026 Englishvit.com</p>
    </div>
</footer>
