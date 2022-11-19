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
        <form action="/rents" method="post">
            @csrf
            @method('post')
            <div class="form-group mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" placeholder="Enter Price" name="price" class="form-control form-control-lg @error('serie')
                    is-invalid
                @enderror" id="price" aria-describedby="price">
            </div>
            <div class="form-group mb-3">
                <label for="waktu sewa" class="form-label">Waktu Sewa</label>
                <input type="text" placeholder="Enter Waktu Sewa" name="waktu sewa" class="form-control form-control-lg @error('joystick')
                    is-invalid
                @enderror" id="waktu sewa" aria-describedby="waktu">
            </div>
            <div class="form-group mb-3">
                <label for="device_id" class="form-label">Device</label>
                <select name="device_id" class="form-select form-control form-control-lg" aria-label="device_id">
                    <option selected>Select this one</option>
                    @foreach ($devices as $device)
                    <option value="{{ $device->id }}">{{ $device->serie }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id"  class="form-select form-control form-control-lg" aria-label="user_id">
                    <option selected>Select this one</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
