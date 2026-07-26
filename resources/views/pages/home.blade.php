<x-layouts.app>
    <!-- Hero Section -->
    <x-frontend.hero />

    <!-- Stats Counter -->
    <section class="py-20 border-t border-white/5 bg-surface relative">
        <div class="absolute inset-0 bg-grid pointer-events-none opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Badge Persembahan -->
            <div class="flex justify-center -mt-10 mb-12">
                <a href="/persembahan" class="group inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-neon/20 bg-neon/5 text-sm font-medium text-neon hover:bg-neon/10 hover:border-neon/40 hover:shadow-lg hover:shadow-neon/10 transition-all duration-500 active:scale-95">
                    <svg class="w-4 h-4 animate-pulse-slow" fill="currentColor" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    <span>Sebuah Persembahan</span>
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform text-neon/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" x-data="counterAnimation()" x-init="init()">
                @php
                    $stats = [
                        ['target' => 8, 'suffix' => '+', 'label' => 'Program Kerja', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                        ['target' => 14, 'suffix' => '', 'label' => 'Ekstrakurikuler', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                        ['target' => 10, 'suffix' => 'K+', 'label' => 'Pengikut IG', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                        ['target' => 100, 'suffix' => '%', 'label' => 'Dedikasi', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ];
                @endphp

                @foreach($stats as $idx => $stat)
                <div class="group px-4">
                    <div class="w-12 h-12 mx-auto rounded-xl bg-neon/5 border border-neon/10 flex items-center justify-center mb-4 group-hover:bg-neon/15 group-hover:border-neon/30 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-neon/10 transition-all duration-500">
                        <svg class="w-6 h-6 text-neon/60 group-hover:text-neon transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path></svg>
                    </div>
                    <div class="text-4xl font-black text-white mb-1 neon-text" x-text="displayValue({{ $idx }})">0</div>
                    <div class="text-sm text-zinc-400 font-medium">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <x-frontend.vision-mission />

    <!-- Chairman Greeting Section -->
    <x-frontend.chairman-greeting />

    <!-- Latest News / Activities CTA -->
    <section class="py-32 bg-surface relative overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none opacity-30"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[400px] bg-electric/5 blur-[130px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[300px] bg-neon/3 blur-[100px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between items-end mb-14">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-electric/20 bg-electric/5 text-xs font-medium text-electric mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        Terbaru
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white mb-3">Aktivitas Terbaru</h2>
                    <p class="text-zinc-400 text-base">Kegiatan dan berita terkini dari OSSAGA.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                <div class="rounded-2xl bg-surface-raised border border-white/5 overflow-hidden hover:border-neon/30 transition-all duration-500 group hover:-translate-y-1 hover:shadow-2xl hover:shadow-neon/5">
                    <div class="aspect-video bg-gradient-to-br from-neon/10 via-surface-overlay to-electric/10 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center group-hover:scale-105 transition-transform duration-700">
                            <svg class="w-12 h-12 text-zinc-700 group-hover:text-neon/30 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface-raised via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold px-2.5 py-1 bg-neon/10 text-neon border border-neon/20 rounded-full">Berita</span>
                            <span class="text-xs text-zinc-500">2 Hari lalu</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-neon transition-colors duration-300">Judul Kegiatan OSSAGA {{ $i + 1 }}</h3>
                        <p class="text-sm text-zinc-400 line-clamp-2">Deskripsi singkat tentang kegiatan yang dilaksanakan oleh OSSAGA untuk meningkatkan kualitas siswa.</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-surface via-neon/5 to-electric/5"></div>
        <div class="absolute inset-0 bg-grid pointer-events-none opacity-40"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-neon/5 blur-[150px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <h2 class="text-5xl md:text-6xl font-black tracking-tight text-white mb-6">
                Siap Bergabung dengan <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent">OSSAGA</span>?
            </h2>
            <p class="text-xl text-zinc-300 mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                Jadilah bagian dari perubahan. Bersama kita wujudkan generasi emas SMK Negeri 1 Purbalingga.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/contact" class="group relative inline-flex items-center gap-2 px-10 py-5 text-lg font-bold text-surface bg-gradient-to-r from-neon to-blue-400 rounded-full shadow-xl shadow-neon/30 hover:shadow-neon/60 hover:scale-105 active:scale-95 transition-all duration-300 overflow-hidden">
                    <span class="relative z-10 flex items-center gap-2">
                        Hubungi Kami
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        (function() {
            if (localStorage.getItem('ossaga_confetti_shown')) return;
            localStorage.setItem('ossaga_confetti_shown', '1');

            var duration = 3000;
            var end = Date.now() + duration;
            var colors = ['#00d4ff', '#6366f1', '#ffffff', '#00ff88', '#a78bfa'];

            (function frame() {
                confetti({
                    particleCount: 3,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0, y: 0.7 },
                    colors: colors,
                });
                confetti({
                    particleCount: 3,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1, y: 0.7 },
                    colors: colors,
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                } else {
                    confetti({
                        particleCount: 100,
                        spread: 120,
                        origin: { y: 0.4 },
                        colors: colors,
                    });
                }
            }());
        })();
    </script>

    <script>
        function counterAnimation() {
            return {
                counters: {{ Js::from(array_map(fn($s) => $s['target'], $stats)) }},
                suffixes: {{ Js::from(array_map(fn($s) => $s['suffix'], $stats)) }},
                current: {{ Js::from(array_fill(0, count($stats), 0)) }},
                animated: false,
                init() {
                    var self = this;
                    var obs = new IntersectionObserver(function(entries) {
                        if (entries[0].isIntersecting) {
                            self.startCount();
                            obs.disconnect();
                        }
                    }, { threshold: 0.3 });
                    obs.observe(this.$el);
                },
                startCount() {
                    if (this.animated) return;
                    this.animated = true;
                    var self = this;
                    var duration = 2000;
                    var startTime = Date.now();
                    (function tick() {
                        var progress = Math.min((Date.now() - startTime) / duration, 1);
                        var ease = 1 - Math.pow(1 - progress, 3);
                        for (var i = 0; i < self.counters.length; i++) {
                            self.current[i] = Math.round(self.counters[i] * ease);
                        }
                        if (progress < 1) requestAnimationFrame(tick);
                        else for (var j = 0; j < self.counters.length; j++) self.current[j] = self.counters[j];
                    })();
                },
                displayValue(idx) {
                    return this.current[idx] + this.suffixes[idx];
                }
            }
        }
    </script>
    @endpush
</x-layouts.app>
