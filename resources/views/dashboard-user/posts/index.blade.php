@extends('dashboard-user.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{  }}</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection