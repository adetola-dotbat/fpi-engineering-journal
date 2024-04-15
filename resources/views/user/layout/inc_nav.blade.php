<header class='header-fixed'>
    <div class='flex flex-wrap justify-between items-center px-10 py-3 relative bg-white lg:bg-transparent'>
        <!-- Logo Placement -->
        <div class='flex-initial'>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/img/LOGO.svg') }}" alt="Logo" style="height: 50px;">
                <!-- Adjust the path and style as needed -->
            </a>
        </div>
        <div id="toggle" class='flex ml-auto lg:order-1 lg:hidden relative z-50 pt-3'>
            <button class='ml-7'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <ul id="collapseMenu"
            class='lg:!flex lg:space-x-10 max-lg:space-y-3 max-lg:hidden max-lg:w-full max-lg:my-4 pt-3'>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('home') }}'
                    class='hover:text-fpiGreen @if (Route::is('home')) text-fpiGreen @endif font-semibold block text-[15px]'>Home</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('about.index') }}'
                class='hover:text-fpiGreen @if (Route::is('about.create')) text-fpiGreen @endif font-semibold text-[15px] block'>About</a></li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href='javascript:void(0)'
                    class='hover:text-fpiGreen hover:fill-[fpiGreen] @if (Route::is('paper.index') || Route::is('guideline.index')) text-fpiGreen @endif font-semibold text-[15px] block'>Author's Guide<svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul
                    class='absolute hidden group-hover:block shadow-lg bg-white space-y-2 px-6 pb-4 pt-6 lg:top-5 max-lg:top-8 left-0 min-w-[250px] z-50'>
                    <li class='border-b py-3'>
                        <a href='{{ route('guideline.index') }}'
                            class='hover:text-fpiGreen hover:fill-[#007bff] @if (Route::is('guideline.index')) text-fpiGreen @endif font-semibold text-[15px] block'>
                            Guideline
                        </a>
                    </li>
                    <li class='border-b py-3'>
                        <a href='{{ route('paper.index') }}'
                            class='hover:text-fpiGreen hover:fill-[#007bff] @if (Route::is('paper.index')) text-fpiGreen @endif font-semibold text-[15px] block'>
                            Template
                        </a>
                    </li>
                </ul>
            </li>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('article.index') }}'
                    class='hover:text-fpiGreen @if (Route::is('article.index')) text-fpiGreen @endif font-semibold text-[15px] block'>Aritcles</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('editorial-board.index') }}'
                    class='hover:text-fpiGreen @if (Route::is('editorial-board.index')) text-fpiGreen @endif font-semibold text-[15px] block'>Editors</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('announcement.index') }}'
                    class='hover:text-fpiGreen @if (Route::is('announcement.index')) text-fpiGreen @endif font-semibold text-[15px] block'>Anouncement</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('about.index') }}'
                    class='hover:text-fpiGreen @if (Route::is('about.index')) text-fpiGreen @endif font-semibold text-[15px] block'>Contact</a></li>
        </ul>
        <!-- Send Manuscript Button -->
        <div class="hidden lg:block">
            <button
                class="p-2 px-4 font-bold bg-white border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen lg:px-4">
                Send Manuscript
            </button>
        </div>
    </div>
</header>
