<head>

@php
    $setting = getsettings();
@endphp

    <meta charset="utf-8">
    {{-- <title>ARP</title> --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ARP" name="keywords">
    <meta content="ARP" name="description">
{{-- Meta --}}

    <meta name="description" content="@yield('meta_description',  \Str::limit(strip_tags(@$setting->headerTitle), 160)  )">
    <meta property="og:title" content="@yield('og_title',@$setting->sitename .' | '. trans("main.Home"))">
    <meta property="og:description" content="@yield('og_description',  \Str::limit(strip_tags(@$setting->headerSubtitle), 160)  )">
    <meta property="og:image" content="@yield('og_image', asset('storage/' . @$setting->logo))">
    {{-- <meta property="og:url" content="@yield('og_url', '{{ url()->current() }}')"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'Website')">
    <title>@yield('title', @$setting->sitename .' | ' . trans("main.Home"))</title>




    <!-- Favicon -->
    <link rel="icon" type="image" href="{{ asset('storage/' . @$setting->favicon) }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <link href="{{asset('assets/css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('assets/css/style.css?v=1.1')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
