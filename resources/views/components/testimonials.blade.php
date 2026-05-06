@props(['testimonials'])

<section class="bg-[#F8FAFC] py-16 md:py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-10 md:mb-14">
            <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-2">+58.824 Satisfied Students</h2>
            <p class="text-sm md:text-base text-gray-600">Kata mereka yang telah merasakan pengalaman belajar bersama
                Englishvit</p>
        </div>

        <div id="testi-slider" class="flex overflow-x-auto gap-4 md:gap-6 pb-8 snap-x snap-mandatory hide-scrollbar">
            @foreach ($testimonials as $testi)
                <div
                    class="snap-start shrink-0 w-[300px] md:w-[350px] bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex text-[#0064D2] text-sm gap-0.5">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                            <a href="#"
                                class="text-[#0064D2] text-xs font-bold hover:underline flex items-center gap-1">
                                <i class="fas fa-play-circle"></i> Lihat video
                            </a>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed mb-6 italic">"{{ $testi['text'] }}"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="{{ $testi['img'] }}" alt="{{ $testi['name'] }}"
                            class="w-10 h-10 rounded-full object-cover border border-blue-100">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">{{ $testi['name'] }}</h4>
                            <p class="text-xs text-gray-500">{{ $testi['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="testi-dots" class="flex justify-center items-center gap-2 mt-4">
            @foreach ($testimonials as $index => $testi)
                <div
                    class="testi-dot {{ $index === 0 ? 'w-8 h-2.5 bg-[#0064D2]' : 'w-2.5 h-2.5 bg-[#D1E4FA]' }} rounded-full transition-all duration-300 cursor-pointer">
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.getElementById('testi-slider');
        const dots = document.querySelectorAll('#testi-dots .testi-dot');
        if (!slider || dots.length === 0) return;

        slider.addEventListener('scroll', () => {
            const scrollPercentage = slider.scrollLeft / (slider.scrollWidth - slider.clientWidth);
            const activeIndex = Math.min(dots.length - 1, Math.round(scrollPercentage * (dots.length -
                1)));

            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.classList.replace('w-2.5', 'w-8');
                    dot.classList.replace('bg-[#D1E4FA]', 'bg-[#0064D2]');
                } else {
                    dot.classList.replace('w-8', 'w-2.5');
                    dot.classList.replace('bg-[#0064D2]', 'bg-[#D1E4FA]');
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
