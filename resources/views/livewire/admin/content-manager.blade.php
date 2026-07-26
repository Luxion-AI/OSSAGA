<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\Content;
use App\Enums\ContentStatus;

new class extends Component {
    use WithPagination;

    public $search = '';
    public $statusFilter = '';

    public function with(): array
    {
        $user = auth()->user();
        
        // This simulates a real query where we filter based on role and search
        $query = Content::query()
            ->with('author')
            ->where('period_id', \App\Models\Period::active()?->id);

        if ($this->search) {
            $query->where('title', 'ilike', '%' . $this->search . '%');
        }

        if ($this->statusFilter) {
            $query->where('status', $this->statusFilter);
        }

        // Apply Sekbid restrictions if the user is a Sekbid
        if ($user && $user->roleInActivePeriod() === \App\Enums\Role::Sekbid->value) {
            $query->where('sekbid_owner', $user->sekbidInActivePeriod());
        }

        return [
            'contents' => $query->latest()->paginate(10),
            'userRole' => $user ? $user->roleInActivePeriod() : null,
        ];
    }

    public function publish(Content $content)
    {
        $this->authorize('publish', $content);
        
        $content->update([
            'status' => ContentStatus::Published->value,
            'published_at' => now(),
        ]);

        session()->flash('message', 'Konten berhasil dipublikasikan.');
    }
}; ?>

<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Manajemen Konten</h2>
        <button class="px-4 py-2 bg-neon/10 border border-neon/20 text-neon hover:bg-neon hover:text-surface rounded-xl font-medium text-sm transition-all shadow-lg shadow-neon/20">Buat Baru</button>
    </div>

    <!-- Filters -->
    <div class="flex gap-4 mb-6">
        <input wire:model.live="search" type="text" placeholder="Cari judul..." class="px-4 py-2.5 bg-surface-raised border border-white/10 rounded-xl text-sm text-white focus:outline-none focus:border-neon/50 focus:ring-1 focus:ring-neon/30 w-64 placeholder-zinc-500 transition-all">
        
        <select wire:model.live="statusFilter" class="px-4 py-2.5 bg-surface-raised border border-white/10 rounded-xl text-sm text-white focus:outline-none focus:border-neon/50 focus:ring-1 focus:ring-neon/30 transition-all">
            <option value="">Semua Status</option>
            <option value="draft">Draft</option>
            <option value="pending">Menunggu Persetujuan</option>
            <option value="published">Dipublikasikan</option>
        </select>
    </div>

    @if (session()->has('message'))
        <div class="mb-4 px-4 py-3 bg-neon/10 border border-neon/20 text-neon rounded-xl text-sm font-medium">
            {{ session('message') }}
        </div>
    @endif

    <!-- Table -->
    <div class="rounded-2xl bg-surface-raised border border-white/5 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-white/5">
                <thead class="bg-surface">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-500 uppercase tracking-wider">Judul</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-500 uppercase tracking-wider">Penulis</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse($contents as $content)
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="px-6 py-4">
                            <div class="text-sm font-semibold text-white mb-1">{{ $content->title }}</div>
                            <div class="text-xs text-zinc-500">{{ ucfirst($content->type) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-neon/20 to-electric/20 border border-white/10 flex items-center justify-center text-xs font-bold text-white">
                                    {{ substr($content->author->name ?? 'A', 0, 1) }}
                                </div>
                                <span class="text-sm text-zinc-300">{{ $content->author->name ?? 'Anonim' }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 text-xs font-semibold rounded-full border 
                                {{ $content->status === 'published' ? 'bg-neon/10 text-neon border-neon/20' : 
                                  ($content->status === 'pending' ? 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20' : 
                                  'bg-white/5 text-zinc-400 border-white/10') }}">
                                {{ ucfirst($content->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm flex gap-2">
                            <button class="px-3 py-1.5 border border-white/10 text-zinc-300 hover:text-white hover:border-white/20 hover:bg-white/5 rounded-lg text-xs font-medium transition-all">Edit</button>
                            @can('publish', $content)
                                @if($content->status !== 'published')
                                    <button wire:click="publish({{ $content->id }})" class="px-3 py-1.5 bg-neon/10 border border-neon/20 text-neon hover:bg-neon hover:text-surface rounded-lg text-xs font-medium transition-all shadow-lg shadow-neon/20">Setujui</button>
                                @endif
                            @endcan
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center">
                            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/5 mb-3">
                                <svg class="w-6 h-6 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                            </div>
                            <p class="text-sm font-medium text-zinc-400">Tidak ada konten ditemukan.</p>
                            <p class="text-xs text-zinc-600 mt-1">Coba sesuaikan filter pencarian Anda.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($contents->hasPages())
        <div class="px-6 py-4 border-t border-white/5 bg-surface/50">
            {{ $contents->links() }}
        </div>
        @endif
    </div>
</div>
