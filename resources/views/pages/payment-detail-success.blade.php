@extends('layouts.app')
@section('title', 'Pembayaran Berhasil')

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
                                Rincian pembayaran
                            </li>
                            <li class="breadcrumb-item active">
                                Mohon selesaikan pembayaran Anda
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <div class="table-responsive">
                            <div id="midtrans-button"></div>

                            @if ($item->transaction_status == 'PENDING')
                            <div class="alert alert-info mt-3">
                                <p>
                                    Silahkan selesaikan pembayaran Anda sebelum <br>
                                    <strong>{{ \Carbon\Carbon::parse($item->transaction_expired)->format('d F Y H:i') }}</strong>
                                </p>
                                <button id="midtrans-btn" class="btn btn-group-sm btn-success midtrans-btn">Bayar</button>
                            </div>
                            @elseif ($item->transaction_status == 'SUCCESS')
                            <div class="alert alert-success mt-3">
                                <p>
                                    Pembayaran Anda telah berhasil
                                </p>
                            </div>
                            @elseif ($item->transaction_status == 'FAILED')
                            <div class="alert alert-danger mt-3">
                                <p>
                                    Pembayaran Anda telah gagal
                                </p>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection