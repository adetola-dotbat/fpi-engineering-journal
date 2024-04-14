<nav class="-mt-24 flex relative items-center justify-between">
    <div class="w-[20em]">
        <img src="{{ asset('images/img/LOGO.svg') }}" alt="" class="lg:w-[15em]">
    </div>

    <div class="hidden text-center absolute bg-white py-16 w-full shadow-lg top-16 z-10" id="nav-menu">
        <ul class="font-bold space-y-5">
            <li>
                <a href="index.html" class="hover:text-fpiGreen">Home</a>
            </li>
            <li>
                <a href="about.html" class="hover:text-fpiGreen">About</a>
            </li>
            <li class="relative">
                <a href="#" class="hover:text-fpiGreen" onclick="toggleDropdown()">Author's Guide</a>
                <div id="authorsDropdown" class="hidden absolute z-10 bg-white shadow-md mt-1 w-40">
                    <ul class="text-gray-700">
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 1</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 2</a></li>
                    </ul>
                </div>
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
            <button
                class="border mt-8 border-fpiGreen p-2 rounded-full px-4 font-bold text-fpiGreen hover:text-white hover:bg-fpiGreen">
                Send Manuscript
            </button>
        </div>
    </div>

    <!-- medium screen nav -->

    <ul class="font-bold hidden items-center md:flex gap-4 text-sm">
        <li><a href="index.html" class="hover:text-fpiGreen">Home</a></li>
        <li>
            <a href="about.html" class="hover:text-fpiGreen">About</a>
        </li>
        <li class="relative">
            <a href="#" class="hover:text-fpiGreen" onclick="toggleDropdown()">Author's Guide</a>
            <div id="authorsDropdown" class="hidden absolute z-10 bg-white shadow-md mt-1 w-40">
                <ul class="text-gray-700">
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Submenu 2</a></li>
                </ul>
            </div>
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
        <button
            class=" border border-fpiGreen p-2 rounded-full px-4 font-bold text-fpiGreen hover:text-white hover:bg-fpiGreen
        lg:px-4">
            Send Manuscript
        </button>
    </div>

    <div class="md:hidden">
        <img src="./images/icon-menu.svg" alt="" id="hamburger">
        <img src="./images/icon-close-menu.svg" alt="" class="hidden" id="close">
    </div>
</nav>
