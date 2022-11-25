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
    <div class="d-flex justify-content-center">
        <a href="/" class="text-danger text-decoration-none h2 fs-2">{{ env('APP_NAME') }}</a>
    </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="card text-bg-primary mb-3 mx-2" style="max-width: 18rem;">
                <div class="card-header">Device</div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('devices.index') }}" class="text-decoration-none text-warning">All Device</a></h5>
                    <p class="card-text">{{ $devices }} Device</p>
                </div>
            </div>
            <div class="card text-bg-primary mb-3 mx-2" style="max-width: 18rem;">
                <div class="card-header">Rent</div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('rents.index') }}" class="text-decoration-none text-warning">All Rent</a></h5>
                    <p class="card-text">{{ $devices }} Rents</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
