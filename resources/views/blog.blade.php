@extends('layouts.main')
@section('container')
    <h1 class="mb-3">{{ $title }}</h1>
    {{-- count untuk menghitung ada berapa postingan, jika tidak 0 maka true --}}
    @if ($posts->count())
    <div class="card mb-3">
        <a href="/blog/{{ $posts[0]->slug }}">
            <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        </a>
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-body-secondary">
                    By: <a  class="text-decoration-none" href="/blog/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} 
                    {{-- untuk melihat waktu yang ada hingga waktu sekarang, punyanya library carbon --}}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>
      @else
            <h1 class="text-center">Post Not Found!</h1>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="position-absolute bg-emerald-500 text-white px-2 py-1" style="background-color: rgba(0, 0, 0, 0.8); border-radius: 5px">
                        <a href="/blog/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <a href="/blog/{{ $post->slug }}">
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    </a>

                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                            {{ $post->title }}
                            </a>
                        </h4>
                        <small class="text-body-secondary">
                            By: <a  class="text-decoration-none" href="/blog/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} 
                            {{-- untuk melihat waktu yang ada hingga waktu sekarang, punyanya library carbon --}}
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection