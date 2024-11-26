@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Paket Wedding</th>
                            <th>Tgl. Booking</th>
                            <th>User</th>
                            <th>Total Payment</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->wedding_package->title }}</td>
                            <td>{{ $item->tgl_booking }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ 'Rp.' . number_format($item->transaction_total) }}</td>
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
                                    {{ $item->transaction_status }}
                                </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus data ini?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>

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
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection