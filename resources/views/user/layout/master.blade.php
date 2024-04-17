<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FPI Engineering Journal</title>
    @vite(['resources/css/tailwind.css', 'resources/js/tailwind.js'])
    {{-- <link rel="stylesheet" href="main.css" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .header-fixed {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s;
        }

        .header-scroll {
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        body {
            margin:0%
        }
    </style>
    @stack('style')
</head>
{{-- container max-w-3xl md:max-w-[100%] --}}
<body class="container max-w-3xl md:max-w-[100%]">
    {{-- header --}}
    @include('user.layout.inc_header')

    <main class="mt-14 max-w[10%]">
        @yield('content')
        @include('user.layout.inc_footer')
    </main>

    <script>
        var toggleBtn = document.getElementById('toggle');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleBtn.addEventListener('click', handleClick);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('header'); // Ensure the selector matches your header
            function checkScroll() {
                if (window.scrollY > 0) {
                    header.classList.add('header-scroll');
                } else {
                    header.classList.remove('header-scroll');
                }
            }
            window.addEventListener('scroll', checkScroll);
        });
    </script>
    @stack('script')
</body>
{{-- <script>
    function toggleDropdown() {
        var dropdown = document.getElementById('authorsDropdown');
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.remove('hidden');
        }
    }
</script> --}}

</html>
