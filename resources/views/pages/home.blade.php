@extends('layouts.app')

@section('title')
{{ $global_setting_data->title_app }}
@endsection

@section('content')
<!-- Header -->
<style>
    .slide-carousel.owl-carousel .owl-nav .owl-prev,
    .slide-carousel.owl-carousel .owl-nav .owl-next {
        position: absolute;
        text-align: center;
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 45px;
        font-size: 18px;
        color: #fff;
        border: 2px solid #fff;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        transition: all 0.3s;
        -webkit-transition: all 0.3s;
    }

    .slide-carousel.owl-carousel .owl-nav .owl-prev {
        top: 47%;
        left: 0;
        margin-left: 40px;
    }

    .slide-carousel.owl-carousel .owl-nav .owl-next {
        top: 47%;
        right: 0;
        margin-right: 40px
    }

    .slide-carousel.owl-carousel .owl-nav .owl-prev:hover,
    .slide-carousel.owl-carousel .owl-nav .owl-next:hover {
        color: #e75542;
        border: 2px solid #e75542;
    }

    .owl-nav button {
        position: absolute;
        top: 50%;
        background-color: #000;
        color: #fff;
        margin: 0;
        transition: all 0.3s ease-in-out;
    }

    .owl-nav button.owl-prev {
        left: 0;
    }

    .owl-nav button.owl-next {
        right: 0;
    }

    .owl-dots {
        text-align: center;
        padding-top: 15px;
    }

    .owl-dots button.owl-dot {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        display: inline-block;
        background: #ccc;
        margin: 0 3px;
    }

    .owl-dots button.owl-dot.active {
        background-color: #000;
    }

    .owl-dots button.owl-dot:focus {
        outline: none;
    }

    .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.38) !important;
    }

    .owl-nav button:focus {
        outline: none;
    }
</style>
{{-- <header class="text-center"> --}}
<div class="text-center owl-carousel owl-theme owl-img-responsive header owl-theme owl-loade">
    @foreach ($slide_all as $item)
    <div class="item" style="background-image:url({{ asset('uploads/' . $item->photo) }});padding: 180px 0 165px;margin-top: -70px;background-size: cover;">
        <div class="bg"></div>
        <div class="text">
            <h1 style="font-family: 'Playfair Display', serif;
                    font-weight: bold;
                    font-size: 50px;color:white;">
                {{ $item->heading }}
                <h1>
                    <p style="color:white;">
                        {!! $item->text !!}
                    </p>
                    @if ($item->button_text != '')
                    <div class="button" style="font-size: 15px;
                    font-weight: 700;
                    text-transform: uppercase;
                    display: inline-block;
                    background: #62E8BE;
                    color: #fff;
                    text-decoration: none;
                    border: 1px solid #62E8BE;
                    border-radius: 3px;
                    -webkit-border-radius: 3px;
                    padding: 14px 45px;
                    transition: all 0.3s;
                    -webkit-transition: all 0.3s;">
                        <a href="{{ $item->button_url }}" style="color: white;">{{ $item->button_text }} &nbsp;
                            ❯</a>
                    </div>
                    @endif
        </div>
    </div>
    @endforeach
</div>
{{-- <h1>
    Explore The Beautiful World
    <br />
    As Easy One Click
  </h1>
  <p class="mt-3">
    You will see beautiful
    <br />
    moment you never see before
  </p>
  <a href="#popular" class="btn btn-get-started px-4 mt-4">
    Get started
  </a> --}}
{{-- </header> --}}

<main id="paket">
    {{-- <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
      <div class="col-3 col-md-2 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>3K</h2>
        <p>Hotel</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>72</h2>
        <p>Partners</p>
      </div>
    </section>
  </div> --}}

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Paket Wedding Paling Dicari</h2>
                    <p>
                        Dapatkan momen terbaik pernikahan Anda
                        <br />
                        bersama kami
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');border-color: #ffffff!important;
                                border-style: solid!important;
                                border-width: 5px 5px 5px 5px!important;">
                        <div class="travel-location">{{ $item->title }}</div>
                        <div class="travel-country">{{ $item->location }}</div>
                        <div class="mt-auto"><span style="background-color: #B500FF;">{{ 'Rp. ' .number_format($item->price, 0, ',', '.') }}</span></div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Partner Kami</h2>
                    <p>
                        Partner yang selalu dapat diandalkan
                        <br />
                        untuk memenuhi momen pernikahan Anda
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner" />
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Apa yang mereka katakan?</h2>
                    <p>
                        Momen terbaik mereka dikenang
                        <br />
                        dan menjadi yang terindah bersama kami
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testiominal-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Nasrul Kurniawan</h3>
                            <p class="testimonial">
                                “ It was glorious and I could not stop to say wohooo for
                                every single moment Dankeeeeee “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip to Ubud
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testiominal-content">
                            <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Fahmi N</h3>
                            <p class="testimonial">
                                “ The trip was amazing and I saw something beautiful in that
                                Island that makes me want to learn more “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip to Nusa Penida
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testiominal-content">
                            <img src="frontend/images/testimonial-3.png" alt="User" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Kayla</h3>
                            <p class="testimonial">
                                “ I loved it when the waves was shaking harder — I was
                                scared too “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip to Karimun Jawa
                        </p>
                    </div>
                </div>
            </div> -->
    <!-- <div class="row">
                <div class="col-12 text-center">
                    <a href="#" data-toggle="modal" data-target="#needhelpModal" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div> -->
    <!-- </div> -->
    <!-- </section> -->
</main>
@endsection