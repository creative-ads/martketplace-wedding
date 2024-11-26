@extends('layouts.admin')

{{-- @section('heading', 'Add Slide')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pengguna</h1>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }} <a href="{{ route('admin_users') }}">Kembali</a>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('admin_users_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        {{-- <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="img-fluid"> --}}
                        <input type="file" class="form-control mt_10" name="photo">
                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                    </div>
                    <div class="col-md-9">
                        <div class="mb-4">
                            <label class="form-label">Nama *</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Nama Pengguna *</label>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email *</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Role *</label>
                            <select name="roles" id="" class="form-control">
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER">USER</option>
                                <option value="VENDOR">VENDOR / AGEN</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('roles') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" name="password">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Ketik Ulang Kata Sandi</label>
                            <input type="password" class="form-control" name="retype_password">
                            <span class="text-danger">{{ $errors->first('retype_password') }}</span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label"></label>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin_users') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection