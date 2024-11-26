@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->user->name }}</h1>
    </div>

    <!-- Content Row -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $item->id }}</td>
                </tr>
                <tr>
                    <th>Paket Wedding</th>
                    <td>{{ $item->wedding_package->title }}</td>
                </tr>
                <tr>
                    <th>Pembeli</th>
                    <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                    <th>Total Transaksi</th>
                    <td>{{ 'Rp.' . number_format($item->transaction_total) }}</td>
                </tr>
                <tr>
                    <th>Tanggal Booking</th>
                    <td>{{ ($item->tgl_booking) }}</td>
                </tr>
                <tr>
                    <th>Status Transaksi</th>
                    <td>{{ $item->transaction_status }}</td>
                </tr>
                <tr>
                    <th>Pembelian</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Nama Pengguna</th>
                                <th>Kebangsaan</th>
                                <th>Email</th>
                                <th>Pembayaran</th>
                            </tr>
                            @foreach ($item->details as $detail)
                            <tr>
                                <td>{{ $detail->id }}</td>
                                <td>{{ $detail->username }}</td>
                                <td>{{ $detail->nationality }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>Metode pembayaran</th>
                    <td>
                        @if ($item->payment_method == 'midtrans')
                        Midtrans
                        @elseif ($item->payment_method == 'transfer')
                        @if ($item->bukti_pembayaran != '' && $item->transaction_status != 'PENDING')
                        <a href="{{ Storage::url($item->bukti_pembayaran) }}" target="_blank" class="text-decoration-none text-dark">
                            Transfer BANK - Lihat Bukti Bayar
                        </a>
                        @else
                        {{-- <td>Transfer BANK</td> --}}
                        @if ($item->transaction_status == 'PENDING' && $item->bukti_pembayaran == '')
                        <div class="alert alert-info mt-0">
                            <p>
                                Admin bisa membantu upload bukti transfer pembayaran <br>
                                <strong>Expired
                                    {{ \Carbon\Carbon::parse($item->transaction_expired)->format('d F Y H:i') }}</strong>
                                <br>
                            <form action="{{ route('transaction.kirimbukti') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-4">
                                    <label for="">Upload Bukti Pembayaran sekarang.</label>
                                    <input type="hidden" name="order_no" value="{{ $item->id }}">
                                    <input type="file" name="bukti_pembayaran" class="form-control" required>
                                </div>

                                </p>
                                <button id="midtrans-btn" type="submit" class="btn btn-group-sm btn-success midtrans-btn">Kirim</button>
                            </form>

                        </div>
                        @elseif ($item->transaction_status == 'PENDING' && $item->bukti_pembayaran != '')
                        <div class="alert alert-info mt-0">
                            <p>
                                Silahkan Lakukan Verifikasi Pembayaran klik disini <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a><br>
                                <strong>Waktu upload
                                    {{ \Carbon\Carbon::parse($item->update_at)->format('d F Y H:i') }}</strong>
                                <br>
                                <a href="{{ asset('storage/' . $item->bukti_pembayaran) }}" target="_blank" class="btn btn-group-sm btn-primary mt-3">Lihat Bukti Pembayaran</a>
                                {{-- <img src="{{ asset('storage/' . $item->bukti_pembayaran) }}" alt="" style="width: 20%; height: 20%;"
                                class="img-fluid"> --}}
                            </p>
                            <form action="{{ route('transaction.kirimbukti') }}" method="POST" enctype="multipart/form-data">
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
                        {{-- // --}}
                        @endif
                        @else
                    <td><a href="{{ route('checkout', $item->id) }}" class="text-decoration-none text-dark">
                            Pilih Metode Pembayaran
                        </a></td>
                    @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection