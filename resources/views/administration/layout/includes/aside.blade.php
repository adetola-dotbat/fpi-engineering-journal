<aside id="sidebar" class="sidebar">
    <!-- End Logo -->
    <div class="d-flex justify-content-center py-4">
        <a href="index.html" class="logo">
            <img src="{{ asset('admin/assets/images/logo.png') }}" alt="" />
        </a>
    </div>
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if (Route::is('about.create')) active @endif" href="{{ route('about.create') }}">
                <i class="bi bi-person"></i>
                <span>About</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if (Route::is('announcement.create')) active @endif"
                href="{{ route('announcement.create') }}">
                <i class="bi bi-person"></i>
                <span>Announcement</span>
            </a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('call-for-paper.create')) active @endif"
                href="{{ route('call-for-paper.create') }}">
                <i class="bi bi-person"></i>
                <span>Call for paper</span>
            </a>
        </li>

        <li>
            <a class="nav-link @if (Route::is('designation.create')) active @endif"
                href="{{ route('designation.create') }}">
                <i class="bi bi-person"></i>
                <span>Designation</span>
            </a>
        </li>

    </ul>
</aside>
