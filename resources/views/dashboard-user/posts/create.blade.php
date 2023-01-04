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
            <input type="text" class="form-control" id="title" name="title"></div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input
                    type="text"
                    class="form-control"
                    id="slug"
                    name="slug"
                    disabled="disabled"
                    readonly="readonly"></div>
                <div class="mb-3">
                    <label for="category" class="form-label">category</label>
                    <select name="category_id" id="" class="form-select">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Body" class="form-label">Body</label>
                    <input id="body" type="hidden" name="body">
                        <trix-editor input="x"></trix-editor>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Buat Post</button>
            </form>


            <script>
                const title = document.querySelector('#title');
                const slug = document.querySelector('#slug');

                title.addEventListener('change', function () {
                    fetch('/dashboard-user/posts/checkSlug?title=' + title.value)
                        .then(
                            response => response.json()
                        )
                        .then(data => slug.value = data.slug)
                });

                document.addEventListener('trix-file-accept', function(e){
                  e.preventDefault();
                })
            </script>
@endsection