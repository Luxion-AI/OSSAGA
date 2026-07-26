<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Content;
use App\Http\Controllers\AuthController;
// ========================
// PUBLIC PAGES
// ========================

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/timeline', function () {
    return view('pages.timeline');
});

Route::get('/hall-of-leadership', function () {
    return view('pages.hall-of-leadership');
});

Route::get('/persembahan', function () {
    return view('pages.persembahan');
});

// ========================
// AUTHENTICATION
// ========================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ========================
// HEALTH CHECK (Railway)
// ========================

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

// ========================
// SEO (Dynamic Sitemap & Robots)
// ========================

Route::get('/sitemap.xml', function () {
    $contents = Content::where('status', 'published')->orderBy('updated_at', 'desc')->get();
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
    // Static Routes
    $routes = ['/', '/about', '/contact', '/timeline', '/hall-of-leadership'];
    foreach ($routes as $route) {
        $xml .= '<url>';
        $xml .= '<loc>' . url($route) . '</loc>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';
    }

    // Dynamic Content Routes
    foreach ($contents as $content) {
        $xml .= '<url>';
        $xml .= '<loc>' . url("/{$content->type}/{$content->slug}") . '</loc>';
        $xml .= '<lastmod>' . $content->updated_at->toAtomString() . '</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.6</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
});

Route::get('/robots.txt', function () {
    $robots = "User-agent: *\n";
    $robots .= "Allow: /\n";
    $robots .= "Disallow: /admin/\n";
    $robots .= "Sitemap: " . url('/sitemap.xml');
    
    return Response::make($robots, 200, ['Content-Type' => 'text/plain']);
});
