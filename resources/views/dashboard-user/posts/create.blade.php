@extends('dashboard-user.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Buat Post Baru</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard-user/posts">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>
    
    <button type="submit" class="btn btn-primary">Buat Post</button>
  </form>
</div>
@endsection