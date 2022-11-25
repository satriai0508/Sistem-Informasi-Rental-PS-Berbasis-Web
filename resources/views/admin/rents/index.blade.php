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
{{-- @dd($rents) --}}
@section('content')
<div class="card">
  <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('rents.create') }}" class="btn btn-sm btn-success">Create</a>
    @if(!$rents)
    <p class="h2 fs-2 text-danger font-bold">Silakan masukan data</p>
    @else
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Harga</th>
          <th scope="col">Waktu Sewa</th>
          <th scope="col">User</th>
          <th scope="col">Device</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rents as $rent)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>Rp. {{ $rent->price }}</td>
          <td>{{ $rent->waktu_sewa }} Jam</td>
          <td>{{ $rent->user->name }}</td>
          <td>{{ $rent->device->serie }}</td>
          <td>
            <a href="{{ route('rents.edit',$rent->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('rents.destroy',$rent->id) }}" method="post" class="d-inline-block">
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
    {{ $rents->links() }}
  </div>
</div>
@endsection
