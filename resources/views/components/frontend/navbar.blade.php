<nav 
    class="fixed top-0 inset-x-0 z-50 transition-all duration-500"
    :class="scrolled ? 'bg-surface/80 backdrop-blur-xl shadow-lg shadow-black/20 py-3' : 'bg-transparent py-5'"
    x-data="{ mobileMenuOpen: false }"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo OSSAGA" fetchpriority="high" class="w-9 h-9 object-contain group-hover:scale-110 transition-all duration-300">
                    <span class="font-bold text-lg tracking-tight text-white">OSSAGA</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/" class="px-4 py-2 text-sm font-semibold text-zinc-300 hover:text-neon hover:bg-white/5 rounded-lg transition-all duration-300">Beranda</a>
                <a href="/about" class="px-4 py-2 text-sm font-semibold text-zinc-300 hover:text-neon hover:bg-white/5 rounded-lg transition-all duration-300">Tentang</a>
                
                <!-- Dropdown (Alpine) -->
                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="px-4 py-2 text-sm font-semibold text-zinc-300 hover:text-neon hover:bg-white/5 rounded-lg transition-all duration-300 flex items-center gap-1">
                        Organisasi
                        <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    
                    <div 
                        x-cloak
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                        class="absolute left-1/2 -translate-x-1/2 mt-3 w-56 rounded-xl bg-surface-raised border border-white/10 shadow-2xl shadow-black/50 overflow-hidden backdrop-blur-xl"
                    >
                        <div class="py-2 px-1">
                            <a href="/timeline" class="flex items-center gap-3 px-3 py-2.5 text-sm text-zinc-300 hover:text-neon hover:bg-white/5 rounded-lg transition-all duration-200">
                                <svg class="w-4 h-4 text-neon/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Timeline
                            </a>
                            <a href="/hall-of-leadership" class="flex items-center gap-3 px-3 py-2.5 text-sm text-zinc-300 hover:text-neon hover:bg-white/5 rounded-lg transition-all duration-200">
                                <svg class="w-4 h-4 text-neon/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                Hall of Leadership
                            </a>
                        </div>
                    </div>
                </div>

                <a href="/contact" class="px-4 py-2 text-sm font-semibold text-zinc-300 hover:text-neon hover:bg-white/5 rounded-lg transition-all duration-300">Kontak</a>
            </div>

            <!-- CTA & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <div class="hidden md:block">
                    <a href="/admin" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-neon/20 to-electric/20 border border-neon/30 rounded-full hover:border-neon/60 hover:shadow-lg hover:shadow-neon/20 hover:scale-105 active:scale-95 transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        Dashboard
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-zinc-400 hover:text-neon transition-colors">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-cloak x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div 
        x-cloak
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden absolute top-full left-0 w-full glass-strong border-t border-white/5 shadow-xl shadow-black/30"
    >
        <div class="px-4 pt-4 pb-6 space-y-1">
            <a href="/" class="block px-4 py-3 rounded-xl text-sm font-medium text-neon bg-neon/10">Beranda</a>
            <a href="/about" class="block px-4 py-3 rounded-xl text-sm font-medium text-zinc-300 hover:text-neon hover:bg-white/5">Tentang</a>
            <a href="/timeline" class="block px-4 py-3 rounded-xl text-sm font-medium text-zinc-300 hover:text-neon hover:bg-white/5">Timeline</a>
            <a href="/hall-of-leadership" class="block px-4 py-3 rounded-xl text-sm font-medium text-zinc-300 hover:text-neon hover:bg-white/5">Hall of Leadership</a>
            <a href="/contact" class="block px-4 py-3 rounded-xl text-sm font-medium text-zinc-300 hover:text-neon hover:bg-white/5">Kontak</a>
            <div class="mt-4 pt-4 border-t border-white/5">
                <a href="/admin" class="block text-center px-4 py-3 rounded-xl text-sm font-medium text-white bg-gradient-to-r from-neon/20 to-electric/20 border border-neon/30">Dashboard</a>
            </div>
        </div>
    </div>
</nav>
