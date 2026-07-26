<x-layouts.app :title="'Kontak'">
    <section class="pt-36 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="absolute top-0 left-1/4 w-[600px] h-[500px] bg-neon/5 blur-[130px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-neon/20 bg-neon/5 text-xs font-semibold text-neon mb-6">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Hubungi Kami
            </div>
            <h1 class="text-5xl sm:text-7xl font-black tracking-tight text-white mb-6">
                Mari <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">Terhubung</span>
            </h1>
            <p class="text-xl text-zinc-300 max-w-2xl mx-auto font-light">
                Punya pertanyaan, saran, atau ide kolaborasi? Kami senang mendengar dari Anda.
            </p>
        </div>
    </section>

    <section class="pb-32 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
                <div class="lg:col-span-2 space-y-5">
                    @php
                        $contacts = [
                            ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'icon2' => 'M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Alamat', 'content' => 'Jl. Mayjen Sungkono No. 2, Purbalingga, Jawa Tengah 53312'],
                            ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'icon2' => null, 'title' => 'Email', 'content' => 'admin@ossaga.my.id'],
                            ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'icon2' => null, 'title' => 'Telepon', 'content' => '+62 83871082440'],
                        ];
                    @endphp

                    @foreach($contacts as $contact)
                    <div class="flex gap-4 p-5 rounded-2xl bg-surface-raised border border-white/5 hover:border-neon/20 hover:-translate-y-0.5 hover:shadow-md hover:shadow-neon/5 transition-all duration-500 card-shine group">
                        <div class="w-12 h-12 rounded-xl bg-neon/5 border border-neon/10 flex items-center justify-center flex-shrink-0 group-hover:bg-neon/15 group-hover:border-neon/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-5 h-5 text-neon/50 group-hover:text-neon transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $contact['icon'] }}"></path>
                                @if($contact['icon2'])
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $contact['icon2'] }}"></path>
                                @endif
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white mb-1">{{ $contact['title'] }}</h3>
                            <p class="text-sm text-zinc-400">{{ $contact['content'] }}</p>
                        </div>
                    </div>
                    @endforeach

                    <div class="p-5 rounded-2xl bg-gradient-to-br from-neon/10 via-surface-raised to-electric/10 border border-neon/15">
                        <h3 class="text-sm font-bold text-white mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4 text-neon/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Jam Operasional
                        </h3>
                        <div class="space-y-2.5">
                            <div class="flex justify-between text-sm">
                                <span class="text-zinc-400">Senin - Jumat</span>
                                <span class="text-zinc-200 font-mono text-xs font-semibold">07:00 — 15:00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-zinc-400">Sabtu</span>
                                <span class="text-zinc-200 font-mono text-xs font-semibold">07:00 — 12:00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-zinc-400">Minggu</span>
                                <span class="text-zinc-500 font-mono text-xs">Tutup</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="rounded-2xl bg-surface-raised border border-white/5 p-8">
                        <h2 class="text-2xl font-black text-white mb-8">Kirim Pesan</h2>
                        <form action="#" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-zinc-300 mb-2">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3.5 rounded-xl bg-surface border border-white/10 text-white placeholder-zinc-600 focus:outline-none focus:border-neon/50 focus:ring-2 focus:ring-neon/20 transition-all text-sm"
                                        placeholder="Nama Anda">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-zinc-300 mb-2">Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3.5 rounded-xl bg-surface border border-white/10 text-white placeholder-zinc-600 focus:outline-none focus:border-neon/50 focus:ring-2 focus:ring-neon/20 transition-all text-sm"
                                        placeholder="email@contoh.com">
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-zinc-300 mb-2">Subjek</label>
                                <input type="text" id="subject" name="subject" required
                                    class="w-full px-4 py-3.5 rounded-xl bg-surface border border-white/10 text-white placeholder-zinc-600 focus:outline-none focus:border-neon/50 focus:ring-2 focus:ring-neon/20 transition-all text-sm"
                                    placeholder="Topik pesan Anda">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-semibold text-zinc-300 mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full px-4 py-3.5 rounded-xl bg-surface border border-white/10 text-white placeholder-zinc-600 focus:outline-none focus:border-neon/50 focus:ring-2 focus:ring-neon/20 transition-all text-sm resize-none"
                                    placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="group relative inline-flex items-center gap-2 px-8 py-4 text-base font-bold text-surface bg-gradient-to-r from-neon to-blue-400 rounded-xl shadow-lg shadow-neon/25 hover:shadow-neon/50 hover:scale-[1.02] active:scale-95 transition-all duration-300 w-full justify-center sm:w-auto overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    Kirim Pesan
                                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
