@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    @auth
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Wedding</h1>
        @if (Auth::user()->roles == 'VENDOR')
        <a href="{{ route('wedding-package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Wedding
        </a>
        @endif
    </div>
    @endauth

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Lokasi</th>
                            <th>Kategori</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            @if (Auth::user()->roles == 'VENDOR')
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td width="15%">{{ $item->title }}</td>
                            <td width="25%">{{ $item->location }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ 'Rp.' . number_format($item->price) }}</td>
                            @if (Auth::user()->roles == 'VENDOR')
                            <td>
                                <a href="{{ route('wedding-package.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('wedding-package.destroy', $item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            @endif
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