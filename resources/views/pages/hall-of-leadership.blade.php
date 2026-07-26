<x-layouts.app :title="'Struktur Kepengurusan'">
    <section class="pt-36 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="absolute top-0 right-1/4 w-[600px] h-[500px] bg-neon/5 blur-[130px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-neon/20 bg-neon/5 text-xs font-semibold text-neon mb-6">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                Masa Bhakti 2025/2026
            </div>
            <h1 class="text-4xl sm:text-6xl font-black tracking-tight text-white mb-6">
                Struktur <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">Kepengurusan</span>
            </h1>
            <p class="text-xl text-zinc-300 max-w-2xl mx-auto font-light">
                OSIS SMK Negeri 1 Purbalingga
            </p>
        </div>
    </section>

    @php
        $bph = [
            ['name' => 'Aluna Marsya Princessa Sumarno', 'title' => 'Ketua OSIS', 'img' => 'Aluna.webp'],
            ['name' => 'Nabila Fatihatul Hidayati', 'title' => 'Wakil Ketua OSIS', 'img' => 'Nabila.webp'],
        ];

        $sekben = [
            ['name' => 'Keyniza Agnung Dwi Astika', 'title' => 'Sekretaris 1', 'img' => 'Keyniza.webp'],
            ['name' => 'Adinda Roro Muliasari', 'title' => 'Sekretaris 2', 'img' => 'Roro.webp'],
            ['name' => 'Azkya Nurul Hafizah', 'title' => 'Bendahara 1', 'img' => 'Azkya.webp'],
            ['name' => 'Gusti Nur Azizah', 'title' => 'Bendahara 2', 'img' => 'Gusti.webp'],
            ['name' => 'Nofal Satya Prasojo', 'title' => 'Koordinator 1', 'img' => 'Nofal.webp'],
            ['name' => 'Fatih Badru Zaman', 'title' => 'Koordinator 2', 'img' => 'Fatih.webp'],
        ];

        $sekbids = [
            'Sekbid I' => [
                'desc' => 'Keimanan dan Ketaqwaan Terhadap Tuhan (ROHIS)',
                'members' => [
                    ['name' => 'Ufayra Putri Pemula', 'img' => 'Ufayra.webp'],
                    ['name' => 'Anggun Dwi Jayanti', 'img' => 'Anggun.webp']
                ]
            ],
            'Sekbid II' => [
                'desc' => 'Budi Pekerti Luhur dan Akhlak Mulia (SEMAPALA)',
                'members' => [
                    ['name' => 'Hafidh Samihada', 'img' => 'Hafidh.webp'],
                    ['name' => 'Devita Tri Ramadhani', 'img' => 'Devita.webp']
                ]
            ],
            'Sekbid III' => [
                'desc' => 'Kepribadian Unggul Wawasan Kebangsaan (PASKAS)',
                'members' => [
                    ['name' => 'Nadya Saputri', 'img' => 'Nadya.webp'],
                    ['name' => 'Nayna Permata Zhaemy', 'img' => 'Nayna.webp']
                ]
            ],
            'Sekbid IV' => [
                'desc' => 'Prestasi Akademik Seni atau Olahraga',
                'members' => [
                    ['name' => 'Arzyka Dinda Ivanna', 'title' => 'VOLLY', 'img' => 'Arzyka.webp'],
                    ['name' => 'Liviana Indah Nur Alisa', 'title' => 'BASKET', 'img' => 'Liviana.webp'],
                    ['name' => 'Galuh Ayudya Pertiwi', 'title' => 'MERPATI PUTIH', 'img' => 'Galuh.webp']
                ]
            ],
            'Sekbid V' => [
                'desc' => 'Demokrasi, HAM, Lingkungan Hidup (PRAMUKA)',
                'members' => [
                    ['name' => 'Qonita Saufika Maqolida', 'img' => 'Qonita.webp'],
                    ['name' => 'Abizar Al Chifari Putra', 'img' => 'Abizar.webp']
                ]
            ],
            'Sekbid VI' => [
                'desc' => 'Kreatifitas Keterampilan (MUSIK & KIR)',
                'members' => [
                    ['name' => 'Hernandi Bagas Saputra', 'img' => 'Bagas.webp'],
                    ['name' => 'Bilqis Syarifah', 'img' => 'Bilqis.webp'],
                    ['name' => 'Meilia Ayu Pradani', 'img' => 'Meilia.webp']
                ]
            ],
            'Sekbid VII' => [
                'desc' => 'Kualitas Jasmani Kesehatan dan Gizi (PMR)',
                'members' => [
                    ['name' => "Shafa Fathiya Rohadatul 'Aisy", 'img' => 'Shafa.webp'],
                    ['name' => 'Nasywa Hanin Agi Ayuni', 'img' => 'Hanin.webp']
                ]
            ],
            'Sekbid VIII' => [
                'desc' => 'Sastra dan Budaya',
                'members' => [
                    ['name' => 'Gendis Nur Islami', 'title' => 'DCS', 'img' => 'Gendis.webp'],
                    ['name' => 'Enesya Cinta Laurenza', 'title' => 'KARAWITAN', 'img' => 'Enesya.webp']
                ]
            ],
            'Sekbid IX' => [
                'desc' => 'Teknologi Informasi dan Komunikasi (BROADCASTING)',
                'members' => [
                    ['name' => "Roisah Nur A'izzah", 'img' => 'Roisah.webp'],
                    ['name' => 'Azfar Mahardika', 'img' => 'Azfar.webp']
                ]
            ],
            'Sekbid X' => [
                'desc' => 'Komunikasi dalam Bahasa Inggris (ENGLISH CLUB)',
                'members' => [
                    ['name' => 'Kevin Veda Raihan', 'img' => 'Kevin.webp'],
                    ['name' => 'Rayhanah Salsabila Kamal', 'img' => 'Sabil.webp']
                ]
            ],
        ];
    @endphp

    <section class="pb-32 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
            
            <!-- Ketua & Wakil -->
            <div>
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-white">Ketua & Wakil</h2>
                </div>
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach($bph as $person)
                    <div class="w-full sm:w-[350px] rounded-3xl bg-surface-raised border border-white/5 overflow-hidden hover:border-neon/20 hover:-translate-y-2 hover:shadow-2xl hover:shadow-neon/10 transition-all duration-500 group">
                        <div class="aspect-[4/5] bg-gradient-to-br from-neon/5 to-electric/5 relative overflow-hidden">
                            <img src="{{ asset('images/pengurus/' . $person['img']) }}" alt="{{ $person['name'] }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 inset-x-0 p-6">
                                <div class="inline-block px-3 py-1 mb-3 rounded-full bg-neon/20 border border-neon/30 backdrop-blur-md text-neon text-xs font-bold tracking-wider uppercase">
                                    {{ $person['title'] }}
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-1 leading-tight">{{ $person['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Sekretaris, Bendahara, Koordinator -->
            <div>
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-white">Sekretaris, Bendahara & Koordinator</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($sekben as $person)
                    <div class="rounded-3xl bg-surface-raised border border-white/5 overflow-hidden hover:border-white/10 hover:-translate-y-1 transition-all duration-500 group flex items-center p-4 gap-4">
                        <div class="w-24 h-24 sm:w-32 sm:h-32 flex-shrink-0 rounded-2xl overflow-hidden bg-white/5 relative">
                            <img src="{{ asset('images/pengurus/' . $person['img']) }}" alt="{{ $person['name'] }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="flex-1 py-2">
                            <div class="text-xs font-bold text-electric uppercase tracking-wider mb-1">{{ $person['title'] }}</div>
                            <h3 class="text-lg font-bold text-white leading-tight">{{ $person['name'] }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Sekbid -->
            <div>
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-white">Seksi Bidang (Sekbid)</h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($sekbids as $title => $sekbid)
                    <div class="rounded-3xl bg-surface-raised border border-white/5 overflow-hidden p-6 hover:border-white/10 transition-colors duration-300">
                        <div class="border-b border-white/10 pb-4 mb-6">
                            <h3 class="text-xl font-bold text-white mb-1">{{ $title }}</h3>
                            <p class="text-sm text-zinc-400">{{ $sekbid['desc'] }}</p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            @foreach($sekbid['members'] as $member)
                            <div class="text-center group">
                                <div class="w-full aspect-[3/4] rounded-xl overflow-hidden bg-white/5 mb-3 relative">
                                    <img src="{{ asset('images/pengurus/' . $member['img']) }}" alt="{{ $member['name'] }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <h4 class="text-sm font-bold text-white leading-tight mb-1 group-hover:text-neon transition-colors">{{ $member['name'] }}</h4>
                                @if(isset($member['title']))
                                <div class="text-[10px] font-semibold text-zinc-500 uppercase">{{ $member['title'] }}</div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>
