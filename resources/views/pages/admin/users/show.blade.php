@extends('layouts.admin')

{{-- @section('heading', 'Lihat Profil')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lihat Profil</h1>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin_profile_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="img-fluid">
                        {{-- <input type="file" class="form-control mt_10" name="photo"> --}}
                    </div>
                    <div class="col-md-9">
                        <div class="mb-4">
                            <label class="form-label">Nama *</label>
                            <input type="text" class="form-control" name="name" value="{{ $item->name }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email *</label>
                            <input type="text" class="form-control" name="email" value="{{ $item->email }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Role *</label>
                            <select name="roles" id="" class="form-control" disabled>
                                <option value="ADMIN" {{ $item->roles == 'ADMIN' ? 'selected' : '' }} disabled>ADMIN</option>
                                <option value="USER" {{ $item->roles == 'USER' ? 'selected' : '' }} disabled>USER</option>
                                <option value="VENDOR" {{ $item->roles == 'VENDOR' ? 'selected' : '' }} disabled>VENDOR / AGEN</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label"></label>
                            <a href="{{ route('admin_users') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection