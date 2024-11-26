@extends('layouts.admin')

{{-- @section('heading', 'Lihat Slide')

@section('right_top_button')
<a href="{{ route('admin_slide_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
@endsection --}}

@section('content')
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slide</h1>
        <a href="{{ route('admin_slide_add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Slide
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Foto</th>
                                <th width="25%">Heading</th>
                                <th width="30%">Teks</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slides as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('uploads/' . $row->photo) }}" alt="" class="w_200">
                                </td>
                                <td>{{ $row->heading }}</td>
                                <td>{{ $row->text }}</td>
                                <td>
                                    <a href="{{ route('admin_slide_edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="{{ route('admin_slide_delete', $row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection