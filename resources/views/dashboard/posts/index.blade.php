@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
        
    @endif


    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i class="bi bi-file-plus"></i> Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Categories</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($posts as $post)  
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td class="text-center">
                  <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></span></a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></span></a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline boreder-0">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
@endsection