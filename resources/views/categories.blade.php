@extends('layouts.main')
@section('container')
    <h1 class="mb-4">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/blog/categories/{{ $category->slug }}">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                          <h5 class="card-title fs-2 flex-fill text-center p-1" style="background-color: rgba(0, 0, 0, 0.8); border-radius: 3px">{{ $category->name }}</h5>
                        </div>
                      </div>
                </a>

            </div>
            @endforeach
        </div>
    </div>
@endsection