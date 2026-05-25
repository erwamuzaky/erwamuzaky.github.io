<div class="sidebar" id="sidebar">

    {{-- CLOSE ICON --}}

    {{-- LOGO --}}
    <div class="sidebar-top">

        <div class="sidebar-logo">
            📚
        </div>

        <div class="sidebar-brand">

            <h2>BookApp</h2>

            <p>Admin Erwa Muzaky</p>

        </div>

    </div>

    {{-- MENU --}}
    <ul class="sidebar-menu">

        <li>

            <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">

                <span class="menu-icon">🏠</span>

                <span>Dashboard</span>

            </a>

        </li>

        <li>

            <a href="/kategori" class="{{ request()->is('kategori*') ? 'active' : '' }}">

                <span class="menu-icon">📂</span>

                <span>Kategori</span>

            </a>

        </li>

        <li>

            <a href="/penerbit" class="{{ request()->is('penerbit*') ? 'active' : '' }}">

                <span class="menu-icon">🏢</span>

                <span>Penerbit</span>

            </a>

        </li>

        <li>

            <a href="/buku" class="{{ request()->is('buku*') ? 'active' : '' }}">

                <span class="menu-icon">📚</span>

                <span>Buku</span>

            </a>

        </li>

    </ul>

    {{-- FOOTER --}}
    <div class="sidebar-footer">

        <div class="user-box">

            <div class="user-avatar">
                👤
            </div>

            <div>

                <h4>Admin</h4>

                <p>Online</p>

            </div>

            <a href="{{ route('logout') }}" class="logout-btn">

                Logout

            </a>

        </div>
    </div>

</div>

</div>