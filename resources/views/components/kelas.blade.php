@props(['programs'])
<section class="max-w-7xl bg-white">
    <div class="text-center mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Program Rekomendasi Terbaik</h2>
        <p class="text-sm md:text-base text-gray-500 mt-2 max-w-2xl mx-auto px-4">
            Coba pengalaman belajar bahasa Inggris super seru dengan program rekomendasi Learning Consultant kami.
        </p>
    </div>

    <div id="program-slider"
        class="flex overflow-x-auto gap-4 md:gap-6 pb-6 snap-x snap-mandatory hide-scrollbar px-4 md:px-0 scroll-smooth">
        @foreach ($programs as $program)
            <div
                class="snap-start shrink-0 w-[260px] md:w-[280px] bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}"
                    class="w-full h-40 object-cover bg-gray-100">

                <div class="p-5 flex flex-col flex-grow">
                    @php
                        $colors = [
                            'yellow' => 'text-yellow-600 bg-yellow-50 border-yellow-200',
                            'blue' => 'text-blue-600 bg-blue-50 border-blue-200',
                            'green' => 'text-green-600 bg-green-50 border-green-200',
                            'purple' => 'text-purple-600 bg-purple-50 border-purple-200',
                            'pink' => 'text-pink-600 bg-pink-50 border-pink-200',
                        ];
                        $selectedColor = $colors[$program['color']] ?? $colors['blue'];
                    @endphp

                    <span class="text-[10px] font-bold px-2 py-1 rounded w-max mb-3 border {{ $selectedColor }}">
                        <i class="{{ $program['icon'] }} mr-1"></i> {{ $program['category'] }}
                    </span>

                    <h3 class="font-bold text-gray-900 text-base md:text-lg mb-2 leading-tight">{{ $program['title'] }}
                    </h3>
                    <p class="text-xs text-gray-600 mb-6 flex-grow line-clamp-2">{{ $program['desc'] }}</p>

                    <div class="mb-4">
                        <div class="font-extrabold text-gray-900 text-lg">{{ $program['price'] }}</div>
                        @if ($program['discount'])
                            <div class="flex items-center gap-2 mt-1">
                                <span
                                    class="bg-red-100 text-red-600 text-[10px] font-bold px-1.5 py-0.5 rounded">{{ $program['discount'] }}</span>
                                <span class="text-gray-400 line-through text-xs">{{ $program['old_price'] }}</span>
                            </div>
                        @endif
                    </div>

                    <button
                        class="w-full bg-[#0064D2] hover:bg-blue-700 text-white font-bold py-2.5 rounded-lg text-sm transition-colors">
                        Lihat Detail
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <div id="slider-dots" class="flex justify-center items-center gap-2 mt-8">
        @foreach ($programs as $index => $program)
            <div
                class="dot {{ $index === 0 ? 'w-8 h-2.5 bg-[#0064D2]' : 'w-2.5 h-2.5 bg-blue-100' }} rounded-full transition-all duration-300 cursor-pointer hover:bg-blue-300">
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8 md:mt-10">
        <a href="#"
            class="inline-flex items-center gap-2 text-[#0064D2] font-bold hover:text-blue-800 transition-colors text-sm md:text-base">
            Lihat semua kelas <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.getElementById('program-slider');
        const dots = document.querySelectorAll('#slider-dots .dot');
        if (!slider || dots.length === 0) return;

        slider.addEventListener('scroll', () => {
            const scrollPercentage = slider.scrollLeft / (slider.scrollWidth - slider.clientWidth);
            const activeIndex = Math.min(dots.length - 1, Math.round(scrollPercentage * (dots.length -
                1)));

            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.classList.replace('w-2.5', 'w-8');
                    dot.classList.replace('bg-blue-100', 'bg-[#0064D2]');
                } else {
                    dot.classList.replace('w-8', 'w-2.5');
                    dot.classList.replace('bg-[#0064D2]', 'bg-blue-100');
                }
            });
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const scrollTarget = (slider.scrollWidth - slider.clientWidth) * (index / (dots
                    .length - 1));
                slider.scrollTo({
                    left: scrollTarget,
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
