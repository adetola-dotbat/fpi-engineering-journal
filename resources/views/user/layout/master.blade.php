<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FPI Engineering Journal</title>
    @vite(['resources/css/tailwind.css', 'resources/js/tailwind.js'])
    {{-- <link rel="stylesheet" href="main.css" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- swiper css link -->

    <link rel="stylesheet" href="style/swiper-bundle.min.css" />
</head>

<body class="container max-w-3xl md:max-w-[100%]">
    {{-- header --}}
    @include('user.layout.inc_header')

    <main class="mt-14 max-w[10%]">
        @yield('content')
        @include('user.layout.inc_footer')
    </main>
</body>
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById('authorsDropdown');
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.remove('hidden');
        }
    }
</script>

</html>
