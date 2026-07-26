<x-layouts.app title="Admin Login | OSSAGA">
    <div class="min-h-screen flex items-center justify-center bg-[#0A0A0A] py-12 px-4 sm:px-6 lg:px-8">
        <!-- Simple glowing orb for background -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-[#0A0A0A] to-[#0A0A0A] pointer-events-none"></div>

        <div class="max-w-md w-full space-y-8 relative z-10 bg-zinc-900/50 backdrop-blur-xl p-8 rounded-2xl border border-zinc-800 shadow-2xl">
            <div>
                <h2 class="mt-2 text-center text-3xl font-extrabold text-white">
                    Admin Login
                </h2>
                <p class="mt-2 text-center text-sm text-zinc-400">
                    Masuk ke dashboard admin OSSAGA
                </p>
            </div>

            <form class="mt-8 space-y-6" action="{{ url('/login') }}" method="POST">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-500/10 border border-red-500/50 text-red-500 rounded-lg p-4 text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-zinc-300 mb-1">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-zinc-700 bg-zinc-800 placeholder-zinc-500 text-white focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition-colors" placeholder="admin@ossaga.id" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-zinc-300 mb-1">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-zinc-700 bg-zinc-800 placeholder-zinc-500 text-white focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition-colors" placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-zinc-700 rounded bg-zinc-800">
                        <label for="remember" class="ml-2 block text-sm text-zinc-400">
                            Remember me
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-zinc-900 transition-colors shadow-lg shadow-blue-600/20">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
