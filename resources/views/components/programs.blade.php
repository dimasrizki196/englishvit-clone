@props(['programs'])
<section id="daftar" class="max-w-7xl mx-auto px-6 py-12 md:py-20 bg-white">

    <!-- ========================================== -->
    <!-- BAGIAN 1: PILIHAN PROGRAM BELAJAR -->
    <!-- ========================================== -->
    <div class="text-center mb-8">
        <h2 class="text-xl md:text-2xl font-bold text-gray-900">Pilihan Program Belajar di Englishvit</h2>
    </div>

    <!-- Layout: Flexbox proporsional (flex-[3] dan flex-[2]) -->
    <div class="grid grid-cols-2 md:flex md:flex-row gap-3 md:gap-5">

        <!-- Card 1: Live Class -->
        <a href="#"
            class="md:flex-[3] bg-white hover:bg-[#F0F6FF] border border-gray-100 hover:border-blue-100 rounded-xl p-3 md:p-5 flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-3 md:gap-4 shadow-sm transition-colors duration-300">
            <div
                class="bg-orange-50 text-orange-500 w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full shadow-sm">
                <i class="fas fa-video text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 text-sm md:text-base">Live Class</h3>
                <p class="text-[11px] md:text-sm text-gray-600 mt-1 hidden md:block leading-relaxed">Kelas online tatap
                    muka dengan tutor profesional.</p>
            </div>
        </a>

        <!-- Card 2: One on One -->
        <a href="#"
            class="md:flex-[3] bg-white hover:bg-[#F0F6FF] border border-gray-100 hover:border-blue-100 rounded-xl p-3 md:p-5 flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-3 md:gap-4 shadow-sm transition-colors duration-300">
            <div
                class="bg-pink-50 text-pink-500 w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full shadow-sm">
                <i class="fas fa-user-graduate text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 text-sm md:text-base">One on One</h3>
                <p class="text-[11px] md:text-sm text-gray-600 mt-1 hidden md:block leading-relaxed">Belajar intensif
                    dengan program private satu murid satu guru.</p>
            </div>
        </a>

        <!-- Card 3: Certification Test -->
        <a href="#"
            class="md:flex-[3] bg-white hover:bg-[#F0F6FF] border border-gray-100 hover:border-blue-100 rounded-xl p-3 md:p-5 flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-3 md:gap-4 shadow-sm transition-colors duration-300">
            <div
                class="bg-blue-50 text-[#0064D2] w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full shadow-sm">
                <i class="fas fa-certificate text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 text-sm md:text-base">Certification Test</h3>
                <p class="text-[11px] md:text-sm text-gray-600 mt-1 hidden md:block leading-relaxed">Test sertifikasi
                    kemampuan dengan standar yang diakui.</p>
            </div>
        </a>

        <!-- Card 4: Lainnya -->
        <a href="#"
            class="md:flex-[2] bg-[#F0F6FF] border border-gray-100 hover:border-blue-100 rounded-xl p-3 md:p-5 flex flex-col md:flex-row items-center justify-center md:justify-start gap-3 md:gap-4 shadow-sm transition-colors duration-300 pl-4 md:pl-8">
            <div
                class="bg-blue-50 text-[#0064D2] w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full shadow-sm">
                <i class="fas fa-th-large text-xl"></i>
            </div>
            <div class="flex items-center">
                <h3 class="font-bold text-[#0064D2] text-sm md:text-base">Lainnya</h3>
            </div>
        </a>

    </div>

    <!-- Garis Pembatas (Dashed Line) -->
    <hr class="border-t-2 border-dashed border-gray-200 my-12 md:my-16">

    <x-kelas :programs="$programs" />
</section>
