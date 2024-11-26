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
                        <div class="table-responsive">
                            <div id="midtrans-button"></div>
                            @php
                            use Midtrans\Snap;
                            use Midtrans\Config;
                            use Midtrans\Notification;
                            // Konfigurasi midtrans
                            // Config::$serverKey = config('services.midtrans.serverKey');
                            // Config::$isProduction = config('services.midtrans.isProduction');
                            // Config::$isSanitized = config('services.midtrans.isSanitized');
                            // Config::$is3ds = config('services.midtrans.is3ds');
                            // $cents = $item->transaction_total;
                            // $customer_email = Auth::user()->email;
                            // $midtrans_client_key = config('services.midtrans.clientKey');

                            //test
                            // Konfigurasi midtrans
                            Config::$serverKey = config('services.midtrans.serverKey');
                            Config::$isProduction = config('services.midtrans.isProduction');
                            Config::$isSanitized = config('services.midtrans.isSanitized');
                            Config::$is3ds = config('services.midtrans.is3ds');
                            $cents = $item->transaction_total;
                            $customer_email = Auth::user()->email;
                            $midtrans_client_key = config('services.midtrans.clientKey');
                            // $order_no = time();
                            $order_no = $item->id;
                            $params = array(
                            'transaction_details' => array(
                            'order_id' => $order_no,
                            'gross_amount' => $cents,
                            ),
                            'customer_details' => array(
                            'first_name' => Auth::user()->name,
                            'last_name' => Auth::user()->name,
                            'email' => $customer_email,
                            // 'phone' => Auth::user()->phone,
                            ),
                            );
                            $snapToken = Snap::getSnapToken($params);
                            @endphp

                            @if ($item->transaction_status == 'PENDING')
                            <div class="alert alert-info mt-3">
                                <p>
                                    Silahkan selesaikan pembayaran Anda sebelum <br>
                                    <strong>{{ \Carbon\Carbon::parse($item->transaction_expired)->format('d F Y H:i') }}</strong> <br>
                                    Lakukan refresh halaman ini jika sudah melakukan pembayaran
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
                            {{-- <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre> --}}
                            <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ $midtrans_client_key }}"></script>
                            <script type="text/javascript">
                                document.getElementById('midtrans-btn').onclick = function() {
                                    // SnapToken acquired from previous step
                                    snap.pay('{{ $snapToken }}', {
                                        // Optional
                                        onSuccess: function(result) {
                                            // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                                            // document.getElementById('midtrans-btn').style.display = 'none';
                                            // $(".midtrans-btn").hide();
                                        },
                                        // Optional
                                        onPending: function(result) {
                                            // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                                        },
                                        // Optional
                                        onError: function(result) {
                                            // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                                        }
                                    });
                                };
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection