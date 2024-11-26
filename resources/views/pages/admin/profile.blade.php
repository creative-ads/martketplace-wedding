@extends('layouts.admin')

{{-- @section('heading', 'Ubah Profil')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Profil</h1>
    </div>
    <div class="card shadow">
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
            <form action="{{ route('admin_profile_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="img-fluid">
                        <input type="file" class="form-control mt_10" name="photo">
                    </div>
                    <div class="col-md-9">
                        <div class="mb-4">
                            <label class="form-label">Nama *</label>
                            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email *</label>
                            <input type="text" class="form-control" name="email" value="{{ $item->email }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Ketik Ulang Kata Sandi</label>
                            <input type="password" class="form-control" name="retype_password">
                        </div>
                        <div class="mb-4">
                            <label class="form-label"></label>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection