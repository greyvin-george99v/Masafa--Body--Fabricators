<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Masafa | Safari Vehicle Conversion Specialists')</title>
    <meta name="description" content="@yield('meta_description', 'East Africa\'s trusted Toyota Land Cruiser conversion specialists. Custom safari body extensions, pop-up roofs, and expedition outfitting in Nairobi, Kenya.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="@yield('title', 'Masafa | Safari Vehicle Conversion Specialists')">
    <meta property="og:description" content="@yield('meta_description', 'East Africa\'s trusted Toyota Land Cruiser conversion specialists.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/masafa-1.jpg'))">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "Masafa Body Fabricators",
        "image": "{{ asset('images/masafa-1.jpg') }}",
        "@@id": "https://masafabodyfabricators.com",
        "url": "https://masafabodyfabricators.com",
        "telephone": "+254721519537",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Thindigua Kiambu Rd",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        },
        "openingHoursSpecification": [{
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
            "opens": "07:00",
            "closes": "17:00"
        }],
        "sameAs": [
            "https://web.facebook.com/masafabodyfabricators",
            "https://www.instagram.com/masafa_body_fabricators"
        ]
    }
    </script>
</head>
<body>
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>