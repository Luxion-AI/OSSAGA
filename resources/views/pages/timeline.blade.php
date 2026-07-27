@php
    $formattedEvents = $workPrograms->map(function($wp, $index) {
        $docs = [];
        if (is_array($wp->images)) {
            foreach($wp->images as $img) {
                $docs[] = asset('storage/' . $img);
            }
        }
        
        return [
            'id' => str_pad($index + 1, 2, '0', STR_PAD_LEFT),
            'title' => $wp->name,
            'desc' => $wp->description,
            'docs' => $docs,
        ];
    })->values()->toJson();
@endphp

<x-layouts.app :title="'Timeline Program Kerja'">
    <div x-data="{ 
        selectedEvent: null,
        events: {!! $formattedEvents !!}
    }">
        <section class="pt-36 pb-16 relative overflow-hidden">
            <div class="absolute inset-0 bg-grid pointer-events-none"></div>
            <div class="absolute top-0 left-1/3 w-[600px] h-[500px] bg-neon/5 blur-[130px] rounded-full pointer-events-none"></div>
            
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-neon/20 bg-neon/5 text-xs font-semibold text-neon mb-6">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Program Kerja Utama
                </div>
                <h1 class="text-5xl sm:text-7xl font-black tracking-tight text-white mb-6">
                    Timeline <span class="bg-gradient-to-r from-neon via-blue-400 to-electric bg-clip-text text-transparent animate-gradient" style="background-size: 200% 200%;">Proker</span>
                </h1>
                <p class="text-xl text-zinc-300 max-w-2xl mx-auto font-light">
                    Jejak pelaksanaan berbagai program kerja unggulan OSIS SMK Negeri 1 Purbalingga sepanjang tahun.
                </p>
            </div>
        </section>

        <section class="pb-32 relative">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative">
                    <div class="absolute left-4 md:left-1/2 md:-translate-x-px top-0 bottom-0 w-[3px] bg-gradient-to-b from-neon/40 via-electric/30 to-transparent"></div>
                    
                    <template x-for="(event, index) in events" :key="event.id">
                        <div class="relative flex items-start mb-14" :class="index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse'">
                            <div class="absolute left-4 md:left-1/2 -translate-x-1/2 z-10">
                                <div class="w-5 h-5 rounded-full bg-neon shadow-lg shadow-neon/50 transition-all duration-300"></div>
                            </div>
                            
                            <div class="ml-14 md:ml-0 md:w-[calc(50%-2.5rem)]" :class="index % 2 === 0 ? 'md:pr-10' : 'md:pl-10'">
                                <div @click="selectedEvent = event" class="cursor-pointer rounded-2xl bg-surface-raised border border-white/5 hover:border-neon/50 hover:bg-white/5 p-6 transition-all duration-500 card-shine hover:-translate-y-1">
                                    <div class="text-sm font-mono font-bold text-neon mb-3" x-text="event.id"></div>
                                    <h3 class="text-xl font-bold text-white mb-3" x-text="event.title"></h3>
                                    <p class="text-sm text-zinc-400 leading-relaxed line-clamp-2" x-text="event.desc"></p>
                                    <div class="mt-4 text-xs font-semibold text-neon flex items-center gap-2">
                                        <span>Lihat Detail & Dokumentasi</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <!-- Modal Overlay -->
        <div x-show="selectedEvent !== null" class="fixed inset-0 z-50 flex items-center justify-center px-4 sm:px-6 pt-24 pb-12" style="display: none;">
            
            <!-- Backdrop -->
            <div x-show="selectedEvent !== null" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click="selectedEvent = null"
                 class="absolute inset-0 bg-black/80 backdrop-blur-md"></div>
                 
            <!-- Modal Content -->
            <div x-show="selectedEvent !== null"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                 x-transition:leave-end="opacity-0 translate-y-8 scale-95"
                 class="relative bg-surface-raised border border-white/10 rounded-3xl w-full max-w-3xl max-h-[85vh] shadow-2xl z-10 flex flex-col overflow-hidden">
                 
                 <!-- Header -->
                 <div class="flex items-center justify-between p-6 border-b border-white/10 bg-surface/50">
                     <div>
                         <div class="text-sm font-mono font-bold text-neon mb-1" x-text="'PROKER ' + (selectedEvent ? selectedEvent.id : '')"></div>
                         <h2 class="text-2xl font-bold text-white" x-text="selectedEvent ? selectedEvent.title : ''"></h2>
                     </div>
                     <button @click="selectedEvent = null" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 text-zinc-400 hover:text-white hover:bg-white/10 transition-colors">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                     </button>
                 </div>
                 
                 <!-- Body (Scrollable) -->
                 <div class="p-6 overflow-y-auto">
                     <p class="text-zinc-300 mb-8 text-lg leading-relaxed font-light" x-text="selectedEvent ? selectedEvent.desc : ''"></p>
                     
                     <div class="flex items-center gap-3 mb-4">
                         <h3 class="text-lg font-bold text-white">Dokumentasi</h3>
                         <div class="h-px flex-1 bg-white/10"></div>
                     </div>
                     
                     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                         <template x-for="doc in (selectedEvent ? selectedEvent.docs : [])" :key="doc">
                             <div class="rounded-xl overflow-hidden border border-white/5 bg-white/5 group relative">
                                 <img :src="doc" class="w-full h-auto object-cover aspect-video group-hover:scale-105 transition-transform duration-700">
                                 <div class="absolute inset-0 border-2 border-transparent group-hover:border-neon/30 rounded-xl transition-colors duration-300 pointer-events-none"></div>
                             </div>
                         </template>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</x-layouts.app>
