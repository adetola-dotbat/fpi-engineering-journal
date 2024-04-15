<aside id="sidebar" class="sidebar">
    <!-- End Logo -->
    <div class="d-flex justify-content-center py-4">
        <a href="index.html" class="logo">
            <img src="{{ asset('admin/assets/images/logo.png') }}" alt="" />
        </a>
    </div>
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link @if (Route::is('dashboard')) active @endif" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if (Route::is('about.create')) active @endif" href="{{ route('about.create') }}">
                <i class="bi bi-menu-button-wide"></i>
                <span>About</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if (Route::is('announcement.create')) active @endif"
                href="{{ route('announcement.create') }}">
                <i class="bi bi-card-list"></i>
                <span>Announcement</span>
            </a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('call-for-paper.create')) active @endif"
                href="{{ route('call-for-paper.create') }}">
                <i class="bi bi-menu-button-wide"></i>
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
        <li>
            <a class="nav-link @if (Route::is('editorial-board.create')) active @endif"
                href="{{ route('editorial-board.create') }}">
                <i class="bi bi-people"></i>
                <span>Editorial Board</span>
            </a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('volume.create')) active @endif" href="{{ route('volume.create') }}">
                <i class="bi bi-card-list"></i>
                <span>Volume</span>
            </a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('article.create')) active @endif" href="{{ route('article.create') }}">
                <i class="bi bi-menu-button-wide"></i>
                <span>Article</span>
            </a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('paper-template.create')) active @endif" href="{{ route('paper-template.create') }}">
                <i class="bi bi-menu-button-wide"></i>
                <span>Paper Template</span>
            </a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('quick-link.create')) active @endif" href="{{ route('quick-link.create') }}">
                <i class="bi bi-link"></i>
                <span>Quick link</span>
            </a>
        </li>

    </ul>
</aside>
