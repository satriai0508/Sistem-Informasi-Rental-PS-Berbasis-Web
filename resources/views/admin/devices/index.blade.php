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
{{-- @dd($devices) --}}
@section('content')
<div class="card">
  <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('devices.create') }}" class="btn btn-sm btn-success">Create</a>
    @if(!$devices)
    <p class="h2 fs-2 text-danger font-bold">Silakan masukan data</p>
    @else
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Serie</th>
          <th scope="col">Joystick</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($devices as $device)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $device->serie }}</td>
          <td>{{ $device->joystick }} Joystick</td>
          @if($device->image)
          <td><img src="{{ asset('storage/'. $device->image) }}" alt="{{ $device->serie }}" class="img-fluid img-thumbnail h-75 w-75"></td>
          @else
          <td class="h3 fs-3 text-center text-danger">Harap masukan gambar</td>
          @endif
          <td>
            <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('devices.destroy', $device->id) }}" method="post" class="d-inline-block">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
    {{ $devices->links() }}
  </div>
</div>
@endsection
