@props(['clients'])

<section class="bg-white py-16 md:py-16 overflow-hidden">
    <div class="text-center mb-8 px-6">
        <h3 class="text-sm md:text-base font-bold text-gray-800 tracking-wide uppercase">250+ lembaga dan instansi telah
            menggunakan layanan kami</h3>
    </div>

    <div class="marquee-wrapper relative flex overflow-hidden w-full group">
        <div id="marquee-content" class="marquee flex gap-12 md:gap-24 items-center px-6 min-w-max">
            @foreach ($clients as $client)
                <img src="{{ asset($client['img']) }}" alt="{{ $client['name'] }}"
                    class="h-10 md:h-12 object-contain transition-all duration-500 cursor-pointer">
            @endforeach
        </div>
    </div>
</section>

<style>
    .marquee {
        animation: scroll-left 30s linear infinite;
    }

    .marquee-wrapper:hover .marquee {
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
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marqueeContent = document.getElementById('marquee-content');
        if (marqueeContent) {
            // Kita kloning isi marquee agar looping-nya tidak putus (seamless)
            const content = marqueeContent.innerHTML;
            marqueeContent.innerHTML = content + content;
        }
    });
</script>
