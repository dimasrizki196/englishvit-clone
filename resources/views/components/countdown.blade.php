<div class="py-2">
    <h3 class="font-bold text-[15px] text-gray-300 mb-6 text-center tracking-widest">Berakhir dalam</h3>
    
    <div class="flex justify-center gap-2 md:gap-4">
        <div class="flex flex-col items-center">
            <div class="bg-[#FF4D4D] text-white font-bold text-xl md:text-3xl rounded-xl w-8 h-8 md:w-12 md:h-12 flex items-center justify-center shadow-lg" id="timer-hours">
                00
            </div>
            <span class="text-[10px] md:text-xs mt-2 font-medium text-gray-400">Jam</span>
        </div>
        
        <div class="flex flex-col items-center">
            <div class="bg-[#FF4D4D] text-white font-bold text-xl md:text-3xl rounded-xl w-8 h-8 md:w-12 md:h-12 flex items-center justify-center shadow-lg" id="timer-minutes">
                00
            </div>
            <span class="text-[10px] md:text-xs mt-2 font-medium text-gray-400">Menit</span>
        </div>

        <div class="flex flex-col items-center">
            <div class="bg-[#FF4D4D] text-white font-bold text-xl md:text-3xl rounded-xl w-8 h-8 md:w-12 md:h-12 flex items-center justify-center shadow-lg" id="timer-seconds">
                00
            </div>
            <span class="text-[10px] md:text-xs mt-2 font-medium text-gray-400">Detik</span>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const hEl = document.getElementById('timer-hours');
        const mEl = document.getElementById('timer-minutes');
        const sEl = document.getElementById('timer-seconds');

        if(!hEl || !mEl || !sEl) return;

        // Set waktu (Contoh: 21 Jam, 23 Menit, 29 Detik)
        let h = 21; let m = 23; let s = 29;

        function runTimer() {
            s--;
            if (s < 0) {
                s = 59; m--;
                if (m < 0) {
                    m = 59; h--;
                    if (h < 0) {
                        h = 0; m = 0; s = 0;
                        clearInterval(itv);
                    }
                }
            }
            hEl.textContent = h.toString().padStart(2, '0');
            mEl.textContent = m.toString().padStart(2, '0');
            sEl.textContent = s.toString().padStart(2, '0');
        }

        const itv = setInterval(runTimer, 1000);
        runTimer();
    });
</script>