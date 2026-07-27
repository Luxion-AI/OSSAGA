<section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-grid pointer-events-none"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-neon/5 blur-[150px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[400px] bg-electric/3 blur-[140px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-neon/20 bg-neon/5 text-xs font-semibold text-neon mb-6">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Landasan Kami
            </div>
            <h2 class="text-5xl md:text-6xl font-black tracking-tight text-white mb-4">
                Visi & <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">Misi</span>
            </h2>
            <p class="text-lg text-zinc-300 font-light">
                Landasan pergerakan kami dalam mewujudkan program kerja yang berdampak dan berkelanjutan.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Visi -->
            <div class="lg:col-span-1">
                <div class="h-full rounded-2xl bg-gradient-to-br from-neon/15 via-surface-raised to-electric/15 border border-neon/30 p-8 relative overflow-hidden card-shine animate-pulse-glow group hover:scale-[1.02] transition-transform duration-500">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-neon/10 rounded-full blur-[60px] -mr-12 -mt-12"></div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-electric/8 rounded-full blur-[50px] -ml-10 -mb-10"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-xl bg-neon/15 border border-neon/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-neon/20 transition-all duration-500">
                            <svg class="w-7 h-7 text-neon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h3 class="text-3xl font-black mb-4 tracking-tight text-white neon-text">Visi Kami</h3>
                        <p class="text-zinc-300 leading-relaxed text-base">
                            Menjadikan OSIS SMK Negeri 1 Purbalingga sebagai tempat yang kreatif, inspiratif, menjadi wadah untuk seluruh siswa dapat berkembang, berprestasi, serta siap menghadapi perubahan zaman dan tantangan masa depan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 h-full">
                    @php
                        $missions = [
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>', 'title' => 'Aspirasi Siswa', 'desc' => 'Menjadi wadah aspirasi siswa yang terbuka, aktif menampung pendapat, serta menindaklanjutinya dengan nyata demi kemajuan dan kesejahteraan seluruh warga sekolah.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>', 'title' => 'Pengembangan Potensi', 'desc' => 'Mengembangkan bakat, minat, dan kreativitas siswa di bidang akademik, seni, olahraga, kewirausahaan, serta digital agar potensi setiap siswa dapat berkembang secara optimal.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>', 'title' => 'Organisasi Modern', 'desc' => 'Menerapkan teknologi dalam setiap kegiatan OSIS untuk menciptakan organisasi yang modern, efisien, dan bermanfaat bagi seluruh warga sekolah.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>', 'title' => 'Kegiatan Bermakna', 'desc' => 'Melaksanakan kegiatan yang kreatif, menyenangkan, dan bermakna, bukan sekadar rutinitas, tetapi juga menjadi pengalaman positif yang berdampak bagi perkembangan siswa dan sekolah.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>', 'title' => 'Karakter & Kolaborasi', 'desc' => 'Menanamkan nilai disiplin, tanggung jawab, dan kerja sama, serta membangun hubungan yang harmonis antara siswa, guru, dan organisasi lain guna menciptakan lingkungan sekolah yang solid dan berkarakter.'],
                        ];
                    @endphp

                    @foreach($missions as $index => $mission)
                    <div class="rounded-2xl bg-surface-raised border border-white/5 p-6 hover:border-neon/30 hover:bg-gradient-to-br hover:from-neon/5 hover:to-electric/5 hover:-translate-y-1 hover:shadow-xl hover:shadow-neon/5 transition-all duration-500 card-shine group {{ $index === 4 ? 'sm:col-span-2' : '' }}">
                        <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 text-neon/60 flex items-center justify-center mb-4 group-hover:bg-neon/10 group-hover:border-neon/30 group-hover:text-neon group-hover:scale-110 group-hover:shadow-md group-hover:shadow-neon/10 transition-all duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $mission['icon'] !!}</svg>
                        </div>
                        <div class="text-xs font-mono text-neon/50 mb-2 group-hover:text-neon/80 transition-colors duration-300">0{{ $index + 1 }}</div>
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-neon transition-colors duration-300">{{ $mission['title'] }}</h4>
                        <p class="text-sm text-zinc-400 leading-relaxed group-hover:text-zinc-300 transition-colors duration-300">{{ $mission['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
