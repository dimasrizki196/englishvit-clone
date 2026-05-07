<section {{ $attributes->merge(['class' => 'py-12 md:py-20 bg-[#F0F6FF] overflow-hidden']) }}>
    <div class="max-w-7xl mx-auto px-6 text-center mb-10">
        <h3 class="text-xs md:text-sm font-bold text-gray-400 tracking-[0.2em]">
            Telah diliput oleh:
        </h3>
    </div>

    <div class="relative w-full">
        <div
            class="absolute left-0 top-0 bottom-0 w-20 md:w-64 bg-gradient-to-r from-[#F0F6FF] via-[#F0F6FF]/80 to-transparent z-10 pointer-events-none">
        </div>

        <div
            class="absolute right-0 top-0 bottom-0 w-20 md:w-64 bg-gradient-to-l from-[#F0F6FF] via-[#F0F6FF]/80 to-transparent z-10 pointer-events-none">
        </div>

        <div class="marquee-wrapper flex overflow-hidden">
            <div id="media-content-left" class="marquee-left flex gap-16 md:gap-28 items-center px-4 min-w-max">
                <img src="{{ asset('images/logos/inews.webp') }}" alt="iNews"
                    class="h-6 md:h-8 object-contain transition-all duration-300">
                <img src="{{ asset('images/logos/liputan6.webp') }}" alt="Liputan 6"
                    class="h-7 md:h-9 object-contain transition-all duration-300">
                <img src="{{ asset('images/logos/media-indonesia.webp') }}" alt="Media Indonesia"
                    class="h-7 md:h-9 object-contain transition-all duration-300">
                <img src="{{ asset('images/logos/sindonews.webp') }}" alt="Sindonews"
                    class="h-6 md:h-8 object-contain transition-all duration-300">
                <img src="{{ asset('images/logos/suaracom.webp') }}" alt="Suara.com"
                    class="h-6 md:h-8 object-contain transition-all duration-300">
                <img src="{{ asset('images/logos/warta-jatim.webp') }}" alt="Warta Jatim"
                    class="h-6 md:h-8 object-contain transition-all duration-300">
            </div>
        </div>
    </div>
</section>
<style>
    .marquee-left {
        animation: scroll-left-media 30s linear infinite;
    }

    .marquee-media-wrapper:hover .marquee-left {
        animation-play-state: paused;
    }

    @keyframes scroll-left-media {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .pointer-events-none {
        pointer-events: none;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mediaContentLeft = document.getElementById('media-content-left');
        if (mediaContentLeft) {
            const clones = mediaContentLeft.innerHTML;
            mediaContentLeft.innerHTML += clones;
        }
    });
</script>
