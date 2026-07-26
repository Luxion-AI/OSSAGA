<x-layouts.app :title="'Persembahan'">

    @php
        $pembuat = config('persembahan.pembuat');
        $ditujukan = config('persembahan.ditujukan_kepada');
        $pesanBuka = config('persembahan.pesan_pembuka');
        $pesanTutup = config('persembahan.pesan_penutup');
    @endphp

    <div class="min-h-screen flex items-center justify-center relative overflow-hidden py-32" x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)">
        <div class="absolute inset-0 bg-grid pointer-events-none opacity-40"></div>
        <div class="absolute top-0 left-1/4 w-[600px] h-[500px] bg-neon/5 blur-[130px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[400px] bg-electric/5 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            
            <div class="mb-8">
                <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" class="inline-flex items-center gap-3 px-5 py-3 rounded-full border border-neon/20 bg-neon/5 text-sm font-medium text-neon">
                    <svg class="w-5 h-5 animate-pulse-glow" fill="currentColor" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    <span class="tracking-wider uppercase text-xs">Dengan Sepenuh Hati</span>
                </div>
            </div>

            <h1 x-cloak x-show="show" x-transition:enter="transition ease-out duration-800 delay-150" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0" class="text-5xl sm:text-7xl font-extrabold tracking-tight text-white mb-6 leading-tight">
                <span class="block bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient">Persembahan</span>
            </h1>

            <p x-cloak x-show="show" x-transition:enter="transition ease-out duration-800 delay-350" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0" class="text-lg sm:text-xl text-zinc-300 leading-relaxed mb-4">
                {{ $pesanBuka }}
            </p>

            <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-800 delay-550" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0" class="flex items-center justify-center gap-3 text-xl font-semibold text-white mb-12">
                <span class="w-8 h-px bg-gradient-to-r from-transparent to-neon/50"></span>
                Untuk <span class="bg-gradient-to-r from-neon to-electric bg-clip-text text-transparent">{{ $ditujukan }}</span>
                <span class="w-8 h-px bg-gradient-to-l from-transparent to-neon/50"></span>
            </div>

            <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-800 delay-750" x-transition:enter-start="opacity-0 translate-y-8 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100" class="rounded-2xl bg-surface-raised border border-white/5 p-8 md:p-12 max-w-lg mx-auto mb-16 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-neon/5 via-transparent to-electric/5"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-neon to-electric flex items-center justify-center text-2xl mb-5 shadow-lg shadow-neon/20 animate-float">
                        {{ $pembuat['avatar_emoji'] }}
                    </div>
                    <h2 class="text-xl font-bold text-white mb-2">{{ $pembuat['nama'] }}</h2>
                    <blockquote class="relative mt-5 pt-5">
                        <div class="absolute left-1/2 -translate-x-1/2 top-0 w-12 h-px bg-gradient-to-r from-transparent via-neon/30 to-transparent"></div>
                        <p class="text-zinc-400 italic leading-relaxed">{{ $pembuat['quote'] }}</p>
                    </blockquote>

                    @if($pembuat['link_github'] || $pembuat['link_ig'])
                    <div class="flex items-center justify-center gap-4 mt-6">
                        @if($pembuat['link_github'])
                        <a href="{{ $pembuat['link_github'] }}" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-zinc-400 hover:text-neon hover:border-neon/30 hover:bg-neon/5 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.335-1.755-1.335-1.755-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.3 24 12 24 5.37 18.63 0 12 0z"/></svg>
                        </a>
                        @endif
                        @if($pembuat['link_ig'])
                        <a href="{{ $pembuat['link_ig'] }}" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-zinc-400 hover:text-neon hover:border-neon/30 hover:bg-neon/5 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0 2.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>

            <p x-cloak x-show="show" x-transition:enter="transition ease-out duration-800 delay-950" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="text-zinc-500 text-sm max-w-lg mx-auto leading-relaxed">
                {{ $pesanTutup }}
            </p>

            <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-800 delay-1100" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="mt-12">
                <a href="/" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium text-zinc-400 border border-white/10 rounded-full hover:border-neon/30 hover:text-neon hover:bg-neon/5 transition-all duration-300 group">
                    <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</x-layouts.app>
