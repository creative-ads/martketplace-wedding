<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-login sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">
            {{ $global_setting_data->title_app }}
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="{{ (request()->segment(2) == '') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dasbor</span></a>
    </li>

    <!-- Setting -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
            aria-expanded="true" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting:</h6>
                <a class="collapse-item" href="{{ route('admin_setting') }}">Setting</a>
    <a class="collapse-item" href="{{ route('admin_setting') }}">Setting</a>
    </div>
    </div>
    </li> --}}

    @if (Auth::user()->roles == 'ADMIN')
    <li class="{{ (request()->segment(2) == 'setting') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('admin_setting') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Informasi</span></a>
    </li>
    @endif

    @if (Auth::user()->roles == 'ADMIN')
    <li class="{{ (request()->segment(2) == 'users') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('admin_users') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengguna</span></a>
    </li>
    @endif

    @if (Auth::user()->roles == 'ADMIN')
    <li class="{{ (request()->segment(2) == 'slide') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('admin_slide_view') }}">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Slide</span></a>
    </li>
    @endif

    <li class="{{ (request()->segment(2) == 'wedding-package') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('wedding-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Paket Wedding</span></a>
    </li>

    <li class="{{ (request()->segment(2) == 'gallery') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri Paket Wedding</span></a>
    </li>

    <li class="{{ (request()->segment(2) == 'transaction') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Transaksi</span></a>
    </li>

    @if (Auth::user()->roles == 'ADMIN')
    <li class="{{ (request()->segment(2) == 'rekening') ? 'active' : '' }} nav-item">
        <a class="nav-link" href="{{ route('rekening.index') }}">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Rekening</span></a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="https://dashboard.tawk.to/" target="_blank">
            <i class="fas fa-fw fa-comments"></i>
            <span>Live Chat</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->