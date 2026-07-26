<x-layouts.app :title="'Hall of Leadership'">
    <section class="pt-36 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="absolute top-0 right-1/4 w-[600px] h-[500px] bg-neon/5 blur-[130px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-neon/20 bg-neon/5 text-xs font-semibold text-neon mb-6">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                Apresiasi
            </div>
            <h1 class="text-5xl sm:text-7xl font-black tracking-tight text-white mb-6">
                Hall of <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">Leadership</span>
            </h1>
            <p class="text-xl text-zinc-300 max-w-2xl mx-auto font-light">
                Penghormatan bagi mereka yang pernah menahkodai OSSAGA dengan dedikasi dan visi luar biasa.
            </p>
        </div>
    </section>

    <section class="pb-32 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @for ($i = 0; $i < 8; $i++)
                <div class="rounded-2xl bg-surface-raised border border-white/5 overflow-hidden hover:border-neon/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-neon/5 transition-all duration-500 group">
                    <div class="aspect-[3/4] bg-gradient-to-br from-neon/10 via-surface-overlay to-electric/10 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-14 h-14 text-zinc-600 group-hover:text-neon/30 group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <div class="absolute inset-0 bg-surface/70 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center p-6 text-center backdrop-blur-sm">
                            <p class="text-white text-sm font-medium leading-relaxed">"Pencapaian luar biasa selama menjabat termasuk peluncuran program unggulan baru dan digitalisasi administrasi OSIS."</p>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-neon transition-colors duration-300">Nama Ketua {{ $i + 1 }}</h3>
                        <div class="text-sm font-semibold text-electric mb-2">Periode 202{{ 6 - $i }}/202{{ 7 - $i }}</div>
                        <div class="text-xs text-zinc-500">Kabinet Nama Kabinet</div>
                    </div>
                </div>
                @endfor
            </div>

            <div class="mt-16 text-center">
                <button class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold text-zinc-300 border-2 border-white/10 rounded-full hover:border-neon/30 hover:text-neon hover:bg-neon/5 hover:shadow-md hover:shadow-neon/5 active:scale-95 transition-all duration-300 group">
                    <svg class="w-4 h-4 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>
</x-layouts.app>
