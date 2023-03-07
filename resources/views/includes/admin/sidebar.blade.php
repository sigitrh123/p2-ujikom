{{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- Logo Website disini -->
            <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ngaduin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Informasi
    </div>

    <li class="nav-item {{ (request()->routeIs('pengaduans.index')) || (request()->routeIs('pengaduans.show')) || (request()->routeIs('tanggapan.show')) ? 'active' : '' }} ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengaduans.index')}}">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Pengaduan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    @if (Auth::user()->roles == 'ADMIN')
    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (request()->is('admin/masyarakat')) || (request()->is('admin/petugas')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
            aria-expanded="false" aria-controls="collapsePages" role="button">
            <i class="fas fa-fw fa-folder"></i>
            <span>User</span>
        </a>
        <div id="collapsePages" class="collapse {{ (request()->is('admin/masyarakat')) || (request()->is('admin/petugas')) ? 'show' : '' }}" href="{{ url('admin/masyarakat')}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ (request()->is('admin/masyarakat')) ? 'active' : '' }}" href="{{ url('admin/masyarakat')}}">Masyarakat</a>
                    <a class="collapse-item {{ (request()->is('admin/petugas')) ? 'active' : '' }}" href="{{ route('petugas.index')}}">Petugas</a>
                </div>
            </div>
        </li>
    @endif

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (request()->is('admin/laporan')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/laporan')}}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Laporan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul> --}}

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <!-- dashboard -->
        <li class="nav-item {{ request()->routeIs('dashboard') ? '' : 'active' }}">
            <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi-house-door-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">
        <!-- pengaduan -->
        <div class="sidebar-heading ms-2">
            <span class="fw-bold fs-6">
                Informasi
            </span>
        </div>
        <li
            class="nav-item {{ request()->routeIs('pengaduans.index') || request()->routeIs('pengaduans.show') || request()->routeIs('tanggapan.show') ? 'active' : '' }} ? 'active' : '' }}"">
            <a class="nav-link {{ request()->routeIs('pengaduans.index') || request()->routeIs('pengaduans.show') || request()->routeIs('tanggapan.show') ? '' : 'collapsed' }}"
                href="{{ route('pengaduans.index') }}">
                <i class="bi bi-megaphone-fill"></i>
                <span>Pengaduan</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        @if (Auth::user()->roles == 'ADMIN')
            <div class="sidebar-heading ms-2">
                <span class="fw-bold fs-6">
                    Data Master
                </span>
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi-folder-fill"></i>
                    <span>User</span>
                    <!-- <i class="bi bi-chevron-down ms-auto"></i> -->
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li class="collapse-item {{ request()->is('admin/masyarakat') ? 'active' : '' }}">
                        <a href="{{ url('admin/masyarakat') }}">
                            <span>Masyarakat</span>
                        </a>
                    </li>
                    <li class="collapse-item {{ request()->is('admin/staff') ? 'active' : '' }}">
                        <a href="{{ route('staff.index') }}">
                            <span>Petugas</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <li class="nav-item {{ request()->is('admin/laporan') ? 'active' : '' }}">
            <a class="nav-link {{ request()->routeIs('laporan.show') ? '' : 'collapsed' }}"
                href="{{ url('admin/laporan') }}">
                <i class="bi-files"></i>
                <span>Laporan</span>
            </a>
        </li>


    </ul>

</aside>
<script src="/assets/js/main1.js"></script>
