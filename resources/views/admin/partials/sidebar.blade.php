
<aside class="admin-sidebar" id="adminSidebar">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">
            TASTY <span>FOOD</span>
        </a>
        <small>ADMIN PANEL</small>
    </div>

    <div class="sidebar-profile">
        <div class="profile-avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        <div class="profile-info">
            <strong>{{ auth()->user()->name }}</strong>
            <span>Administrator</span>
        </div>
    </div>

    <nav class="sidebar-menu">
        <p class="sidebar-label">MENU UTAMA</p>

        <a href="{{ route('admin.dashboard') }}"
           class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <span class="sidebar-icon">⌂</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.news.index') }}"
           class="{{ request()->routeIs('admin.news.index') ? 'active' : '' }}">
            <span class="sidebar-icon">▤</span>
            <span>Kelola Berita</span>
        </a>

        <a href="{{ route('admin.news.create') }}"
           class="{{ request()->routeIs('admin.news.create') ? 'active' : '' }}">
            <span class="sidebar-icon">＋</span>
            <span>Tambah Berita</span>
        </a>

        <p class="sidebar-label">WEBSITE</p>

        <a href="{{ route('home') }}" target="_blank">
            <span class="sidebar-icon">↗</span>
            <span>Lihat Website</span>
        </a>
    </nav>

    <div class="sidebar-bottom">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="sidebar-logout">
                <span class="sidebar-icon">⇥</span>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>
