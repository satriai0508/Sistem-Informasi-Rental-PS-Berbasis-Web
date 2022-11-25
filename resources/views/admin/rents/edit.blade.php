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
      @method('put')
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" id="user_id">
      <div class="form-group mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" placeholder="Enter Price" name="price" class="form-control form-control-lg @error('price')
                    is-invalid
                @enderror" id="price" aria-describedby="price" value="{{ old('price',$rent->price) }}">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label for="waktu_sewa" class="form-label">Waktu Sewa</label>
        <input type="text" placeholder="Enter Waktu Sewa" name="waktu_sewa" class="form-control form-control-lg @error('waktu_sewa')
                    is-invalid
                @enderror" id="waktu_sewa" aria-describedby="waktu_sewa" value="{{ old('waktu_sewa',$rent->waktu_sewa) }}">
        @error('waktu_sewa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label for="device_id" class="form-label">Device</label>
        <select name="device_id" class="form-select form-control form-control-lg" aria-label="device_id">
          @foreach ($devices as $device)
          @if(old('device_id',$rent->device_id) == $device->id)
          <option selected value="{{ $device->id }}">{{ $device->serie }}</option>
          @else
          <option value="{{ $device->id }}">{{ $device->serie }}</option>
          @endif
          @endforeach
        </select>
        @error('device_id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button class="btn btn-sm btn-success">Submit</button>
    </form>
  </div>
</div>
@endsection
