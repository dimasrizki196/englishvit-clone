@props(['clients'])

<section class="bg-white py-12 md:py-16 overflow-hidden">
    <div class="text-center mb-8 px-6">
        <h3 class="text-xs md:text-base font-bold text-gray-800 tracking-wide uppercase">
            250+ lembaga dan instansi telah menggunakan layanan kami
        </h3>
    </div>

    <div class="relative w-full overflow-hidden group">

        <div
            class="absolute left-0 top-0 bottom-0 w-40 md:w-240 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none">
        </div>

        <div
            class="absolute right-0 top-0 bottom-0 w-40 md:w-240 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none">
        </div>

        <div class="marquee-wrapper flex w-full">
            <div id="marquee-content" class="marquee flex gap-12 md:gap-24 items-center px-6 min-w-max">
                @foreach ($clients as $client)
                    <img src="{{ asset($client['img']) }}" alt="{{ $client['name'] }}"
                        class="h-9 md:h-12 object-contain transition-all duration-500 cursor-pointer">
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    .marquee {
        animation: scroll-left 40s linear infinite;
        /* Sedikit diperlambat agar lebih nyaman dilihat */
    }

    .group:hover .marquee {
        animation-play-state: paused;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
    .marquee-wrapper::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marqueeContent = document.getElementById('marquee-content');
        if (marqueeContent) {
            const content = marqueeContent.innerHTML;
            marqueeContent.innerHTML = content + content;
        }
    });
</script>
