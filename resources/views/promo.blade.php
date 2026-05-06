<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo - Englishvit</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-white font-sans antialiased">

    <!-- Tetap memanggil Navbar utama -->
    <x-navbar />

    <main class="min-h-screen">
        <section class="py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6">
                
                <!-- Header Promo -->
                <div class="text-center mb-12">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Promo Super Seru Englishvit</h1>
                    <p class="text-sm md:text-base text-gray-600">
                        Jangan lewatkan kesempatan terbatas ini! Yuk, konsultasikan rencana belajarmu dengan 
                        <a href="https://wa.me/yournumber" class="text-[#22c55e] font-bold hover:underline">admin!</a>
                    </p>
                </div>

                <!-- Kartu Promo Tunggal sesuai Screenshot 2026-05-07 at 01.23.07.jpg -->
                <div class="flex justify-center">
                    <div class="w-full max-w-[420px] bg-white rounded-3xl overflow-hidden shadow-[0_10px_50px_-12px_rgba(0,0,0,0.1)] border border-gray-100">
                        
                        <!-- Gambar Banner -->
                        <div class="relative">
                            <img src="images/promo.webp" alt="FLOW Promo" class="w-full h-56 object-cover">
                        </div>

                        <!-- Konten Kartu -->
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">FLOW Promo</h3>
                            <p class="text-[13px] text-gray-500 leading-relaxed mb-6">
                                Promo test bahasa Inggris bersertifikat langsung jadi.
                            </p>
                            
                            <div class="text-[12px] text-gray-400 mb-6">
                                Sampai 30 Juni 2026
                            </div>

                            <!-- Progress Bar Minimalis -->
                            <div class="space-y-2">
                                <div class="flex justify-end">
                                    <span class="text-[10px] font-bold text-gray-400">80/100</span>
                                </div>
                                <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#0064D2] rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

</body>
</html>