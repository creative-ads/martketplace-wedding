@extends('layouts.app')

@section('title')
Masuk | {{ $global_setting_data->title_app }}
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
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="/frontend/images/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan alamat e-mail" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="form-label" for="email">{{ __('Alamat E-mail') }}</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-sm" name="password" @error('password') is-invalid @enderror required autocomplete="current-password" placeholder="Masukkan kata sandi" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="form-label" for="password">{{ __('Kata Sandi') }}</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                <label class="form-check-label" for="form2Example3">
                                    Ingat saya
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <a class="text-body" href="{{ route('password.request') }}">
                                {{ __('Lupa kata sandi?') }}
                            </a>
                            @endif
                            {{-- <a href="#!" class="text-body">Lupa kata sandi?</a> --}}
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2 mb-2">
                            {{-- <button type="submit" class="btn btn-primary">
                                    {{ __('Masuk') }}
                            </button> --}}
                            <button type="submit" class="btn btn-login btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                {{ __('Masuk') }}
                            </button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="/register" class="link-danger">Daftar</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
</div> --}}
</div>
</div>
@endsection