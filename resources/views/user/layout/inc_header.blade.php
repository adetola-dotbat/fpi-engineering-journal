{{-- @if (!\Route::is('home'))
<header class="relative px-6 md:px-12 lg:px-24 bg-articleColor w-full pt-[3rem] pb-[6rem]">
    <div class="absolute h-full -left-20 -top-28">
        <div class="bg-myGold rounded-full blur-[100px] w-[20rem] h-[20rem] md:w-[27rem] md:h-[27rem]"></div>
    </div>
    <nav class="relative flex items-center justify-between mt-">
        <div class="w-[20em]">
            <img src="{{ asset('images/img/LOGO.svg') }}" alt="" class="lg:w-[15em]">
        </div>

        <div class="absolute z-10 hidden w-full py-16 text-center bg-white shadow-lg top-16" id="nav-menu">
            <ul class="space-y-5 font-bold">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}" class="hover:text-fpiGreen ">About</a>
                </li>
                <li>
                    <a href="author.html" class="hover:text-fpiGreen">Author's Guide</a>
                </li>
                <li>
                    <a href="" class="hover:text-fpiGreen">Articles</a>
                </li>
                <li>
                    <a href="editor.html" class="hover:text-fpiGreen">Editors</a>
                </li>
                <li>
                    <a href="" class="hover:text-fpiGreen">Announcement</a>
                </li>
                <li>
                    <a href="" class="hover:text-fpiGreen">Contact</a>
                </li>
            </ul>
            <div class="md:hidden">
                <button class="p-2 px-4 mt-8 font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen">
                    Send Manuscript
                </button>
            </div>
        </div>

        <!-- medium screen nav -->

        <ul class="items-center hidden gap-4 text-sm font-bold md:flex">
            <li>
                <a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a>
            </li>
            <li>
                <a href="{{ route('about.index') }}" class="hover:text-myGold text-fpiGreen">About</a>
            </li>
            <li>
                <a href="author.html" class="hover:text-fpiGreen">Author's Guide</a>
            </li>
            <li>
                <a href="" class="hover:text-fpiGreen">Articles</a>
            </li>
            <li>
                <a href="editor.html" class="hover:text-fpiGreen">Editors</a>
            </li>
            <li>
                <a href="" class="hover:text-fpiGreen">Announcement</a>
            </li>
            <li>
                <a href="" class="hover:text-fpiGreen">Contact</a>
            </li>
        </ul>

        <div class="hidden lg:block">
            <button class="p-2 px-4 font-bold bg-white border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen lg:px-4">
                Send Manuscript
            </button>
        </div>

        <div class="md:hidden">
            <img src="./images/icon-menu.svg" alt="" id="hamburger">
            <img src="./images/icon-close-menu.svg" alt="" class="hidden" id="close">
        </div>
    </nav>

    <div class="mt-[10em]">
        <div class="text-center">
            <h3 class="text-4xl font-bold">
                {{ $title }}
            </h3>
            <p class="text-2xl">
                <a href="{{ route('home') }}">Home</a>><a class="text-fpiGreen">{{ $title }}</a>
            </p>
        </div>
    </div>
</header>
@else
<header class="px-6 md:px-12 lg:px-24">
    <div class="-ml-6">
        <div class="bg-[#309229] w-32 h-32 blur-[100px]"></div>
    </div>
    <nav class="relative flex items-center justify-between -mt-24">
        <div class="w-[20em]">
            <img src="{{ asset('images/img/LOGO.svg') }}" alt="" class="lg:w-[15em]">
        </div>

        <div class="absolute z-10 hidden w-full py-16 text-center bg-white shadow-lg top-16" id="nav-menu">
            <ul class="space-y-5 font-bold">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}" class="hover:text-fpiGreen">About</a>
                </li>
                <li>
                    <a href="author.html" class="hover:text-fpiGreen">Author's Guide</a>
                </li>
                <li>
                    <a href="" class="hover:text-fpiGreen">Articles</a>
                </li>
                <li>
                    <a href="" class="hover:text-fpiGreen">Editors</a>
                </li>
                <li>
                    <a href="editor.html" class="hover:text-fpiGreen">Announcement</a>
                </li>
                <li>
                    <a href="" class="hover:text-fpiGreen">Contact</a>
                </li>
            </ul>
            <div class="md:hidden">
                <button class="p-2 px-4 mt-8 font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen">
                    Send Manuscript
                </button>
            </div>
        </div>

        <!-- medium screen nav -->

        <ul class="items-center hidden gap-4 text-sm font-bold md:flex">
            <li>
                <a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a>
            </li>
            <li>
                <a href="{{ route('about.index') }}" class="hover:text-fpiGreen">About</a>
            </li>
            <li>
                <a href="author.html" class="hover:text-fpiGreen">Author's Guide</a>
            </li>
            <li>
                <a href="" class="hover:text-fpiGreen">Articles</a>
            </li>
            <li>
                <a href="editor.html" class="hover:text-fpiGreen">Editors</a>
            </li>
            <li>
                <a href="" class="hover:text-fpiGreen">Announcement</a>
            </li>
            <li>
                <a href="" class="hover:text-fpiGreen">Contact</a>
            </li>
        </ul>

        <div class="hidden lg:block">
            <button class="p-2 px-4 font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen lg:px-4">
                Send Manuscript
            </button>
        </div>

        <div class="md:hidden">
            <img src="./images/icon-menu.svg" alt="" id="hamburger">
            <img src="./images/icon-close-menu.svg" alt="" class="hidden" id="close">
        </div>
    </nav>
</header>
@endif --}}

@if (!\Route::is('home'))
    <header class="relative px-6 md:px-12 lg:px-24 bg-articleColor w-full pt-[2rem] pb-[6rem]">
        <div class="absolute h-full -left-20 -top-28">
            <div class="bg-myGold rounded-full blur-[100px] w-[20rem] h-[20rem] md:w-[27rem] md:h-[27rem]"></div>
        </div>
        <nav class="relative flex items-center justify-between mt-">
            <div class="w-[20em]">
                <img src="{{ asset('images/img/LOGO.svg') }}" alt="" class="lg:w-[15em]">
            </div>

            <div class="absolute z-10 hidden w-full py-16 text-center bg-white shadow-lg top-16" id="nav-menu">
                <ul class="space-y-5 font-bold">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}" class="hover:text-fpiGreen ">About</a>
                    </li>
                    <li class="relative">
                        <a href="#" class="hover:text-fpiGreen" onclick="toggleDropdown()">Author's Guide</a>
                        <div id="authorsDropdown" class="absolute z-10 hidden w-40 mt-1 bg-white shadow-md">
                            <ul class="text-gray-700">
                                <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 1</a></li>
                                <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}" class="hover:text-fpiGreen">Articles</a>
                    </li>
                    <li>
                        <a href="{{ route('editorial-board.index') }}" class="hover:text-fpiGreen">Editors</a>
                    </li>
                    <li>
                        <a href="{{ route('announcement.index') }}" class="hover:text-fpiGreen">Announcement</a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}" class="hover:text-fpiGreen">Contact</a>
                    </li>
                </ul>
                <div class="md:hidden">
                    <button
                        class="p-2 px-4 mt-8 font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen">
                        Send Manuscript
                    </button>
                </div>
            </div>

            <!-- medium screen nav -->

            <ul class="items-center hidden gap-4 text-sm font-bold md:flex">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}" class="hover:text-myGold text-fpiGreen">About</a>
                </li>
                <li class="relative">
                    <a href="" class="hover:text-fpiGreen" onclick="toggleDropdown()">Author's Guide</a>
                    <div id="authorsDropdown" class="absolute z-10 hidden w-40 mt-1 bg-white shadow-md">
                        <ul class="text-gray-700">
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 1</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 2</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('article.index') }}" class="hover:text-fpiGreen">Articles</a>
                </li>
                <li>
                    <a href="{{ route('editorial-board.index') }}" class="hover:text-fpiGreen">Editors</a>
                </li>
                <li>
                    <a href="{{ route('announcement.index') }}" class="hover:text-fpiGreen">Announcement</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}" class="hover:text-fpiGreen">Contact</a>
                </li>
            </ul>

            <div class="hidden lg:block">
                <button
                    class="p-2 px-4 font-bold bg-white border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen lg:px-4">
                    Send Manuscript
                </button>
            </div>

            <div class="md:hidden">
                <img src="{{ asset('images/img/icon-menu.svg') }}" alt="" id="hamburger" />
                <img src="{{ asset('images/img/icon-close-menu.svg') }}" alt="" class="hidden"
                    id="close" />
            </div>
        </nav>

        <div class="mt-[10em]">
            <div class="text-center">
                <h3 class="text-4xl font-bold">
                    {{ $title }}
                </h3>
                <p class="text-2xl">
                    <a href="{{ route('home') }}">Home</a>><a href="{{ route('about.index') }}" class="text-fpiGreen">About us</a>
                </p>
            </div>
        </div>
    </header>
@else
    <header class="px-6 md:px-12 lg:px-24">
        <div class="-ml-6">
            <div class="bg-[#309229] w-32 h-32 blur-[100px]"></div>
        </div>
        <nav class="relative flex items-center justify-between -mt-24">
            <div class="w-[20em]">
                <img src="{{ asset('images/img/LOGO.svg') }}" alt="" class="lg:w-[15em]" />
            </div>

            <!-- Medium screen nav with dropdown for Author's Guide -->
            <ul class="items-center hidden gap-4 text-sm font-bold md:flex">
                <li><a href="{{ route('home') }}" class="hover:text-fpiGreen">Home</a></li>
                <li><a href="{{ route('about.index') }}" class="hover:text-fpiGreen">About</a></li>
                <li class="relative">
                    <a href="#" class="hover:text-fpiGreen" onclick="toggleDropdown()">Author's Guide</a>
                    <div id="authorsDropdown" class="absolute z-10 hidden w-40 mt-1 bg-white shadow-md">
                        <ul class="text-gray-700">
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 1</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 2</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('article.index') }}" class="hover:text-fpiGreen">Articles</a></li>
                <li><a href="{{ route('editorial-board.index') }}" class="hover:text-fpiGreen">Editors</a></li>
                <li><a href="{{ route('announcement.index') }}" class="hover:text-fpiGreen">Announcement</a></li>
                <li><a href="{{ route('about.index') }}" class="hover:text-fpiGreen">Contact</a></li>
            </ul>

            <div class="hidden lg:block">
                <button
                    class="p-2 px-4 font-bold bg-white border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen lg:px-4">
                    Send Manuscript
                </button>
            </div>
            <div class="md:hidden">
                <img src="{{ asset('images/img/icon-menu.svg') }}" alt="" id="hamburger" />
                <img src="{{ asset('images/img/icon-close-menu.svg') }}" alt="" class="hidden"
                    id="close" />
            </div>
        </nav>
    </header>
@endif
