@extends('layouts.app')
@section('title')
Tentang | {{ $global_setting_data->title_app }}
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
                                Tentang {{ $global_setting_data->title_app }}
                            </li>
                            <li class="breadcrumb-item active">
                                Detail
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        {{-- <h1>Tentang {{ $global_setting_data->title_app }}</h1> --}}
                        @if ($global_setting_data->about != '')
                        {{-- <p> --}}
                        {!! $global_setting_data->about !!}
                        {{-- </p> --}}
                        @endif
                        {{-- <p>
                            {{ $global_setting_data->title_app }} adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                        </p>
                        <h2>Tentang {{ $global_setting_data->title_app }}</h2>
                        <p>
                            {{ $global_setting_data->title_app }} adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                        </p>
                        <p>
                            {{ $global_setting_data->title_app }} adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                        </p>
                        <p>
                            {{ $global_setting_data->title_app }} adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection