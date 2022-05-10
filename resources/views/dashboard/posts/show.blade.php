@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-sm btn-info"><i class="bi bi-arrow-90deg-left"></i> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline boreder-0">
                @method('delete')
                @csrf
                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
              </form>

              @if ($post->image)
              <div style="max-height: 400px; overflow:hidden;">
                <img src="{{ asset('/storage/' . $post->image) }}" class="img-fluid mt-3"> 
              </div>
              @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">  
              @endif
            
            <p class="mt-3">Category : {{ $post->category->name }}</p>

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        <a href="/posts" class="d-block mt-3">Back to blog</a>

        </div>
    </div>
</div>

    

@endsection