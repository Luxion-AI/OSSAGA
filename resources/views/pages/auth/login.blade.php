<x-layouts.app title="Admin Login | OSSAGA">
    <div class="min-h-screen flex items-center justify-center bg-[#050505] relative overflow-hidden font-sans">
        
        <!-- Abstract Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff0a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff0a_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>
            
            <!-- Glowing Orbs -->
            <div class="absolute top-[20%] left-[15%] w-96 h-96 bg-blue-600/20 rounded-full blur-[120px] mix-blend-screen animate-pulse duration-1000"></div>
            <div class="absolute bottom-[20%] right-[15%] w-[30rem] h-[30rem] bg-indigo-600/10 rounded-full blur-[150px] mix-blend-screen"></div>
        </div>

        <!-- Login Container -->
        <div class="w-full max-w-md px-6 relative z-10">
            <!-- Glass Card -->
            <div class="relative bg-zinc-900/40 backdrop-blur-2xl border border-white/10 rounded-[2rem] p-10 shadow-2xl overflow-hidden before:absolute before:inset-0 before:-z-10 before:bg-gradient-to-b before:from-white/5 before:to-transparent before:opacity-50">
                
                <!-- Logo & Header -->
                <div class="text-center mb-10">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo OSSAGA" class="w-16 h-16 object-contain mb-6 drop-shadow-2xl mx-auto">
                    <h2 class="text-3xl font-black text-white tracking-tight mb-2">Welcome Back</h2>
                    <p class="text-zinc-400 font-medium text-sm">Masuk ke sistem administrasi OSSAGA</p>
                </div>

                <!-- Form -->
                <form class="space-y-6" action="{{ url('/login') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div class="bg-red-500/10 border border-red-500/20 text-red-400 rounded-xl p-4 text-sm font-medium flex items-start gap-3 animate-[fadeInUp_0.3s_ease-out]">
                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            <ul class="space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="space-y-5">
                        <div class="relative group">
                            <input id="email" name="email" type="email" required 
                                class="peer w-full px-5 py-4 bg-zinc-950/50 border border-white/10 rounded-xl text-white placeholder-transparent focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all duration-300"
                                placeholder="Email address" value="{{ old('email') }}">
                            <label for="email" class="absolute left-5 -top-2.5 bg-[#0d0d0d] px-1 text-xs font-semibold text-zinc-400 transition-all duration-300 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:bg-transparent peer-focus:-top-2.5 peer-focus:text-xs peer-focus:bg-[#0d0d0d] peer-focus:text-blue-400">
                                Email Address
                            </label>
                        </div>
                        
                        <div class="relative group">
                            <input id="password" name="password" type="password" required 
                                class="peer w-full px-5 py-4 bg-zinc-950/50 border border-white/10 rounded-xl text-white placeholder-transparent focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all duration-300"
                                placeholder="Password">
                            <label for="password" class="absolute left-5 -top-2.5 bg-[#0d0d0d] px-1 text-xs font-semibold text-zinc-400 transition-all duration-300 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:bg-transparent peer-focus:-top-2.5 peer-focus:text-xs peer-focus:bg-[#0d0d0d] peer-focus:text-blue-400">
                                Password
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <div class="relative flex items-center justify-center w-5 h-5">
                                <input id="remember" name="remember" type="checkbox" class="peer appearance-none w-5 h-5 border-2 border-zinc-700 rounded bg-zinc-950/50 checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition-all duration-200 cursor-pointer">
                                <svg class="absolute w-3 h-3 text-white opacity-0 peer-checked:opacity-100 transition-opacity duration-200 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-sm font-medium text-zinc-400 group-hover:text-zinc-300 transition-colors">Remember me</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full relative inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white bg-white/5 border border-white/10 rounded-xl overflow-hidden group hover:bg-white/10 transition-all duration-300 active:scale-[0.98]">
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative z-10 flex items-center gap-2">
                            Sign in to Dashboard
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                    </button>
                </form>
            </div>
            
            <!-- Footer -->
            <div class="mt-8 text-center">
                <a href="/" class="text-sm font-medium text-zinc-500 hover:text-white transition-colors inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
