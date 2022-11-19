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
            <div>
                <div class="text-center pt-3 pb-3">
                    <h1 class="h2 text-white font-bold font-weight-bold">{{ env('APP_NAME') }} Register</h1>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-3" action="{{ route('register') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="name" class="input-group-text bg-success text-white h-100" id="name"><i class="mdi mdi-account fs-4"></i></label>
                                </div>
                                <input id="name" name="name" type="text" class="form-control form-control-lg @error('name')
                                    is-invalid
                                @enderror" placeholder="Name" aria-label="name" aria-describedby="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="email" class="input-group-text bg-danger text-white h-100" id="email"><i class="mdi mdi-email fs-4"></i></label>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg @error('email')
                                is-invalid
                                @enderror" placeholder="Email Address" aria-label="email" aria-describedby="email" value="{{ old('email') }}" required autocomplete="email" />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="password" class="input-group-text bg-warning text-white h-100" id="password"><i class="mdi mdi-lock fs-4"></i></label>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg @error('password')
                                    is-invalid
                                @enderror" placeholder="Password" aria-label="Password" aria-describedby="password" required autocomplete="new-password" />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="password-confirm" class="input-group-text bg-info text-white h-100" id="basic-addon2"><i class="mdi mdi-lock fs-4"></i></label>
                                </div>
                                <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder=" Confirm Password" aria-label="Password" aria-describedby="basic-addon1" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3 d-flex justify-content-center align-items-center">
                                    <button class="btn btn-lg float-start btn-info me-3" type="submit">
                                        Sign Up
                                    </button>
                                    <a href="{{ route('login') }}" class="btn btn-lg float-end btn-success">Login</a>
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
