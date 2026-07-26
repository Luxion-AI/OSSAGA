<section class="py-32 bg-surface border-t border-white/5 overflow-hidden relative">
    <div class="absolute inset-0 bg-grid pointer-events-none opacity-50"></div>
    <div class="absolute bottom-0 right-0 w-[600px] h-[500px] bg-electric/5 blur-[130px] rounded-full pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-neon/3 blur-[120px] rounded-full pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <!-- Image Side -->
            <div class="w-full lg:w-5/12 relative" x-data="{ offset: 0 }" x-init="window.addEventListener('scroll', () => { offset = window.pageYOffset * 0.03 })">
                <div class="aspect-[4/5] rounded-2xl overflow-hidden relative z-10 bg-surface-raised border border-white/10" :style="'transform: translateY(' + offset + 'px)'">
                    <div class="absolute inset-0 bg-gradient-to-br from-neon/15 via-surface-raised to-electric/15 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto rounded-full bg-neon/10 border border-neon/20 flex items-center justify-center mb-4 hover:bg-neon/20 hover:scale-110 transition-all duration-500">
                                <svg class="w-12 h-12 text-neon/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <span class="text-sm text-zinc-400 font-medium">Foto Ketua OSIS</span>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-4 -right-4 w-full h-full rounded-2xl border border-neon/20 -z-10"></div>
                <div class="absolute -bottom-8 -right-8 w-full h-full rounded-2xl border border-neon/10 -z-20"></div>
            </div>

            <!-- Content Side -->
            <div class="w-full lg:w-7/12">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-electric/20 bg-electric/5 text-xs font-semibold text-electric mb-6">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    Sambutan Ketua
                </div>
                
                <h2 class="text-4xl md:text-5xl font-black tracking-tight text-white mb-8 leading-tight">
                    Menuju Era Baru <span class="bg-gradient-to-r from-neon to-electric bg-clip-text text-transparent">Inovasi</span> dan Prestasi
                </h2>
                
                <blockquote class="relative mb-8 pl-6 py-3">
                    <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-gradient-to-b from-neon via-electric to-transparent rounded-full"></div>
                    <p class="text-xl text-zinc-300 leading-relaxed italic font-light">
                        "Kami percaya bahwa setiap siswa memiliki potensi luar biasa. Tugas OSSAGA adalah menjadi katalisator, menyediakan ruang berekspresi, dan membimbing setiap langkah menuju visi bersama."
                    </p>
                </blockquote>
                
                <div class="flex items-center gap-4 p-5 rounded-xl bg-surface-raised border border-white/10 hover:border-neon/20 transition-all duration-300 inline-flex group">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-br from-neon to-electric flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-neon/20 group-hover:scale-110 transition-transform duration-300">
                        A
                    </div>
                    <div>
                        <div class="font-bold text-white text-lg">Ahmad Farhan</div>
                        <div class="text-sm text-zinc-400">Ketua OSIS Periode 2026/2027</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
