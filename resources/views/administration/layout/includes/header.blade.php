<header id="header" class="header fixed-top d-flex align-items-center">
    <nav class="header-nav ms-auto">
        <div class="container">
            <ul class="d-flex align-items-center pt-3">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
                        <img src="{{ asset('admin/assets/images/profile-img.jpg') }}" alt="Profile"
                            class="rounded-circle" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span> </a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item ">
                        <div>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                {{ __('Logout') }}
                            </a>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
