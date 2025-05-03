<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            {{-- Logo --}}
            <img src="{{ $setting->business_logo }}" class="img-fluid logo-lg d-block mx-auto" alt="logo"
                style="width: 125px;">
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item active">
                    <a href="{{ route('dashboard') }}" class="pc-link d-flex align-items-center">
                        <span class="pc-micon"><i class="ti ti-layout-grid"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Data</label>
                    <i class="ti ti-brand-chrome"></i>
                </li>
                {{-- <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span
                            class="pc-mtext">Menu
                            levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                    </ul>
                </li> --}}
                <li class="pc-item">
                    <a href="../other/sample-page.html" class="pc-link d-flex align-items-center">
                        <span class="pc-micon"><i class="ti ti-user"></i></span>
                        <span class="pc-mtext">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
