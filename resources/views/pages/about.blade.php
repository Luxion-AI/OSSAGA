<x-layouts.app :title="'Tentang OSSAGA'">
    <section class="pt-36 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="absolute top-0 right-1/4 w-[600px] h-[500px] bg-electric/5 blur-[130px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/4 w-[500px] h-[400px] bg-neon/3 blur-[120px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-electric/20 bg-electric/5 text-xs font-semibold text-electric mb-6">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Tentang Kami
            </div>
            <h1 class="text-5xl sm:text-7xl font-black tracking-tight text-white mb-6">
                Tentang <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">OSSAGA</span>
            </h1>
            <p class="text-xl text-zinc-300 max-w-2xl mx-auto font-light">
                Mengenal lebih dekat motor penggerak kreativitas dan kepemimpinan di SMK Negeri 1 Purbalingga.
            </p>
        </div>
    </section>

    <section class="pb-32 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-20">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-xl bg-neon/10 border border-neon/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h2 class="text-3xl font-black text-white">Sejarah Kami</h2>
                </div>
                <div class="space-y-5 text-base text-zinc-300 leading-relaxed pl-[56px]">
                    <p>
                        Organisasi Siswa Intra Sekolah (OSIS) SMK Negeri 1 Purbalingga telah berdiri seiring dengan berdirinya sekolah ini. Dikenal dengan sebutan <span class="text-neon font-bold">OSSAGA</span>, organisasi ini telah menjadi wadah bagi ribuan siswa untuk belajar berorganisasi, memimpin, dan berkontribusi kepada sekolah dan masyarakat.
                    </p>
                    <p>
                        Setiap periode kepengurusan membawa warna dan inovasi baru, meninggalkan warisan yang terus dibangun oleh generasi berikutnya.
                    </p>
                </div>
            </div>

            <div>
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-12 h-12 rounded-xl bg-electric/10 border border-electric/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-electric" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-black text-white">Nilai-Nilai Organisasi</h2>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    @php
                        $values = [
                            ['title' => 'Integritas', 'desc' => 'Bertindak jujur, transparan, dan konsisten dengan nilai-nilai kebenaran.', 'color' => 'neon'],
                            ['title' => 'Kolaborasi', 'desc' => 'Pencapaian terbesar dari kerja sama yang solid antar seluruh elemen.', 'color' => 'electric'],
                            ['title' => 'Inovasi', 'desc' => 'Terus mencari cara baru yang lebih baik dalam memecahkan masalah.', 'color' => 'neon'],
                            ['title' => 'Pelayanan', 'desc' => 'Mengutamakan kepentingan bersama dan melayani aspirasi seluruh siswa.', 'color' => 'electric'],
                            ['title' => 'Tanggung Jawab', 'desc' => 'Berkomitmen penuh dan siap menanggung risiko dari setiap keputusan.', 'color' => 'neon'],
                        ];
                    @endphp

                    @foreach($values as $index => $value)
                    <div class="rounded-2xl bg-surface-raised border border-white/5 p-6 hover:border-neon/20 hover:-translate-y-1 hover:shadow-lg hover:shadow-neon/5 transition-all duration-500 card-shine group {{ $index === 4 ? 'sm:col-span-2' : '' }}">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-neon/10 group-hover:border-neon/20 group-hover:scale-110 transition-all duration-300">
                                <span class="text-sm font-black text-zinc-500 group-hover:text-neon transition-colors duration-300">0{{ $index + 1 }}</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-neon transition-colors duration-300">{{ $value['title'] }}</h3>
                                <p class="text-sm text-zinc-400 leading-relaxed group-hover:text-zinc-300 transition-colors duration-300">{{ $value['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
