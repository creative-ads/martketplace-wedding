@extends('layouts.app')
@section('title', 'Detail Paket')

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Paket Wedding
              </li>
              <li class="breadcrumb-item active">
                Detail
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>{{ $item->title }}</h1>
            <p>
              {{ $item->location }}
            </p>
            @if($item->galleries->count() > 0)
            <div class="gallery">
              <div class="xzoom-container">
                <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}" />
              </div>
              <div class="xzoom-thumbs">
                @foreach($item->galleries as $gallery)
                <a href="{{ Storage::url($gallery->image) }}">
                  <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" width="128" xpreview="{{ Storage::url($gallery->image) }}" />
                </a>
                @endforeach
              </div>
            </div>
            @endif
            <h2>Tentang Paket Wedding</h2>
            {!! $item->about !!}
            <!-- <div class="features row">
              <div class="col-md-4">
                <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image" />
                <div class="description">
                  <h3>Featured Event</h3>
                  <p>{{ $item->featured_event }}</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('frontend/images/ic_language.png') }}" alt="" class="features-image" />
                  <div class="description">
                    <h3>Language</h3>
                    <p>{{ $item->language }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('frontend/images/ic_foods.png') }}" alt="" class="features-image" />
                  <div class="description">
                    <h3>Foods</h3>
                    <p>{{ $item->foods }}</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">

            <h2>Informasi Paket</h2>
            <table class="trip-informations">
              <!-- <tr>
                <th width="50%">Date of Departure</th>
                <td width="50%" class="text-right">
                  {{ \Carbon\Carbon::create($item->departure_date)->format('F n, Y') }}
                </td>
              </tr> -->
              <!-- <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">
                  {{ $item->duration }}
                </td>
              </tr> -->
              <tr>
                <th width="50%">Tipe</th>
                <td width="50%" class="text-right">
                  {{ $item->type }}
                </td>
              </tr>
              <tr>
                <th width="50%">Harga</th>
                <td width="50%" class="text-right">
                  {{ 'Rp. ' .number_format($item->price, 0, ',', '.') }}
                </td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            @auth
            <form action="{{ route('checkout_process', $item->id) }}" method="post">
              @csrf
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="tgl_booking" placeholder="Atur Tanggal Pemesanan" onfocus="(this.type='date')" required>
              </div>
              <button class="btn btn-block btn-login mt-3 py-2" type="submit">
                Pesan Sekarang
              </button>
            </form>
            @endauth
            @guest
            <a href="{{ route('login') }}" class="btn btn-block btn-login mt-3 py-2">
              Masuk atau Daftar untuk Pemesanan
            </a>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });
  });
</script>
@endpush