<!-- Navbar -->
<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <a href="{{ route('home') }}" class="navbar-brand">
      {{-- <img src="{{ url('frontend/images/logo.png') }}" alt="Logo NOMADS" /> --}}
      <img src="{{ asset('uploads/'.$global_setting_data->logo) }}" alt="">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
          <a href="{{ route('home') }}" class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}">Beranda</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="{{ route('about') }}" class="nav-link {{ (request()->segment(1) == 'about') ? 'active' : '' }}">Tentang</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="{{ route('explore') }}" class="nav-link {{ (request()->segment(1) == 'explore') ? 'active' : '' }}">Cari</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="{{ route('home') }}#paket" class="nav-link {{ (request()->segment(0) == '#paket') ? 'active' : '' }}">Paket Wedding</a>
        </li>
        @if(session()->has('auth'))
        <li class="nav-item mx-md-2">
          <a href="{{ route('transaksi') }}" class="nav-link {{ (request()->segment(1) == 'transaksi') ? 'active' : '' }}">Transaksi</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="{{ route('payment') }}" class="nav-link {{ (request()->segment(1) == 'payment') ? 'active' : '' }}">Pembayaran</a>
        </li>
        @endif
        {{-- <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            id="navbardrop"
            data-toggle="dropdown"
          >
            Services
          </a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Link</a>
            <a href="#" class="dropdown-item">Link</a>
            <a href="#" class="dropdown-item">Link</a>
          </div>
        </li> --}}
        <!-- <li class="nav-item mx-md-2">
          <a href="{{ route('home') }}#testimonialContent" class="nav-link">Testimoni</a>
        </li> -->
      </ul>

      @guest
      <!-- Mobile Button -->
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
          Masuk
        </button>
      </form>

      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
          Masuk
        </button>
      </form>
      @endguest

      @auth
      <!-- Mobile Button -->
      <a class="form-inline d-sm-block d-md-none" href="{{  url('user') }}">
        @csrf
        <button class="btn btn-login my-2 my-sm-0" type="submit">
          Akun Saya
        </button>
      </a>
      @if (Auth::user()->roles == 'ADMIN' || Auth::user()->roles == 'VENDOR')
      <a class="form-inline d-sm-block d-md-none" href="{{  url('admin') }}">
        @csrf
        <button class="btn btn-login my-2 my-sm-0" type="submit">
          Masuk Dasbor
        </button>
      </a>
      @endif

      <!-- Desktop Button -->
      <a class="form-inline my-2 my-lg-0 d-none d-md-block" href="{{  url('user') }}">
        @csrf
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
          Akun Saya
        </button>
      </a>
      @if (Auth::user()->roles == 'ADMIN' || Auth::user()->roles == 'VENDOR')
      <a class="ml-4 form-inline my-2 my-lg-0 d-none d-md-block" href="{{  url('admin') }}">
        @csrf
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
          Masuk Dasbor
        </button>
      </a>
      @endif
      @endauth
    </div>
  </nav>
</div>