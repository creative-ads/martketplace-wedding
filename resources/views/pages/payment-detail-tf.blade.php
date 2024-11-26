@extends('layouts.app')
@section('title', 'Selesaikan Pembayaran Anda')

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
                                Detail Pembayaran
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
                        <p class="text-center text-dark">
                            Metode Pembayaran Bank Transfer. Silahkan melakukan pembayaran ke salah satu rekening
                            dibawah ini
                        </p>
                        <div class="row  mb-2 text-center">


                            @foreach ($rekening as $key)
                            <div class="col-md-3">
                                <div class="card text-white bg-info mb-3 " style="max-width: 18rem;">
                                    <div class="card-header">{{ $key->bank_name }}</div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key->no_rekening }}</h5>
                                        <p class="card-text text-white">Atas Nama {{ $key->atas_nama }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="table-responsive">
                            <div id="midtrans-button"></div>
                            @if ($item->transaction_status == 'PENDING' && $item->bukti_pembayaran == '')
                            <div class="alert alert-info mt-3">
                                <p>
                                    Silahkan selesaikan pembayaran Anda sebelum <br>
                                    <strong>{{ \Carbon\Carbon::parse($item->transaction_expired)->format('d F Y H:i') }}</strong>
                                    <br>
                                <form action="{{ route('kirimbukti') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label for="">Upload Bukti Pembayaran sekarang.</label>
                                        <input type="hidden" name="order_no" value="{{ $item->id }}">
                                        <input type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .pdf" name="bukti_pembayaran" class="form-control" required>
                                    </div>

                                    </p>
                                    <button id="midtrans-btn" type="submit" class="btn btn-group-sm btn-success midtrans-btn">Kirim</button>
                                </form>

                            </div>
                            @elseif ($item->transaction_status == 'PENDING' && $item->bukti_pembayaran != '')
                            <div class="alert alert-info mt-3">
                                <p>
                                    Menunggu verifikasi admin <br>
                                    <strong>Waktu upload {{ \Carbon\Carbon::parse($item->update_at)->format('d F Y H:i') }}</strong>
                                    <br>
                                    <a href="{{ asset('storage/' . $item->bukti_pembayaran) }}" target="_blank" class="btn btn-group-sm btn-primary mt-3">Lihat Bukti Pembayaran</a>
                                    {{-- <img src="{{ asset('storage/' . $item->bukti_pembayaran) }}" alt="" style="width: 20%; height: 20%;"
                                    class="img-fluid"> --}}
                                </p>
                                <form action="{{ route('kirimbukti') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label for="">Upload Ulang Bukti Pembayaran.</label>
                                        <input type="hidden" name="order_no" value="{{ $item->id }}">
                                        <input type="file" name="bukti_pembayaran" class="form-control" required>
                                    </div>

                                    </p>
                                    <button id="midtrans-btn" type="submit" class="btn btn-group-sm btn-success midtrans-btn">Kirim</button>
                                </form>
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