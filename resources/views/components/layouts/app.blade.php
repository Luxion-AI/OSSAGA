<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Component -->
    <x-seo 
        :title="$title ?? config('app.name', 'OSSAGA')"
        :description="$description ?? 'Official Website OSIS SMK Negeri 1 Purbalingga'"
        :image="$ogImage ?? null"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Canvas Confetti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1"></script>
</head>
<body class="bg-surface text-zinc-100 antialiased font-sans selection:bg-neon/30 selection:text-white flex flex-col min-h-screen" style="background-color:#0a0a0f;color:#f4f4f5;" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
    
    <!-- Navbar -->
    <x-frontend.navbar />

    <!-- Main Content -->
    <main class="flex-1 flex flex-col">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-frontend.footer />

    @livewireScripts
    @stack('scripts')

    <!-- Cursor Trail -->
    <script>
    (function() {
        var trails = [];
        for (var i = 0; i < 3; i++) {
            var el = document.createElement('div');
            el.className = 'cursor-trail';
            el.style.display = 'none';
            document.body.appendChild(el);
            trails.push(el);
        }
        var lastX = 0, lastY = 0;
        var hidden = true;
        document.addEventListener('mousemove', function(e) {
            if (hidden) { trails.forEach(function(t) { t.style.display = 'block'; }); hidden = false; }
            lastX = e.clientX; lastY = e.clientY;
        });
        document.addEventListener('mouseleave', function() {
            hidden = true;
            trails.forEach(function(t) { t.style.display = 'none'; });
        });
        function animate() {
            if (!hidden) {
                trails.forEach(function(t, i) {
                    t.style.left = lastX + 'px';
                    t.style.top = lastY + 'px';
                });
            }
            requestAnimationFrame(animate);
        }
        animate();
    })();
    </script>
</body>
</html>
