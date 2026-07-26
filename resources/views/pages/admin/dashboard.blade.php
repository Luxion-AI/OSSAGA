<x-layouts.admin>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-white">Ringkasan OSSAGA</h1>
        <p class="text-zinc-500 text-sm mt-1">Selamat datang kembali, Admin. Berikut ringkasan aktivitas hari ini.</p>
    </div>

    <!-- Stats Grid (4 cards for 4-col grid) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        @php
            $stats = [
                ['label' => 'Total Kunjungan', 'value' => '12,450', 'change' => '+14%', 'color' => 'emerald', 'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
                ['label' => 'Berita Aktif', 'value' => '34', 'change' => '2 draft', 'color' => 'blue', 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'],
                ['label' => 'Pesan Masuk', 'value' => '12', 'change' => '5 baru', 'color' => 'amber', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                ['label' => 'Pengurus Aktif', 'value' => '48', 'change' => 'Periode ini', 'color' => 'violet', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
            ];
        @endphp

        @foreach($stats as $stat)
        <div class="rounded-2xl bg-surface-raised border border-white/5 p-5 hover:border-neon/20 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <div class="text-sm font-medium text-zinc-500 mb-1">{{ $stat['label'] }}</div>
                    <div class="text-2xl font-bold text-white">{{ $stat['value'] }}</div>
                </div>
                <div class="p-2 bg-neon/10 border border-neon/20 text-neon rounded-xl">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path></svg>
                </div>
            </div>
            <div class="mt-4 text-xs text-zinc-600">
                <span class="text-neon/70 font-medium">{{ $stat['change'] }}</span>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Recent Activity Table -->
    <div class="rounded-2xl bg-surface-raised border border-white/5 overflow-hidden">
        <div class="px-6 py-4 border-b border-white/5 flex justify-between items-center">
            <h2 class="text-base font-semibold text-white">Aktivitas Terbaru</h2>
            <button class="text-sm text-zinc-400 hover:text-neon transition-colors">Lihat Semua</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-white/5">
                <thead class="bg-surface">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Aktivitas</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Pengguna</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Tanggal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @for ($i = 0; $i < 5; $i++)
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-white">Membuat postingan berita baru</div>
                            <div class="text-sm text-zinc-600">"Pendaftaran Ketua OSIS Dibuka"</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gradient-to-br from-neon to-electric flex items-center justify-center text-xs font-bold text-white">
                                    AD
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-white">Admin {{ $i + 1 }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500">
                            Hari ini, 10:23 AM
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 text-xs leading-5 font-semibold rounded-full bg-neon/10 text-neon border border-neon/20">
                                Sukses
                            </span>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>
