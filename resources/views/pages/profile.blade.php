@extends('layouts.app')

@section('title')
Profil | {{ $global_setting_data->title_app }}
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
                <form id="saveForm" action="{{ route('user_edit_profile_submit') }}" method="post" enctype="multipart/form-data">@csrf</form>
                <form id="logoutForm" action="{{ url('logout') }}" method="POST">@csrf</form>
                <div class="row mt-1 ml-1 mr-1">
                    <div class="col-md-3">
                        <img src="{{ asset('uploads/' . $item->photo) }}" alt="" class="img-fluid">
                        <input type="file" class="form-control mt_10" form="saveForm" name="photo">
                    </div>
                    <div class="col-md-9">
                        <div class="mb-4">
                            <label class="form-label">Nama *</label>
                            <input type="text" class="form-control" name="name" form="saveForm" value="{{ $item->name }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email *</label>
                            <input type="text" class="form-control" name="email1" form="saveForm" value="{{ $item->email }}" disabled>
                            <input type="hidden" name="email" form="saveForm" value="{{ $item->email }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" form="saveForm" name="password">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Ketik Ulang Kata Sandi</label>
                            <input type="password" class="form-control" form="saveForm" name="retype_password">
                        </div>
                        <div class="mb-4">
                            <label class="form-label"></label>
                            <button type="submit" form="saveForm" class="btn btn-login">Perbarui</button>
                            <button type="submit" form="logoutForm" class="btn btn-danger">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection