@extends('admin.layouts.app')

@section('breadcrumbs')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Dashboard</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/devices" method="post">
            @csrf
            @method('post')
            <div class="form-group mb-3">
                <label for="serie" class="form-label">Serie</label>
                <input type="text" placeholder="Enter Serie" name="serie" class="form-control form-control-lg @error('serie')
                    is-invalid
                @enderror" id="serie" aria-describedby="serie" value="{{ old('serie') }}">
            </div>
            <div class="form-group mb-3">
                <label for="joystick" class="form-label">Joystick</label>
                <input type="text" placeholder="Enter Joystick" name="joystick" class="form-control form-control-lg @error('joystick')
                    is-invalid
                @enderror" id="joystick" aria-describedby="joystick" value="{{ old('joystick') }}">
            </div>
            <button class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
