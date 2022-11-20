@extends('admin.layouts.auth')

@section('auth')
<div class="main-wrapper">
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> --}}
    <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        ">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center pt-3 pb-3">
                    <h1 class="h2 text-white font-bold font-weight-bold">{{ env('APP_NAME') }} Login</h1>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-3" id="loginform" action="{{ route('login') }}" method="post">
                @method('post')
                @csrf
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="email" class="input-group-text bg-success text-white h-100" id="emailLabel"><i class="mdi mdi-account fs-4"></i></label>
                                </div>
                                <input id="email" type="email" name="email" class="form-control form-control-lg @error('email')
                                    is-invalid
                                @enderror" placeholder="email" aria-label="email" aria-describedby="emailLabel" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-warning text-white h-100" id="passwordLabel" for="password"><i class="mdi mdi-lock fs-4"></i></label>
                                </div>
                                <input id="password" type="password" name="password" class="form-control form-control-lg @error('password')
                                is-invalid
                                @enderror" placeholder="Password" aria-label="Password" aria-describedby="passwordLabel" required autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3 d-flex justify-content-center">
                                    <a href="{{ route('register') }}" class="btn btn-primary float-start text-white me-3">Register</a>
                                    <button class="btn btn-success float-end text-white" type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary"></div>
                </form>
            </div>
        </div>
    </div>
    @endsection
