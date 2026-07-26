<x-layouts.app :title="'Timeline Kepengurusan'">
    <section class="pt-36 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="absolute top-0 left-1/3 w-[600px] h-[500px] bg-neon/5 blur-[130px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-neon/20 bg-neon/5 text-xs font-semibold text-neon mb-6">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Perjalanan Kami
            </div>
            <h1 class="text-5xl sm:text-7xl font-black tracking-tight text-white mb-6">
                Timeline <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">Kepengurusan</span>
            </h1>
            <p class="text-xl text-zinc-300 max-w-2xl mx-auto font-light">
                Jejak perjalanan OSSAGA dari masa ke masa, merekam setiap momen bersejarah.
            </p>
        </div>
    </section>

    <section class="pb-32 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="absolute left-4 md:left-1/2 md:-translate-x-px top-0 bottom-0 w-[3px] bg-gradient-to-b from-neon/40 via-electric/30 to-transparent"></div>

                @php
                    $events = [
                        ['year' => '2026/2027', 'title' => 'Kabinet Inovasi Berkelanjutan', 'desc' => 'Era digitalisasi dan modernisasi program kerja OSIS.', 'active' => true],
                        ['year' => '2025/2026', 'title' => 'Kabinet Harmoni Nusantara', 'desc' => 'Memperkuat kolaborasi antar ekstrakurikuler dan bidang.', 'active' => false],
                        ['year' => '2024/2025', 'title' => 'Kabinet Akselerasi Muda', 'desc' => 'Fokus pada pengembangan kepemimpinan generasi muda.', 'active' => false],
                        ['year' => '2023/2024', 'title' => 'Kabinet Sinergi Prestasi', 'desc' => 'Mencapai berbagai penghargaan di tingkat kabupaten dan provinsi.', 'active' => false],
                    ];
                @endphp

                @foreach($events as $index => $event)
                <div class="relative flex items-start mb-14 {{ $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}">
                    <div class="absolute left-4 md:left-1/2 -translate-x-1/2 z-10">
                        <div class="w-5 h-5 rounded-full {{ $event['active'] ? 'bg-neon shadow-lg shadow-neon/50' : 'bg-surface-overlay border-3 border-zinc-600' }} transition-all duration-300"></div>
                    </div>
                    
                    <div class="ml-14 md:ml-0 md:w-[calc(50%-2.5rem)] {{ $index % 2 === 0 ? 'md:pr-10' : 'md:pl-10' }}">
                        <div class="rounded-2xl {{ $event['active'] ? 'bg-gradient-to-br from-neon/15 via-surface-raised to-electric/15 border border-neon/30 animate-pulse-glow shadow-lg shadow-neon/5' : 'bg-surface-raised border border-white/5 hover:border-white/15' }} p-6 transition-all duration-500 card-shine hover:-translate-y-1">
                            <div class="text-sm font-mono font-bold {{ $event['active'] ? 'text-neon' : 'text-zinc-500' }} mb-3">{{ $event['year'] }}</div>
                            <h3 class="text-xl font-bold text-white mb-3">{{ $event['title'] }}</h3>
                            <p class="text-sm text-zinc-400 leading-relaxed">{{ $event['desc'] }}</p>
                            @if($event['active'])
                            <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-neon bg-neon/10 px-3 py-1.5 rounded-full">
                                <span class="relative flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-neon/75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-neon"></span>
                                </span>
                                Periode Aktif
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
