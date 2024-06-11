@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            {{-- dibawah pakai md biar responsive --}}
            <div class="col-md-8">
                <h1 class="text-center">{{ $post->title }}</h1>
                <p>By: <a class="text-decoration-none" href="/blog/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/blog/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <article class="my-2 text-justify fs-6">
                    {!! $post->body !!} 
                </article>
                {{-- Kalau yang di atas artinya tidak melakukan escaping--}}
            
                {{-- Kalau misal memakai "{{ }}"", nanti akan mencetak php echo dan menjalankan html specialchars  --}}
                <a href="/blog" class="d-block mt-2">Back to Blog</a>
            </div>
        </div>
    </div>
@endsection
