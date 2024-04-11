<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FPI-Examination Roster | @yield('title')</title>
    <!-- Favicons -->
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon" />
    <link href="{{ asset('assets/images/logo.png') }}" rel="apple-touch-icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    @stack('styles')
</head>

<body>
    <!-- ======= Header ======= -->
    @if (request()->route()->getName() === 'login')
        <main class="py-4">
            @yield('content')
        </main>
    @else
        @include('administration.layout.includes.header')
        <!-- End Header -->

        <!-- ======= Sidebar ======= -->
        @include('administration.layout.includes.aside')
        <!-- End Sidebar-->
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>{{ isset($title_page) ? $title_page : 'Testing Page' }}</h1>
                <nav class="d-flex justify-content-between">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">
                            {{ isset($title_page) ? $title_page : 'Testing Page' }}</li>
                    </ol>
                </nav>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <!-- End Page Title -->
            <section class="section">
                @yield('content')
            </section>
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        @include('administration.layout.includes.footer')
    @endif
    {{-- @vite('resources/js/app.js') --}}

    @stack('scripts')
</body>

</html>
