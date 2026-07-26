@props([
    'title' => null,
    'description' => null,
    'image' => null,
    'type' => 'website'
])

@php
    $siteName = config('app.name', 'OSSAGA');
    $finalTitle = $title ? "{$title} | {$siteName}" : $siteName;
    $finalDescription = $description ?? "Organisasi Siswa Intra Sekolah (OSIS) SMK Negeri 1 Purbalingga. Platform bagi talenta muda untuk berkreasi, memimpin, dan membawa perubahan positif.";
    $finalImage = $image ?? asset('images/default-og.jpg');
    $currentUrl = url()->current();
@endphp

<title>{{ $finalTitle }}</title>
<meta name="description" content="{{ $finalDescription }}">
<link rel="canonical" href="{{ $currentUrl }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $currentUrl }}">
<meta property="og:title" content="{{ $finalTitle }}">
<meta property="og:description" content="{{ $finalDescription }}">
<meta property="og:image" content="{{ $finalImage }}">
<meta property="og:site_name" content="{{ $siteName }}">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $currentUrl }}">
<meta name="twitter:title" content="{{ $finalTitle }}">
<meta name="twitter:description" content="{{ $finalDescription }}">
<meta name="twitter:image" content="{{ $finalImage }}">
