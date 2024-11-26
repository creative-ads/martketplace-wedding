@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Paket Wedding {{ $item->title }}</h1>
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
            <form action="{{ route('wedding-package.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                <input hidden type="number" class="form-control" id="id_agen" name="id_agen" placeholder="ID Agen" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ $item->location }}">
                </div>
                <div class="form-group">
                    <label for="about">Tentang</label>
                    <textarea name="about" class="tinymce-editor">{{ $item->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">Kategori Paket</label>
                    <select class="form-control" id="category" name="category">
                        <option value="{{ $item->category }}" disabled selected>{{ $item->category }}</option>
                        <option value="VIP">VIP</option>
                        <option value="Exclusive">Eksklusif</option>
                        <option value="Custom">Kustom</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Tipe Paket Wedding</label>
                    <select class="form-control" id="type" name="type">
                        <option value="{{ $item->type }}" disabled selected>{{ $item->type }}</option>
                        <option value="Gedung">Gedung</option>
                        <option value="Tenda">Tenda</option>
                        <option value="Dekorasi">Dekorasi</option>
                        <option value="Cathering">Cathering</option>
                        <option value="Fotografi">Fotografi</option>
                        <option value="Tata Rias">Tata Rias</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Harga (Rp.)</label>
                    <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ $item->price }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/plo6uwl7np5gzxk7upa6jfo7zgvx9udrt2xzjbk04lqd8g8r/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
@endsection