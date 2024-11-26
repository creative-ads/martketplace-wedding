@extends('layouts.admin')

{{-- @section('heading', 'Tambah Rekening')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Rekening</h1>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }} <a href="{{ route('rekening.index') }}">Kembali</a>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('rekening.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <label class="form-label">Nama Bank *</label>
                            <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name') }}">
                            <span class="text-danger">{{ $errors->first('bank_name') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Atas Nama *</label>
                            <input type="text" class="form-control" name="atas_nama" value="{{ old('atas_nama') }}">
                            <span class="text-danger">{{ $errors->first('atas_nama') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">No. Rekening *</label>
                            <input type="number" class="form-control" name="no_rekening" value="{{ old('no_rekening') }}">
                            <span class="text-danger">{{ $errors->first('no_rekening') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label"></label>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('rekening.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection