@extends('layouts.app')

@section('title')
Pembayaran | {{ $global_setting_data->title_app }}
@endsection

@section('content')
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>
<div class="container">
    <div class="row justify-content-center mt-4">
        {{-- <div class="container-fluid h-custom mt-4 card"> --}}
        {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
        {{-- <div class="card card-details"> --}}
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID.</th>
                        <th>Paket Wedding</th>
                        <th>Nama</th>
                        <th>Total Pembayaran</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @forelse($items as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><a href="{{ route('detail', $item->wedding_package->slug) }}" class="text-decoration-none text-dark">
                                {{ $item->wedding_package->title }}
                            </a></td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ 'Rp.' . number_format($item->transaction_total) }}</td>
                        {{-- <td>{{ $item->payment_method }}</td> --}}
                        @if ($item->payment_method == 'midtrans')
                        <td>Midtrans</td>
                        @elseif ($item->payment_method == 'transfer')
                        @if ($item->bukti_pembayaran != '')
                        <td><a href="{{ Storage::url($item->bukti_pembayaran) }}" target="_blank" class="text-decoration-none text-dark">
                                Transfer BANK
                            </a></td>
                        @else
                        <td>Transfer BANK</td>
                        @endif
                        @else
                        <td><a href="{{ route('checkout', $item->id) }}" class="text-decoration-none text-dark">
                                Pilih Metode Pembayaran
                            </a></td>
                        @endif
                        <td>
                            @if ($item->transaction_status == 'PENDING')
                            <span class="badge badge-info">
                                {{ $item->transaction_status }}
                            </span>
                            @elseif ($item->transaction_status == 'SUCCESS')
                            <span class="badge badge-success">
                                {{ $item->transaction_status }}
                            </span>
                            @elseif ($item->transaction_status == 'CANCEL')
                            <span class="badge badge-danger">
                                {{ $item->transaction_status }}
                            </span>
                            @else
                            <span class="badge badge-warning">
                                <a href="{{ route('checkout', $item->id) }}" class="text-white">
                                    {{ $item->transaction_status }}
                                </a>
                            </span>
                            @endif
                        </td>
                        <td>
                            @if ($item->transaction_status == 'PENDING')
                            @if ($item->payment_method == 'midtrans')
                            <span class="badge badge-info text-white">
                                <a href="{{ route('payment_detail', $item->id) }}" class="text-white">
                                    Bayar Midtrans
                                </a>
                            </span>
                            @elseif ($item->payment_method == 'transfer')
                            <span class="badge badge-info text-white">
                                <a href="{{ route('payment_detail_tf', $item->id) }}" class="text-white">
                                    Bayar Transfer
                                </a>
                            </span>
                            @else
                            <span class="badge badge-info text-white">
                                <a href="{{ route('checkout', $item->id) }}" class="text-white">
                                    Pilih Metode Pembayaran
                                </a>
                            </span>
                            @endif
                            @elseif ($item->transaction_status == 'SUCCESS')
                            <span class="badge badge-success">
                                Pembayaran Berhasil
                            </span>
                            @elseif ($item->transaction_status == 'CANCEL')
                            <span class="badge badge-danger">
                                Pembayaran Dibatalkan
                            </span>
                            @else
                            <span class="badge badge-warning">
                                <a href="{{ route('checkout', $item->id) }}" class="text-white">
                                    Pilih Metode Pembayaran
                                </a>
                            </span>
                            @endif

                        </td>
                    </tr>
                    @empty
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $items->links('pagination::bootstrap-4') }}
        </div>
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
</div> --}}
</div>
</div>
@endsection