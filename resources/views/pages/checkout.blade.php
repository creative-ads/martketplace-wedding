@extends('layouts.app')

@section('title')
Checkout | {{ $global_setting_data->title_app }}
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
                            <div class="alert alert-danger text-capitalize">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <h1>Detail Paket Wedding</h1>
                            <p>
                                {{ $item->wedding_package->title }}, {{ $item->wedding_package->location }}
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <form action="{{ route('checkout-success', $item->id) }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">

                            <div class="card-right">
                                <h2>Informasi Pemesanan</h2>
                                <table class="trip-informations">
                                    <!-- <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->details->count() }} person
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <th width="50%">Harga paket</th>
                                        <td width="50%" class="text-right">
                                            {{ 'Rp. ' . number_format($item->wedding_package->price, 0, ',', '.') }},00 /
                                            pax
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Sub Total</th>
                                        <td width="50%" class="text-right">
                                            {{ 'Rp. ' . number_format($item->transaction_total, 0, ',', '.') }},00
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+kode unik)</th>
                                        <td width="50%" class="text-right text-total">
                                            <span class="text-blue">
                                                {{ 'Rp. ' . number_format($item->transaction_total, 0, ',', '.') }}</span>
                                        </td>
                                    </tr>
                                </table>

                                <hr />
                                @if ($errors->has('payment_method'))
                                <h2 class="text-danger">Pilih cara pembayaran: *</h2>
                                <p class="payment-instructions text-danger">
                                    Silahkan pilih metode pembayaran yang anda inginkan
                                </p>
                                @else
                                <h2>Pilih cara pembayaran:</h2>
                                <p class="payment-instructions">
                                    Silahkan pilih metode pembayaran yang anda inginkan
                                </p>
                                @endif


                                <select name="payment_method" class="form-control select2" id="paymentMethodChange" required="required" autocomplete="off" required>
                                    <option value="" selected disabled>Pilih metode pembayaran</option>
                                    <option value="midtrans">Midtrans</option>
                                    <option value="transfer">Transfer Bank</option>
                                </select>
                            </div>
                            <div class="join-container">
                                <button type="submit" class="btn btn-block btn-login mt-3 py-2">
                                    Bayar
                                </button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="{{ route('detail', $item->wedding_package->slug) }}" class="text-muted">
                                    Batal
                                </a>
                            </div>
                        </form>
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