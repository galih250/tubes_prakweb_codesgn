@extends('dashboard-user.layouts.main')

@section('container')
    <h1>Berhasil</h1>
    <a href="/dashboard-user/posts">Balik</a>
    <p>{{ $post->body }}</p>
@endsection