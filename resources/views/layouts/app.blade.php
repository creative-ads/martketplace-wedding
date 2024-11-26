<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="{{ asset('uploads/' . $global_setting_data->favicon) }}">
    <title>@yield('title')</title>
    <!-- Google Analytics -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $global_setting_data->analytic_id }}"></script>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
    <!-- Logout Modal-->
    <div class="modal fade" id="needhelpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Butuh Bantuan?</h5>
                    {{-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button> --}}
                </div>
                <div class="modal-body">Anda dapat menghubungi kami dengan mengklik tombol media sosial di footer halaman ini.</div>
                <div class="modal-footer">
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        {{-- <button class="btn btn-primary" type="submit">Logout</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>