@extends('layouts.app')

@section('content')
    <section id="post-show" class="container d-flex justify-content-center align-items-center">
        <div class="content row w-75">
            <div class="col-12 mb-3">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="col-10 mb-3">{{ $post->content }}</div>
            <div class="col-2 mb-3"><img class="img-fluid" src="{{ $post->image }}" alt="{{ $post->slug }}"></div>
            <div class="col-12 d-flex justify-content-end">
                {{-- Edit --}}
                <a class="btn btn-secondary mr-1" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                {{-- Delete --}}
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form" data-name="{{ $post->title }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mr-1" type="submit">Delete</button>
                </form>
                {{-- Back --}}
                <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Back to Index</a>
            </div>
        </div>
    </section>
@endsection