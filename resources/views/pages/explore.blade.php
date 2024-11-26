@extends('layouts.app')
@section('title')
Cari | {{ $global_setting_data->title_app }}
@endsection

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
                                Cari Paket {{ $global_setting_data->title_app }}
                            </li>
                            <li class="breadcrumb-item active">
                                Pilih Paket Wedding Anda
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        {{-- @if ($global_setting_data->about != '')
                                {!! $global_setting_data->about !!}
                            @endif --}}
                        <section class="section-popular-content" id="popularContent">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center section-popular-heading">
                                        <h2 class="section-popular-title">Buat Momen Berharga</h2>
                                        <p class="section-popular-subtitle">
                                            Buat momen pernikahan Anda menjadi
                                            <br />
                                            momen terindah sekali seumur hidup
                                        </p>
                                    </div>
                                </div>
                                <div class="cari" style="margin-bottom: 20px;">
                                    <form action="{{ route('explore_cari') }}" method="GET">
                                        @csrf
                                        <div class="input-group">
                                            <input style="width:11rem" type="text" class="form-control" placeholder="Nama Paket" name="search" value="{{ request('search') }}">
                                            <input list="fruits" style="width:9rem" type="text" class="form-control" placeholder="Lokasi" id="location" name="location" value="{{ request('location') }}">
                                            <datalist id="fruits">
                                                @foreach ($location as $item)
                                                <option value={{$item}}>
                                                    @endforeach
                                            </datalist>

                                            <select class="form-control" id="category" name="category">
                                                {{-- <option value="{{ $item->category }}" disabled selected>{{ $item->category }}</option> --}}
                                                <option value="" disabled selected>- Pilih Jenis Paket -</option>
                                                <option value="VIP">VIP</option>
                                                <option value="Exclusive">Eksklusif</option>
                                                <option value="Custom">Kustom</option>
                                            </select>

                                            <select class="form-control" id="type" name="type">
                                                <option value="" disabled selected>- Pilih kategori paket wedding -</option>
                                                <option value="Gedung">Gedung</option>
                                                <option value="Tenda">Tenda</option>
                                                <option value="Dekorasi">Dekorasi</option>
                                                <option value="Cathering">Cathering</option>
                                                <option value="Fotografi">Fotografi</option>
                                                <option value="Tata Rias">Tata Rias</option>
                                            </select>

                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    Cari
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                                    Lihat detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row justify-content-center">
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection