@extends('dashboard-user.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard {{ auth()->user()->name }}</h1>
    <div class="card mb-4 mt-4">
        <div class="card-body">
            <p class="mb-0">
               
            </p>
        </div>
    </div>
    <div style="height: 100vh"></div>
</div>
@endsection