<!-- Container Full Width (Tanpa Margin Luar) -->
<div class="relative bg-[#F43F5E] h-10 flex items-center border-y-2 border-[#00347D] overflow-hidden">

    <!-- Bagian Attention (Statis di Kiri dengan Padding) -->
    <div class="relative z-20 bg-[#F43F5E] h-full flex items-center pl-6 pr-4 shadow-[10px_0_15px_-5px_rgba(0,0,0,0.3)]">
        <img src="{{ asset('images/attention.png') }}" alt="Attention" class="h-5 w-auto">
    </div>

    <!-- Bagian Teks (Bergerak dengan Padding Kanan saat Keluar) -->
    <div class="flex-grow overflow-hidden whitespace-nowrap pr-6">
        <div class="animate-single-scroll inline-block">
            <span class="text-white font-black text-xs md:text-sm tracking-wide uppercase px-4">
                BELAJAR BAHASA INGGRIS TERSTRUKTUR DENGAN MEDIA YANG MUDAH DIAKSES!
            </span>
        </div>
    </div>

</div>
