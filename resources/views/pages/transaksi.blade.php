@extends('layouts.app')

@section('title')
Transaksi | {{ $global_setting_data->title_app }}
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
    <div class="row justify-content-center">
        <div class="container-fluid h-custom mt-4 card">
            <div class="row d-flex justify-content-center align-items-center h-100 mt-2">
                <div class="row w-100">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="ml-3">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <h1>Detail Paket Wedding</h1>
                            <p class="blink_me">
                                Silahkan terlebih dahulu pilih paket yang Anda inginkan
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Nama</td>
                                            <td>Kebangsaan</td>
                                            <!-- <td>Passport</td> -->
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($transaction->details))
                                        @forelse($item->details as $detail)
                                        <tr>
                                            <td>
                                                <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle" />
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->username }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->nationality }}
                                            </td>
                                            <!-- <td class="align-middle">
                                                {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                            </td> -->
                                            <td class="align-middle">
                                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                                    <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                Tidak ada data pemesan
                                            </td>
                                        </tr>
                                        @endforelse
                                        @else
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                Tidak ada data pemesan
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-right">
                            <h2>Informasi Pemesanan</h2>
                            <table class="trip-informations">
                                <!-- <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">
                                        @if (!empty($transaction->details))
                                        {{ $transaction->details->count() }} person
                                        @else
                                        0 person
                                        @endif
                                    </td>
                                </tr> -->
                                <tr>
                                    <th width="50%">Harga Paket</th>
                                    <td width="50%" class="text-right">
                                        @if (!empty($transaction->details))
                                        {{ 'Rp. ' . number_format($item->wedding_package->price, 0, ',', '.') ?? 0 }},00
                                        /
                                        pax
                                        @else
                                        Rp. 0/pax
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                        @if (!empty($transaction->details))
                                        {{ 'Rp. ' . number_format($item->transaction_total, 0, ',', '.') ?? 0 }},00
                                        @else
                                        Rp. 0
                                        @endif

                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+kode unik)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">
                                            @if (!empty($transaction->details))
                                            {{ 'Rp. ' . number_format($item->transaction_total, 0, ',', '.') ?? 0 }}
                                            @else
                                            Rp. 0
                                            @endif
                                        </span>
                                        {{-- <span class="text-orange">{{ mt_rand(0,99) }}</span> --}}
                                    </td>
                                </tr>
                            </table>

                            <hr />
                            <h2>Pilih cara pembayaran: *</h2>
                            <p class="payment-instructions">
                                Silahkan pilih metode pembayaran yang Anda inginkan
                            </p>
                            <select name="payment_method" class="form-control select2" id="paymentMethodChange" autocomplete="off" required>
                                <option value="">Pilih metode pembayaran</option>
                                <option value="midtrans">Midtrans</option>
                                <option value="transfer">Transfer Bank</option>
                            </select>
                        </div>
                        <div class="join-container">
                            @auth
                            @if (!empty($transaction->details))
                            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Bayar
                            </a>
                            @else
                            <a href="#" class="btn btn-block btn-login mt-3 py-2">
                                Pilih salah satu paket wedding
                            </a>
                            @endif

                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Masuk atau daftar untuk melanjutkan
                            </a>
                            @endguest
                        </div>
                        <div class="text-center mt-3">
                            @if (!empty($transaction->details))
                            <a href="{{ route('detail', $item->wedding_package->slug) }}" class="text-muted">
                                Batal Pemesanan
                            </a>
                            @else
                            <a href="{{ url()->previous() }}" class="text-muted">
                                <i class="fa fa-arrow-left"></i> Kembali ke halaman sebelumnya
                            </a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('
                frontend / images / ic_doe.png ') }}" />'
            }
        });
    });
</script>
@endpush