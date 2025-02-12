<meta charset="utf-8">
<title>
    {{ request()->is('/') ? 'Automoto | Berita otomotif terkini' : ($post->title ?? 'Automoto | Berita otomotif terkini') }}
</title>
<meta name="description" content="
    {{ request()->is('/') ? 'Automoto.id menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif' : ($post->description ?? 'Automoto.id menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif') }}
">
<meta name="keywords" content="
    {{ request()->is('/') ? 'Berita, Otomotif, Motor, Mobil, Bengkel, Terkini, Logistik' : ($post->keyword ?? 'Berita, Otomotif, Motor, Mobil, Bengkel, Terkini, Logistik') }}
">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="
    {{ request()->is('/') ? 'Automoto' : ($post->title ?? 'Automoto') }}
">
<meta property="og:description" content="
    {{ request()->is('/') ? 'Automoto.id menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.' : ($post->description ?? 'Automoto.id menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.') }}
">
<meta property="og:image" content="
    {{
        !empty($post->gambar)
            ? (is_array($post->gambar)
                ? (isset($post->gambar[0]) ? asset('storage/' . $post->gambar[0]) : asset('images/share.jpg'))
                : asset('storage/' . $post->gambar))
            : asset('images/share.jpg')
    }}
">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Automoto">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="
    {{ request()->is('/') ? 'Automoto' : ($post->title ?? 'Automoto') }}
">
<meta name="twitter:description" content="
    {{ request()->is('/') ? 'Automoto.id menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.' : ($post->description ?? 'Automoto.id menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.') }}
">
<meta name="twitter:image" content="
    {{
        !empty($post->gambar)
            ? (is_array($post->gambar)
                ? (isset($post->gambar[0]) ? asset('storage/' . $post->gambar[0]) : asset('images/share.jpg'))
                : asset('storage/' . $post->gambar))
            : asset('images/share.jpg')
    }}
">

<!-- Favicon -->
<link rel="apple-touch-icon" href="{{ asset('frontend/logo/favicon.png') }}">
<link rel="shortcut icon" href="{{ asset('frontend/logo/favicon.png') }}">

<meta name="theme-color" content="#030303">
