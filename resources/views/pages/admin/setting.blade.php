@extends('layouts.admin')

{{-- @section('heading', 'Informasi') --}}


@section('content')
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Informasi</h1>
        {{-- <a href="{{ route('admin_slide_add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Slide
        </a> --}}
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin_setting_update', $setting_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Logo Terpasang</label>
                                            <div>
                                                <img src="{{ asset('uploads/' . $setting_data->logo) }}" alt="" class="w_200">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Ubah Logo</label>
                                            <div>
                                                <input type="file" name="logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Favicon Terpasang</label>
                                            <div>
                                                <img src="{{ asset('uploads/' . $setting_data->favicon) }}" alt="" class="w_50">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Ubah Favicon</label>
                                            <div>
                                                <input type="file" name="favicon">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- hidden --}}

                                {{-- <div class="mb-4">
                                        <label class="form-label">Top Bar Phone</label>
                                        <input type="text" class="form-control" name="top_bar_phone" value="{{ $setting_data->top_bar_phone }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Top Bar Email</label>
                                <input type="text" class="form-control" name="top_bar_email" value="{{ $setting_data->top_bar_email }}">
                            </div>


                            <div class="mb-4">
                                <label class="form-label">Home Feature Status</label>
                                <select name="home_feature_status" class="form-control">
                                    <option value="Show" @if ($setting_data->home_feature_status == 'Show') selected @endif>Show</option>
                                    <option value="Hide" @if ($setting_data->home_feature_status == 'Hide') selected @endif>Hide</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Home Room Total</label>
                                <input type="text" class="form-control" name="home_room_total" value="{{ $setting_data->home_room_total }}">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Home Room Status</label>
                                <select name="home_room_status" class="form-control">
                                    <option value="Show" @if ($setting_data->home_room_status == 'Show') selected @endif>Show</option>
                                    <option value="Hide" @if ($setting_data->home_room_status == 'Hide') selected @endif>Hide</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Home Testimonial Status</label>
                                <select name="home_testimonial_status" class="form-control">
                                    <option value="Show" @if ($setting_data->home_testimonial_status == 'Show') selected @endif>Show</option>
                                    <option value="Hide" @if ($setting_data->home_testimonial_status == 'Hide') selected @endif>Hide</option>
                                </select>
                            </div>



                            <div class="mb-4">
                                <label class="form-label">Home Latest Post Total</label>
                                <input type="text" class="form-control" name="home_latest_post_total" value="{{ $setting_data->home_latest_post_total }}">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Home Latest Post Status</label>
                                <select name="home_latest_post_status" class="form-control">
                                    <option value="Show" @if ($setting_data->home_latest_post_status == 'Show') selected @endif>Show</option>
                                    <option value="Hide" @if ($setting_data->home_latest_post_status == 'Hide') selected @endif>Hide</option>
                                </select>
                            </div> --}}

                            {{-- hidden --}}

                            {{-- <div class="mb-4">
                                        <label class="form-label">Text Alternatif</label>
                                        <textarea name="footer_address" class="form-control h_100" cols="30" rows="10">{{ $setting_data->footer_address }}</textarea>
                        </div> --}}

                        <div class="mb-4">
                            <label class="form-label">Nama Aplikasi</label>
                            <input type="text" class="form-control" name="title_app" value="{{ $setting_data->title_app }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Teks Alternatif</label>
                            <input type="text" class="form-control" name="text_alternatif" value="{{ $setting_data->text_alternatif }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Footer Nomor HP</label>
                            <input type="text" class="form-control" name="footer_phone" value="{{ $setting_data->footer_phone }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Footer Email</label>
                            <input type="text" class="form-control" name="footer_email" value="{{ $setting_data->footer_email }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Teks Copyright</label>
                            <input type="text" class="form-control" name="copyright" value="{{ $setting_data->copyright }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{ $setting_data->facebook }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Youtube</label>
                            <input type="text" class="form-control" name="youtube" value="{{ $setting_data->youtube }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{ $setting_data->twitter }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ $setting_data->linkedin }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Pinterest</label>
                            <input type="text" class="form-control" name="pinterest" value="{{ $setting_data->pinterest }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Google Analytic Id</label>
                            <input type="text" class="form-control" name="analytic_id" value="{{ $setting_data->analytic_id }}">
                        </div>

                        {{-- <div class="mb-4">
                                        <label class="form-label">Theme Color 1</label>
                                        <input type="text" class="form-control" name="theme_color_1"
                                            value="{{ $setting_data->theme_color_1 }}">
                </div>

                <div class="mb-4">
                    <label class="form-label">Theme Color 2</label>
                    <input type="text" class="form-control" name="theme_color_2" value="{{ $setting_data->theme_color_2 }}">
                </div> --}}

                <div class="form-group">
                    <label for="about">Halaman Tentang (Front End)</label>
                    <textarea name="about" class="tinymce-editor">{{ $setting_data->about }}</textarea>
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
</div>
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